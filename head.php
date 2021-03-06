<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>시리즈온 리뉴얼 : 한아름</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">

  <script src="common.js" defer></script>
  <link rel="stylesheet" href="common.css">

  <script src="<?= $pageCode ?>.js" defer></script>
  <link rel="stylesheet" href="<?= $pageCode ?>.css">
</head>


<a class="return-top" href="#" style="right:15px; bottom:15px; position:fixed; z-index:9999;"><img src="resource/img/top_but.png" alt=""></a>

<body>

  <div class="top-bar con-min-width">
    <div class="mx-auto">
      <img src="resource/img/bn_1_1_1.png" alt="">
    </div>
  </div>
  <div class="top-bar_1 con-min-width">
  <div class="con mx-auto">
    <ul>
      <li><a class="<?=$pageCode == "index" ? "at" : ""?>" href="index.ssg.php">영화홈</a></li>
      <li><a class="<?=$pageCode == "productList" ? "at" : ""?>"  href="productList.ssg.php">카테고리</a></li>
      <li>인기순위 TOP 100</li>
      <li class="text_1">무료</li>
      <li>천원관</li>
      <li>구매혜택</li>
    </ul>
    </div>
  </div>

  <div class="site-wrap con-min-width">
    <main>