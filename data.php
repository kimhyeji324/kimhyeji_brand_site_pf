<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 홍길동";
$siteDescription = "디자이너 홍길동의 기술 블로그 입니다.";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "DESIGN LEMON";
$siteThumbUrl = "https://ssg-2020-12.oa.gg/img/logo/logo_opengraph.png";

// 태그정보 시작
$tagInfos = [
  "flex" => [
    "pageThumbUrl" => "자바스크립트 관련 글 전용 이미지",
    "pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
  ],
];
// 태그정보 끝

// 데이터 정리
require_once __DIR__ . "/jsc/collectData.php";