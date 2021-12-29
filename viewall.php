<?php

 //echo $result["name"];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ส่งความสุขออนไลน์กับ ทสม. มทร.ธัญบุรี</title>
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
    }
    ?>
   <link rel="stylesheet" href="asset\main_six_logic.css?v.1.10">
    <link rel="stylesheet" href="asset\section.css?v=1.9">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js" integrity="sha512-PZrlUFhlOigX38TOCMdaYkhiqa/fET/Lztzjn+kdGxefUZanNUfmHv+9M/wSiOHzlcLX/vcCnmvOZSHi5Dqrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta property="og:title" content="สร้าง ส.ค.ส ส่งความสุขออนไลน์ สู่ปี 2565!" />
    <meta property="og:description" content="คณะเทคโนโลยีสื่อสารมวลชน มทร.ธัญบุรี"/>
    <meta property="og:image" content="asset/card/ForyoMy2022.png" />

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


    <div class="container" data-aos="fade-down" data-aos-duration="1500">
      <div class="row mt-2">
       <div class="col-12 text-center text-white textshadow" style="z-index:5;">
         <h1 class="display-5">ส่งความสุขออนไลน์สู่ปี พ.ศ.2565</h1>
         <h1 class="display-6">คณะเทคโนโลยีสื่อสารมวลชน มทร.ธัญบุรี</h3>
           <h4 id="timer"></h4>
       </div>
      </div>
      <div class="row my-2">
        <div class="col-12" data-aos="fade-left" data-aos-delay="900" data-aos-duration="1500">
          <div class="card shadow" style="background-color: rgba(255,255,255,0.9)!important;">
  <div class="card-header text-center">
    ส.ค.ส ทั้งหมด!
  </div>
  <div class="card-body" style="max-height: 65vh;overflow-y: auto;overflow-x:auto;">
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
                 include 'conn.php';
                 $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
                 $sql_all = "SELECT * FROM all_wish ORDER BY no desc";
                 $query = mysqli_query($conn,$sql_all) or die("error");
                 $result_all = mysqli_query($conn, $sql_all);
                       while($row_gen = mysqli_fetch_array($result_all)) {
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
  <div class="card-footer text-dark text-center">
    <?php
    $row_cnt = $query->num_rows;
    echo 'จำนวน ส.ค.ส ทั้งหมด : '.$row_cnt." ฉบับ";
     ?>
  </div>
</div>
        </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class=""hidden>
              <!-- hitwebcounter Code START -->
          <a href="https://www.hitwebcounter.com" target="_blank">
          <img src="https://hitwebcounter.com/counter/counter.php?page=7912758&style=0024&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>
            </div>

    </div>
          </div>

        <div class="row text-center justify-content-center my-1">
        <div class="col-lg-5 col-sm-4 col-md-4 my-1">
          <button type="button" class="btn btn-lg w-100 h-100 btn_newWish shadow text-white" data-bs-toggle="modal" data-bs-target="#newwish"><i class="bi bi-file-plus"></i> สร้าง ส.ค.ส ของคุณเอง!</button>
        </div>
        <div class="col-lg-2 col-sm-4 col-md-4 my-1">
          <?php
          date_default_timezone_set("Asia/Bangkok");
          $Today_Date = intval(date("d"));
          if ($Today_Date == 25) {
            echo '<audio id="audioID" autoplay loop> <source src="asset\ref_xmas.mp3"  type="audio/mp3"> </audio>';
          }else {
            echo '<audio id="audioID" autoplay loop> <source src="asset\arcaeaoff_v.mp3"  type="audio/mp3"> </audio>';
          }
          ?>
  <button class="btn btn-light btn-lg w-100 h-100 shadow-sm <?php echo $text_clr; ?>" style="background-color: rgba(255,255,255,0.2)!important;" onclick="PlayStop()" data-bs-toggle="tooltip" data-bs-placement="top" title="เปิด ปิด เพลง">ON/OFF <i class="bi bi-music-note-beamed"></i></button>
        </div>

        <div class="col-lg-5 col-sm-4 col-md-4 my-1">
          <button type="button" class="btn btn-lg w-100 h-100 btn_fact shadow text-white" onclick="location.href='./'"><i class="bi bi-arrow-bar-left"></i> กลับหน้าหลัก</button>
        </div>

        </div>

      </div>
    </div>


<?php include 'form_newwish.php'; ?>

<!-- Modal -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
AOS.init();

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
</script>
<script type="text/javascript" src="asset\countdown.js"></script>
<script type="text/javascript" src="asset\onetimesubmit.js"></script>


  </body>
</html>
