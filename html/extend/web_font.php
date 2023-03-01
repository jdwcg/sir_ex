<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_event('tail_sub', 'web_font');
function web_font() {
	echo "
		<link rel=stylesheet as=style crossorigin href=https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.6/dist/web/static/pretendard.css />
		<style>div, span, table, p, input, textarea, button, select, h1, h2, h3 { font-family: 'Pretendard Variable', Pretendard, Roboto, 'Noto Sans KR', 'Segoe UI',
			'Malgun Gothic', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol',
			sans-serif !important; }</style>
	";
}
