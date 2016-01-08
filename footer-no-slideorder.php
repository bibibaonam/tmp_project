<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */

?>

</div><!-- 個別ID -->





<div id="sns_button">

<?php /*ソーシャルボタン対応*/ ?>

<?php /* ------twitter*/ ?>

<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja">ツイート</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



<?php /*-------facebook*/ ?>

<div class="fb-like" data-send="false" data-layout="button_count" data-width="130" data-show-faces="false"></div>



<?php /* ------google+*/ ?>

<g:plusone size="small"></g:plusone>

<script type="text/javascript">

  window.___gcfg = {lang: 'ja'};



  (function() {

    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;

    po.src = 'https://apis.google.com/js/plusone.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);

  })();

</script>



<?php /* ------mixiチェック*/ ?>

<div data-plugins-type="mixi-favorite" data-service-key="4ecb4b178313dccd1db105d2695616c51c66ba7b" data-size="medium" data-href="" data-show-faces="false" data-show-count="false" data-show-comment="false" data-width=""></div><script type="text/javascript">(function(d) {var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//static.mixi.jp/js/plugins.js#lang=ja';d.getElementsByTagName('head')[0].appendChild(s);})(document);</script>



</div>






<?php if(is_page('bali_100')): ?>


<?php else : ?>


<div id="page_top_btn">





<a href="#top">ページの先頭へ戻る</a>

</div>

<?php endif; ?>


<div id="footer_group">

<div id="companyInfo">

  <div class="pic">

    <p><a href="http://www.tabikobo.com/">株式会社<strong>旅工房</strong></a></p>

    <ul>

      <li>観光庁長官登録旅行業第１６８３号（第１種）</li>

      <li>一般社団法人日本旅行業協会（ＪＡＴＡ）正会員</li>

      <li>国際航空運送協会（ＩＡＴＡ）公認代理店</li>

    </ul>

  </div>

  <!-- class=pic -->

  <div class="txt">

    <address>

    〒170-6046　東京都豊島区東池袋3-1-1 サンシャイン60 46F

    </address>

    <dl>

      <dt>TEL：<em>03-5956-4170</em></dt>

      <dd>FAX：03-5950-3830</dd>

    </dl>

    <ul>

      <li class="note">※FAX番号の間違いが大変多くなっております。弊社宛てにFAXを送信される際は、番号を今一度ご確認くださるようお願い申し上げます。</li>

      <li><b>mail:&#98;&#97;&#108;&#105;&#64;&#116;&#97;&#98;&#105;&#107;&#111;&#98;&#111;&#46;&#99;&#111;&#109;</b></li>

      <li>営業時間：月～土（10:00～18:30）　日・祝（休み）</li>

    </ul>

  </div>

  <!-- class=txt -->

  <ul class="association">

    <li><a href="http://www.kotorikyo.org/" target="_blank"><img src="/img/footLinknKotori.gif" alt="" width="86" height="22" /></a></li>

    <li><a href="http://www.jata-net.or.jp/" target="_blank"><img src="/img/footLinkJata.gif" alt="" width="23" height="23" /></a></li>

    <li><a href="http://www.iata.org/Pages/default.aspx" target="_blank"><img src="/img/footLinkIata.gif" alt="" width="30" height="23" /></a></li>

  </ul>

  <!-- class=association -->

</div>

<!-- id=companyInfo -->

<div id="footer">

  <p class="copyright">&copy; TABIKOBO CO. LTD. All Right Reserved.</p>

  <ul>

    <li><a href="http://www.plbali.com/">バリ旅行TOP</a></li>

    <li><a href="http://www.tabikobo.com/company/">会社概要</a></li>

    <li><a href="http://www.tabikobo.com/recruit/">採用情報</a></li>

    <li><a href="http://www.tabikobo.com/terms/">利用規約</a></li>

    <li><a href="http://www.tabikobo.com/policy/">プライバシーポリシー</a></li>

    <li><a href="http://www.tabikobo.com/trademark/">商標について</a></li>

    <li><a href="http://www.tabikobo.com/inquiry/">お問合せ</a></li>

    <li><a href="http://www.tabikobo.com/link/">リンク</a></li>

    <li><a href="http://www.plbali.com/faq/">FAQ</a></li>

  </ul>

</div><!-- id=footer -->

<div id="f_text">
<p>バリ旅行のバリ・ガール｜トラベル・コンシェルジュがこだわりの旅をお手伝い致します</p>
<p id="ta_link"><a href="http://www.tripadvisor.jp/">バリ島のホテルのクチコミはトリップアドバイザーが提供しております。</a></p>
</div>

</div><!-- id=footer_group -->

</div><!-- #wrap -->



<?php wp_footer(); ?>





  <!-- UI Calender -->

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<script type="text/javascript" src="https://0-oo.googlecode.com/svn/gcalendar-holidays.js"></script>
<script type="text/javascript">
function valid_form(){
  $("#calendarDate,#calendarDate2").css('border-color', 'none');
  var calendarDate = $.trim($("#calendarDate").val());
  if (calendarDate.length > 0) {
    if (!isValidDate(calendarDate)) { $("#calendarDate").css('border-color', 'red'); alert("ご希望の出発日の日付の書式が不正です。"); return false; }
  }
  var calendarDate2 = $.trim($("#calendarDate2").val());
  if (calendarDate2.length > 0) {
    if (!isValidDate(calendarDate2)) { $("#calendarDate2").css('border-color', 'red'); alert("ご希望の帰国日の日付の書式が不正です。"); return false; }
  }
  return check_greater_than_date();
}
function isValidDate(dateString) {
  var regEx = /^\d{4}\/\d{2}\/\d{2}$/;
  return dateString.match(regEx) != null;
}
function check_greater_than_date(){
  var calendarDate  = $.trim($("#calendarDate").val());
  var calendarDate2 = $.trim($("#calendarDate2").val());
  if (calendarDate.length > 0 && calendarDate2.length > 0) {
    var tmp_calendarDate  = new Date(calendarDate);
    var tmp_calendarDate2 = new Date(calendarDate2);
  }

  if (tmp_calendarDate >= tmp_calendarDate2) {
    $("#calendarDate,#calendarDate2").css('border-color', 'red');
    alert('帰着日は出発日より後の日付を設定してください。');
    return false;
  }
  return true;
}
$(function() {
  $("#calendarDate,#calendarDate2").datepicker({
    showButtonPanel: true,    //「今日」「閉じる」ボタンを表示する
    minDate: new Date(2012, 1 - 1, 1),
  });
});
</script>

<!-- あこーでぃおん -->
<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function() {
	$("#preparation dd").hide();
	$("#preparation dt").click(function(){
		$(this).next().slideToggle();
	});
});
</script>

</body>

</html>