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
<?php //if ( is_home() || is_front_page() || is_category('villa') || is_single('padma-resort-bali-at-legian') ): ?>
<?php if ( is_home() || is_front_page() || is_category('hotels') || (in_category('hotels') && is_single())): ?>
<div id="footer_tel">
  <ul>
  	<li><a href="tel:0359564170">東京本社　03-5956-4170</a></li>
  	<li><a href="tel:0676396590">大阪支店　06-7639-6590</a></li>
  	<li><a href="tel:0676396590">名古屋支店　052-259-0681</a></li>
  	<li><a href="tel:0676396590">福岡支店　092-738-2602</a></li>
  </ul>
</div>
<?php endif; ?>

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

<?php //if( is_page('order') || is_category('villa') || is_single('padma-resort-bali-at-legian')): ?>
<?php if( is_page('order') || in_category('hotels') || (in_category('hotels') && is_single())): ?>
<?php else : ?>
<script type="text/javascript">
$(document).ready(function(){

  $("#open_order").hide();
  $("#slide_open").hide();

  $("#slide_order_btn p").toggle(function(){
    $(this).addClass("active");
    }, function () {
    $(this).removeClass("active");
  });

  $("#slide_order_btn p").click(function(){
    $("#open_order").slideToggle("slow,");
  });

  $("#slide_close").click(function(){
    $("#slide_order").animate({right:"-219px"},
      {queue:false,
      duration:500
    });
    setTimeout("slide_open_show();",500);
  });
  $("#slide_open").click(function(){
    $("#slide_open").animate({left:"0px"},
      {queue:false,
      duration:500
    });
    setTimeout("slide_order_show();",500);
  });

});
function slide_open_show(){
  $("#slide_open").show();
  $("#slide_open").animate({left:"-50px"},
    {queue:false,
    duration:500
  });
}
function slide_order_show(){
  $("#slide_open").hide();
  $("#slide_order").animate({right:"0px"},
    {queue:false,
    duration:500
  });
}
</script>

<div id="slide_order">
<div id="slide_box">
  <div id="slide_close" onClick="slide_close();"></div>
  <div id="slide_open" onClick="slide_open();"><p>オーダーメイドはこちらから</p></div>
  <form method="post" action="https://www.tabikobo.net/form/bali-girl/order/zeromail.php" onsubmit="return valid_form()">
    <div id="slide_order_title"><h2>ORDER MADE オーダーメイド・お問い合わせはこちらから</h2></div>
      <div id="open_order">
      <span class="txt_r">※印は必須項目です</span>
    <strong>お名前※</strong><br />
    <input name="name" type="text" class="order_form" /><br />
    <strong>メールアドレス※</strong><br />
    <input name="email" type="text" class="order_form" /><br />
    <strong>お電話番号</strong><br />
    <input name="tel" type="text" class="order_form" /><br />
    <strong>ご希望の出発日※</strong><br />
    <input name="optDate_req" type="text" class="order_form middle" id="calendarDate" /><br />

    <strong>ご希望の帰国日※</strong><br />
    <input name="optDate2_req" type="text" class="order_form middle" id="calendarDate2" /><br />
    <strong>参加人数※</strong><br />
    <select class="order_form_select" name="person_req">
      <option value="">選択してください</option>
      <option>1人</option>
      <option>2人</option>
      <option>3人</option>
      <option>4人</option>
      <option>5人以上</option>
    </select>
    <br />

    <strong>ご出発地※</strong><br />
    <select class="order_form_select" name="start_req">
      <option value="">選択してください</option>
      <option>東京（成田）</option>
      <option>東京（羽田）</option>
      <option>大阪</option>
      <option>名古屋</option>
      <option>福岡</option>
      <option>札幌</option>
      <option>仙台</option>
      <option>沖縄</option>
      <option>その他</option>
    </select>
    <br />
    <strong>ご要望・質問など</strong><br />
    <span>ご旅行期間、ご希望ホテル等のご希望をご記入ください</span>
    <textarea name="message" id="side_message" class="order_area" style="resize:vertical;" placeholder="ご褒美女子旅。ウブドとビーチ滞在希望。
出発地が違うけど現地合流希望。前半は贅沢に、後半はお買い物メインで立地重視、予算20万円。"></textarea>
    <span><a href="http://www.tabikobo.com/policy/agreement/">「個人情報の取り扱いについて」</a></span>
    
    <button type="submit"><img src="/img/s_order_btn.gif" width="188" height="30" alt="送信" id="s_send_btn" /></button>
  </div>
  <div id="slide_order_btn"><p></p></div>
  </form>
</div>
    <!-- パンフレット枠【2013.08.22新設】-->
    <div id="pamphlet_box">
      <h2>旅工房オリジナル！バリ島パンフレット（全111ページ）が完成！</h2>
      <p>もっと多くの人にバリ島のことを知ってもらいたい。<br>
      もっとバリ島に行ってその魅力を感じてもらいたい！<br>
      バリ島大好きなコンシェルジュが、想いを込めてパンフレットを作成いたしました。<br><br>
      ホテル情報・スパ・グルメetc...<br>
      こんなに魅力がたっぷり詰まったパンフレットは他には無いはずです！<br>
      皆さまのオンリーワンのバリ旅行に役立てば幸いです。</p>
      <p class="btn"><a href="/request/"><img src="/img/slide_pamphlet_btn.png" width="188" height="30"  alt=""/></a></p>
    </div>
    <!-- /#pamphlet_box-->
</div><!-- #slide_order -->
<script language="javascript" type="text/javascript" src="/js/smartsticky.js"></script>
<?php endif; ?>


</div><!-- #wrap -->



<?php wp_footer(); ?>

<?php //if( is_category('villa') || is_single('padma-resort-bali-at-legian')): ?>
<?php if(in_category('hotels') || (in_category('hotels') && is_single())): ?>
<?php else : ?>
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
<?php endif; ?>

</body>

</html>