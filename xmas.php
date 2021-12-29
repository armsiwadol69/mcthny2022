<?php
date_default_timezone_set("Asia/Bangkok");
$Today_Date = intval(date("d"));
if ($Today_Date != 25) {
  header('Location:index.php');
  exit(0);
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ส่งความสุขออนไลน์กับ มทร.ธัญบุรี</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png?v=2">
    <link rel="manifest" href="/favicon/site.webmanifest?v=2">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon/favicon.ico?v=2">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/favicon/browserconfig.xml?v=2">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="asset\main_six_xmas.css?v.1.4">
    <link rel="stylesheet" href="asset\main_six_logic.css?v.1.11">

    <link rel="stylesheet" href="asset\section.css?v=1.13">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js" integrity="sha512-PZrlUFhlOigX38TOCMdaYkhiqa/fET/Lztzjn+kdGxefUZanNUfmHv+9M/wSiOHzlcLX/vcCnmvOZSHi5Dqrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta property="og:title" content="ส่งความสุขออนไลน์กับ มทร.ธัญบุรี" />
    <meta property="og:description" content="มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี"/>
    <meta property="og:image" content="asset/card/ForyoMy2022.png" />

    <link rel="preload" as="image" href="asset/img/papar_1.jpg">
    <link rel="preload" as="image" href="asset/img/papar_2.jpg">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PYE09RHSDY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-PYE09RHSDY');
    </script>

  </head>

   <?php
    set_time_limit(20);
    include 'conn.php';
    $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $count_row = $conn->query("SELECT * FROM all_wish ORDER BY no desc");
    $row_cnt = $count_row->num_rows;
    $allWishArray = array();
    while ($allwish_Result = mysqli_fetch_array($count_row)) {
      array_push($allWishArray,$allwish_Result);
    }
    $text_clr = "text-dark";
    $btn_clr = "btn-dark";
    ?>

  <body>


    <div class="snowflakes" aria-hidden="true" style="position: fixed;
    top: 0; right: 0; bottom: 0; left: 0;z-index:4;">
    <?php
      $sql_all = "SELECT * FROM all_wish ORDER BY rand() LIMIT 12";
      $result_all = mysqli_query($conn, $sql_all);
      $resultArray = array();
      while ($obResult = mysqli_fetch_array($result_all)) {
        array_push($resultArray,$obResult);
      }
      foreach($resultArray as $showem_all) {
      echo '<div class="snowflake">';
      echo '<a href="#" data-bs-toggle="modal" data-bs-target="#gift_'.$showem_all["id"].'" >';
      echo '<img style="max-width:100px" src="asset/card/'.$showem_all["card"].'" alt="">';
      echo '<p class="centered text-white" style="font-size: 2vh;word-break: break-all;">'.$showem_all["name"].'</p>';
      echo '</a>';
      echo '</div>'."\n";
    }
     ?>
    </div>

    <?php /* print_r($resultArray);
    echo '<br>';
    print_r($resultArray); */
    ?>

         <audio id="audioID" autoplay loop> <source src="asset\ref_xmas.mp3"  type="audio/mp3"> </audio>
    <div class="container">
      <div class="row mt-2">
       <div class="col-12 text-center textshadow" style="z-index:5;"data-aos="fade-down" data-aos-duration="2000">
           <h1 class="display-1 xmas_text">ส่งความสุขออนไลน์สู่ปี พ.ศ.2565</h1>
           <h1 class="display-5 xmas_text">มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</h3>
           <h4 id="timer" class="xmas_text"></h4>
           <h5 class="mt-1 xmas_text">คลิกที่ซองจดหมายหรือการ์ดที่ลอยลงมาเพื่ออ่าน ส.ค.ส</h5>
       </div>
      </div>
    </div>

<footer>
<div class="container my-3" data-aos="fade-up" data-aos-duration="2000">
<div class="row text-center justify-content-center">
  <div class="col-lg-12 col-sm-12 col-md-12">
    <button class="btn <?php echo $btn_clr; ?> shadow-sm my-2 <?php echo $text_clr; ?>" style="background-color: rgba(255,255,255,0.3)!important;" onclick="PlayStop()" data-bs-toggle="tooltip" data-bs-placement="top" title="เปิด ปิด เพลง">ON/OFF <i class="bi bi-music-note-beamed"></i></button>

    <button class="btn <?php echo $btn_clr; ?> shadow-sm my-2 <?php echo $text_clr; ?>" style="background-color: rgba(255,255,255,0.3)!important;" onClick="window.location.reload();" data-bs-toggle="tooltip" data-bs-placement="top" title="สุ่ม ส.ค.ส 12 ฉบับ"><i class="bi bi-arrow-clockwise"></i></button>

    <h5 class="<?php echo $text_clr; ?>">จำนวน ส.ค.ส ทั้งหมด : <?php echo $row_cnt; ?> ฉบับ</h5>
  </div>
<div class="col-lg-12 col-sm-12 col-md-6">
  <button type="button" class="btn xmas_btn text-light btn-lg w-100 shadow-lg " data-bs-toggle="modal" data-bs-target="#newwish"><i class="bi bi-file-plus"></i> สร้าง ส.ค.ส ของคุณ!</button>
</div>
</div>
<div class="row text-center justify-content-center mt-1">
<div class="col-4">
  <button type="button" class="btn btn_allWish text-white shadow w-33 w-100 h-100 text-dark mt-1" data-bs-toggle="modal" data-bs-target="#Rall_wish"><i class="bi bi-list-columns-reverse"></i> ส.ค.ส ทั้งหมด</button>
</div>
<div class="col-4">
  <button type="button" class="btn  btn_fact shadow text-white w-33 w-100 h-100 mt-1" data-bs-toggle="modal" data-bs-target="#fact"><i class="bi bi-book"></i> สาระน่ารู้</button>
</div>
<div class="col-4">
  <button type="button" class="btn btn_dev shadow text-white w-33 w-100 h-100 mt-1" data-bs-toggle="modal" data-bs-target="#devinfo"><i class="bi bi-dice-3"></i> ผู้จัดทำ</button>
</div>
</div>
</footer>
</div>

<!-- Modal -->
<div class="modal fade" id="fact" tabindex="-1" aria-labelledby="fact" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fact">สาระน่ารู้ | Facts</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="card mb-3" style="max-width:100%;">
      <div class="row g-0">
      <div class="col-md-4">
      <img src="asset\news\new1.jpg" class="img-fluid w-100 rounded-start" alt="...">
      </div>
      <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">รวม ที่เคาท์ดาวน์ ปีใหม่ 2021</h5>
        <p class="card-text"> ปีใหม่ กำลังจะมาถึง ต้อนรับปีใหม่นี้ ด้วยการนับถอยหลัง ส่งท้ายปีเก่า ต้อนรับปีใหม่ กับ รวม ที่เคาท์ดาวน์ ปีใหม่ 2021 ไปเคาท์ดาวน์ที่ไหนดี ใครที่ไม่ได้นอนแกร่วอยู่กับบ้าน ออกไปเคาท์ดาวน์พร้อมๆ กันอย่างสนุกสนาน...</p>
        <a class="btn btn-info text-dark" href="https://travel.trueid.net/detail/YB6LzryZyOY" target="_blank">อ่านต่อ..</a>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" style="max-width:100%;">
<div class="row g-0">
<div class="col-md-4">
<img src="asset\news\new2.jpg" class="img-fluid w-100 rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
  <h5 class="card-title">ประวัติวันปีใหม่ 1 มกราคม วันขึ้นปีใหม่</h5>
  <p class="card-text">ปีใหม่ หรือ วันขึ้นปีใหม่ 2565 หรือ ปีใหม่ภาษาอังกฤษ ว่า Happy New Year 2022 มาถึงแล้ว โดยถือเป็นวันเริ่มต้นของปีตาม ปฏิทิน 2565 และเป็นหนึ่งในวันหยุด 2565 หลาย ๆ คนคงชอบที่จะได้หยุดหลาย ๆ วัน ว่าแต่ที่หยุดและฉลองปีใหม่กันอยู่ทุกปี แล้วรู้หรือไม่ว่า ประวัติปีใหม่ หรือวันขึ้นปีใหม่ มีความเป็นมาอย่างไร...</p>
  <a class="btn btn-info text-dark" href="https://hilight.kapook.com/view/18913" target="_blank">อ่านต่อ..</a>
</div>
</div>
</div>
</div>

<div class="card mb-3" style="max-width:100%;">
<div class="row g-0">
<div class="col-md-4">
<img src="asset\news\new3.jpg" class="img-fluid w-100 rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
  <h5 class="card-title">ปีใหม่ เที่ยวไหนดี 50 ที่เที่ยวปีใหม่ 2565 ทั่วไทย เหนือจดใต้ เที่ยววันหยุดยาว</h5>
  <p class="card-text">ใครที่กำลังวางแผนไป เที่ยววันหยุดยาว ในช่วง ปีใหม่ 2565 นี้ แต่ยังไม่มีไอเดียดีๆ โดนๆ ว่า ปีใหม่ เที่ยวไหนดี ? แล้วล่ะก็ เราขอ แนะนำ 50 ที่เที่ยวปีใหม่ 2565 ทั่วไทย ตั้งแต่ภาคเหนือจนถึงภาคใต้ มีที่ไหน น่าไปเที่ยวช่วงปลายปีนี้บ้าง ตามมาดูกันได้เลย...</p>
  <a class="btn btn-info text-dark" href="https://travel.trueid.net/detail/0o3loGmkkZ0" target="_blank">อ่านต่อ..</a>
</div>
</div>
</div>
</div>

<div class="card mb-3" style="max-width:100%;">
<div class="row g-0">
<div class="col-md-4">
<img src="asset\news\new4.jpg" class="img-fluid w-100 rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
  <h5 class="card-title">เกร็ดความรู้และความหมาย "วันขึ้นปีใหม่" ในประเทศไทย</h5>
  <p class="card-text">เกร็ดความรู้และความหมาย "วันขึ้นปีใหม่" ในประเทศไทย...</p>
  <a class="btn btn-info text-dark" href="https://www.sanook.com/horoscope/107861/" target="_blank">อ่านต่อ..</a>
</div>
</div>
</div>
</div>

<div class="card mb-3" style="max-width:100%;">
<div class="row g-0">
<div class="col-md-4">
<img src="asset\news\new5.jpg" class="img-fluid w-100 rounded-start" alt="...">
</div>
<div class="col-md-8">
<div class="card-body">
  <h5 class="card-title">ประวัติวันสงกรานต์ กิจกรรมวันสงกรานต์ นางสงกรานต์ประจำปี</h5>
  <p class="card-text">"สงกรานต์" เป็นคำภาษาสันสกฤต แปลว่า "ผ่าน" หรือ "เคลื่อนย้ายเข้าไป" ในที่นี้หมายถึงเป็นวันที่พระอาทิตย์ ผ่านหรือเคลื่อนย้าย จากราศีมีน เข้าสู่ ราศีเมษ ในเดือนเมษายน...</p>
  <a class="btn btn-info text-dark" href="https://www.sanook.com/campus/948044/" target="_blank">อ่านต่อ..</a>
</div>
</div>
</div>
</div>

      </div>

      </div>
      <div class="modal-footer" hidden>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" disabled hidden>Save changes</button>
      </div>
    </div>
  </div>

<div class="modal fade" id="devinfo" tabindex="-1" aria-labelledby="fact" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="devinfo">ผู้จัดทำ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
      <img src="asset/img/dev.jpg" class="rounded img-fluid my-2" alt="">
      <figure class="text-center" hidden>
      <blockquote class="blockquote">
      <p>"จริงๆตรงนี้มันไม่ควรมีรูปพวกเราอยู่นะ"</p>
      </blockquote>
      <figcaption class="blockquote-footer">
      ศิวดลกล่าวกับชกิตโสภณ <cite title="Source Title">ในดิสคอร์ด</cite>
      </figcaption>
      </figure>
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><h6 style="color:#E4A8CA;">Siwadol Malisorn (PM. | WebDev.)</h6></a>
      <a href="./"><h6 style="color:#0077DD;">Nichapat Promson (Illust.)</h6></a>
      <a href="https://www.youtube.com/watch?v=t1ku146EpE8" target="_blank"><h6 style="color:#34DD9A;">Chakitsopon Naksri (Banner | Tester | <span class="fw-bold">LoveNAN</span>)</h6></a>
      <p>Part Of 69Prodution</p>
      <p>Digital Media Technology (DM6201)</p>
      <p>Hosting Provied By Asst.Prof.Supannika Yongsue</p>
      <p>Version : <?php echo $c_version ?></p>
      <hr>
      <a href="https://www.rmutt.ac.th/" target="_blank"><img src="asset/img/rmutt_logo.png" class="rounded img-fluid my-1" style="max-width:50%" alt=""></a>
      <h6 class="">Rajamangala University of Technology Thanyaburi</h6>
      <h6>Mass Communication Technology<br></h6>
      <a href="http://www.mct.rmutt.ac.th/" target="_blank"><img src="asset/img/logo-MCT-FINAL-ok-02.png" class="rounded img-fluid my-1" style="max-height:100px" alt=""></a>
      <hr>
      <figure class="text-center">
      <blockquote class="blockquote">
      <p>"Hashire sori yo Kaze no you ni Tsukimihara wo <span class="fw-bold">Padoru Padoru</span>"</p>
      </blockquote>
      <figcaption class="blockquote-footer">
      Dev's Oath<cite title="Source Title"> At 25:00</cite>
      </figcaption>
      </figure>
      <hr>
      <h6>เพลง สวัสดีปีใหม่ โดย สุนทราภรณ์</h6>
      <!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=7912758&style=0024&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>




      </div>
      </div>
      <div class="modal-footer" hidden>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" disabled hidden>Save changes</button>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Rall_wish" tabindex="-1" aria-labelledby="fact" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title" id="Rall_wish">ส.ค.ส ทั้งหมด!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table text-dark table-hover table-striped mx-auto w-100 text-center align-middle">
          <tr>
       <!--   <td>Time</td> -->
         <!--   <td>No.</td> -->
          <td style="max-width:200px">ผู้เขียน</td>
          <td>การ์ดหรือซอง</td>
          <td style="">ข้อความ</td>
          <td>ของขวัญที่แนบ</td>
         <!-- <td>ส่งเมื่อ</td> -->
        </tr>
        <?php
        foreach($allWishArray as $row_gen){
              echo '<tr>';
           //   echo "<td>" .$row2["timesub"] . "</td> ";
             // echo "<td>" .$row_gen["no"] .   "</td> ";
              echo '<td style="max-width:200px"><p>'.$row_gen["name"].'<br>'.$row_gen["tag"]."</p></td>";
              echo '<td><a href="view.php?id='.$row_gen["id"].'"><img class="img-fluid max-img-table zoom" src="asset/card/'.$row_gen["card"].'"></a></td>';
              echo '<td style=""><p>'.$row_gen["textwish"].'</p></td>';
              echo '<td><img class="img-fluid max-img-table zoom rounded" src="asset/gift/'.$row_gen["gift"].'"></td>';
             // echo '<td><p>'.$row_gen["timesub"].'</p></td>';
              echo "</tr>"."\n";
              };
              ?>
            </table>
        </div>
        </div>
        <div class="modal-footer">
          <h6 class="">จำนวน ส.ค.ส ทั้งหมด : <?php echo $row_cnt; ?> ฉบับ</h6>
        </div>
      </div>
    </div>
      </div>


  <?php

  foreach($resultArray as $showem_all2) {
  echo '<div class="modal fade" id="gift_'.$showem_all2["id"].'" tabindex="-1" aria-labelledby="fact" aria-hidden="true">';
  echo '<div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
    <div class="modal-content papar_bg">
      <div class="modal-header">';
  echo '<h5 class="modal-title" id="gift_'.$showem_all2["id"].'_title">ส.ค.ส</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>';
  echo '<div class="modal-body text_wish mx-1">';
  echo '<div class="w-100 text-center ">
    <img style="max-width:200px;" class="img-fluid zoom_ex" src="asset/card/'.$showem_all2["card"].'" alt="">
  </div>';
  echo '<h4 class="card-title text_wish" style="word-break: break-all;">เขียนโดย : '.$showem_all2["name"].'</h4>
  <p class="card-text text_wish">Tag : '.$showem_all2["tag"].'</p>
  <p class="card-text mt-4 text_wish" style="word-break: break-all;">'.$showem_all2["textwish"].'</p>
  <div class="text-center mt-2 text_wish">

  <h6 class="my-4">ของขวัญที่แนบมา</h6>
  <img style="max-width:200px;" class="img-fluid zoom_ex rounded" src="asset/gift/'.$showem_all2["gift"].'" alt="">
  </div>
  </div>
  <div class="modal-footer"">
    <h6>เขียนเมื่อ : '.$showem_all2["timesub"].'</h6>
  </div>
</div>
</div>
</div>
  ';

}
   ?>


<?php include 'form_newwish.php'; ?>
<script type="text/javascript" src="asset\countdown.js"></script>
<script type="text/javascript" src="asset\onetimesubmit.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
AOS.init();

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
</script>

  </body>
</html>
