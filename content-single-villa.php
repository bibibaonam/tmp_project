<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="detaile_h"></div>
<div id="detail">

<?php if ( 0 === get_query_var( 'page' ) ) : ?>
<?php /*?>詳細ページ<?php */?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<div id="main">
    <div id="main_title">
        <h1><?php echo post_custom('hotel_name_jp'); ?></h1>
        <span><?php echo post_custom('hotel_name_en'); ?></span>
    </div>
    <div id="main_info">
        <div id="area"><?php echo post_custom('hotel_area'); ?></div>
        <?php if(post_custom('hotel_baligirl_rank')): ?>
        <div id="rank"></div>
        <?php endif; ?>
        
        <?php if(post_custom('free_text')): ?>
        <ul>
        	<?php $field = get_post_meta($post->ID, 'free_text', false);
			
				foreach ( $field as $str ):
					echo '<li>'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<div id="main_img"><img src="<?php echo post_custom('eyecatch'); ?>" alt="<?php the_title(); ?>" /></div>

<div id="tour1" class="tour">
    <ul>
        <li class="tour_read"><strong>現在のツアー最安値</strong>
        燃油サーチャージャー込　その他税別途</li>
        <?php if(post_custom('narita_price')): ?>
        <li><strong>成田発 <?php echo post_custom('narita_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('narita_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('haneda_price')): ?>
        <li><strong>羽田発 <?php echo post_custom('haneda_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('haneda_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('kanku_price')): ?>
        <li><strong>関空発 <?php echo post_custom('kanku_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('kanku_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('nagoya_price')): ?>
        <li><strong>名古屋発 <?php echo post_custom('nagoya_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('nagoya_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('fukuoka_price')): ?>
        <li><strong>福岡発 <?php echo post_custom('fukuoka_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('fukuoka_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('sapporo_price')): ?>
        <li><strong>札幌発 <?php echo post_custom('sapporo_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('sapporo_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('sendai_price')): ?>
        <li><strong>仙台発 <?php echo post_custom('sendai_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('sendai_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('hotel_reserve_link')): ?>
        <li class="tour_hotel"><strong>ホテルのみご予約はこちらから</strong><div class="btn"><a href="<?php echo post_custom('hotel_reserve_link'); ?>">詳細</a></div></li>
        <?php endif; ?>
    </ul>
</div>

<div id="lNaviBox">
    <div id="lNavi">
        <ul>
            <li class="lNavi1"><a href="#hotel">ホテル<br>概要</a></li>
            <?php if(post_custom('rooms_first') || post_custom('room_other')): ?>
            <li class="lNavi2"><a href="#rooms">客室<br>情報</a></li>
            <?php else : ?>
            <li class="lNavi2"><p>客室<br>情報</p></li>
            <?php endif; ?>
            <?php if(post_custom('spa_name')): ?>
            <li class="lNavi3 line1"><a href="#spa">スパ</a></li>
            <?php else : ?>
            <li class="lNavi3 line1"><p>スパ</p></li>
            <?php endif; ?>
            <?php if(post_custom('rest_first') || post_custom('rest_other')): ?>
            <li class="lNavi4"><a href="#restaurant">レスト<br>ラン</a></li>
            <?php else : ?>
            <li class="lNavi4"><p>レスト<br>ラン</p></li>
            <?php endif; ?>
            <?php if(post_custom('faq')): ?>
            <li class="lNavi5" id="faq_open"><a>よくある<br>質問</a></li>
            <?php else : ?>
            <li class="lNavi5" id="faq_open"><p>よくある<br>質問</p></li>
            <?php endif; ?>
            <li class="lNavi6 line3"><p>コンシェ<br>ルジュ<br>体験記</p></li>
        </ul>
    </div>
</div>

<div id="hotel" class="section">
	<div id="hotel_txt" class="box">
    	<div class="txt">
        	<?php if(post_custom('hotel_catch_copy')): ?>
            <h2><?php echo post_custom('hotel_catch_copy'); ?></h2>
            <?php endif; ?>
            <?php if(post_custom('hotel_content')): ?>
            <p><?php echo nl2br(post_custom('hotel_content')); ?></p>
            <?php endif; ?>
    	</div>
        <?php if(post_custom('hotel_trip_url')): ?>
        <div id="villa_trip">
            <iframe src="<?php echo post_custom('hotel_trip_url'); ?>" frameborder="0" scrolling="no" width="320" height="240"></iframe>
        </div>
        <?php endif; ?>
    </div>
    
    <div id="hotel_info1">
        <h3>ホテル基本情報</h3>
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>ホテル名</th>
                <td><?php echo post_custom('hotel_name_jp'); ?><span>(<?php echo post_custom('hotel_name_en'); ?>)</span></td>
            </tr>
            <?php if(post_custom('base_info_area')): ?>
            <tr>
                <th>エリア</th>
                <td><?php echo post_custom('base_info_area'); ?></td>
            </tr>
            <?php endif; ?>
            <?php if(post_custom('base_info_address')): ?>
            <tr>
                <th>address</th>
                <td><?php echo post_custom('base_info_address'); ?></td>
            </tr>
            <?php endif; ?>
            <?php if(post_custom('base_info_home_page')): ?>
            <tr>
                <th>公式HP</th>
                <td><a href="<?php echo post_custom('base_info_home_page'); ?>" target="_blank"><?php echo post_custom('base_info_home_page'); ?></a></td>
            </tr>
            <?php endif; ?>
            <?php if(post_custom('base_info_staff_japanese')): ?>
            <tr>
                <th>日本語スタッフ</th>
                <td><?php echo post_custom('base_info_staff_japanese'); ?></td>
            </tr>
            <?php endif; ?>
            <?php if(post_custom('base_info_check_in')): ?>
            <tr>
                <th>チェックイン</th>
                <td><?php echo post_custom('base_info_check_in'); ?></td>
            </tr>
            <?php endif; ?>
            <?php if(post_custom('base_info_check_out')): ?>
            <tr>
                <th>チェックアウト</th>
                <td><?php echo post_custom('base_info_check_out'); ?></td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
    
    <div id="hotel_info2" class="box">
    	<div class="left">
        	<h3>基本サービス</h3>
            <table border="0" cellspacing="0" cellpadding="0">
            	<?php if(post_custom('service_exist_shuttle')): ?>
                <tr>
                    <th>シャトルサービス</th>
                    <td><?php echo post_custom('service_exist_shuttle'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_fitness')): ?>
                <tr>
                    <th>フットネスジム</th>
                    <td><?php echo post_custom('service_exist_fitness'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_room_service')): ?>
                <tr>
                    <th>ルームサービス</th>
                    <td><?php echo post_custom('service_exist_room_service'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_laundry')): ?>
                <tr>
                    <th>ランドリーサービス</th>
                    <td><?php echo post_custom('service_exist_laundry'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_public_pool')): ?>
                <tr>
                    <th>パブリックプール</th>
                    <td><?php echo post_custom('service_exist_public_pool'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_kids_room')): ?>
                <tr>
                    <th>キッズルーム</th>
                    <td><?php echo post_custom('service_exist_kids_room'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_kids_room')): ?>
                <tr>
                    <th>ベビーシッター</th>
                    <td><?php echo post_custom('service_exist_baby_sitter'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_lounge')): ?>
                <tr>
                    <th>デバーチャーラウンジ</th>
                    <td><?php echo post_custom('service_exist_lounge'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_wifi')): ?>
                <tr>
                    <th>WIFI</th>
                    <td><?php echo post_custom('service_exist_wifi'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('service_exist_activity')): ?>
                <tr>
                    <th>アクティビティー</th>
                    <td><?php echo post_custom('service_exist_activity'); ?></td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    	<div class="right">
        	<h3>ホテル基本設備</h3>
            <table border="0" cellspacing="0" cellpadding="0">
            	<?php if(post_custom('amenity_exist_air_conditioner')): ?>
                <tr>
                    <th>エアコン</th>
                    <td><?php echo post_custom('amenity_exist_air_conditioner'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_bathtub')): ?>
                <tr>
                    <th>バスタブ</th>
                    <td><?php echo post_custom('amenity_exist_bathtub'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_bath_item')): ?>
                <tr>
                    <th>石けん・シャンプー・コンディショナー</th>
                    <td><?php echo post_custom('amenity_exist_bath_item'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_toothbrush')): ?>
                <tr>
                    <th>歯ブラシ</th>
                    <td><?php echo post_custom('amenity_exist_toothbrush'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_tv')): ?>
                <tr>
                    <th>テレビ</th>
                    <td><?php echo post_custom('amenity_exist_tv'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_audio_player')): ?>
                <tr>
                    <th>CD/DVDプレイヤー</th>
                    <td><?php echo post_custom('amenity_exist_audio_player'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_fridge')): ?>
                <tr>
                    <th>冷蔵庫</th>
                    <td><?php echo post_custom('amenity_exist_fridge'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_towel')): ?>
                <tr>
                    <th>タオル</th>
                    <td><?php echo post_custom('amenity_exist_towel'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_bar')): ?>
                <tr>
                    <th>ミニバー</th>
                    <td><?php echo post_custom('amenity_exist_bar'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_bathrobe')): ?>
                <tr>
                    <th>バスローブ（ゆかた）</th>
                    <td><?php echo post_custom('amenity_exist_bathrobe'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_safety_box')): ?>
                <tr>
                    <th>セーフティーボックス</th>
                    <td><?php echo post_custom('amenity_exist_safety_box'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_hair_dryer')): ?>
                <tr>
                    <th>ヘアードライヤー</th>
                    <td><?php echo post_custom('amenity_exist_hair_dryer'); ?></td>
                </tr>
                <?php endif; ?>
            	<?php if(post_custom('amenity_exist_kettle_pot')): ?>
                <tr>
                    <th>湯沸かしポット</th>
                    <td><?php echo post_custom('amenity_exist_kettle_pot'); ?></td>
                </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
    
    <?php if(post_custom('icon_disp_girls') || post_custom('icon_disp_alone') || post_custom('icon_disp_couple') || post_custom('icon_disp_family') || post_custom('icon_disp_group') || post_custom('icon_disp_honeymoon') || post_custom('icon_disp_premium')): ?>
    <div id="icon_list">
    	<ul>
        	<?php if(get_post_meta($post->ID,'icon_disp_girls',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon01.gif" width="46" height="46" alt="女子旅"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_alone',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon02.gif" width="46" height="46" alt="ひとり旅"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_couple',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon03.gif" width="46" height="46" alt="カップル"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_family',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon04.gif" width="46" height="46" alt="ファミリー"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_group',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon05.gif" width="46" height="46" alt="グループ"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_honeymoon',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon06.gif" width="46" height="46" alt="ハネムーン"></li>
            <?php endif; ?>
        	<?php if(get_post_meta($post->ID,'icon_disp_premium',true) == '表示'): ?>
        	<li><img src="/img/villa/osusume_icon07.gif" width="46" height="46" alt="プレミアム世代"></li>
            <?php endif; ?>
        </ul>
        <div class="icon_btn"><a href="/icon/hotel_osusume.html" target="window_name" onclick="disp('/icon/hotel_osusume.html')">おすすめアイコンについて</a></div>
    </div>
    <?php endif; ?>
    
    <?php if(post_custom('hotel_photo1') || post_custom('hotel_photo2') || post_custom('hotel_photo3') || post_custom('hotel_photo4')): ?>
    <ul id="hotel_photo">
    	<?php if(post_custom('hotel_photo1')): ?>
    	<li>
        	<div class="photo"><img src="<?php echo post_custom('hotel_photo1'); ?>"></div>
            <?php if(post_custom('hotel_photo_text1')): ?>
            <span><?php echo post_custom('hotel_photo_text1'); ?></span>
            <?php endif; ?>
        </li>
        <?php endif; ?>
    	<?php if(post_custom('hotel_photo2')): ?>
    	<li>
        	<div class="photo"><img src="<?php echo post_custom('hotel_photo2'); ?>"></div>
            <?php if(post_custom('hotel_photo_text2')): ?>
            <span><?php echo post_custom('hotel_photo_text2'); ?></span>
            <?php endif; ?>
        </li>
        <?php endif; ?>
    	<?php if(post_custom('hotel_photo3')): ?>
    	<li>
        	<div class="photo"><img src="<?php echo post_custom('hotel_photo3'); ?>"></div>
            <?php if(post_custom('hotel_photo_text3')): ?>
            <span><?php echo post_custom('hotel_photo_text3'); ?></span>
            <?php endif; ?>
        </li>
        <?php endif; ?>
    	<?php if(post_custom('hotel_photo4')): ?>
    	<li>
        	<div class="photo"><img src="<?php echo post_custom('hotel_photo4'); ?>"></div>
            <?php if(post_custom('hotel_photo_text4')): ?>
            <span><?php echo post_custom('hotel_photo_text4'); ?></span>
            <?php endif; ?>
        </li>
        <?php endif; ?>
    </ul>
    <?php endif; ?>
    
    <?php if(post_custom('hotel_lounge')): ?>
    <div id="lounge">
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'hotel_lounge', false);
			
				foreach ( $field as $str ):
					echo '<li>'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    <?php endif; ?>
</div><!-- id=hotel -->

<?php if(post_custom('rooms_first') || post_custom('room_other')): ?>
<div id="rooms" class="section">
	<h2>客室情報</h2>
    
    <div id="rooms_first">
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'rooms_first', false);
			
				foreach ( $field as $str ):
					echo '<li class="box">'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    <?php if(post_custom('room_other')): ?>
    <div id="room_other">
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'room_other', false);
			
				foreach ( $field as $str ):
					echo '<li class="box">'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    
    <div class="slide_btn"><a>すべての客室をみる</a></div>
    <?php endif; ?>
</div><!-- id=rooms -->
<?php endif; ?>

<?php if(post_custom('spa_name')): ?>
<div id="spa" class="section">
	<h2>スパ</h2>
    <h3><?php echo post_custom('spa_name'); ?></h3>
    <div id="spa_main">
    	<div class="photo"><img src="<?php echo post_custom('spa_img'); ?>"></div>
        <div class="txt">
        	<p><?php echo nl2br(post_custom('spa_text')); ?></p>
            <?php if(post_custom('spa_business_hours') || post_custom('spa_last_admission')): ?>
            <ul>
            	<?php if(post_custom('spa_business_hours')): ?>
            	<li>■営業時間：<?php echo post_custom('spa_business_hours'); ?></li>
                <?php endif; ?>
            	<?php if(post_custom('spa_last_admission')): ?>
                <li>■最終入場時間：<?php echo post_custom('spa_last_admission'); ?></li>
                <?php endif; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
    
    <div id="spa_first">
    	<?php if(post_custom('spa_package_name')): ?>
        <h4><?php echo post_custom('spa_package_name'); ?></h4>
        <?php endif; ?>
		<?php if(post_custom('spa_first')): ?>
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'spa_first', false);
			
				foreach ( $field as $str ):
					echo '<li>'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
        <?php endif; ?>
    </div>
    
    <?php if(post_custom('spa_other')): ?>
    <div id="spa_other">
        <ul>
        	<?php $field = get_post_meta($post->ID, 'spa_other', false);
			
				foreach ( $field as $str ):
					echo '<li>'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    
    <div class="slide_btn"><a>すべてのスパメニューをみる</a></div>
    <?php endif; ?>
</div><!-- id=spa -->
<?php endif; ?>

<?php if(post_custom('rest_first') || post_custom('rest_other')): ?>
<div id="restaurant" class="section">
	<h2>レストラン</h2>
    
    <div id="rest_first">
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'rest_first', false);
			
				foreach ( $field as $str ):
					echo '<li class="box">'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    
    <?php if(post_custom('rest_other')): ?>
    <div id="rest_other">
    	<ul>
        	<?php $field = get_post_meta($post->ID, 'rest_other', false);
			
				foreach ( $field as $str ):
					echo '<li class="box">'.$str. '</li>';
				endforeach;
			
			?>
        </ul>
    </div>
    
    <div class="slide_btn"><a>すべてのレストラン情報をみる</a></div>
    <?php endif; ?>
</div><!-- id=restaurant -->
<?php endif; ?>

<div id="tour2" class="tour">
    <ul>
        <li class="tour_read"><strong>現在のツアー最安値</strong>
        燃油サーチャージャー込　その他税別途</li>
        <?php if(post_custom('narita_price')): ?>
        <li><strong>成田発 <?php echo post_custom('narita_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('narita_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('haneda_price')): ?>
        <li><strong>羽田発 <?php echo post_custom('haneda_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('haneda_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('kanku_price')): ?>
        <li><strong>関空発 <?php echo post_custom('kanku_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('kanku_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('nagoya_price')): ?>
        <li><strong>名古屋発 <?php echo post_custom('nagoya_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('nagoya_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('fukuoka_price')): ?>
        <li><strong>福岡発 <?php echo post_custom('fukuoka_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('fukuoka_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('sapporo_price')): ?>
        <li><strong>札幌発 <?php echo post_custom('sapporo_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('sapporo_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <?php if(post_custom('sendai_price')): ?>
        <li><strong>仙台発 <?php echo post_custom('sendai_price'); ?>円〜</strong><div class="btn"><a href="<?php echo post_custom('sendai_url'); ?>">予約</a></div></li>
        <?php endif; ?>
        <li class="tour_hotel"><strong>ホテルのみご予約はこちらから</strong><div class="btn"><a href="<?php the_permalink(); ?>2/">詳細</a></div></li>
    </ul>
</div>

<?php if(post_custom('faq')): ?>
<div id="faq">
	<div class="inner">
        <ul>
        	<?php echo post_custom('faq'); ?>
        </ul>
        <div id="faq_close" onclick="closeModal()"></div>
    </div>
</div><!-- id=faq -->
<?php endif; ?>

<?php endif; ?>

<?php else : ?>
<?php /*?>料金ページ<?php */?>
<div id="main">
    <div id="main_title">
        <h1><?php the_title(); ?> 料金表</h1>
        <span><?php echo post_custom('name_en'); ?></span>
    </div>
    <div id="main_info">
        <div id="area"><?php echo post_custom('area'); ?></div>
        <?php if(post_custom('hotel_stars')): ?>
        <div id="rank"></div>
        <?php endif; ?>
        <?php if(post_custom('free_text')): ?>
        <ul>
            <?php echo post_custom('free_text'); ?>
        </ul>
        <?php endif; ?>
    </div>
</div>

<div id="price_list">
	<p>ホテル宿泊 基本代金（税、サービス料含む／単位：円）</p>
<?php endif; ?>
<?php the_content(); ?>
 <?php if ( 0 === get_query_var( 'page' ) ) : ?>
<?php /*?>詳細ページ<?php */?>
<?php else : ?>
<?php /*?>料金ページ<?php */?>  
    <div id="return"><a href="/villa/padma-resort-bali-at-legian/">パドマ リゾート バリ アット レギャン 詳細ページに戻る</a></div>
</div>

<script>
$(window).load(function(){
	$("th.room").each(function(){
		var roomTtl = $(this).text();
		$("td.room").prepend('<div class="ttl">' + roomTtl + '</div>');
	});
	$("th.number").each(function(){
		var numberTtl = $(this).text();
		$("td.number").prepend('<div class="ttl">' + numberTtl + '</div>');
	});
	$("th.date").each(function(){
		var dateTtl = $(this).text();
		var dateW = $(this).width();
		$("td.date").prepend('<div class="ttl">' + dateTtl + '</div>');
		$(".price tr:first-child td.date").css('width',dateW + 'px');
	});
	$("th.stay").each(function(){
		var stayTtl = $(this).text();
		var stayW = $(this).width();
		$("td.stay").prepend('<div class="ttl">' + stayTtl + '</div>');
		$(".price tr:first-child td.stay").css('width',stayW + 'px');
	});
	$("th.add").each(function(){
		var addTtl = $(this).text();
		var addW = $(this).width();
		$("td.add").prepend('<div class="ttl">' + addTtl + '</div>');
		$(".price tr:first-child td.add").css('width',addW + 'px');
	});
	$("th.aut1").each(function(){
		var aut1Ttl = $(this).text();
		var aut1W = $(this).width();
		$("td.aut1").prepend('<div class="ttl">' + aut1Ttl + '</div>');
		$(".price tr:first-child td.aut1").css('width',aut1W + 'px');
	});
	$("th.aut2").each(function(){
		var aut2Ttl = $(this).text();
		var aut2W = $(this).width();
		$("td.aut2").prepend('<div class="ttl">' + aut2Ttl + '</div>');
		$(".price tr:first-child td.aut2").css('width',aut2W + 'px');
	});
	$("th.bed").each(function(){
		var bedTtl = $(this).text();
		var bedW = $(this).width();
		$("td.bed").prepend('<div class="ttl">' + bedTtl + '</div>');
		$(".price tr:first-child td.bed").css('width',bedW + 'px');
	});
	$("th.lowest").each(function(){
		var lowestTtl = $(this).text();
		var lowestW = $(this).width();
		$("td.lowest").prepend('<div class="ttl">' + lowestTtl + '</div>');
		$(".price tr:first-child td.lowest").css('width',lowestW + 'px');
	});
	$('td.reservation .btn').each(function(i){
		var reservation = $(this).html();
		$('tr.last'+ (i+1) + '').append('<td class="btn btn2">' + reservation + '</td>');
	});
});

$(window).resize(function(){
	$("th.date").each(function(){
		var dateW = $(this).width();
		$(".price tr:first-child td.date").css('width',dateW + 'px');
	});
	$("th.stay").each(function(){
		var stayW = $(this).width();
		$(".price tr:first-child td.stay").css('width',stayW + 'px');
	});
	$("th.add").each(function(){
		var addW = $(this).width();
		$(".price tr:first-child td.add").css('width',addW + 'px');
	});
	$("th.aut1").each(function(){
		var aut1W = $(this).width();
		$(".price tr:first-child td.aut1").css('width',aut1W + 'px');
	});
	$("th.aut2").each(function(){
		var aut2W = $(this).width();
		$(".price tr:first-child td.aut2").css('width',aut2W + 'px');
	});
	$("th.bed").each(function(){
		var bedW = $(this).width();
		$(".price tr:first-child td.bed").css('width',bedW + 'px');
	});
	$("th.lowest").each(function(){
		var lowestW = $(this).width();
		$(".price tr:first-child td.lowest").css('width',lowestW + 'px');
	});
});
</script>
<?php endif; ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
<?php /*?><div id="villa_trip"><iframe src="<?php echo post_custom('tripAdviser'); ?>" scrolling="no" frameborder="0"></iframe></div><?php */?>
</div><!--id=detail-->
<div id="detaile_f"></div>
</article><!-- #post-<?php the_ID(); ?> -->


<?php if ( 0 === get_query_var( 'page' ) ) : ?>
<?php /*?>詳細ページ<?php */?>
<?php if(post_custom('ta_url')): ?>
<style type="text/css">
#ta_link a{
  text-decoration:none;
}
</style>
<script type="text/javascript">
$(function(){
  $("#ta_link").html('<p>※掲載されている<a href="<?php echo post_custom('ta_url') ?>"><?php the_title() ?></a>の口コミは<a href="http://www.tripadvisor.jp/">トリップアドバイザー<a>より提供を受けています。</p>');
});
</script>
<?php endif; ?>


<?php if(post_custom('hotel_baligirl_rank')): ?>
<?php
$levels = array(
  '1'   => '156',
  '2'   => '176',
  '3'   => '196',
  '4'   => '216',
  '5'   => '236',
  '2-3' => '257',
  '2-4' => '277',
  '2-5' => '297',
  '3-4' => '297',
  '3-5' => '317',
  '4-5' => '337',
);
?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<script type="text/javascript">
$(function(){
  try{
    $("div#rank").append('<img src="/img/osusume_rank<?php echo post_custom('hotel_baligirl_rank') ?>.jpg" width="<?php echo $levels[post_custom('hotel_baligirl_rank')] ?>" height="17" alt="バリガール・ランク <?php echo str_replace('-', '～', post_custom('hotel_baligirl_rank')) ?>つ星" class="rank<?php echo post_custom('hotel_baligirl_rank') ?>">');
  }catch(e){}
});
</script>
<?php else : ?>
<script type="text/javascript">
$(function(){
  try{
    $("div#main_title").append('<div id="rank"><img src="/img/osusume_rank<?php echo post_custom('hotel_stars') ?>.jpg" width="<?php echo $levels[post_custom('hotel_stars')] ?>" height="17" alt="バリガール・ランク <?php echo str_replace('-', '～', post_custom('hotel_stars')) ?>つ星"></div>');
  }catch(e){}
});
</script>
<?php endif; ?>
<?php endif; ?>


<?php if(is_single('padma-resort-bali-at-legian')): ?>
<?php else : ?>
<?php $post_tags = get_the_tags( $post->ID );
foreach( $post_tags as $post_tag ) {
if ( $post_tag->name == 'スタッフ' ) {
?>
<script type="text/javascript">
$(function(){
    $("div#rank").append('<img src="/img/staff_osusume_icon.gif" width="122" height="17" style="padding-left:20px;" alt="スタッフおすすめ">');
});
</script>
<?php } } ?>
<?php endif; ?>


<?php if(post_custom('osusume')): ?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<?php else : ?>
<?php
$osusume_names = array(
  1 => 'カップル',
  2 => '女子旅',
  3 => '男子旅',
  4 => '3名様で1室',
  5 => 'ファミリー',
  6 => '一人旅',
);
$osusumes = explode(',', post_custom('osusume'));
$inner_html = '<div id="icon_box">';
foreach($osusumes as $osusume){
  $inner_html .= sprintf('<div class="icon_list"><img src="/img/osusume_icon%02d.gif" width="32" height="32" alt="%s"></div>', $osusume, $osusume_names[$osusume]);
}
$inner_html .= '<br /><br /><div class="icon_btn"><a href="/icon/icon1.html" target="window_name" onClick="disp(\'/icon/icon1.html\')">おすすめアイコンについて</a></div></div>';
?>
<div id="osusume_hidden" style="display:none;"><?php echo $inner_html ?></div>
<script type="text/javascript">
$(function(){
  try{
    $("div#rooms_txt div.right").append($("div#osusume_hidden").html());
  }catch(e){}
});
</script>
<?php endif; ?>
<?php endif; ?>


<?php if(post_custom('tokuten1') && !(post_custom('tokuten_txt') && post_custom('tokuten2'))): ?>
<?php if(is_single('padma-resort-bali-at-legian')): ?>
<?php else : ?>
<?php
$tokuten_names = array(
  1 => 'ハネムーン特典',
  2 => 'バースデイ特典',
  3 => 'お部屋アップグレード',
  4 => 'レイトチェックアウト',
  5 => 'スパ付き',
  6 => 'ランチもしくはディナー付き',
);
$tokutens1 = explode(',', post_custom('tokuten1'));
$inner_html = '<div id="icon_box">';
foreach($tokutens1 as $tokuten1){
  $inner_html .= sprintf('<div class="icon_list"><img src="/img/tokuten_icon%02d.gif" width="32" height="32" alt="%s"></div>', $tokuten1, $tokuten_names[$tokuten1]);
}
if(post_custom('tokuten_txt') && post_custom('tokuten2')){
  $tokuten_text = post_custom('tokuten_txt');
  $inner_html .= sprintf('<br /><br /><br /><br />%s<br /><br />', $tokuten_text);
  $tokutens2 = explode(',', post_custom('tokuten2'));
  foreach($tokutens2 as $tokuten2){
    $inner_html .= sprintf('<div class="icon_list"><img src="/img/tokuten_icon%02d.gif" width="32" height="32" alt="%s"></div>', $tokuten2, $tokuten_names[$tokuten2]);
  }
}
$inner_html .= '<br /><br /><br /><div class="icon_btn"><a href="/icon/icon2.html" target="window_name" onClick="disp(\'/icon/icon2.html\')">特典アイコンについて</a></div></div>';
?>
<div id="tokuten_hidden" style="display:none;"><?php echo $inner_html ?></div>
<script type="text/javascript">
$(function(){
  try{
    $("div#rooms_toku table tbody tr td").append($("div#tokuten_hidden").html());
  }catch(e){}
});
</script>
<?php endif; ?>
<?php endif; ?>

<?php if(is_single('padma-resort-bali-at-legian')): ?>
<?php else : ?>
<script type="text/javascript">
$(function(){
  try{
    $("div#rooms div#rooms_txt div.right table tr td a").attr({target: '_blank'});
  }catch(e){}
});
</script>
<?php endif; ?>
<?php endif; ?>
