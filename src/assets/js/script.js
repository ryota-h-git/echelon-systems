window.addEventListener("load", () => {
  const tl = gsap.timeline();

  const linePaths = document.querySelectorAll(".line-logo path, .line-logo polygon");
  const fillPaths = document.querySelectorAll(".fill-logo");

  // ① 線の初期設定（見えない状態に）
  linePaths.forEach(path => {
    const length = path.getTotalLength();
    gsap.set(path, {
      strokeDasharray: length,
      strokeDashoffset: length
    });
  });

  // ② 線を描く
  tl.to(linePaths, {
    strokeDashoffset: 0,
    duration: 2,
    ease: "power2.out",
    stagger: 0.05
  });

  // ③ 塗りをフェードイン
  tl.to(fillPaths, {
    opacity: 1,
    duration: 0.8,
    ease: "power2.out"
  }, "-=0.5");

  // ④ ロゴを拡大しながらフェードアウト
  tl.to("#logo", {
    delay: 0.3,        // ← 適度に余韻を持たせる
    duration: 1.9,
    scale: 5,
    ease: "power2.out",
    opacity: 0
  });

  // ⑤ 白背景をフェードアウト
  tl.to(".p-logo-splash", {
    duration: 0.8,
    opacity: 0,
    ease: "power1.out"
  }, "-=0.6");

  // ⑥ 完全に削除
  tl.set(".p-logo-splash", { display: "none" });
});


(() => {
  const canvas = document.getElementById("fvDots");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");
  let w = 0, h = 0, dpr = Math.min(window.devicePixelRatio || 1, 2);

  const opt = {
    count: 120,               // ドット数
    minR: 1.2,               // 半径最小
    maxR: 2.4,               // 半径最大
    speed: 0.18,             // 浮遊速度
    jitter: 18,              // ふわふわ振れ幅
    connectDist: 120,        // 線を引く距離
    drawLines: true,         // 線描画ON/OFF
    dotAlpha: 0.8,          // ドットの透明度
    lineAlpha: 0.2,         // 線の透明度
  };

  // reduced motion 対応
  const reduceMotion = window.matchMedia?.("(prefers-reduced-motion: reduce)")?.matches;
  if (reduceMotion) {
    opt.speed = 0;
    opt.drawLines = false;
  }

  const rand = (min, max) => Math.random() * (max - min) + min;

  // ドット定義
  const dots = [];
  function createDots() {
    dots.length = 0;
    for (let i = 0; i < opt.count; i++) {
      const x = rand(0, w);
      const y = rand(0, h);
      dots.push({
        x,
        y,
        baseX: x,
        baseY: y,
        r: rand(opt.minR, opt.maxR),
        vx: rand(-opt.speed, opt.speed),
        vy: rand(-opt.speed, opt.speed),
        phase: rand(0, Math.PI * 2),
      });
    }
  }

  function resize() {
    const rect = canvas.getBoundingClientRect();
    w = Math.floor(rect.width);
    h = Math.floor(rect.height);

    canvas.width = Math.floor(w * dpr);
    canvas.height = Math.floor(h * dpr);
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

    createDots();
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);

    // ここで背景グラデとか入れてもOK（今は透明）
    // ctx.fillStyle = "#060b18"; ctx.fillRect(0,0,w,h);

    // 線（近いドット同士）
    if (opt.drawLines) {
      for (let i = 0; i < dots.length; i++) {
        for (let j = i + 1; j < dots.length; j++) {
          const dx = dots[i].x - dots[j].x;
          const dy = dots[i].y - dots[j].y;
          const dist = Math.hypot(dx, dy);
          if (dist < opt.connectDist) {
            const a = (1 - dist / opt.connectDist) * opt.lineAlpha;
            ctx.strokeStyle = `rgba(180, 220, 255, ${a})`; // 青寄せ
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.moveTo(dots[i].x, dots[i].y);
            ctx.lineTo(dots[j].x, dots[j].y);
            ctx.stroke();
          }
        }
      }
    }

    // ドット
    for (const p of dots) {
      ctx.fillStyle = `rgba(120, 170, 255, ${opt.dotAlpha})`;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fill();
    }
  }

  let rafId = null;
  function tick(t) {
    // 更新
    for (const p of dots) {
      // ゆっくり漂う
      p.baseX += p.vx;
      p.baseY += p.vy;

      // 端から出たら反対側へ（自然にループ）
      if (p.baseX < -20) p.baseX = w + 20;
      if (p.baseX > w + 20) p.baseX = -20;
      if (p.baseY < -20) p.baseY = h + 20;
      if (p.baseY > h + 20) p.baseY = -20;

      // “幾何学っぽさ”は、完全ランダムではなく微小な正弦で揺らすと出る
      const s = Math.sin(t / 1000 + p.phase) * (opt.jitter / 60);
      const c = Math.cos(t / 1200 + p.phase) * (opt.jitter / 60);
      p.x = p.baseX + s * opt.jitter;
      p.y = p.baseY + c * opt.jitter;
    }

    draw();
    rafId = requestAnimationFrame(tick);
  }

  // 画面外で止める（省電力：実務で好印象）
  const io = new IntersectionObserver(
    (entries) => {
      const visible = entries[0]?.isIntersecting;
      if (visible && !rafId) rafId = requestAnimationFrame(tick);
      if (!visible && rafId) {
        cancelAnimationFrame(rafId);
        rafId = null;
      }
    },
    { threshold: 0.05 }
  );

  window.addEventListener("resize", () => {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    resize();
  });

  resize();
  io.observe(canvas);
})();
