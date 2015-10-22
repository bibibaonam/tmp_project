<?php



/**



 * Template Name: TopSearch



 * The main template file.



 *



 * This is the most generic template file in a WordPress theme



 * and one of the two required files for a theme (the other being style.css).



 * It is used to display a page when nothing more specific matches a query.



 * E.g., it puts together the home page when no home.php file exists.



 * Learn more: http://codex.wordpress.org/Template_Hierarchy



 *



 * @package WordPress



 * @subpackage Twenty_Eleven



 */







include( TEMPLATEPATH . '/header-search.php' ); ?>

<script type="text/javascript">
$(document).ready(function(){
  $('#hotel_id').load('/hotelJsonBaliApi.php');
  $('#city').change(function(){
    var city_id = $('#city').val();
    if(city_id == 70){
        $('#district').show();
    }else{
        $('#district').hide();
    }
    $('#hotel_id').load('/hotelJsonBaliApi.php?city_id=' + city_id);
  });
  $('#district').change(function(){
    var district_id = $('#district').val() ? $('#district').val() : '';
    $('#hotel_id').load('/hotelJsonBaliApi.php?city_id=70' + '&district_id=' + district_id);
  });
});
</script>

<div id="main">
  <div id="main_img">
    <div id="images">
      <div id="cf1" class="slide"><a href="/gw/"><img src="/img/large/main_img07.jpg" width="1920" height="440" alt="まだまだ間に合う！GWはバリへ！" /></a></div>
      <div id="cf2" class="slide"><a href="/sq/"><img src="/img/large/main_img08.jpg" width="1920" height="440" alt="シンガポール航空で行くバリ" /></a></div>
      <div id="cf3" class="slide"><a href="/ubud_beach/"><img src="/img/large/main_img06.jpg" width="1920" height="440" alt="バリで、山も海も楽しもう！ ウブド×ビーチ特集" /></a></div>
      <!--<div id="cf3" class="slide"><a href="/order/"><img src="/img/large/main_img01.jpg" width="1920" height="440" alt="バリ大好きなスタッフが、あなたのワガママにお答えします。" /></a></div>
      <div id="cf4" class="slide"><a href="/order/"><img src="/img/large/main_img02.jpg" width="1920" height="440" alt="あなたのワガママにお応えしたい。" /></a></div>-->
      <div id="cf4" class="slide"><a href="/manoue/"><img src="/img/large/main_img05.jpg" width="1920" height="440" alt="山下マヌー 1週間バリ web限定改訂版" /></a></div>
      <div id="cf5" class="slide"><a href="/bitabi/"><img src="/img/large/main_img09.jpg" width="1920" height="440" alt="バリで、キレイになる。□美-TABI□" /></a></div>
    </div>
  </div>
</div>
<div id="top_container">
  <div class="thumbnails" id="keyViewThumbs"></div>
  <div id="tour_search_box">
    <div id="tour_search">
      <?php 
      $api = 'http://api.tabikobo.com/myapi/rest/destination/list';
      $json_string = file_get_contents($api);
      $destination_list = json_decode($json_string,true);
      if(!empty($destination_list)){
          $city_list_bali = $destination_list['data']['city_ids'][3];
          $city_list_names = $destination_list['data']['city_names'];
          $district_names = $destination_list['data']['district_names'];
          $district_ids_70 = $destination_list['data']['district_ids']['70'];
      }
      ?>
      <div id="top_search">
        <div id="top_search_h">
          <div class="serch_title"> <img src="/img/top_search_t01.gif" width="240" height="35" alt="bali tour search バリツアー検索" /> </div>
        </div>
        <div id="search_detail">
          <script type="text/javascript" src="/js/sendParam.js"></script>
          <form method="get" action="http://tour.tabikobo.com/tour/list" name="searchbox" id="searchbox">
            <!--form method="get" action="http://tour.tabikobo.com/tour/list"-->
            <input type="hidden" name="media" value="plumeriabali" />
            <p>出発地と目的地、出発予定日を選んで<br />
              「検索」をクリックしてください。</p>
            <div id="top_step1">
              <div class="serch_title"> <img src="/img/top_search_t02.gif" width="240" height="32" alt="step1 出発地を選ぶ" /> </div>
              <select name="departure_place_id" id="departure_place">
                <option value="">出発地</option>
                <option value="2">成田</option>
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
                        <option value="<?php echo $value; ?>"><?php echo $district_names[$value]; ?></option> 
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
              <select name="hotel_id" id="hotel_id"><option value="">選択してください</option>
              </select>
            </div>
            <div id="top_step5">
              <div class="serch_title"> <img src="/img/top_search_t06.gif" width="240" height="32" alt="step5 航空会社指定" /> </div>
              <select name="airline_id" id="airline"><option value="">選択してください</option>
                <option value="12">ガルーダ・インドネシア航空</option>
                <option value="6">シンガポール航空</option>
                <option value="1">日本航空</option>
                <option value="9">大韓航空</option>
                <option value="13">チャイナエアライン</option>
                <option value="7">キャセイパシフィック航空</option>
                <option value="2">全日空</option>
                <option value="8">タイ国際航空</option>
                </select>
            </div>
            <div id="top_search_btn">
              <button type="submit" onClick="TABI_submit();return false;"><img src="/img/top_search_btn.gif" width="149" height="27" alt="検索" /></button>
            </div>
          </form>
        </div>
        <div id="top_search_f"></div>
      </div>
    </div>
  </div>
</div>
<div id="container">
  <div id="info">
    <div id="info_h"></div>
    <div id="info_detail">
      <div id="info_title" class="box">
        <div class="left">
          <div id="news_title">
            <p>おすすめ特集 recommended special edition</p>
          </div>
        </div>
        <div class="right"> <a href="http://www.plbali.com/special/bali_ubud/"><img src="/img/bali_banner01.jpg" alt="バリ満喫のウブド" width="224" height="48" /></a><a href="http://www.plbali.com/special/bali_villa/"><img src="/img/bali_banner02.jpg" alt="バリ、ヴィラで安らぎのひととき。" width="222" height="48" /></a><a href="http://www.tabikobo.com/special/healingtravel/bali.html"><img src="/img/bnrHealing_224x48.jpg" alt="羽を休めて寛ぐ。私の癒し旅 in Bali" width="224" height="48" /></a></div>
      </div>
      <ul id="news">
        <li><a href="http://www.tabikobo.info/tabi-affili/scripts/t.php?a_aid=b2bdba0e&a_bid=d2251225&desturl=http%3a%2f%2ftour.tabikobo.com%2ftour%2flist%2fpage%2f1%2forder%2fprice_asc%2fmedia%2fplumeriabali%2fregion_id%2f1%2fcountry_id%2f3%2fcity_id%2f70%2fhotel_id%2f515%2fcommit_x%2f70%2fcommit_y%2f6">【全国発】お客様満足度NO1『アヤナリゾート＆スパ』早期予約/３泊以上でランチ、アフタヌーンティ特典♪</a></li>
        <li><a href="http://www.tabikobo.info/tabi-affili/scripts/t.php?a_aid=b2bdba0e&a_bid=d2251225&desturl=http%3A%2F%2Ftour%2Etabikobo%2Ecom%2Ftour%2Flist%3Fmedia%3Dplumeriabali%26region%5Fid%3D1%26country%5Fid%3D3%26city%5Fid%3D70%26departure%5Fplace%5Fid%3D%26y%2Dm%3D%26d%3D%26duration%5Ffrom%3D%26duration%5Fto%3D%26hotel%5Fid%3D526%26airline%5Fid%3D%26stay%5Ftype%5Fcode%3D%26bugget%3D%26stopover%5Fflg%3D%26departure%5Fplace%5Ftime%5Fcode%3D%26destination%5Ftime%5Fcode%3D%26conductor%5Fcode%3D%26keyword%3D%26code%3D%26campaign%5Fid%3D%26">【全国発】憧れの『フォーシーズンズ　サヤン』２泊で１延泊無料</a></li>
        <li><a href="http://www.tabikobo.info/tabi-affili/scripts/t.php?a_aid=b2bdba0e&a_bid=d2251225&desturl=http%3a%2f%2ftour.tabikobo.com%2ftour%2flist%2fpage%2f1%2forder%2fprice_asc%2fmedia%2fplumeriabali%2fregion_id%2f1%2fcountry_id%2f3%2fcode%2f%2525JOG%2525%2fcommit_x%2f58%2fcommit_y%2f18">【世界遺産ボロブドゥール＆プランバラン】絶対見逃せない！朝靄の神秘的な遺跡群を望むサンライズトレッキング付ツアーも☆</a></li>
        <li><a href="http://www.tabikobo.info/tabi-affili/scripts/t.php?a_aid=b2bdba0e&a_bid=d2251225&desturl=http%3A%2F%2Ftour%2Etabikobo%2Ecom%2Ftour%2Flist%3Fmedia%3Dplumeriabali%26region%5Fid%3D1%26country%5Fid%3D3%26city%5Fid%3D70%26departure%5Fplace%5Fid%3D%26y%2Dm%3D%26d%3D%26duration%5Ffrom%3D%26duration%5Fto%3D%26hotel%5Fid%3D549%26airline%5Fid%3D%26stay%5Ftype%5Fcode%3D%26bugget%3D%26stopover%5Fflg%3D%26departure%5Fplace%5Ftime%5Fcode%3D%26destination%5Ftime%5Fcode%3D%26conductor%5Fcode%3D%26keyword%3D%26code%3D%26campaign%5Fid%3D%26">【全国発】南国バリでリゾート気分満喫！オンザビーチでとってもお得な『カインドヴィラビンタン（デラックスルーム）』</a></li>
        <li><a href="http://www.tabikobo.info/tabi-affili/scripts/t.php?a_aid=b2bdba0e&a_bid=d2251225&desturl=http%3a%2f%2ftour.tabikobo.com%2ftour%2flist%2fpage%2f1%2forder%2fprice_asc%2fmedia%2fplumeriabali%2fregion_id%2f1%2fcountry_id%2f3%2fcity_id%2f70%2fhotel_id%2f563%2fcommit_x%2f111%2fcommit_y%2f4">*・★スモールラグジュアリー『ザ・バレ』★・*がさらにスタイリッシュに生まれ変わって、待望のOPEN♪♪</a></li>
      </ul>
    </div>
    <!-- id=info_detail -->
    <div id="info_f"></div>
  </div>
  <!-- id=info -->
  <div id="contents">
    <div id="h2_title">
      <h2>エリアから選ぶ、ヴィラ・ホテル＆スパ。</h2>
    </div>
    <div id="mBtn1"><a href="/ubud/"></a></div>
    <div id="mBtn2"><a href="/seminyak-kerobokan/"></a></div>
    <div id="mBtn3"><a href="/kuta-legian/"></a></div>
    <div id="mBtn4"><a href="/jimbaran-uluwatu/"></a></div>
    <div id="mBtn5"><a href="/nusadua/"></a></div>
    <div id="mBtn6"><a href="/sanur/"></a></div>
    <div id="detail">
      <div class="box">
        <div id="hotel">
          <div class="h3_title">
            <h3>ホテルで決める旅 ヴィラ・ホテル villa &amp; hotel</h3>
          </div>
          <div class="read">
            <p>6つのエリアに6つの個性。海と自然、神秘のバリ島。<br />
              プルメリア・バリおすすめのヴィラ＆ホテル。</p>
            <strong>エリアで選ぶ、くつろぎのヴィラ＆ホテル。</strong></div>
          <div class="ubdo">
            <div class="h4_title">
              <h4><a href="/ubud/"><img src="/img/villa_title01.gif" width="320" height="21" alt="1ウブド UBUD"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-ubud&posts_per_page=2');/*VILLA記事リスティング*/ ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-ubud&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="semi">
            <div class="h4_title">
              <h4><a href="/seminyak-kerobokan/"><img src="/img/villa_title02.gif" width="320" height="21" alt="2スミニャック／クロボカン SEMINYAK/KEROBOKAN"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-seminyak-kerobokan&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="kuta">
            <div class="h4_title">
              <h4><a href="/kuta-legian/"><img src="/img/villa_title03.gif" width="320" height="21" alt="3クタ／レギャン KUTA/LEGIAN"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-kuta-legian&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-kuta-legian&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="jim">
            <div class="h4_title">
              <h4><a href="/jimbaran-uluwatu/"><img src="/img/villa_title04.gif" width="320" height="21" alt="4ジンバラン／ウルワツ JIMBARAN/ULUWATU"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-jimbaran-uluwatu&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="nusa">
            <div class="h4_title">
              <h4><a href="/nusadua/"><img src="/img/villa_title05.gif" width="320" height="21" alt="5ヌサドゥア NUSA DUA"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-nusadua&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-nusadua&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="sanu">
            <div class="h4_title">
              <h4><a href="/sanur/"><img src="/img/villa_title06.gif" width="320" height="21" alt="6サヌール SANUR"></a></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-sanur&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-sanur&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="other">
            <div class="h4_title">
              <h4><img src="/img/villa_title07.gif" width="320" height="21" alt="7その他 OTHER"></h4>
            </div>
            <div class="box">
              <?php $myposts = get_posts('category_name=villa-other&posts_per_page=2'); ?>
              <?php foreach($myposts as $post): ?>
              <?php setup_postdata($post); ?>
              <div class="left"> <a href="<?php the_permalink(); ?>" target="_top">
                <?php $title= get_the_title(); the_post_thumbnail(array( 157,157 ),array( 'alt' =>$title, 'title' => $title)); ?>
                </a> <span><?php echo post_custom('copy'); ?></span> <a href="<?php the_permalink(); ?>" target="_top">
                <?php the_title(); ?>
                </a>
                <p class="area"><?php echo post_custom('area'); ?></p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="more"><a href="/villa/">もっと見る（全<?php $site_count = query_posts('category_name=villa-other&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
        </div>
        <!-- id=hotel -->
        <div id="spa">
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
                  <?php $myposts = get_posts('category_name=spa-ubud&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-ubud&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
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
                  <?php $myposts = get_posts('category_name=spa-seminyak-kerobokan&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-seminyak-kerobokan&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
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
                  <?php $myposts = get_posts('category_name=spa-kuta-legian&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-kuta-legian&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
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
                  <?php $myposts = get_posts('category_name=spa-jimbaran-uluwatu&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-jimbaran-uluwatu&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="nusa">
            <div class="h4_title">
              <h4><a href="/nusadua/"><img src="/img/villa_title05.gif" width="320" height="21" alt="5ヌサドゥア NUSA DUA"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img05.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-nusadua&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-nusadua&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
          <div class="sanu">
            <div class="h4_title">
              <h4><a href="/sanur/"><img src="/img/villa_title06.gif" width="320" height="21" alt="6サヌール SANUR"></a></h4>
            </div>
            <div class="box">
              <div class="spa_img"> <img src="/img/spa_img06.jpg" width="320" height="80" /> </div>
              <div class="list">
                <ul>
                  <?php $myposts = get_posts('category_name=spa-sanur&posts_per_page=10');/*SPA記事リスティング*/ ?>
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
          <div class="more"><a href="/spa/">もっと見る（全<?php $site_count = query_posts('category_name=spa-sanur&posts_per_page=-1');
                $site_cnt=0;
                foreach($site_count as $post):
                $site_cnt++; ?>
                <?php endforeach;wp_reset_query(); ?>
                <?php echo $site_cnt ?> 件）</a></div>
        </div>
        <!-- id=spa -->
      </div>
    </div>
    <!-- id=detaile -->
    <div id="detaile_f"></div>
  </div>
  <?php include( TEMPLATEPATH . '/sidebar-search.php' ); ?>
</div>
<!-- #container -->
<?php get_footer(); ?>
