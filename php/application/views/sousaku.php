<!doctype html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
 <meta charset ="utf-8">
 <link rel="stylesheet" href="../static/css/reset.css" media="all">
 <link rel="stylesheet" href="../static/css/sousaku.css" media="all">
 <link href="../static/js/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
 <link href="../static/js/slick/slick/slick.css" rel="stylesheet" type="text/css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>                  
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
 <script type="text/javascript" src="../static/js/slick/slick/slick.min.js"></script>

<script>

 $(function(){
      $("#menu__name").on("click",function(){
      $("#menu__lists").addClass("active");
      $("#main").css("opacity","0.3");    
 });
      $("#close__btn").on("click",function(){
      $("#menu__lists").removeClass("active");
      $("#main").css("opacity","1");       
   });
 });

$(function(){
  $(".main__image").slick({
    autoplay:true,
    autoplaySpeed:2000,
    dots:true,
   });

});

</script>
</head>

<body>
<div id="wrapper">
 <header>
  <div id="header__screen">
   <div id="header__image">
        
      <div class="header__bar">
         <div class="header__bar__left">
           <h1><a href="sushiichi/index">鮨いち</a></h1>
         </div>
         <div class="header__bar__right">
          <ul>
            <li class="top__name"><a href="sushiichi/index">トップ</a></li>
            <li><a href="sushiichi/sousaku">創作</a></li>
            <li><a href="sushiichi/sinagaki">お品書き</a></li>
            <li><a href="sushiichi/form">アクセス</a></li>
          </ul>
         </div>

         <div class="hidden__menu">
          <h2 id="menu__name"><div></div><div></div><div></div></h2>
        　  <ul id="menu__lists">
              <li><a href="sushiichi/index">トップ</a></li>
              <li><a href="sushiichi/sousaku">創作</a></li>
              <li><a href="sushiichi/sinagaki">お品書き</a></li>
              <li><a href="sushiichi/form">アクセス</a></li>
             <div id="close__btn">
               <p>閉じる</p>
             </div>
            </ul>
         </div>

      </div>
    
    <div class="header__title">
     <h1>創作<h1>
    </div>

   </div>
  </div>
  
  <div id="header__text">

    <div class="header__text__left">
      <h3>「魚それぞれの魅力を活かしきる方法」を追求しています。 </h3>
　　　<p>カウンター越しに一貫ずつご提供する寿司を堪能する贅沢さを、臨場感とともにお楽しみください。<br>
         魚についての小話などしながら、ゆったりと過ごしていただけましたら幸いです。<br>
         落ち着きの空間で心を尽くしたおもてなしに身を委ねる、格別なひと時を。</p>
    </div>

    <div class="header__text__right">
     <div class="header__text__right__image"></div>
    </div>

  </div>
 </header>

 <main>
  <div id="main__screen">

   <div class="main__image"><img src="../static/images/susi12.jpg"><img src="../static/images/susi16.jpg"><img src="../static/images/susi6.jpg"><img src="../static/images/susichi1.jpg"><img src="../static/images/susichi3.jpg"></div>

   <div class="main__content">
    <ul>
     <li><span><img src="../static/images/sou2.jpg"></span><p class="name">やんごとなきうに</p><p>雲丹を3倍に盛り付けトリュフ塩かけて完成</p></li>
     <li><span><img src="../static/images/sou3.jpg"></span><p class="name">手間鳥賊</p><p>包丁を50回入れてイカを柔らかくする</p></li>
     <li><span><img src="../static/images/sushiichi02.jpg"><p class="name">海庭</p><p>軍艦3種(干鵜巻と鉄火とネギトロの軍艦にいくらをまぶすオイスターリーフをのせて)</p></span></li>
     <li><span><img src="../static/images/sou5.jpg"></span><p class="name">穴重</p><p>しゃりを四角くして穴子二つ重ねて小さな鰻重に一口サイズの穴子重</p></li>
     <li><span><img src="../static/images/sou6.jpg"></span><p class="name">やんごとなきうに</p><p>雲丹を3倍に盛り付け<br>トリュフ塩かけて完成</p></li>
     <li><span><img src="../static/images/sou7.jpg"></span><p class="name">手間鳥賊</p><p>包丁を50回入れてイカを柔らかくする</p></li>
     <li><span><img src="../static/images/sou8.jpg"></span><p class="name">海庭</p><p>軍艦3種(干鵜巻きと鉄火とネギトロ軍艦にいくらをまぶしてオイスターリーフを乗せる)</p></li>
     <li><span><img src="../static/images/sou9.jpg"></span><p class="name">穴重</p><p>しゃりを四角くして穴子二つ重ねて小さな鰻重に一口サイズの穴子重</p></li>
    </ul>
   </div>
  </div>
 </main>

 <footer>
  <div id="footer__fild">
     <div class="footer__image"></div>

     <div class="footer__top"></div>

  <div class="footer__bottom">
       <div class="footer__kuuhaku"></div>
       <div class="footer__text">
         <p>「魚それぞれの魅力を活かしきる方法」を追求し続けております。<br>握りたてを味わう至福の一時を。</p>
       </div>

    <div id="footer__bar">
      <ul>
       <li class="store__name"><a href="sushiichi/index">鮨いち</a></li>
       <li><a href="sushiichi/index">トップ</a></li>
       <li><a href="sushiichi/sinagaki">お品書き</a></li>
       <li><a href="sushiichi/sousaku">創作</a></li>
       <li><a href="sushiichi/form">店舗情報</a></li>
      </ul>
     </div>

  </div>

 </div>
</footer>
</div>

</body>

</html>
