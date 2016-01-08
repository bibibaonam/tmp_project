<?php

/**

 * The Sidebar containing the main widget area.

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



$options = twentyeleven_get_theme_options();

$current_layout = $options['theme_layout'];



if ( 'content' != $current_layout ) :

?>

<div id="side">

  <!--<div id="saiyo">
    <div id="saiyo_pho"><a href="http://www.tabikobo.com/recruit/career/guideline/executive2.html#n02" target="_blank"><img width="190" height="210" src="/img/saiyo_sidebnr.png" alt="バリ好きな方大歓迎！バリ島旅行の専門店「バリガール」の採用情報はこちら"></a></div>
  </div>-->

  <div id="side_staff">
    <div id="s_staff_title"><img src="/img/side_staff.jpg" width="190" height="380" alt="こだわりの旅を実現。私たち、トラベル・コンシェルジュにお任せください。　ツアー・航空券・各種お問い合わせは　東京03-5956-4170　大阪 06-4861-7263　名古屋 052-259-0681　福岡 092-738-2601　仙台 022-217-4650　札幌 011-223-2251" /></div>
    <div id="s_staff_f"><a href="mailto:bali@tabikobo.com"><img src="/img/s_mail.gif" width="129" height="13" alt="bali@tabikobo.com" /></a>
      <p>【営業時間】 月～土(10:00～18:30) <br />
        日・祝(休み)</p>
    </div>
  </div>
  
  <?php if( is_home() || is_front_page()): ?>
  <div id="side_blog">
  <iframe src="http://blog.plbali.com/newblog" width="188" frameborder="0" scrolling="no"></iframe>
  </div>
    
  <?php elseif(is_page('ubud') || is_page('seminyak-kerobokan') || is_page('kuta-legian') || is_page('jimbaran-uluwatu') || is_page('nusadua') || is_page('sanur') || is_page('canggu') || is_page('candidasa') || is_page('tanahlot') || is_page('menjangan') || is_page('lovina') || is_page('yogyakarta') || is_page('lombok') || is_page('lembongan')): ?>
  <div id="cNavi">
    <div id="cNavi01">
      <div class="cNavi_h2">
        <h2><a href="/ubud/"><img src="/img/side_navi_01.gif" alt="1ウブド UBUD" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="cNavi02">
      <div class="cNavi_h2">
        <h2><a href="/seminyak-kerobokan/"><img src="/img/side_navi_02.gif" alt="2スミニャック／クロボカン SEMINYAK/KEROBOKAN" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="cNavi03">
      <div class="cNavi_h2">
        <h2><a href="/kuta-legian/"><img src="/img/side_navi_03.gif" alt="3クタ／レギャン KUTA/LEGIAN" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="cNavi04">
      <div class="cNavi_h2">
        <h2><a href="/jimbaran-uluwatu/"><img src="/img/side_navi_04.gif" alt="4ジンバラン／ウルワツ JIMBARAN/ULUWATU" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="cNavi05">
      <div class="cNavi_h2">
        <h2><a href="/nusadua/"><img src="/img/side_navi_05.gif" alt="5ヌサドゥア NUSA DUA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="cNavi06">
      <div class="cNavi_h2">
        <h2><a href="/sanur/"><img src="/img/side_navi_06.gif" alt="6サヌール SANUR" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi07">
      <div class="vsNavi_h2">
        <h2><a href="/canggu/"><img src="/img/side_navi_07.gif" alt="チャングー CANGGU" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi08">
      <div class="vsNavi_h2">
        <h2><a href="/candidasa/"><img src="/img/side_navi_08.gif" alt="チャンディダサ CANDIDASA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi09">
      <div class="vsNavi_h2">
        <h2><a href="/tanahlot/"><img src="/img/side_navi_09.gif" alt="タナロット TANAHLOT" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi10">
      <div class="vsNavi_h2">
        <h2><a href="/menjangan/"><img src="/img/side_navi_10.gif" alt="ムンジャンガン MENJANGAN" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi11">
      <div class="vsNavi_h2">
        <h2><a href="/lovina/"><img src="/img/side_navi_11.gif" alt="ロビナ LOVINA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi12">
      <div class="vsNavi_h2">
        <h2><a href="/yogyakarta/"><img src="/img/side_navi_12.gif" alt="ジョグジャカルタ YOGYAKARTA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi13">
      <div class="vsNavi_h2">
        <h2><a href="/lombok/"><img src="/img/side_navi_13.gif" alt="ロンボク島 LOMBOK" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi14">
      <div class="vsNavi_h2">
        <h2><a href="/lembongan/"><img src="/img/side_navi_14.gif" alt="レンボンガン島 LEMBONGAN" width="210" height="27" /></a></h2>
      </div>
    </div>
  </div>
  <?php elseif(in_category('villa')): ?>
  <?php if( is_category('villa')): ?>
  <?php else : ?>
  <?php if(is_page('ubud')): ?>
  <?php else : ?>
  <div id="vsNavi">
    <div id="vsNavi01">
      <div class="vsNavi_h2">
        <h2><a href="/ubud/"><img src="/img/side_navi_01.gif" alt="ウブド UBUD" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-ubud&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi02">
      <div class="vsNavi_h2">
        <h2><a href="/seminyak-kerobokan/"><img src="/img/side_navi_02.gif" alt="スミニャック／クロボカン SEMINYAK/KEROBOKAN" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-seminyak-kerobokan&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi03">
      <div class="vsNavi_h2">
        <h2><a href="/kuta-legian/"><img src="/img/side_navi_03.gif" alt="クタ／レギャン KUTA/LEGIAN" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-kuta-legian&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi04">
      <div class="vsNavi_h2">
        <h2><a href="/jimbaran-uluwatu/"><img src="/img/side_navi_04.gif" alt="ジンバラン／ウルワツ JIMBARAN/ULUWATU" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-jimbaran-uluwatu&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi05">
      <div class="vsNavi_h2">
        <h2><a href="/nusadua/"><img src="/img/side_navi_05.gif" alt="ヌサドゥア NUSA DUA" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-nusadua&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi06">
      <div class="vsNavi_h2">
        <h2><a href="/sanur/"><img src="/img/side_navi_06.gif" alt="サヌール SANUR" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=villa-sanur&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi07">
      <div class="vsNavi_h2">
        <h2><a href="/canggu/"><img src="/img/side_navi_07.gif" alt="チャングー CANGGU" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi08">
      <div class="vsNavi_h2">
        <h2><a href="/candidasa/"><img src="/img/side_navi_08.gif" alt="チャンディダサ CANDIDASA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi09">
      <div class="vsNavi_h2">
        <h2><a href="/tanahlot/"><img src="/img/side_navi_09.gif" alt="タナロット TANAHLOT" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi10">
      <div class="vsNavi_h2">
        <h2><a href="/menjangan/"><img src="/img/side_navi_10.gif" alt="ムンジャンガン MENJANGAN" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi11">
      <div class="vsNavi_h2">
        <h2><a href="/lovina/"><img src="/img/side_navi_11.gif" alt="ロビナ LOVINA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi12">
      <div class="vsNavi_h2">
        <h2><a href="/yogyakarta/"><img src="/img/side_navi_12.gif" alt="ジョグジャカルタ YOGYAKARTA" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi13">
      <div class="vsNavi_h2">
        <h2><a href="/lombok/"><img src="/img/side_navi_13.gif" alt="ロンボク島 LOMBOK" width="210" height="27" /></a></h2>
      </div>
    </div>
    <div id="vsNavi14">
      <div class="vsNavi_h2">
        <h2><a href="/lembongan/"><img src="/img/side_navi_14.gif" alt="レンボンガン島 LEMBONGAN" width="210" height="27" /></a></h2>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php endif; ?>
  <?php elseif(in_category('spa')): ?>
  <?php if( is_category('spa')): ?>
  <?php else : ?>
  <div id="vsNavi">
    <div id="vsNavi01">
      <div class="vsNavi_h2">
        <h2><a href="/ubud/"><img src="/img/side_navi_01.gif" alt="ウブド UBUD" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-ubud&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi02">
      <div class="vsNavi_h2">
        <h2><a href="/seminyak-kerobokan/"><img src="/img/side_navi_02.gif" alt="スミニャック／クロボカン SEMINYAK/KEROBOKAN" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-seminyak-kerobokan&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi03">
      <div class="vsNavi_h2">
        <h2><a href="/kuta-legian/"><img src="/img/side_navi_03.gif" alt="クタ／レギャン KUTA/LEGIAN" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-kuta-legian&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi04">
      <div class="vsNavi_h2">
        <h2><a href="/jimbaran-uluwatu/"><img src="/img/side_navi_04.gif" alt="ジンバラン／ウルワツ JIMBARAN/ULUWATU" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-jimbaran-uluwatu&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi05">
      <div class="vsNavi_h2">
        <h2><a href="/nusadua/"><img src="/img/side_navi_05.gif" alt="ヌサドゥア NUSA DUA" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-nusadua&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
    <div id="vsNavi06">
      <div class="vsNavi_h2">
        <h2><a href="/sanur/"><img src="/img/side_navi_06.gif" alt="サヌール SANUR" width="210" height="27" /></a></h2>
      </div>
      <?php /*?><ul>
        <?php $myposts = get_posts('category_name=spa-sanur&posts_per_page=100'); ?>
        <?php foreach($myposts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>" target="_top">
          <?php the_title(); ?>
          </a></li>
        <?php endforeach; ?>
      </ul><?php */?>
    </div>
  </div>
  <?php endif; ?>
  <?php elseif(in_category('optional')): ?>
  <?php if( is_category('optional')): ?>
  <?php else : ?>
  <div id="s_navi">
    <h2>20周年記念 オプショナルツアー</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=20th&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>プルメリアおすすめ</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=osusume&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>バリ１日観光</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=balikanko&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>バリ半日観光</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=balihalfday&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>ウブド観光</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=ubudkanko&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>山・川遊び</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=mountainandriver&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>クルーズ</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=cruise&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>マリンアクティビティ</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=marineactivity&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>ダイビング</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=diving&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>お食事メイン</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=mealmain&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>テーマパーク</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=themepark&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>ゴルフ</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=golf&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>到着日プラン（お部屋利用）</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=firstday-type1&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>到着日プラン（お部屋利用なし）</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=firstday-type2&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>最終日の過ごし方（お部屋利用）</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=finalday-type1&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>最終日の過ごし方（お部屋利用なし）</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=finalday-type2&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>ロマンティックディナー</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=romanticdinner&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>ウェディング</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=op-wedding&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>他島へ</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=otherislands&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <!--

    <h2>ヨガ</h2>

    <ul class="opNavi">

	<?php $myposts = get_posts('category_name=yoga&posts_per_page=100'); ?>

    <?php foreach($myposts as $post): ?>

        <?php setup_postdata($post); ?>

        <li><a href="<?php the_permalink(); ?>" target="_top"><?php the_title(); ?></a></li>

    <?php endforeach; ?>

    </ul>

-->
	<?php $postup = get_posts( 'category_name=20th' ); ?>
    <?php if ($postup){ ?>
    <h2>バリ島ディープ体験</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=balideep&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
	<?php } ?>
    <h2>お稽古</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=exercise&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
    <h2>バリ伝統芸能鑑賞</h2>
    <ul class="opNavi">
      <?php $myposts = get_posts('category_name=balitradition&posts_per_page=100'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>" target="_top">
        <?php the_title(); ?>
        </a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif; ?>
  <?php endif; ?>
  <?php if( is_home() || is_front_page() || is_page('search')): ?>
  <?php else : ?>
<script type="text/javascript">
<!--
$(document).ready(function(){
  $('#hotel_id').load('/hotelJsonBaliApi.php?district_id=0');
  $('#district').change(function(){
    var district_id = $('#district').val() ? $('#district').val() : 0;
    $('#hotel_id').load('/hotelJsonBaliApi.php?district_id=' + district_id);
  });
});
//-->
</script>
  <div id="side_search">
    <script type="text/javascript" src="/js/sendParam.js"></script>
    <form action="http://tour.tabikobo.com/tour/list" method="get" name="searchbox" id="searchbox">
      <input type="hidden" name="media" value="plumeriabali" />
      <div class="serch_title"> <img src="/img/search_title01.gif" width="208" height="48" alt="bali tour search バリツアー検索" /> </div>
      <p>出発地と目的地、出発予定日を選んで<br />
        「検索」をクリックしてください。</p>
      <div id="step1">
        <div class="serch_title"> <img src="/img/search_t02.gif" width="208" height="32" alt="step1 出発地を選ぶ" /> </div>
        <select name="departure_place_id" id="departure_place">
          <option value="">出発地</option>
          <option value="1">東京</option>
          <option value="2">成田</option>
          <option value="3">羽田</option>
          <option value="5">関空</option>
          <option value="7">名古屋</option>
          <option value="8">福岡</option>
          <option value="9">那覇</option>
          <option value="10">札幌</option>
          <option value="11">仙台</option>
          <option value="16">松山</option>
          <option value="17">福島</option>
          <option value="18">函館</option>
          <option value="21">長崎</option>
          <option value="23">女満別</option>
          <option value="25">高松</option>
          <option value="27">とかち帯広</option>
          <option value="29">高知</option>
          <option value="30">青森</option>
          <option value="31">小松</option>
          <option value="36">秋田</option>
          <option value="40">旭川</option>
          <option value="41">釧路</option>
          <option value="43">徳島</option>
          <option value="45">山口宇部</option>
          <option value="46">北九州</option>
          <option value="48">三沢</option>
          <option value="52">南紀白浜</option>
          <option value="53">出雲</option>
        </select>
      </div>
      <div id="step2">
        <div class="serch_title"> <img src="/img/search_t03.gif" width="208" height="32" alt="step2 目的地を選ぶ" /> </div>
        <input type="hidden" name="city_id" value="70" />
        <select name="district_id" id="district" class="destination">
          <option value="">バリ島全域</option>
          <option value="68">ウブド</option>
          <option value="69">ウブド＆ビーチ</option>
          <option value="81">スミニャック／クロボカン</option>
          <option value="82">クタ／レギャン</option>
          <option value="83">ジンバラン／ウルワツ</option>
          <option value="1">ヌサドゥア</option>
          <option value="8">サヌール</option>
          <option value="72">ジョグジャカルタ</option>
          <option value="77">その他</option>
        </select>
      </div>
      <div id="step3">
        <div class="serch_title"> <img src="/img/search_t04.gif" width="208" height="32" alt="step3 出発候補日を選ぶ" /> </div>
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
      <div id="step4">
        <div class="serch_title"> <img src="/img/search_t05.gif" width="208" height="32" alt="step4 ホテル指定" /> </div>
        <select name="hotel_id" id="hotel_id"><option value="">選択してください</option>
        </select>
      </div>
      <div id="step5">
        <div class="serch_title"> <img src="/img/search_t06.gif" width="208" height="32" alt="step5 航空会社指定" /> </div>
      <select name="airline_id" id="airline"><option value="">選択してください</option>
        <option value="12">ガルーダ・インドネシア航空（ＧＡ）</option>
        <option value="6">シンガポール航空（ＳＱ）</option>
        <option value="1">日本航空（ＪＬ）</option>
        <option value="9">大韓航空（ＫＥ）</option>
        <option value="13">チャイナエアライン（ＣＩ）</option>
        <option value="7">キャセイパシフィック航空（ＣＸ）</option>
        <option value="2">全日空（ＮＨ）</option>
        <option value="8">タイ国際航空（ＴＧ）</option>
        </select>
      </div>
      <div id="side_search_btn">
        <button type="submit" onClick="TABI_submit();return false;"><img src="/img/side_search_btn.gif" width="150" height="27" alt="検索" /></button>
      </div>
    </form>
  </div>
  <?php endif; ?>
  



<?php	if(is_page ('requestXX') ): ?>
				<!-- バナー群(テキストウィジェット)なし -->
<?php else: ?>
  <div id="secondary" class="widget-area" role="complementary">
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
    <aside id="archives" class="widget">
      <h3 class="widget-title">
        <?php _e( 'Archives', 'twentyeleven' ); ?>
      </h3>
      <ul>
        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
      </ul>
    </aside>
    <aside id="meta" class="widget">
      <h3 class="widget-title">
        <?php _e( 'Meta', 'twentyeleven' ); ?>
      </h3>
      <ul>
        <?php wp_register(); ?>
        <li>
          <?php wp_loginout(); ?>
        </li>
        <?php wp_meta(); ?>
      </ul>
    </aside>
    <?php endif; // end sidebar widget area ?>
  </div>
  <!-- #secondary .widget-area -->
  <?php endif; // end banner text widget ?>

  <?php if( in_category('optional')): ?>
  <?php else : ?>
  <div id="optional">
    <div class="side_h"></div>
    <div class="side_detail">
      <div class="h3_title">
        <h3>おすすめアクティビティ オプショナル optional</h3>
      </div>
      <?php $myposts = get_posts('category_name=optional_pickup&posts_per_page=999'); ?>
      <?php foreach($myposts as $post): ?>
      <?php setup_postdata($post); ?>
      <div class="box"> <a href="<?php the_permalink(); ?>" target="_top"><?php echo post_custom('banner_img'); ?></a>
        <?php /*?><p><?php echo post_custom('banner_copy'); ?></p><?php */?>
      </div>
      <?php endforeach; ?>
      <div class="more"><a href="/optional/">もっと見る</a></div>
    </div>
    <div class="side_f"></div>
  </div>
  <?php endif; ?>
  <?php if( is_page('select')): ?>
  <?php else : ?>
  <div id="select">
    <div class="side_h"></div>
    <div class="side_detail">
      <div class="h3_title">
        <h3>コンシェルジュが選ぶ セレクト select</h3>
      </div>
      <div class="box"> <a href="http://www.tabikobo.com/20th/voice/vol1/"><img src="/img/himitsu_right.jpg" width="190" height="70" alt="秘密の旅　ムンジャンガン" /></a>
        <!--<strong>「秘密の旅」ムンジャンガン</strong> --></div>
      <div class="box"> <a href="http://www.tabikobo.com/destination/01/index.html#page=1"><img src="/img/destination_right.jpg" width="190" height="70" alt="フリーペーパー「Destination」創刊" /></a>
        <!--<strong>フリーペーパー「Destination」</strong> --></div>
        
      <div class="box"> <a href="http://www.plbali.com/bali_100/"><img src="/img/se_banner05.jpg" width="190" height="70" alt="エグゼクティブクラスで行くバリ" /></a>
        <!--<p>バリの達人になるために！</p>
        <strong>超定番からマニアックまで、思いのままに集めました！</strong> --></div>
      
      <div class="more"><a href="/select/">もっと見る</a></div>
    </div>
    <div class="side_f"></div>
  </div>
  <?php endif; ?>
</div>
<!-- id=side -->
<?php endif; ?>
