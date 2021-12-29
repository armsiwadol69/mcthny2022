<?php

$id = $_GET["id"];
if (empty($id) == true) {
  header( "location: index.php" );
  exit(0);
}

 include 'conn.php';
 $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
 $sql = "SELECT * FROM all_wish WHERE id = '$id'";
 $query = mysqli_query($conn,$sql) or die("error");
 $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
 //echo $result["name"];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ส่งความสุขออนไลน์กับ มทร.ธัญบุรี</title>
    <link rel="manifest" href="/favicon/site.webmanifest?v=2">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml?v=2">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php
    date_default_timezone_set("Asia/Bangkok");
    $time_rightNow = intval(date("H"));
    $Today_Date = intval(date("d"));
    if ($Today_Date != 25) {
      if ($time_rightNow >= 6 && $time_rightNow < 10) {
        echo '<link rel="stylesheet" href="asset\main_six_moring.css">';
        $text_clr = "text-dark";
      }elseif ($time_rightNow >= 10 && $time_rightNow < 16) {
        echo '<link rel="stylesheet" href="asset\main_six_day.css">';
        $text_clr = "text-dark";
      }elseif ($time_rightNow >= 16 && $time_rightNow < 18) {
        echo '<link rel="stylesheet" href="asset\main_six_beforeNight.css">';
        $text_clr = "text-white";
      }
      else {
        echo '<link rel="stylesheet" href="asset\main_six_night.css">';
        $text_clr = "text-white";
        $btn_clr = "btn-white";
      }
    }
    else {
      echo '<link rel="stylesheet" href="asset\main_six_xmas.css?v.1.2">';
      $text_clr = "text-dark";
      $btn_clr = "btn-dark";
    }

    ?>
    <link rel="stylesheet" href="asset\main_six_logic.css?v.1.11">
    <link rel="stylesheet" href="asset\section.css?v=1.12">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js" integrity="sha512-PZrlUFhlOigX38TOCMdaYkhiqa/fET/Lztzjn+kdGxefUZanNUfmHv+9M/wSiOHzlcLX/vcCnmvOZSHi5Dqrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta property="og:title" content="<?php echo $result["name"]; ?> ได้ส่ง ส.ค.ส ให้คุณ!" />
    <meta property="og:description" content="ส่งความสุขออนไลน์สู่ปี 2565! มทร.ธัญบุรี"/>
    <meta property="og:image" content="asset/card/<?php echo $result["card"]; ?>" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PYE09RHSDY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-PYE09RHSDY');
    </script>
  </head>



  <body>


    <div class="container" data-aos="fade-up" data-aos-duration="1500">
      <div class="row mt-2">
       <div class="col-12 text-center text-white textshadow" style="z-index:5;">
           <h1 class="display-5 xmas_text">ส่งความสุขออนไลน์สู่ปี พ.ศ.2565</h1>
           <h1 class="display-6 xmas_text">มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</h3>
           <h4 class="xmas_text" id="timer"></h4>
       </div>
      </div>
      <div class="row my-3">
        <div class="col-12" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1500">
          <div class="card shadow papar_bg_2" style="background-color: rgba(255,255,255,0.9)!important;">
  <div class="card-header">
    คำอวยพรปีใหม่
  </div>
  <div class="card-body text_wish mx-1" >
    <div class="text-center">
      <img style="max-width:200px;" class="img-fluid zoom_ex" src="asset/card/<?php echo $result["card"]?>" alt="">
    </div>
    <h3 class="card-title">จาก : <?php  echo $result["name"]?></h3>
    <h5 class="card-text">Tag : <?php  echo $result["tag"]?></5>
    <p class="card-text mt-4"><?php  echo $result["textwish"]?></p>
    <div class="text-center">
    <h6 class="mt-5">ของขวัญที่แนบมา</h6>
    <img style="max-width:200px;" class="img-fluid rounded zoom_ex mt-2" src="asset/gift/<?php echo $result["gift"]?>" alt="">

     <?php
     if ($result["gift"] == "rick_a.gif") {
       echo '<br><br> <iframe id="ytplayer" type="text/html" width="560" height="315"
  src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1"
  frameborder="0"></iframe>';
     }
      ?>

    </div>
  </div>
  <div class="card-footer text-muted">
    เขียนเมื่อ : <?php echo $result["timesub"]?>
  </div>
  <div class=""hidden>
    <!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7912758&style=0024&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>
  </div>
</div>
        </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class="alert alert-primary" role="alert">
      <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
        <h6 class="text-dark  my-2">กดปุ่มคัดลอกลิงค์แล้วส่งไปเพื่อนๆของคุณผ่านแชทได้เลย!</h6>
        <div class="input-group shadow-sm">
     <span class="input-group-text">URL</span>
     <input type="text" aria-label="URL" id="urlcopy" value="http://mcthny2022.yongsue.com/view.php?id=<?php echo $result["id"];?>" class="form-control">
     <button type="button" class="btn btn-info" name="button" onclick="copyToClipboard()">คัดลอกลิงค์!</button>
   </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 text-center">
<h6 class="text-dark my-2">แชร์ไปยัง Facebook</h6>
<div id="fb-root" class=""></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Your share button code -->
<div class="fb-share-button mt-2"
data-href="http://mcthny2022.yongsue.com/view.php?id=<?php echo $result["id"];?>"
data-layout="button"
data-size="large">
</div>
      </div>
    </div>
    </div>
          </div>



        </div>

        <div class="row text-center justify-content-center my-1">
        <div class="col-lg-5 col-sm-4 col-md-4 my-1">
          <button type="button" class="btn btn-lg w-100 h-100 btn_newWish shadow text-white" data-bs-toggle="modal" data-bs-target="#newwish"><i class="bi bi-file-plus"></i> สร้าง ส.ค.ส ของคุณเอง!</button>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 my-1">
  <?php
  if ($Today_Date == 25) {
    echo '<audio id="audioID" autoplay loop> <source src="asset\ref_xmas.mp3"  type="audio/mp3"> </audio>';
  }else {
    echo '<audio id="audioID" autoplay loop> <source src="asset\arcaeaoff_v.mp3"  type="audio/mp3"> </audio>';
  }
  ?>
  <button class="btn btn-lg w-100 h-100 shadow-sm <?php echo $text_clr; echo " ";echo $btn_clr; ?>" style="background-color: rgba(255,255,255,0.2)!important;" onclick="PlayStop()" data-bs-toggle="tooltip" data-bs-placement="top" title="เปิด ปิด เพลง">ON/OFF <i class="bi bi-music-note-beamed"></i></button>
        </div>

        <div class="col-lg-5 col-sm-4 col-md-4 my-1">
          <button type="button" class="btn btn-lg w-100 h-100 btn_fact shadow text-white" onclick="location.href='./'"><i class="bi bi-arrow-bar-left"></i> กลับหน้าหลัก</button>
        </div>

        </div>

      </div>
    </div>




<!-- Modal -->
<?php include 'form_newwish.php'; ?>

<script type="text/javascript" src="asset\countdown.js"></script>
<script type="text/javascript" src="asset\onetimesubmit.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();

function copyToClipboard(text) {
var inputc = document.body.appendChild(document.createElement("input"));
inputc.value = window.location.href;
inputc.focus();
inputc.select();
document.execCommand('copy');
inputc.parentNode.removeChild(inputc);
alert("คัดลอกลิงค์ใส่คลิปบอร์ดแล้ว นำไปส่งให้เพื่อนของคุณได้เลย!");
}
</script>

  </body>
</html>
