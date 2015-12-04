<?php /** * The main template file. * * This is the most generic template file in a WordPress theme * and one of the two required files for a theme (the * and one of the two required files for a theme (th other being style.css). * It is used to display a page when nothing more specific matches a query. * E.g., it puts together the home page when no home.php file exists. * Learn more: http://codex.wordpress.org/Template_Hierarchy * * @package WordPress * @subpackage Twenty_Eleven */ get_header(); ?>
<link rel="alternate" media="only screen and (max-width: 640px)" href="https://sp.plbali.com/" />
<script type="text/javascript"> $(document).ready(function(){ $('#hotel_id').load('/hotelJsonBaliApi.php'); $('#city').change(function(){ var city_id = $('#city').val(); if(city_id == 70){ $('#district').show(); }else{ $('#district').hide(); } $('#hotel_id').load('/hotelJsonBaliApi.php?city_id=' + city_id); }); $('#district').change(function(){ var district_id = $('#district').val() ? $('#district').val() : ''; $('#hotel_id').load('/hotelJsonBaliApi.php?city_id=70' + '&district_id=' + district_id); }); }); </script>

<div id="main">
  <div id="main_img">
    <div id="images"> 
    <div id="cf1" class="slide"><a href="//www.tabikobo.com/special/bali/club_room/" target="_blank"><img src="/img/large/bnr_club.jpg" width="1920" height="440" alt="クラブルーム" /></a> </div>    
     <div id="cf1" class="slide"><a href="//www.tabikobo.com/special/bali/suite_room/" target="_blank"><img src="/img/large/bnr_suite.jpg" width="1920" height="440" alt="スイートルーム" /></a> </div>  
  <div id="cf1" class="slide"><a href="http://www.tabikobo.com/special/bali/family/" target="_blank"><img src="/img/large/family.jpg" width="1920" height="440" alt="バリ島ファミリー特集" /></a> </div>    
  <div id="cf1" class="slide"><a href="http://www.tabikobo.com/special/bali/st_regis/" target="_blank"><img src="/img/large/bnr_stregis_top.jpg" width="1920" height="440" alt="ザ セントレジス バリ リゾート" /></a> </div>    
<div id="cf1" class="slide"><a href="http://www.tabikobo.com/bali/bagusjati/" target="_blank"> <img src="/img/large/bagusjati_big.jpg" width="1920" height="440" alt="バリ島最大のウェルネスリゾート「バグースジャティ」" /></a></div>     
      <!-- 
      <div id="cf1" class="slide"><a href="http://www.tabikobo.com/special/bali/samaya/seminyak" target="_blank"><img src="/img/large/samaya.jpg" width="1920" height="440" alt="ザ サマヤ バリ" /></a> </div> <div id="cf1" class="slide"> <a href="http://www.tabikobo.com/bali/world_heritage/" target="_blank"> <img src="/img/large/world_heritage.jpg" width="1920" height="440" alt="インドネシア世界遺産特集" /></a></div>
     <div id="cf1" class="slide"><a href="http://www.tabikobo.com/special/bali/one_eleven" target="_blank"><img src="/img/large/one_eleven_top.jpg" width="1920" height="440" alt="バリ島　ワンイレブン" /></a> </div>-->

       </div>
  </div>
</div>

<form method="get" action="http://www.tabikobo.com/tour/tourresult" name="searchbox" id="searchbox">
  <div id="top_container">
    <div class="thumbnails" id="keyViewThumbs"></div>
    <div id="tour_search_box">
      <div id="tour_search">
        <?php $api = 'http://api.tabikobo.com/myapi/rest/destination/list'; $json_string = file_get_contents($api); $destination_list = json_decode($json_string,true); if(!empty($destination_list)){ $city_list_bali = $destination_list['data']['city_ids'][3]; $city_list_names = $destination_list['data']['city_names']; $district_names = $destination_list['data']['district_names']; $district_ids_70 = $destination_list['data']['district_ids']['70']; } ?>
        <div id="top_search">
          <div id="top_search_h">
            <div class="serch_title"> <img src="/img/top_search_t01.gif" width="240" height="35" alt="bali tour search バリツアー検索" /> </div>
          </div>
          <div id="search_detail"> <script type="text/javascript" src="/js/sendParam.js"></script>
            <input type="hidden" name="media" value="plumeriabali" />
            <input type="hidden" name="region_id" value="1" />
            <input type="hidden" name="country_id" value="3" />
            <p>出発地と目的地、出発予定日を選んで<br />
              「検索」をクリックしてください。</p>
            <div id="top_step1">
              <div class="serch_title"> <img src="/img/top_search_t02.gif" width="240" height="32" alt="step1 出発地を選ぶ" /> </div>
              <select name="departure_place_id" id="departure_place">
                <option value="">出発地</option>
                <option value="1">東京</option>
                <option value="3">羽田</option>
                <option value="5">関空</option>
                <option value="7">名古屋</option>
                <option value="8">福岡</option>
                <option value="10">札幌</option>
                <option value="11">仙台</option>
              </select>
            </div>
            <div id="top_step2">
              <div class="serch_title"> <img src="/img/top_search_t03.gif" width="240" height="32" alt="step2 目的地を選ぶ" /> </div>
              <select name="city_id" id="city" class="ignore">
                <option value="">選択してください</option>
                <?php if(!empty($city_list_bali) && !empty($city_list_names)){ ?>
                <?php foreach($city_list_bali as $value){ ?>
                <option value="<?php echo $value; ?>"><?php echo $city_list_names[$value]; ?></option>
                <?php } ?>
                <?php }else{ ?>
                <option value="70">バリ島</option>
                <option value="83">バリ島（ウブド）</option>
                <option value="69">ジョグジャカルタ</option>
                <option value="71">ビンタン島</option>
                <option value="79">モヨ島</option>
                <option value="84">コモド島</option>
                <option value="86">ラブアンバジョー[フローレス島]</option>
                <?php }?>
              </select>
              <select name="district_id" id="district" class="ignore" style="display: none;">
                <option value="">バリ島全域</option>
                <?php if(!empty($district_ids_70) && !empty($district_names)){ ?>
                <?php foreach($district_ids_70 as $value){ ?>
			<?php if($value != "72" && $value != "87"){ ?>
                		<option value="<?php echo $value; ?>"><?php echo $district_names[$value]; ?></option>
			<?php } ?>
                <?php } ?>
                <?php }else{ ?>
                <option value="82">クタ／レギャン</option>
                <option value="1">ヌサドゥア</option>
                <option value="68">ウブド</option>
                <option value="6">スミニャック</option>
                <option value="81">スミニャック／クロボカン</option>
                <option value="2">レギャン</option>
                <option value="4">ジンバラン</option>
                <option value="83">ウルワツ</option>
                <option value="69">ウブド＆ビーチ</option>
                <option value="8">サヌール</option>
                <option value="80">クタ</option>
                <option value="87">デンパサール</option>
                <option value="72">ジョグジャカルタ（ボロブドゥール）</option>
                <option value="74">ムンジャンガン</option>
                <option value="79">ベノア</option>
                <option value="73">チャンディダサ</option>
                <option value="77">その他</option>
                <option value="95">チャングー</option>
                <option value="75">ロビナ</option>
                <option value="97">レンボンガン島</option>
                <option value="78">タンジュン・ベノア</option>
                <option value="76">ロンボク</option>
                <?php }?>
              </select>
            </div>
            <div id="top_step3">
              <div class="serch_title"> <img src="/img/top_search_t04.gif" width="240" height="32" alt="step3 出発候補日を選ぶ" /> </div>
              <select name="y-m" id="calendar-year" style="width: 107px">
                <option value="">出発候補月</option>
                <?php $first_date = strtotime(date('Y-m-01')) ?>
                <?php for($i = 0; $i < 12; $i++): ?>
                <option value="<?php echo date('Y-m', strtotime(sprintf('+%d months', $i), $first_date)) ?>"><?php echo date('Y年m月', strtotime(sprintf('+%d months', $i), $first_date)) ?></option>
                <?php endfor; ?>
              </select>
              <select name="d" id="calendar-day" style="width: 66px">
                <option value="">日</option>
                <?php for($i = 1; $i <= 31; $i++): ?>
                <option value="<?php echo $i ?>"><?php echo $i ?>日</option>
                <?php endfor; ?>
              </select>
            </div>
            <div id="top_step4">
              <div class="serch_title"> <img src="/img/top_search_t05.gif" width="240" height="32" alt="step4 ホテル指定" /> </div>
              <select name="hotel_id" id="hotel_id">
                <option value="">選択してください</option>
              </select>
            </div>
            <div id="top_step5">
              <div class="serch_title"> <img src="/img/top_search_t06.gif" width="240" height="32" alt="step5 航空会社指定" /> </div>
              <select name="airline_id" id="airline">
                <option value="">選択してください</option>
                <option value="1"> 日本航空（ＪＬ）</option>
                <option value="9"> 大韓航空（ＫＥ）</option>
                <option value="12"> ガルーダ・インドネシア航空（ＧＡ）</option>
                <option value="13"> チャイナエアライン（ＣＩ）</option>
                <option value="6"> シンガポール航空（ＳＱ）</option>
                <option value="7"> キャセイパシフィック航空（ＣＸ）</option>
                <option value="11"> アシアナ航空（ＯＺ）</option>
                <option value="15"> フィリピン航空（ＰＲ）</option>
                <option value="10"> マレーシア航空（ＭＨ）</option>
                <option value="8"> タイ国際航空（ＴＧ）</option>
                <option value="282"> エアアジアX(XJ)</option>
                <option value="183"> エアアジアＸ（Ｄ７）</option>
              </select>
            </div>
            <div id="morearea"><a href="javascript:void(0);">もっと詳しく</a>
            </div>            
            <div id="top_search_btn">
              <button type="submit"><img src="/img/top_search_btn.gif" width="149" height="27" alt="検索" /></button>
            </div>
          </div>
          <div id="top_search_f"></div>
        </div>
      </div>
    </div><script>$(document).ready(function(){$("#morearea").click(function(){$("#searchbox").submit();});});</script>
    <!-- ここから検索窓更新 --> <script type="text/javascript"> $(document).ready(function(){ flag = false; $("#open_search").hide(); $("#op_box").hide(); document.getElementById("search_op_detail").style.width = "85px"; $("#search_op_btn").click(function(){ flag = !flag; document.getElementById("search_op_btn").value = flag; $('#open_search').animate({ width:'toggle' }); if(flag == true){ document.getElementById("search_op_detail").style.width = "522px"; $('#op_box').delay(500).animate({ opacity:'toggle' },200); } //開くときの処理 else{ $('#op_box').delay(0).animate({ opacity:'toggle' },0); setTimeout(function(){ $('#search_op_detail').css({ width:'90px' }); },1000); } //閉じる時の処理 return false; }); }); </script>
    <div id="top_search_op">
     <!--  <div id="search_op_detail"> 
      <!-- <div id="open_search"> <div id="op_box"> <p><strong>目的別！お勧めツアー</strong></p> <p>誰といく？</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="1"> カップル</label>　 <label><input name="intention_ids[]" type="checkbox" value="2"> ハネムーン</label>　 <label><input name="intention_ids[]" type="checkbox" value="3"> グループ</label>　 <label><input name="intention_ids[]" type="checkbox" value="4"> ファミリー</label><br /> <label><input name="intention_ids[]" type="checkbox" value="5"> 一人旅</label>　 <label><input name="intention_ids[]" type="checkbox" value="6"> 女子旅</label>　 <label><input name="intention_ids[]" type="checkbox" value="7"> 男子旅</label> <label><input name="intention_ids[]" type="checkbox" value="31"> 学生旅</label><br /> <label><input name="intention_ids[]" type="checkbox" value="33"> はじめてのバリ</label> <label><input name="intention_ids[]" type="checkbox" value="36"> リピーター</label> </div> <p>何をする？</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="8"> スパ</label>　 <label><input name="intention_ids[]" type="checkbox" value="9"> サーフィン</label>　 <label><input name="intention_ids[]" type="checkbox" value="10"> ロングステイ</label>　 <label><input name="intention_ids[]" type="checkbox" value="11"> 占い・ヒーリングツアー</label><br /> <label><input name="intention_ids[]" type="checkbox" value="12"> 美-TABI（心身ともにバリでキレイにな ろう！）</label><br /> <label><input name="intention_ids[]" type="checkbox" value="13"> ダイビング</label>　 <label><input name="intention_ids[]" type="checkbox" value="14"> オールインクルーシブ</label><br /> <label><input name="intention_ids[]" type="checkbox" value="34"> ヨガ</label> <label><input name="intention_ids[]" type="checkbox" value="35"> サンセット</label> <label><input name="intention_ids[]" type="checkbox" value="38"> 動物</label> </div> <p>お得♪２ヶ所以上STAY！！</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="15"> ウブド＆ビーチ（山と海の両方を楽しむ ）</label>　 <label><input name="intention_ids[]" type="checkbox" value="16"> ビーチ＆ビーチ（２つの違うビーチ・ホ テルを楽しむ）</label>　 <label><input name="intention_ids[]" type="checkbox" value="17"> ボロブドゥール（世界遺産）＋バリ島周 遊</label><br /> <label><input name="intention_ids[]" type="checkbox" value="18"> バリ島＋シンガポール周遊</label>　 <label><input name="intention_ids[]" type="checkbox" value="19"> バリ島＋韓国</label>　 <label><input name="intention_ids[]" type="checkbox" value="20"> バリ島＋香港</label> </div> <p>ラグジュアリークラス</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="21"> クラブルーム</label>　 <label><input name="intention_ids[]" type="checkbox" value="22"> ヴィラ</label>　 <label><input name="intention_ids[]" type="checkbox" value="23"> エグゼグティブ（ビジネス）クラス </label> </div> <p>特典付きオリジナルツアー</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="24"> スパ付き</label>　 <label><input name="intention_ids[]" type="checkbox" value="25"> 選べる観光付き</label>　 <label><input name="intention_ids[]" type="checkbox" value="26"> お食事・専用車・空港ラウンジ付き </label> </div> <p>人気セレクション</p> <div class="check_box"> <label><input name="intention_ids[]" type="checkbox" value="27"> 人気ホテルTOP10</label>　 <label><input name="intention_ids[]" type="checkbox" value="28"> 期間限定！SALE！</label><br /> <label><input name="intention_ids[]" type="checkbox" value="29"> 山下マヌー式　バリ旅スタイル</label> <label><input name="intention_ids[]" type="checkbox" value="37"> NEWホテル</label> </div> </div> </div> <div id="search_op_btn"> <div id="search_op_fuki"><img src="/img/top_search_fuki.png" width="97" height="72" alt="目的別！オスス メツアー"></div> </div> </div>-->
    </div>
    <!-- ここまで検索窓更新 --> </div>
</form>

<div id="search_sp">
<h2><img src="/img/toursearch_title.gif" alt="バリツアー検索 bali tour search" width="158" height="36" /></h2>
<form action="http://www.tabikobo.com/tour/tourresult" method="get" id="searchbox_sp" name="searchbox_sp"> 
	<table border="0" cellpadding="0" cellspacing="0" id="tdb_table-01"> 
    <tbody>
        <tr>
            <td colspan="4"> 
<input type="hidden" name="detail_flg" id="detail_flg" value="" />
                <table class="tdb_inbox"> 
                    <tbody>
                        <tr>
                            <td valign="top">
                                <strong>目的地</strong>
                            </td>
                            <td>
                                <!-- load select box distric and city with class ignore for city -->
								<select name="city_id" id="city" class="ignore">
										<option value="">選択してください</option>
                                        <option value="70">バリ島</option>
                                        <option value="83">バリ島（ウブド）</option>
                                        <option value="69">ジョグジャカルタ</option>
                                        <option value="71">ビンタン島</option>
                                        <option value="79">モヨ島</option>
                                        <option value="84">コモド島</option>
                                        <option value="86">ラブアンバジョー[フローレス島]</option>
                                        <option value="74">ロンボック島</option>
                                        <option value="68">ジャカルタ</option>
									</select>
								<select id="district" name="district_id" class="ignore" style="display: none;"><option value="">選択してください</option></select>
								<a  id="switch_link" style="cursor:pointer;position:relative;bottom:5px;color:#000;"> 
									<img src="http://www.tabikobo.com/tour/img/searchbox/btn_plus.gif" width="16" height="16" style="position:relative;vertical-align: middle;" alt="" />									<span id="switch_text"> 2都市以上</span>を検索する場合はコチラをクリック</a>                     
                                <div id="additional_distinations" style="display:none;"> 
                                     <div id="distination2"> 
                                        <!--  load select box city2 --> 
										<select name="city_id2" id="city2" class="ignore">
											<option value="">選択してください</option>
										</select>
										<select id="district2" name="district_id2" style="display: none;"><option value="">選択してください</option></select>
                                    </div>
                                    <div id="distination3"> 
                                        <!--  load select box city3 --> 
										<select name="city_id3" id="city3" class="ignore">
											<option value="">選択してください</option>
										</select>
										<select id="district3" name="district_id3" style="display: none;"><option value="">選択してください</option></select>
                                    </div>
								
									<div id="distination4"> 
										<!--  load select box city4 --> 
										<select name="city_id4" id="city4" class="ignore">
										<option value="">選択してください</option>
									</select>
										<select id="district4" name="district_id4" style="display: none;"><option value="">選択してください</option></select>
									</div>
								
									
									<input class="nb" id="distinationBtn01" type="radio" name="condition_flg" value="1" checked="true"> 
									<label  for="distinationBtn01"> 目的地を全て含む</label> 
									<!--
									-->
									<input class="nb marginL60" id="distinationBtn02" type="radio" name="condition_flg" value="0" style="margin-left:15px;"> 
									<label  for="distinationBtn02"> 目的地のいずれかを含む</label> 
									<!--
									-->
									<input class="nb marginL60" id="distinationBtn03" type="radio" name="condition_flg" value="2" style="margin-left:15px;"> 
									<label  for="distinationBtn03"> 選んだ目的地のみに行く</label> 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
				
                <table class="tdb_inbox"> 
                    <tbody>
                        <tr>
                            <td> 
                                <strong>出発地</strong><br />
                                <!-- load select box departure place -->
								<select name="departure_place_id" id="departure_place_id"> 
								<option value=""> 選択してください</option>
                                    <option value="1" >東京</option>
                                    <option value="2" >成田</option>
                                    <option value="3" >羽田</option>
                                    <option value="5" >関空</option>
                                    <option value="7" >名古屋</option>
                                    <option value="8" >福岡</option>
                                    <option value="9" >那覇</option>
                                    <option value="10" >札幌</option>
                                    <option value="11" >仙台</option>
                                    <option value="16" >松山</option>
                                    <option value="17" >福島</option>
                                    <option value="18" >函館</option>
                                    <option value="21" >長崎</option>
                                    <option value="23" >女満別</option>
                                    <option value="25" >高松</option>
                                    <option value="27" >とかち帯広</option>
                                    <option value="29" >高知</option>
                                    <option value="30" >青森</option>
                                    <option value="31" >小松</option>
                                    <option value="36" >秋田</option>
                                    <option value="40" >旭川</option>
                                    <option value="41" >釧路</option>
                                    <option value="43" >徳島</option>
                                    <option value="45" >山口宇部</option>
                                    <option value="46" >北九州</option>
                                    <option value="48" >三沢</option>
                                    <option value="52" >南紀白浜</option>
                                    <option value="53" >出雲</option>
                                </select>
                            </td>
                            <td> 
                                <strong>出発日</strong><br />
                                <!-- load selectbox  month and day-->
								 <select name="y-m" id="y-m"> 
								<option value="" selected="selected"> ----年--月</option>
                                <option value="2015-09">2015年09月</option>
                                <option value="2015-10">2015年10月</option>
                                <option value="2015-11">2015年11月</option>
                                <option value="2015-12">2015年12月</option>
                                <option value="2016-01">2016年01月</option>
                                <option value="2016-02">2016年02月</option>
                                <option value="2016-03">2016年03月</option>
                                <option value="2016-04">2016年04月</option>
                                <option value="2016-05">2016年05月</option>
                                <option value="2016-06">2016年06月</option>
                                <option value="2016-07">2016年07月</option>
                                <option value="2016-08">2016年08月</option>
								</select>
								<select name="d" id="d"> 
									<option value=""> --日</option>
                                    <option value="1" >1日</option>
                                    <option value="2" >2日</option>
                                    <option value="3" >3日</option>
                                    <option value="4" >4日</option>
                                    <option value="5" >5日</option>
                                    <option value="6" >6日</option>
                                    <option value="7" >7日</option>
                                    <option value="8" >8日</option>
                                    <option value="9" >9日</option>
                                    <option value="10" >10日</option>
                                    <option value="11" >11日</option>
                                    <option value="12" >12日</option>
                                    <option value="13" >13日</option>
                                    <option value="14" >14日</option>
                                    <option value="15" >15日</option>
                                    <option value="16" >16日</option>
                                    <option value="17" >17日</option>
                                    <option value="18" >18日</option>
                                    <option value="19" >19日</option>
                                    <option value="20" >20日</option>
                                    <option value="21" >21日</option>
                                    <option value="22" >22日</option>
                                    <option value="23" >23日</option>
                                    <option value="24" >24日</option>
                                    <option value="25" >25日</option>
                                    <option value="26" >26日</option>
                                    <option value="27" >27日</option>
                                    <option value="28" >28日</option>
                                    <option value="29" >29日</option>
                                    <option value="30" >30日</option>
                                    <option value="31" >31日</option>
                                </select>&nbsp;
							<span style="position: relative;bottom:12px;"> <input type="text" no_placeholder="" style="display:none" id="dp" data-targetYearMonth="y-m" data-targetDay="d" title="" /><img class="ui-datepicker-trigger" src="http://www.tabikobo.com/tour/img/searchbox/ico_cal.gif" alt="..." title="..."></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
			  <table class="tdb_inbox mb_10"> 
                    <tbody>
                        <tr valign="top"> 
                            <td > 
                                <strong>ホテル指定</strong><br>
                                <!-- load hotel selectbox -->
                                <select id="hotel_id" name="hotel_id" class="valid">
                                    <option value="">選択してください</option>
                                    <option value="24850">100 サンセット 2 ホテル</option>
                                    <option value="21193">100 サンセット ブティック ホテル</option>
                                    <option value="24258">101 レギャン</option>
                                    <option value="479">Amanusa</option>
                                    <option value="589">Bali Matahari Hotel</option>
                                    <option value="753">C151 ラグジュアリー スマート ヴィラズ リゾート</option>
                                    <option value="83239">FM7 RESORT HOTEL</option>
                                    <option value="55124">Furama Xclusive Ocean Seminyak</option>
                                    <option value="24583">Gazebo Beach Hotel</option>
                                    <option value="74383">Horison Seminyak</option>
                                    <option value="453">Hyatt Regency Yogyakarta</option>
                                    <option value="25504">IZE スミニャック</option>
                                    <option value="29644">J ブティック ホテル</option>
                                    <option value="29117">SENSE HOTEL SEMINYAK</option>
                                    <option value="722">Sari Sanur Resort</option>
                                    <option value="29241">The 101 Yogyakarta Tugu </option>
                                    <option value="574">The Dusun</option>
                                    <option value="29146">The Sun Hotel & Spa</option>
                                    <option value="817">Ubud Village</option>
                                    <option value="22583">W バリ - スミニャック リトリート & スパ</option>
                                    <option value="24921">アグン ラカ バンガローズ</option>
                                    <option value="714">アストン イン トゥバン</option>
                                    <option value="21109">アストン クタ ホテル アンド レジデンス</option>
                                    <option value="529">アストン バリ ビーチ リゾート & スパ</option>
                                    <option value="581">アディ ダルマ コテージ</option>
                                    <option value="715">アディ ダルマ ホテル</option>
                                    <option value="757">アナンタラ スミニャック バリ</option>
                                    <option value="24548">アナンタラ バリ ウルワツ リゾート ＆ スパ</option>
                                    <option value="647">アニニラカ　リゾート＆スパ</option>
                                    <option value="673">アヒムサ エステート（クタ エリア）</option>
                                    <option value="703">アヒムサ ビーチ</option>
                                    <option value="579">アヒムサ（クタ エリア）</option>
                                    <option value="29081">アベル ヴィラス</option>
                                    <option value="21180">アマラ (スミニャック)</option>
                                    <option value="29711">アマラテラ ヴィラズ バリ ヌサ ドゥア</option>
                                    <option value="494">アマンキラ</option>
                                    <option value="812">アマンダリ</option>
                                    <option value="22863">アメティス ヴィラズ</option>
                                    <option value="515">アヤナ リゾート アンド スパ バリ</option>
                                    <option value="480">アヨディア リゾート バリ</option>
                                    <option value="517">アラム クルクル リゾート（クタ エリア）</option>
                                    <option value="28236">アラヤ ウブド</option>
                                    <option value="83317">アラヤクタ</option>
                                    <option value="814">アリラ ウブド</option>
                                    <option value="608">アリラ マンギス</option>
                                    <option value="17824">アリラ ヴィラズ ウルワツ</option>
                                    <option value="21633">アリラ　ヴィラズ　スーリ</option>
                                    <option value="25446">アルテミス ヴィラ ＆ ホテル</option>
                                    <option value="773">アンサナ リゾート & スパ ビンタン</option>
                                    <option value="29309">イオン バリ ベノア</option>
                                    <option value="488">インナ グランド バリ ビーチ</option>
                                    <option value="492">インナ シンドゥー ビーチ</option>
                                    <option value="531">ウィナ ホリデイ ヴィラ</option>
                                    <option value="83098">ウォーターマーク ホテル & スパ</option>
                                    <option value="24858">ウブド グリーン</option>
                                    <option value="816">ウブド ハンギング ガーデンズ</option>
                                    <option value="866">ウブド ビレッジ リゾート</option>
                                    <option value="818">ウマ ウブド</option>
                                    <option value="686">ウマ サプナ</option>
                                    <option value="83290">ウマウブド</option>
                                    <option value="665">ウリン ヴィラ アンド スパ</option>
                                    <option value="29086">エイトリゾート</option>
                                    <option value="18111">エレファント サファリ パーク ロッジ</option>
                                    <option value="568">オアシス クタ（クタ エリア）</option>
                                    <option value="23156">オアシス ラグーン サヌール</option>
                                    <option value="28966">オッズ ホテル クタ バリ</option>
                                    <option value="700">オール シーズンズ レギャン バリ</option>
                                    <option value="549">カインド ヴィラ ビンタン リゾート（ヌサドゥア）</option>
                                    <option value="820">カキアンバンガロー</option>
                                    <option value="29084">カサブランカ スイート</option>
                                    <option value="821">カジャネ　ムア　ヴィラ</option>
                                    <option value="822">カマンダル リゾート & スパ</option>
                                    <option value="755">カムエラ ヴィラズ スミニャック</option>
                                    <option value="24410">カムエラヴィラズ＆スィートサヌール</option>
                                    <option value="823">カユマニス ウブド プライベート ヴィラ & スパ</option>
                                    <option value="692">カユマニス ジンバラン プライベート エステート & スパ</option>
                                    <option value="634">カユマニス ヌサ ドゥア プライベート ヴィラ & スパ</option>
                                    <option value="18340">カルマ カンダラ</option>
                                    <option value="683">カルマ ジンバラン</option>
                                    <option value="24851">クエスト ホテル トゥバン クタ</option>
                                    <option value="500">クタ シービュー ブティック リゾート & スパ</option>
                                    <option value="533">クタ パラディソ ホテル</option>
                                    <option value="22646">クプ クプ ジンバラン</option>
                                    <option value="877">クプ クプ バロン ヴィラズ & ツリー スパ ホテル</option>
                                    <option value="532">クラブ バリ ミラージュ</option>
                                    <option value="29240">グランド アストン ジョグジャカルタ</option>
                                    <option value="696">グランド イスタナ ラマ</option>
                                    <option value="21777">グランド クタ ホテル アンド レジデンス</option>
                                    <option value="481">グランド ハイアット バリ</option>
                                    <option value="486">グランド ミラージュ リゾート</option>
                                    <option value="29719">グランド ラ ヴィライス ホテル</option>
                                    <option value="557">グリヤ サントリアン</option>
                                    <option value="831">グリーン フィールド ホテル アンド レストラン</option>
                                    <option value="24929">ココナッツ　スイート</option>
                                    <option value="17703">コマネカ アット ビスマ</option>
                                    <option value="22987">コマネカ アット ラサ サヤン</option>
                                    <option value="572">コマネカ タンガユダ（旧コマネカ スィート）（ウブド）</option>
                                    <option value="829">コマネカ　アット　モンキー　フォレスト</option>
                                    <option value="856">コモ シャンバラ エステート</option>
                                    <option value="621">コンラッド バリ</option>
                                    <option value="29318">コートヤード・バイ・マリオット・バリ・スミニャック</option>
                                    <option value="587">コーリ ウブド リゾート スパ＆レストラン（ウブド）</option>
                                    <option value="83233">サダラブティックビーチリゾート</option>
                                    <option value="727">サニャス　スイート</option>
                                    <option value="582">サヌール　パラダイス　プラザ　ホテル</option>
                                    <option value="606">サハデワ リゾート スパ</option>
                                    <option value="29582">サマベ バリスイート＆ヴィラ</option>
                                    <option value="578">サマヤ スミニャック</option>
                                    <option value="736">サリ セガラ リゾート ヴィラズ ＆ スパ</option>
                                    <option value="23017">サレン インダー</option>
                                    <option value="467">サンティカ プレミア ビーチ リゾート バリ</option>
                                    <option value="29243">ザ 101 ジョグジャカルタ トゥグ</option>
                                    <option value="485">ザ ウェスティン リゾート - ヌサ ドゥア バリ</option>
                                    <option value="738">ザ カヤナ ヴィラ</option>
                                    <option value="675">ザ ガンサ プライベートヴィラ</option>
                                    <option value="21803">ザ サマヤ ウブド</option>
                                    <option value="672">ザ サンディ パラ</option>
                                    <option value="470">ザ ジャヤカルタ バリ</option>
                                    <option value="29082">ザ ジュノ ヴィラ</option>
                                    <option value="25444">ザ スミニャック ビーチ リゾート & スパ</option>
                                    <option value="684">ザ バリ カーマ ビーチ リゾート & スパ</option>
                                    <option value="563">ザ バレ</option>
                                    <option value="847">ザ パヨガン ヴィラ リゾート & スパ</option>
                                    <option value="21258">ザ ヘイブン スミニャック</option>
                                    <option value="24913">ザ ムリア バリ</option>
                                    <option value="22782">ザ ムンジャンガン</option>
                                    <option value="25061">ザ ラニ ホテル & スパ</option>
                                    <option value="502">ザ レギャン、バリ</option>
                                    <option value="24586">ザ ロイヤル サントリアン</option>
                                    <option value="83291">ザ ロカ ウブド リゾート</option>
                                    <option value="564">ザ ヴィラス バリ ホテル アンド スパ</option>
                                    <option value="701">ザ　クンジャ</option>
                                    <option value="29402">ザ　チェディサカラ バリ</option>
                                    <option value="29523">ザ・サンタイ</option>
                                    <option value="83280">ザ・チェディクラブ・アット・タナガジャ</option>
                                    <option value="29341">ザ・ライト・エクスクルーシブ・ヴィラ＆スパ/The Light Exclusive Villas & Spa</option>
                                    <option value="29565">ザ・リッツ・カールトン・バリ</option>
                                    <option value="24584">ザ・ワン・ブティックホテル</option>
                                    <option value="28670">シェラトン バリ クタ リゾート</option>
                                    <option value="637">ジ アリッツ</option>
                                    <option value="476">ジ インターコンチネンタル バリ リゾート</option>
                                    <option value="678">ジ エリシアン ブティック ヴィラ ホテル</option>
                                    <option value="542">ジ オベロイ、バリ</option>
                                    <option value="29276">スイスベリン スミニャック</option>
                                    <option value="29271">スイスベリン レギャン</option>
                                    <option value="29288">スイスベル リゾート ワトゥ ジンバー</option>
                                    <option value="25082">ストーン ホテル レギャン バリ オートグラフ コレクション</option>
                                    <option value="83240">スピアヴィラ</option>
                                    <option value="21188">スリ ファラ リゾート アンド ヴィラ</option>
                                    <option value="765">セント レジス バリ リゾート</option>
                                    <option value="29581">ソフィテル バリ ヌサドゥア ビーチ リゾート</option>
                                    <option value="29704">ソルネナチヤ　ホテル</option>
                                    <option value="628">タムカミ ホテル</option>
                                    <option value="544">タンジュン　サリ</option>
                                    <option value="29238">ダブルシックス・ラグジュアリーホテル・スミニャック</option>
                                    <option value="657">チェンダナリゾート＆スパ</option>
                                    <option value="495">チャンディ ビーチ コテージ</option>
                                    <option value="25190">チャンプルン サリ ホテル</option>
                                    <option value="504">チャンプルン マス ホテル レギャン</option>
                                    <option value="869">デ ウブド ヴィラズ</option>
                                    <option value="24938">ディアナヴィラズ</option>
                                    <option value="747">ディシニ ラグジュアリー スパ ヴィラズ（スミニャック）</option>
                                    <option value="571">ディスカバリー カルティカ プラザ ホテル</option>
                                    <option value="505">ニッコー バリ リゾート アンド スパ</option>
                                    <option value="772">ニルワナ リゾート ホテル ビンタン</option>
                                    <option value="482">ヌサ デゥア ビーチ ホテル アンド スパ</option>
                                    <option value="21896">ヌサ ドゥア リトリート</option>
                                    <option value="506">ノボテル バリ べノア タンジュン べノア</option>
                                    <option value="734">ノボテル バリ ヌサドゥア、ホテル & レジデンシズ</option>
                                    <option value="29569">ハラッズ　ホテル　スパ　&　コンベンション</option>
                                    <option value="632">ハリス　リゾート　クタ　バリ</option>
                                    <option value="523">ハードロック ホテル バリ</option>
                                    <option value="28775">ハーパー クタ</option>
                                    <option value="29080">ハーモニー バリ</option>
                                    <option value="584">バクン サリ</option>
                                    <option value="53894">バクン ビーチ リゾート</option>
                                    <option value="598">バグース ジャティ ヘルス ＆ ウェル ビーイング リトリート</option>
                                    <option value="763">ババナ プライベート ヴィラズ</option>
                                    <option value="654">バリ アイランド ヴィラ</option>
                                    <option value="489">バリ ハイアット</option>
                                    <option value="525">バリ バンガロー (クタ)</option>
                                    <option value="518">バリ マンディラ　ビーチ＆リゾート</option>
                                    <option value="477">バリ ラニ ホテル</option>
                                    <option value="21558">バンヤン ツリー ウンガサン</option>
                                    <option value="771">バンヤン ツリー ビンタン</option>
                                    <option value="83322">パトラジャサ</option>
                                    <option value="465">パドマ リゾート バリ アット レギャン</option>
                                    <option value="83299">パドマ　リゾート　ウブド</option>
                                    <option value="28654">パビリオンズ</option>
                                    <option value="626">パリガタ リゾート & スパ</option>
                                    <option value="29515">パンパシフィック ニルワナバリ リゾート/ PAN PACIFIC NIRWANA BALI RESORT</option>
                                    <option value="22876">ビンタン フローレス ホテル</option>
                                    <option value="774">ビンタン ラグーン リゾート</option>
                                    <option value="651">ビーヴィラ プラス スパ（クタ エリア）</option>
                                    <option value="850">ピタ マハ</option>
                                    <option value="28607">フェアモント サヌール ビーチ</option>
                                    <option value="23707">フェイブ ホテル スミニャック</option>
                                    <option value="23715">フェイブ ホテル デンパサール</option>
                                    <option value="24670">フェイブホテル ウマラス</option>
                                    <option value="25128">フェイブホテル クタ スクエア</option>
                                    <option value="25291">フェイブホテル バイパス クタ</option>
                                    <option value="29409">フェイブホテル　サンセット　スミニャック</option>
                                    <option value="526">フォーシーズンズ バリ アット サヤン</option>
                                    <option value="496">フォーシーズンズ バリ アット ジンバラン ベイ</option>
                                    <option value="17704">フラマエクスクルーシブ オーシャン ビーチ スミニャック バリ(旧:アウトリガー)</option>
                                    <option value="29701">フラミンゴ　ホテル</option>
                                    <option value="29199">フランジパニ ヴィラ</option>
                                    <option value="749">ブア バリ ヴィラズ(クタ)</option>
                                    <option value="721">ブルガリ ホテルズ & リゾーツ</option>
                                    <option value="625">ブルー ポイント ベイ ヴィラズ アンド スパ</option>
                                    <option value="852">プリ ウランダリ ア ブティック リゾート アンド スパ</option>
                                    <option value="585">プリ サントリアン</option>
                                    <option value="24582">プリ バグース チャンディダサ ヴィラス</option>
                                    <option value="24643">プリスニアリゾート</option>
                                    <option value="545">プルマン バリ レギャン ニルワナ</option>
                                    <option value="22784">プーリー バグース ロビナ</option>
                                    <option value="23361">ベスト ウエスタン クタ シービュー</option>
                                    <option value="739">ペッパーズ セントーサ スミニャック（旧セントーサ プライベート ヴィラス＆スパ）</option>
                                    <option value="573">ペニダ ビュー</option>
                                    <option value="857">ペルティウィ リゾート＆スパ</option>
                                    <option value="490">ホテル サヌール ビーチ</option>
                                    <option value="534">ホテル チャンプアン スパ</option>
                                    <option value="607">ホテル トゥグ バリ</option>
                                    <option value="29568">ホテル　コムネバリ</option>
                                    <option value="83241">ホテルネオ+クタ、レギャン</option>
                                    <option value="23155">マカ ヴィラズ & スパ</option>
                                    <option value="548">マタハリ ビーチ リゾート & スパ</option>
                                    <option value="458">マノハラ</option>
                                    <option value="24600">マハギリ</option>
                                    <option value="547">マヤ ウブド リゾート（ウブド）</option>
                                    <option value="705">マヤ サヤン ヴィラ</option>
                                    <option value="29710">マヤサヌール</option>
                                    <option value="770">マヤン サリ ビーチ リゾート</option>
                                    <option value="759">マラ リバー サファリ ロッジ アット バリ サファリ & マリーン パーク</option>
                                    <option value="22783">ミンピ リゾート ムンジャンガン</option>
                                    <option value="25490">ムリア リゾート</option>
                                    <option value="28673">ムリア ヴィラス</option>
                                    <option value="83232">メドウィ ビーチ コテージ</option>
                                    <option value="522">メリア バリ ヴィラス&スパ</option>
                                    <option value="566">メルキュール クタ バリ</option>
                                    <option value="24999">メルキュール バリ ヌサ ドゥア</option>
                                    <option value="29554">メルキュール　バリ　レギャン</option>
                                    <option value="22586">ラ ヴィライス エクスクルーシブ ヴィラ ＆ スパ (スミニャック)</option>
                                    <option value="487">ラグーナ，ラグジュアリーコレクションリゾート＆スパ，ヌサドゥア，バリ</option>
                                    <option value="617">ラマ ビーチ リゾート アンド ヴィラズ</option>
                                    <option value="466">ラマダ ビンタン バリ リゾート</option>
                                    <option value="22785">ラマダ リゾート カマキラ</option>
                                    <option value="24598">ラマパラ リゾート</option>
                                    <option value="588">ラマヤナリゾート＆スパ（クタ エリア）</option>
                                    <option value="475">リサタ バリ リゾート ＆ スパ</option>
                                    <option value="28477">リンバ ジンバラン バリ</option>
                                    <option value="748">ル ジャルダン ブティック ヴィラ</option>
                                    <option value="28317">ル メリディアン バリ ジンバラン</option>
                                    <option value="478">レギャン ビーチ ホテル</option>
                                    <option value="516">レギャン ヴィレッジ ホテル</option>
                                    <option value="860">ロイヤル ピタ マハ</option>
                                    <option value="24579">ロイヤル・カムエラ・ウブド</option>
                                    <option value="650">ロカ レギャン</option>
                                    <option value="603">ロサニ ホテル</option>
                                    <option value="24082">ローヤル エイティーン リゾート ＆ スパ (クタ)</option>
                                    <option value="527">ワパ デ ウメ リゾート</option>
                                    <option value="24711">ワン・イレブン</option>
                                    <option value="535">ワーウィック イバ ラクジュアリー ヴィラズ & スパ（ウブド）</option>
                                    <option value="872">ヴァイスロイ バリ</option>
                                    <option value="28381">ヴァサンティ スミニャック リゾート</option>
                                    <option value="29702">ヴァージニア　ホテル</option>
                                    <option value="681">ヴィラ アイル バリ ブティック リゾート</option>
                                    <option value="29083">ヴィラ オリガミ</option>
                                    <option value="24090">ヴィラ カユ ラジャ (スミニャック)</option>
                                    <option value="730">ヴィラ ジェラミ（スミニャック）旧ヴィラ ジェラミ ラグジュアリー ヴィラ&スパ</option>
                                    <option value="600">ヴィラ デ ダウン</option>
                                    <option value="760">ヴィラ マハパラ</option>
                                    <option value="28663">ヴィラ　カシス</option>
                                </select><br>
<!-- load checkbox hotel and lebel hotel -->
                                <input type="checkbox" id="only_hotel_flg" name="only_hotel_flg" value="1" /><label for="only_hotel_flg"> このホテルのみに泊まる</label> 
								
                            </td>
                        </tr>
                    </tbody>
                </table>
			</td></tr>
        </tbody>
	</table>
	<!-- theme -->
    <div id="search_more"><a href="http://www.tabikobo.com/tour/tourresult?media=plumeriabali&region_id=1&country_id=3&departure_place_id=&city_id=&district_id=&y-m=&d=&hotel_id=&airline_id=">もっと詳しく</a></div>
	<div id="btn_search"><button type="submit"><img src="/img/top_search_btn_sp.gif" width="149" height="27" alt="検索" /></button></div>

<input type="hidden" name="media" id="media" value="plumeriabali" />
<input type="hidden" name="code" id="code" value="" />
<input type="hidden" name="page" id="page" value="1" />
</form>
</div>

<div id="container">

  <div id="info">
    <ul id="info_h">
      <li class="select">キャンペーン・<br class="sp">ニュース</li>
      <li>ホテル・オプショナル・<br class="sp">スパ最新情報</li>
    </ul>
    <div id="info_detail">
      <ul>
      	<?php $myposts = get_posts('category_name=bali-news&posts_per_page=10'); ?>
	    <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><strong><?php the_time('m/d'); ?></strong><?php $days = 7; $today = date_i18n('U'); $entry = get_the_time('U'); $kiji = date('U',($today - $entry)) / 86400 ; if( $days > $kiji ){ echo '<span>New!</span>';} ?><?php if(get_post_meta($post->ID,'news_link',true)): ?><a href="<?php echo post_custom('news_link'); ?>" target="_blank"><?php endif; ?><?php the_title(); ?><?php if(get_post_meta($post->ID,'news_link',true)): ?></a><?php endif; ?><?php if(get_post_meta($post->ID,'news_pdf_size',true)): ?><small>（PDFデータ　<?php echo post_custom('news_pdf_size'); ?>）※<a href="http://get.adobe.com/jp/reader/">Acrobat Reader</a>が必要となります</small><?php endif; ?></li>
        <?php endforeach; ?>
      </ul>
      <ul class="hide">
      	<?php $myposts = get_posts('category_name=hotel-news&posts_per_page=10'); ?>
	    <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><strong><?php the_time('m/d'); ?></strong><?php $days = 7; $today = date_i18n('U'); $entry = get_the_time('U'); $kiji = date('U',($today - $entry)) / 86400 ; if( $days > $kiji ){ echo '<span>New!</span>';} ?><?php if(get_post_meta($post->ID,'news_link',true)): ?><a href="<?php echo post_custom('news_link'); ?>" target="_blank"><?php endif; ?><?php the_title(); ?><?php if(get_post_meta($post->ID,'news_link',true)): ?></a><?php endif; ?><?php if(get_post_meta($post->ID,'news_pdf_size',true)): ?><small>（PDFデータ　<?php echo post_custom('news_pdf_size'); ?>）※<a href="http://get.adobe.com/jp/reader/">Acrobat Reader</a>が必要となります</small><?php endif; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- id=info_detail -->
  </div>
    <!-- id=info -->
    
  <div id="main_sp">
  	<ul id="slide_sp">
      <li><a href="//www.tabikobo.com/special/bali/club_room/" target="_blank"><img src="/img/large/bnr_club.jpg" width="1920" height="440" alt="クラブルーム" /></a></li>
      <li><a href="//www.tabikobo.com/special/bali/suite_room/" target="_blank"><img src="/img/large/bnr_suite.jpg" width="1920" height="440" alt="スイートルーム" /></a></li>
      <li><a href="http://www.tabikobo.com/special/bali/family/" target="_blank"><img src="/img/large/family.jpg" width="1920" height="440" alt="バリ島ファミリー特集" /></a></li>
      <li><a href="http://www.tabikobo.com/special/bali/st_regis/" target="_blank"><img src="/img/large/bnr_stregis_top.jpg" width="1920" height="440" alt="ザ セントレジス バリ リゾート" /></a></li>
      <li><a href="http://www.tabikobo.com/bali/bagusjati/" target="_blank"> <img src="/img/large/bagusjati_big.jpg" width="1920" height="440" alt="バリ島最大のウェルネスリゾート「バグースジャティ」" /></a></li>
    </ul>
    <div id="photoNav"><ul></ul></div>
  </div>
  <script type="text/javascript" src="/js/slider-sp.js"></script>
  <script>
  $(document).ready(function(){
	$('#slide_sp li').each(function(){
		var ml = $(this).width();
		ml = ml/2;
		$(this).css('margin-left','-'+ml+'px');
	});
  });

  $(window).resize(function(){
	$('#slide_sp li').each(function(){
		var ml = $(this).width();
		ml = ml/2;
		$(this).css('margin-left','-'+ml+'px');
	});
  });
  </script>
  
  
  <div id="contents">
    <div id="detaile_h"></div>
  
  <div id="tour">
    <h2><img src="/img/tour_title.gif" alt="コンシェルジュ お勧めツアー recommended tour" width="227" height="36" /></h2>
    <ul>
      <?php $query = array('tag'=>'recommended',
	    'meta_key'=>'hotel_id',
		'meta_value'=>null,
		'meta_compare'=>'!=',
		'orderby'=>'rand',
		'posts_per_page'=>3) ?>
	  <?php $myposts = get_posts($query); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li data-tour-search="hotel_id=<?php echo post_custom('hotel_id'); ?>&order=ttl_price_asc">
        <div class="img"><a href="<?php the_permalink(); ?>" target="_top">
		<?php $title= get_the_title(); the_post_thumbnail(array( 226,226 ),array( 'alt' =>$title, 'title' => $title)); ?></a></div>
        <h3><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></h3>
        <p><?php echo post_custom('recommended_copy'); ?></p>
        <div class="price" data-tour>
          <span data-tour-info="duration">X</span>日間<br>
          <dd><span data-tour-info="price_min">X,XXX,XXX</span>円〜</dd>
        </div>
        <div class="more"><a href="//www.tabikobo.com/tour/tourresult?media=plumeriabali&region_id=1&country_id=3&hotel_id=<?php echo post_custom('hotel_id'); ?>">ツアー詳細へ</a></div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
        
  <div id="spacial">
    <h2><img src="/img/info_title.gif" alt="おすすめ特集 recommended special edition" width="267" height="37" /></h2>
    <a href="http://www.tabikobo.com/special/bali/kurakura/"target="_blank"><img src="img/kurakura_224x48.jpg" alt="アクティブ派必見！クラクラバスに揺られるバス旅行" width="224" height="48" /></a>
    <a href="//www.tabikobo.com/bali/world_heritage/"target="_blank"><img src="img/heritage_bali.jpg" alt="インドネシア 世界遺産特集" width="224" height="48" /></a>
    <a href="http://www.plbali.com/villa/sadara_boutique/"><img src="img/sadara_224x48.jpg" alt="待望のリニューアルオープン！サダラブティックリゾート" width="224" height="48" /></a> 
  </div>
        
  <table border="0" cellspacing="0" cellpadding="0" id="areamap">
    <tr>
      <th>
        <h2><img src="/img/areamap_title.gif" alt="エリアから選ぶ、ヴィラ・ホテル＆スパ。" width="232" height="63" /></h2>
        <p>何度訪れてもまた行きたい、と思わせてくれるバリ島には、エリアごとに異なる魅力を持つリゾートが存在します。<br>
        お気に入りのリゾートで至極の時をお過ごしください。</p>
      </th>
      <td>
      	<h4>地図から都市の情報・ツアーを探す</h4>
      	<div id="map">
          <div id="mBtn1"><a href="/kuta-legian/">クタ／レギャン</a></div>
          <div id="mBtn2"><a href="/seminyak-kerobokan/">スミニャック／クロボカン</a></div>
          <div id="mBtn3"><a href="/nusadua/">ヌサドゥア／ベノア</a></div>
          <div id="mBtn4"><a href="/jimbaran-uluwatu/">ジンバラン</a></div>
          <div id="mBtn5"><a href="/ubud/">ウブド</a></div>
          <div id="mBtn6"><a href="/sanur/">サヌール</a></div>
          <div id="mBtn7"><a href="/canggu/">チャングー</a></div>
          <div id="mBtn8"><a href="/candidasa/">チャンディダサ</a></div>
          <div id="mBtn9"><a href="/tanahlot/">タナロット</a></div>
          <div id="mBtn10"><a href="/menjangan/">ムンジャンガン</a></div>
          <div id="mBtn11"><a href="/lovina/">ロビナ</a></div>
          <div id="mBtn12"><a href="/yogyakarta/">ジョグジャカルタ</a></div>
          <div id="mBtn13"><a href="/lombok/">ロンボク島</a></div>
          <div id="mBtn14"><a href="/lembongan/">レンボンガン島</a></div>
        </div>
      </td>
    </tr>
  </table>
    <div id="detail">
      <!--<div class="bnr_hotel">
        <p class="ttl">おすすめホテル特集</p>
        <ul class="clearfix">
          <a href="http://www.tabikobo.com/bali/mulia/mulia_top/" target="_blank"><img src="../img/bnr_hotel_1.jpg" width="215"></a> <a href="http://www.tabikobo.com/bali/alila/" target="_blank"><img src="../img/bnr_hotel_2alila.jpg" width="215"></a> <a href="http://www.tabikobo.com/bali/fourseasons/jimbaran/" target="_blank"><img src="../img/bnr_hotel03fs.jpg" width="215" class="last"></a>
        </ul>
        <ul class="clearfix">
          <a href="http://www.tabikobo.com/bali/bvlgari/"target="_blank"> <img src="img/bvlgari_osusume.jpg" alt="ブルガリホテルズリゾーツ＆バリ" width="215"></a> <a href="http://www.tabikobo.com/bali/conrad_bali/"target="_blank"> <img src="img/conrad_osusume.jpg" alt="バリ島　コンラッド" width="215"></a> <a href="http://www.tabikobo.com/bali/bagusjati/" target="_blank"> <img src="img/bagusjati_osusume.jpg" alt="バグースジャティ" width="215" class="last"></a>
        </ul>
        <ul class="clearfix">
          <a href="http://www.tabikobo.com/special/bali/samaya/seminyak/"> <img src="img/samaya_osusume.jpg" alt="ザ サマヤ バリ" width="215"></a>
          <a href="http://www.tabikobo.com/special/bali/one_eleven/"> <img src="img/osusume_one_eleven.jpg" alt="バリ島　ワンイレブン" width="215"></a><a href="http://www.plbali.com/special/viceroy_bali/"> <img src="img/viceroy_osusume.jpg" alt="バリ島　ヴァイスロイ・バリ" width="215" class="last"></a>
        </ul>
        <br clear="all">
      </div>-->
      <div class="box">
        <div id="hotel">
          <?php 
			$areaData = array(
				array(
					'area_link' => '/kuta-legian/',
					'class' => 'kuta',
					'image_src' => '/img/villa_title01.gif',
					'image_alt' => 'クタ レギャン',
					'category_name' => 'list-kuta'
				),
				array(
					'area_link' => '/seminyak-kerobokan/',
					'class' => 'semi',
					'image_src' => '/img/villa_title02.gif',
					'image_alt' => 'スミニャック クロボカン',
					'category_name' => 'list-semi'
				),
				array(
					'area_link' => '/nusadua/',
					'class' => 'nusa',
					'image_src' => '/img/villa_title03.gif',
					'image_alt' => 'ヌサドゥア',
					'category_name' => 'list-nusa'
				),
				array(
					'area_link' => '/jimbaran-uluwatu/',
					'class' => 'jim',
					'image_src' => '/img/villa_title04.gif',
					'image_alt' => 'ジンバラン ウルワツ',
					'category_name' => 'list-jim'
				),
				array(
					'area_link' => '/ubud/',
					'class' => 'ubdo',
					'image_src' => '/img/villa_title05.gif',
					'image_alt' => 'ウブド',
					'category_name' => 'list-ubud'
				),
				array(
					'area_link' => '/sanur/',
					'class' => 'sanu',
					'image_src' => '/img/villa_title06.gif',
					'image_alt' => 'サヌール',
					'category_name' => 'list-sanur'
				),
				array(
					'area_link' => '/canggu/',
					'class' => 'canggu',
					'image_src' => '/img/villa_title07.gif',
					'image_alt' => 'チャングー',
					'category_name' => 'list-canggu'
				),
				array(
					'area_link' => '/candidasa/',
					'class' => 'candidasa',
					'image_src' => '/img/villa_title08.gif',
					'image_alt' => 'チャンディダサ（マンギス）',
					'category_name' => 'list-candidasa'
				),
				array(
					'area_link' => '/tanahlot/',
					'class' => 'tanahlot',
					'image_src' => '/img/villa_title09.gif',
					'image_alt' => 'タナロット（タバナン）',
					'category_name' => 'list-tanahlot'
				),
				array(
					'area_link' => '/menjangan/',
					'class' => 'menjangan',
					'image_src' => '/img/villa_title10.gif',
					'image_alt' => 'ムンジャンガン',
					'category_name' => 'list-menjangan'
				),
				array(
					'area_link' => '/lovina/',
					'class' => 'lovina',
					'image_src' => '/img/villa_title11.gif',
					'image_alt' => 'ロビナ',
					'category_name' => 'list-lovina'
				),
				array(
					'area_link' => '/yogyakarta/',
					'class' => 'yogyakarta',
					'image_src' => '/img/villa_title12.gif',
					'image_alt' => 'ジョグジャカルタ',
					'category_name' => 'list-yogyakarta'
				),
				array(
					'area_link' => '/lombok/',
					'class' => 'lombok',
					'image_src' => '/img/villa_title13.gif',
					'image_alt' => 'ロンボク島',
					'category_name' => 'list-lombok'
				),
				array(
					'area_link' => '/lembongan/',
					'class' => 'lembongan',
					'image_src' => '/img/villa_title14.gif',
					'image_alt' => 'レンボンガン島',
					'category_name' => 'list-lembongan'
				)
			);
		  ?>
          
		 <?php foreach($areaData as $key => $area):?>
			<?php if ($key%2 == 0) : ?> 
			  <div class="column">
			<?php endif; ?>  
			<?php
				$category_link = get_category_by_slug( $area['category_name'] );
				$category_link = get_category_link( $category_link->term_id );
			?>
          <div class="<?php echo $area['class']; ?>">
            <div class="h4_title">
              <h4><a href="<?php echo $area['area_link']; ?>"><img src="<?php echo $area['image_src']; ?>" width="330" height="20" alt="<?php echo $area['image_alt']; ?>"></a></h4>
            </div>
            <div class="more"><a href="<?php echo $category_link;?>">ホテル一覧を見る（全
            <?php $site_count = query_posts ('post_type=hotels&category_name='.$area['category_name'].'&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
			  
            <div class="box">
            <?php 
				$query = array(
					'post_type' => 'hotels',
					'category_name' => $area['category_name'],
					'meta_query'    => array(
						'pick_up_top_key' => array(
							'key'   => 'pick_up_top',
							'value' => 'a:1:{i:0;s:11:"pick_up_top";}'
						)
					),
					'orderby' => array(
						'post_modified' => 'DESC'
					),
					'posts_per_page' => 2
				);
				$myposts = get_posts($query);
			?>
            
			<?php foreach($myposts as $post): ?>
                <?php setup_postdata($post); ?>
				<?php $image_attributes =  wp_get_attachment_image_src(get_post_meta($post->ID, 'thumbnail', true), 'full') ?>
				<?php $thumbnail = $image_attributes ? $image_attributes[0] : ''; ?>
              <div class="left">
              <span data-tour-search="hotel_id=<?php echo post_custom('hotel_id'); ?>&order=ttl_price_asc">
              <div class="left" data-tour>
              	<div class="thumb"><a href="<?php the_permalink(); ?>" target="_top">
						 <?php $title= get_the_title(); ?>
						<img src="<?php echo $thumbnail ?>" title="<?php echo $title;?>" alt="<?php echo $title;?>" width="157" height="85">
					</a>
                </div>
                <div class="name"><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></div>
				<div data-tour-search="hotel_id=<?php echo post_custom('hotel_id'); ?>">
					<div data-tour><ul><li><dt>ツアー代金</dt><strong><span data-tour-info="price_min"></span>円～</strong></ul></div>
				</div>
                <!--<p class="price">
                  <dt>ツアー代金</dt><strong><span data-tour-info="price_min">X,XXX,XXX</span>円～</strong>
                </p>-->
                <?php if(get_post_meta($post->ID,'baligirl_rank',true)): ?>
					<?php if(get_post_meta($post->ID,'baligirl_rank',true) == '1'): ?>
						<p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星 "></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '2'): ?>
						<p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星 "></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '3'): ?>
						<p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星 "></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '4'): ?>
						<p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星 "></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '5'): ?>
						<p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星 "></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '2-3'): ?>
						<p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2～ 3つ星"></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '2-4'): ?>
						<p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2 ～4つ星"></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '2-5'): ?>
						<p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2 ～5つ星"></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '3-4'): ?>
						<p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3 ～4つ星"></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '3-5'): ?>
						<p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3 ～5つ星"></p>
					<?php elseif(get_post_meta($post->ID,'baligirl_rank',true) == '4-5'): ?>
						<p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4 ～5つ星"></p>
					<?php endif; ?>
                <?php endif; ?>
                <div class="link">
                  <div class="tourBtn">
                    <a href="//www.tabikobo.com/tour/tourresult?media=plumeriabali&region_id=1&country_id=3&hotel_id=<?php echo post_custom('hotel_id'); ?>">
                      ツアー詳細へ
                    </a>
                  </div>
                  <div class="hotelLink"><a href="<?php the_permalink(); ?>">ホテル詳細はこちら</a></div>
                </div>
              </div>
             </span>
            </div>
            <?php endforeach; ?>
            </div><!-- /box -->
          </div>
			<?php if ($key%2 != 0) : ?> 
			  </div>
			<?php endif; ?> 		  
          <?php endforeach; ?>
		
          <?php /*?><div class="column">
          <div class="other">
            <div class="h4_title">
              <h4><img src="/img/villa_title15.gif" width="330" height="20" alt="その他"></h4>
            </div>
            <div class="more"><a href="/villa/list-other/">ホテル一覧を見る（全
            <?php $site_count = query_posts ('category_name=villa-other&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-other&tag=top-pickup&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left">
              	<div class="thumb"><a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?></a></div>
                <div class="name"><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></div>
                <p class="price"><span>ツアー代金</span><strong>138,000円～</strong></p>
                <?php if(get_post_meta($post->ID,'tour_code',true)): ?>
                <p class="price">コード：<?php echo post_custom('tour_code'); ?></p>
                <?php endif; ?>
                <?php if(get_post_meta($post->ID,'hotel_stars',true)): ?>
                <?php if(get_post_meta($post->ID,'hotel_stars',true) == '1'): ?>
                <p class="rank"><img src="/img/osusume_rank1_s.jpg" width="12" height="12" alt="1つ星 "></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2'): ?>
                <p class="rank"><img src="/img/osusume_rank2_s.jpg" width="27" height="12" alt="2つ星 "></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3'): ?>
                <p class="rank"><img src="/img/osusume_rank3_s.jpg" width="42" height="12" alt="3つ星 "></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4'): ?>
                <p class="rank"><img src="/img/osusume_rank4_s.jpg" width="57" height="12" alt="4つ星 "></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '5'): ?>
                <p class="rank"><img src="/img/osusume_rank5_s.jpg" width="72" height="12" alt="5つ星 "></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-3'): ?>
                <p class="rank"><img src="/img/osusume_rank2-3_s.jpg" width="89" height="12" alt="2～ 3つ星"></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-4'): ?>
                <p class="rank"><img src="/img/osusume_rank2-4_s.jpg" width="104" height="12" alt="2 ～4つ星"></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '2-5'): ?>
                <p class="rank"><img src="/img/osusume_rank2-5_s.jpg" width="119" height="12" alt="2 ～5つ星"></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-4'): ?>
                <p class="rank"><img src="/img/osusume_rank3-4_s.jpg" width="119" height="12" alt="3 ～4つ星"></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '3-5'): ?>
                <p class="rank"><img src="/img/osusume_rank3-5_s.jpg" width="133" height="12" alt="3 ～5つ星"></p>
                <?php elseif(get_post_meta($post->ID,'hotel_stars',true) == '4-5'): ?>
                <p class="rank"><img src="/img/osusume_rank4-5_s.jpg" width="148" height="12" alt="4 ～5つ星"></p>
                <?php endif; ?>
                <?php endif; ?>
                <div class="link">
                    <div class="tourBtn"><a href="">ツアー詳細へ</a></div>
                    <div class="hotelLink"><a href="<?php the_permalink(); ?>">ホテル詳細はこちら</a></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          </div><?php */?>
        </div>
        <!-- id=hotel -->
        <?php /*?><div id="spa">
          <div class="h3_title">
            <h3>至福の癒し スパ SPA</h3>
          </div>
          <div class="read">
            <p>花びらいっぱいのバスタブも、<br />
              貸し切りヴィラも、バリ島だから、プチプライス。</p>
            <strong>エリアで選ぶ、至福のバリ島スパ。</strong></div>
          <div class="ubdo">
            <div class="h4_title">
              <h4><a href="/ubud/"><img src="/img/villa_title01.gif" width="320" height="21" alt="1ウブド UBUD"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img01.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-ubud&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-ubud&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
          <div class="semi">
            <div class="h4_title">
              <h4><a href="/seminyak-kerobokan/"><img src="/img/villa_title02.gif" width="320" height="21" alt="2スミニャック／クロボカン SEMINYAK/KEROBOKAN"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img02.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-seminyak- kerobokan&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-seminyak-kerobokan&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
          <div class="kuta">
            <div class="h4_title">
              <h4><a href="/kuta-legian/"><img src="/img/villa_title03.gif" width="320" height="21" alt="3クタ／レギャン KUTA/LEGIAN"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img03.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-kuta-legian&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-kuta-legian&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
          <div class="jim">
            <div class="h4_title">
              <h4><a href="/jimbaran-uluwatu/"><img src="/img/villa_title04.gif" width="320" height="21" alt="4ジンバラン／ウルワツ JIMBARAN/ULUWATU"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img04.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-jimbaran- uluwatu&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-jimbaran-uluwatu&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
          <div class="nusa">
            <div class="h4_title">
              <h4><a href="/nusadua/"><img src="/img/villa_title05.gif" width="320" height="21" alt="5ヌ サドゥア NUSA DUA"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"><img src="/img/spa_img05.jpg" width="320" height="80" /></div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-nusadua&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-nusadua&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
          <div class="sanu">
            <div class="h4_title">
              <h4>&nbsp;</h4>
            </div>
            <div class="box">
              <div class="spa_img"><img src="/img/spa_img06.jpg" width="320" height="80" /><a href="/sanur/"><img src="/img/villa_title06.gif" width="320" height="21" alt="6サヌ ール SANUR"></a></div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-sanur&posts_per_page=10'); ?>
                  <?php foreach($myposts as $post): ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php the_permalink(); ?>" target="_top">
                    <?php the_title(); ?>
                    </a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="more"><a href="/spa/">もっと見る（全
            <?php $site_count = query_posts ('category_name=spa-sanur&posts_per_page=-1'); $site_cnt=0; foreach($site_count as $post): $site_cnt++; ?>
            <?php endforeach;wp_reset_query(); ?>
            <?php echo $site_cnt ?> 件）</a></div>
        </div><?php */?>
        <!-- id=spa --> </div>
    </div>
    <!-- id=detaile -->
    <div id="detaile_f"></div>
  </div>
  <?php get_sidebar(); ?>
</div>
<script src="//api.tabikobo.com/myapi/js/tourprice-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript">
  var deferred = tourprice.searchAndLoad({}, {data : {debug : false}});
</script>
<!-- #container -->
<?php get_footer(); ?>

	
