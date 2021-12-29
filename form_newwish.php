<div class="modal fade" id="newwish" tabindex="-1" aria-labelledby="newwish" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newwishLabel">สร้าง ส.ค.ส. | Create Your Own!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="" id="newwish_form" action="newwish.php" method="post" onsubmit="return checkForm(this);">
      <div class="mb-3">
      <label for="Name" class="form-label">ชื่อ | Name<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" maxlength="25" autocomplete="new-name" required>
      </div>
      <div class="mb-3">
      <label for="tag" class="form-label">แท็ก | Tag<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="tag" name="tag" aria-describedby="tagHelp" maxlength="30" autocomplete="new-tag" required>
      <div id="tagHelp" class="form-text">เช่น สื่อสาร บริหาร สะพานชมพู หิวข้าว บางกะปิ ลพบุรี หรือจะแจก IG LINE FACEBOOK ก็ได้นะเธอว์</div>
      </div>
      <label for="Name" class="form-label">คำอวยพร | Wish<span class="text-danger">*</span> (Up to 500 characters~)</label>
      <div class="input-group mb-3">
  <textarea class="form-control" rows="4" cols="50" maxlength="500" name="wishtext" id="wishtext" aria-label="With textarea" required autocomplete="new-wish"></textarea>
  </div>

  <label for="card" class="form-label">เลือกซองจดหมาย หรือ การ์ด | Choose an envelope or card<span class="text-danger">*</span></label>
  <div id="cardHelp" class="form-text">ซองหรือการ์ดที่คุณเลือกจะถูกนำไปแสดงบนหน้าเว็บและแสดงเมื่อคุณส่งลิงค์ให้เพื่อนของคุณ!</div>
  <div class="cc-selector text-center" style="max-height: 50vh;overflow-y: auto;">
    <input checked="checked" id="card_rmutt.png" type="radio" name="card" value="card_rmutt.png" />
    <label class="drinkcard-cc card_rmutt" for="card_rmutt.png"></label>

    <input id="card_Cy" type="radio" name="card" value="card_Cy.png" />
    <label class="drinkcard-cc card_Cy "for="card_Cy"></label>

    <input id="card_G" type="radio" name="card" value="card_G.png" />
    <label class="drinkcard-cc card_G" for="card_G"></label>

    <input id="card_G2" type="radio" name="card" value="card_G2.png" />
    <label class="drinkcard-cc card_G2" for="card_G2"></label>

    <input id="card_Or" type="radio" name="card" value="card_Or.png" />
    <label class="drinkcard-cc card_Or "for="card_Or"></label>

    <input id="card_P" type="radio" name="card" value="card_P.png" />
    <label class="drinkcard-cc card_P "for="card_P"></label>

    <input id="card_R" type="radio" name="card" value="card_R.png" />
    <label class="drinkcard-cc card_R"for="card_R"></label>

    <input id="card_R2" type="radio" name="card" value="card_R2.png" />
    <label class="drinkcard-cc card_R2"for="card_R2"></label>

    <input id="card_V" type="radio" name="card" value="card_V.png" />
    <label class="drinkcard-cc card_V "for="card_V"></label>

    <input id="ForyoMy2022" type="radio" name="card" value="ForyoMy2022.png" />
    <label class="drinkcard-cc ForyoMy2022 "for="ForyoMy2022"></label>

    <input id="ForyoMy2022_Cy" type="radio" name="card" value="ForyoMy2022_Cy.png" />
    <label class="drinkcard-cc ForyoMy2022_Cy "for="ForyoMy2022_Cy"></label>

    <input id="ForyoMy2022_G" type="radio" name="card" value="ForyoMy2022_G.png" />
    <label class="drinkcard-cc ForyoMy2022_G "for="ForyoMy2022_G"></label>

    <input id="ForyoMy2022_G2" type="radio" name="card" value="ForyoMy2022_G2.png" />
    <label class="drinkcard-cc ForyoMy2022_G2 "for="ForyoMy2022_G2"></label>

    <input id="ForyoMy2022_Or" type="radio" name="card" value="ForyoMy2022_Or.png" />
    <label class="drinkcard-cc ForyoMy2022_Or "for="ForyoMy2022_Or"></label>

    <input id="ForyoMy2022_P" type="radio" name="card" value="ForyoMy2022_P.png" />
    <label class="drinkcard-cc ForyoMy2022_P "for="ForyoMy2022_P"></label>

    <input id="ForyoMy2022_R" type="radio" name="card" value="ForyoMy2022_R.png" />
    <label class="drinkcard-cc ForyoMy2022_R "for="ForyoMy2022_R"></label>

    <input id="ForyoMy2022_R2" type="radio" name="card" value="ForyoMy2022_R2.png" />
    <label class="drinkcard-cc ForyoMy2022_R2 "for="ForyoMy2022_R2"></label>

    <input id="ForyoMy2022_V" type="radio" name="card" value="ForyoMy2022_V.png" />
    <label class="drinkcard-cc ForyoMy2022_V "for="ForyoMy2022_V"></label>

    <input id="let_blue" type="radio" name="card" value="let_blue.png" />
    <label class="drinkcard-cc let_blue "for="let_blue"></label>

    <input id="let_org" type="radio" name="card" value="let_org.png" />
    <label class="drinkcard-cc let_org "for="let_org"></label>

    <input id="let_pu" type="radio" name="card" value="let_pu.png" />
    <label class="drinkcard-cc let_pu "for="let_pu"></label>

    <input id="let_red" type="radio" name="card" value="let_red.png" />
    <label class="drinkcard-cc let_red "for="let_red"></label>

    <input id="let_green" type="radio" name="card" value="let_green.png" />
    <label class="drinkcard-cc let_green "for="let_green"></label>


 </div>

 <label for="gift" class="form-label mt-2">เลือกของขวัญ | Choose a gift<span class="text-danger">*</span></label>
 <div id="cardHelp" class="form-text">แนบของขวัญ 1 ชิ้น | Attach 1 gift.</div>
 <div class="cc-selector text-center" style="max-height: 50vh;overflow-y: auto;">
   <input checked="checked" id="flower14000" type="radio" name="gift" value="flower14000.png" />
   <label class="drinkcard-cc flower14000" for="flower14000" data-bs-toggle="tooltip" data-bs-placement="top" title="ช่อดอกไม้"></label>

   <input id="money" type="radio" name="gift" value="money.png" />
   <label class="drinkcard-cc money"for="money" data-bs-toggle="tooltip" data-bs-placement="top" title="เงินสด รวยๆ เฮงๆ"></label>

   <input id="watch" type="radio" name="gift" value="watch.png" />
   <label class="drinkcard-cc watch"for="watch" data-bs-toggle="tooltip" data-bs-placement="top" title="นาฬิกาหรู"></label>

   <input id="airticket" type="radio" name="gift" value="airticket.png" />
   <label class="drinkcard-cc airticket"for="airticket" data-bs-toggle="tooltip" data-bs-placement="top" title="Boarding Pass"></label>

   <input id="heels" type="radio" name="gift" value="heels.png" />
   <label class="drinkcard-cc heels"for="heels" data-bs-toggle="tooltip" data-bs-placement="top" title="รองเท้าส้นสูง"></label>

   <input id="sneaker" type="radio" name="gift" value="sneaker.png" />
   <label class="drinkcard-cc sneaker"for="sneaker" data-bs-toggle="tooltip" data-bs-placement="top" title="รองเท้าผ้าใบ"></label>

   <input id="coffee" type="radio" name="gift" value="coffee.png" />
   <label class="drinkcard-cc coffee"for="coffee" data-bs-toggle="tooltip" data-bs-placement="top" title="ขอให้ได้นอนเต็มอิ่มนะ <3"></label>

   <input id="ipad" type="radio" name="gift" value="ipad.png" />
   <label class="drinkcard-cc ipad"for="ipad" data-bs-toggle="tooltip" data-bs-placement="top" title="iPad"></label>

   <input id="laptop" type="radio" name="gift" value="laptop.png" />
   <label class="drinkcard-cc laptop"for="laptop" data-bs-toggle="tooltip" data-bs-placement="top" title="Laptop"></label>

   <input id="ita_shirt" type="radio" name="gift" value="ita_shirt.png" />
   <label class="drinkcard-cc ita_shirt"for="ita_shirt" data-bs-toggle="tooltip" data-bs-placement="top" title="Shirt"></label>

   <input id="earphones" type="radio" name="gift" value="earphones.png" />
   <label class="drinkcard-cc earphones" for="earphones" data-bs-toggle="tooltip" data-bs-placement="top" title="Earphones"></label>

   <input id="diamond" type="radio" name="gift" value="diamond.png" />
   <label class="drinkcard-cc diamond"for="diamond" data-bs-toggle="tooltip" data-bs-placement="top" title="เพรชแท้ไม่มีวันสลาย"></label>

   <input id="guitar" type="radio" name="gift" value="guitar.png" />
   <label class="drinkcard-cc guitar"for="guitar" data-bs-toggle="tooltip" data-bs-placement="top" title="กีตาร์จารย์แดง"></label>

   <input id="duck" type="radio" name="gift" value="duck.png" />
   <label class="drinkcard-cc duck"for="duck" data-bs-toggle="tooltip" data-bs-placement="top" title="น้องเป็ดยาง"></label>

   <input id="glasses" type="radio" name="gift" value="glasses.png" />
   <label class="drinkcard-cc glasses" for="glasses" data-bs-toggle="tooltip" data-bs-placement="top" title="แว่นตา"></label>

   <input id="bonk" type="radio" name="gift" value="bonk.png" />
   <label class="drinkcard-cc bonk" for="bonk" data-bs-toggle="tooltip" data-bs-placement="top" title="BONK!"></label>

   <input id="teddy_bear" type="radio" name="gift" value="teddy_bear.png" />
   <label class="drinkcard-cc teddy_bear" for="teddy_bear" data-bs-toggle="tooltip" data-bs-placement="top" title="Teddy Bear"></label>

   <input id="sunglasses" type="radio" name="gift" value="sunglasses.png" />
   <label class="drinkcard-cc sunglasses" for="sunglasses" data-bs-toggle="tooltip" data-bs-placement="top" title="แว่นกันแดดสุดคูล"></label>

   <input id="burger" type="radio" name="gift" value="burger.png" />
   <label class="drinkcard-cc burger" for="burger" data-bs-toggle="tooltip" data-bs-placement="top" title="แฮมเบอร์เกอร์"></label>

   <input id="Brrrr" type="radio" name="gift" value="Brrrr.png" />
   <label class="drinkcard-cc Brrrr" for="Brrrr" data-bs-toggle="tooltip" data-bs-placement="top" title="มอเตอร์ไซต์"></label>

   <input id="ceo" type="radio" name="gift" value="ceo.png" />
   <label class="drinkcard-cc ceo" for="ceo" data-bs-toggle="tooltip" data-bs-placement="top" title="ฉันคือประธานบริษัท"></label>

   <input id="ring" type="radio" name="gift" value="ring.png" />
   <label class="drinkcard-cc ring" for="ring" data-bs-toggle="tooltip" data-bs-placement="top" title="แหวนเพรช"></label>

   <input id="shabu" type="radio" name="gift" value="shabu.png" />
   <label class="drinkcard-cc shabu" for="shabu" data-bs-toggle="tooltip" data-bs-placement="top" title="ชาบู"></label>

   <input id="p_orange" type="radio" name="gift" value="p_orange.png" />
   <label class="drinkcard-cc p_orange" for="p_orange" data-bs-toggle="tooltip" data-bs-placement="top" title="คุณสามารถพบได้ที่ ทสม."></label>

   <input id="p_glass" type="radio" name="gift" value="p_glass.png" />
   <label class="drinkcard-cc p_glass" for="p_glass" data-bs-toggle="tooltip" data-bs-placement="top" title="คุณสามารถพบได้ที่ ทสม."></label>

   <input id="bitcoin" type="radio" name="gift" value="bitcoin.png" />
   <label class="drinkcard-cc bitcoin" for="bitcoin" data-bs-toggle="tooltip" data-bs-placement="top" title="รวย รวย รวย!"></label>

   <input id="beam230" type="radio" name="gift" value="beam230.png" />
   <label class="drinkcard-cc beam230" for="beam230" data-bs-toggle="tooltip" data-bs-placement="top" title="Moving Head Beam 230"></label>

   <input id="xr18" type="radio" name="gift" value="xr18.png" />
   <label class="drinkcard-cc xr18" for="xr18" data-bs-toggle="tooltip" data-bs-placement="top" title="Digital Mixer"></label>

   <input id="ur4d" type="radio" name="gift" value="ur4d.png" />
   <label class="drinkcard-cc ur4d" for="ur4d" data-bs-toggle="tooltip" data-bs-placement="top" title="Wireless Microphone"></label>

   <input id="sk02" type="radio" name="gift" value="sk02.png" />
   <label class="drinkcard-cc sk02 ssr-cc" for="sk02" data-bs-toggle="tooltip" data-bs-placement="top" title="ใบ สก.2"></label>

   <input id="drop" type="radio" name="gift" value="drop.png" />
   <label class="drinkcard-cc drop ssr-cc" for="drop" data-bs-toggle="tooltip" data-bs-placement="top" title="ใบดรอป..หวังว่าจะไม่ต้องใช้นะ..."></label>

   <input id="out" type="radio" name="gift" value="out.png" />
   <label class="drinkcard-cc out ssr-cc" for="out" data-bs-toggle="tooltip" data-bs-placement="top" title="หวังว่าจะไม่ต้องใช้ใบนี้นะ..."></label>

   <input id="ak_10" type="radio" name="gift" value="ak_10.png" />
   <label class="drinkcard-cc ak_10" for="ak_10" data-bs-toggle="tooltip" data-bs-placement="top" title="หกดาวต้องออกแล้ว"></label>

   <input id="ba_10" type="radio" name="gift" value="ba_10.png" />
   <label class="drinkcard-cc ba_10 rounded" for="ba_10" data-bs-toggle="tooltip" data-bs-placement="top" title="ขอให้คุณไม่ต้องเปิดถึง 200 โรล"></label>

   <input id="gi5s" type="radio" name="gift" value="gi5s.png" />
   <label class="drinkcard-cc gi5s rounded" for="gi5s" data-bs-toggle="tooltip" data-bs-placement="top" title="ขอให้นั้นไม่ใช่ Qiqi"></label>

   <input id="pjsekia4s" type="radio" name="gift" value="pjsekia4s.png" />
   <label class="drinkcard-cc pjsekia4s rounded" for="pjsekia4s" data-bs-toggle="tooltip" data-bs-placement="top" title="4 ดาวแบบไม่หลุดเรท..มั้ง.."></label>
   <!--
   <input id="p_to" type="radio" name="gift" value="p_to.png" />
   <label class="drinkcard-cc p_to" for="p_to" data-bs-toggle="tooltip" data-bs-placement="top" title="พี่โตกำลังจ้องมองคุณ"></label>
   -->
   <input id="rick_a" type="radio" name="gift" value="rick_a.gif" />
   <label class="drinkcard-cc rick_a" for="rick_a" data-bs-toggle="tooltip" data-bs-placement="top" title="Never Gonna Give You Up"></label>

   <input id="doge" type="radio" name="gift" value="doge.png" />
   <label class="drinkcard-cc doge rounded" for="doge" data-bs-toggle="tooltip" data-bs-placement="top" title="DOGE"></label>


</div>



      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-lg w-100 btn_newWish text-white" id="btnSubmit" value="สร้าง ส.ค.ส! | Create!" name="submit_button">
      </div>
      </form>
    </div>
  </div>
</div>
