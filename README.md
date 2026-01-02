# Mock Echelon System Theme

本リポジトリは、ポートフォリオ掲載を目的とした
WordPressテーマの模擬案件です。

## 概要
FLOCSS設計とGulpを用いた、保守性・拡張性を意識した
WordPressオリジナルテーマ構成となっています。

## 使用技術
- WordPress
- SCSS（FLOCSS設計）
- Gulp
- JavaScript

## ディレクトリ構成
- src/  
  - assets/sass/ : SCSS開発用ファイル
  - assets/js/   : JavaScript開発用ファイル

- public/  
  - assets/css/  : ビルド後のCSS
  - assets/js/   : ビルド後のJavaScript

- style.css : WordPressテーマ情報（ヘッダ）のみ

## CSS設計について
本テーマではFLOCSSの考え方に基づき、
役割ごとにSCSSファイルを分割しています。

## ビルド方法
npm install  
npm run dev

## 備考
本テーマは模擬案件のため、商用利用を想定していません。