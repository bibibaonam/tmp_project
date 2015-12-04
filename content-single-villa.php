<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<?php $category = get_the_category();
	if ($category) {
		$post_type = get_post_type(get_the_ID());
		if ($post_type == 'hotels') {
			echo '<style>#gNavi02 .jQblend span{background-position: -275px -60px !important;}</style>';
		}	
	} 
?>			
				
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="detaile_h"></div>
<div id="detail">
<?php if ( 0 === get_query_var( 'page' ) ) : ?>
<?php /*?>詳細ページ<?php */?>
<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if (is_single_hotel()): ?>	
<div id="main">
    <div id="main_title">
        <h1><?php echo the_title(); ?></h1>
        <span><?php echo post_custom('title_en'); ?></span>
    </div>
    <div id="main_info">
        <div id="area"><?php echo get_area(get_the_ID());?></div>
        <?php if(post_custom('baligirl_rank')): ?>
        <div id="rank"></div>
        <?php endif; ?>
       
		<?php //if(post_custom('free_text')): 
			$free_texts = get_field('free_texts');
			if ($free_texts):
		?>
        <ul>
        	<?php //$field = get_post_meta($post->ID, 'free_text', false);
				foreach ( $free_texts as $key => $row ):
					if ($key == 2) { break; }
					echo '<li>'.$row['free_text']. '</li>';
				endforeach;
			
			?>
        </ul>
        <?php endif; ?>
    </div>
</div>
	
<?php if(has_post_thumbnail()): ?>	
<div id="main_img_detail"><?php the_post_thumbnail('size_958_x395');?></div>
<?php endif; ?>

<div id="tour1" class="tour">
    <?php $departureList = get_field('tour_link_departure_id');
	$hotel_id = get_field('hotel_id');
	$arrDep = array();
	$arrHotelID = array();
	if ($departureList) {
		foreach($departureList as $itemList) {
			switch($itemList){
			case '2':
				$arrDep[$itemList] ='成田発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '3':
				$arrDep[$itemList] ='羽田発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '5':
				$arrDep[$itemList] ='関空発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '7':
				$arrDep[$itemList] ='名古屋発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '8':
				$arrDep[$itemList] ='福岡発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '10':
				$arrDep[$itemList] ='札幌発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			case '11':
				$arrDep[$itemList] ='仙台発';
				$arrHotelID[$itemList] = $hotel_id;
				break;
			}
		}
	}
    ?>
    <ul>
        <li class="tour_read"><strong>現在のツアー最安値</strong>
        燃油サーチャージャー込　その他税別途</li>
		<?php if ($arrDep):?>
        <?php foreach($arrDep as $key=>$itemList) {?>
			<li class="data-tour-search" data-tour-search="hotel_id=<?php echo $arrHotelID[$key] ; ?>&departure_place_id=<?php echo $key ?>">
			<div data-tour>
			<strong><?php echo $itemList; ?> <span data-tour-info="price_min" class="tour-price-val"></span>円〜</strong>
			<div class="btn"><a href="//www.tabikobo.com/tour/tourresult?media=plumeriabali&region_id=1&country_id=3&hotel_id=<?php echo get_field('hotel_id'); ?>">予約</a></div>
			</div>
			</li>
		<?php } ?>
		<?php endif; ?>
        <?php if(post_custom('hotel_reserve_link')): ?>
        <li class="tour_hotel pr0"><strong>ホテルのみご予約はこちらから</strong><div class="btn"><a href="<?php echo post_custom('hotel_reserve_link'); ?>">詳細</a></div></li>
        <?php endif; ?>
    </ul>
	<div style="clear:both;"></div>
    <script src="http://api.tabikobo.com/myapi/js/tourprice-1.0.0.js"></script>
<script type="text/javascript">
　　$(document).ready(function(){
		var rsTourPrice = tourprice.searchAndLoad();
		rsTourPrice.done(function(){
			//「ツアー最安値」の項目が取得できない場合、「ツアー最安値」の項目を非表示する
			$('.tour-price-val').each(function(){
				if(!$(this).html()) {
					$(this).parent().parent().parent().remove();
				}
			});
			////
			// 現在のツアー最安値」が１件も取得できない場合、「現在のツアー最安値」を非表示にする
			var data_tour_search = $('.data-tour-search');
			var tour_hotel = $('.tour_hotel');
			if (data_tour_search.length == 0) {
				$('.tour_read').remove();
				if (tour_hotel.length > 0) {tour_hotel.remove()}
				$('#tour1').removeClass('tour');
				$('#tour2').removeClass('tour');
			}
			////
	   });
　　});
</script>
</div>

<div id="lNaviBox">
    <div id="lNavi">
        <ul>
            <li class="lNavi1"><a href="#hotel">ホテル<br>概要</a></li>
            <?php if(post_custom('rooms')): ?>
            <li class="lNavi2"><a href="#rooms">客室<br>情報</a></li>
            <?php else : ?>
            <li class="lNavi2"><p>客室<br>情報</p></li>
            <?php endif; ?>
            <?php if(post_custom('spas')): ?>
            <li class="lNavi3 line1"><a href="#spa">スパ</a></li>
            <?php else : ?>
            <li class="lNavi3 line1"><p>スパ</p></li>
            <?php endif; ?>
            <?php if(post_custom('restaurants')): ?>
            <li class="lNavi4"><a href="#restaurant">レスト<br>ラン<br>&nbsp;</a></li>
            <?php else : ?>
            <li class="lNavi4"><p>レスト<br>ラン</p></li>
            <?php endif; ?>
            <?php if(post_custom('Q&A')): ?>
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
        	<?php if(post_custom('content_heading')): ?>
            <h2><?php echo post_custom('content_heading'); ?></h2>
            <?php endif; ?>
            <?php if(post_custom('hotel_content')): ?>
            <p><?php echo nl2br(post_custom('hotel_content')); ?></p>
            <?php endif; ?>
    	</div>
        <?php if(post_custom('trip_adviser_link')): ?>
        <div id="villa_trip">
            <iframe src="<?php echo post_custom('trip_adviser_link'); ?>" frameborder="0" scrolling="no" width="320" height="240"></iframe>
        </div>
        <?php endif; ?>
    </div>
    
    <div id="hotel_info1">
        <h3>ホテル基本情報</h3>
		<?php $base_infos = get_field('base_info');?>
        <table border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th>ホテル名</th>
                <td><?php echo the_title(); ?><span>(<?php echo post_custom('title_en'); ?>)</span></td>
            </tr>
            <tr>
                <th>エリア</th>
                <td><?php echo get_area(get_the_ID());?></td>
            </tr>
            <tr>
                <th>address</th>
                <td><?php if($base_infos): ?><?php echo $base_infos[0]['address']; ?> <?php endif; ?></td>
            </tr>
            <tr>
                <th>公式HP</th>
                <td><?php if($base_infos): ?><a href="<?php echo $base_infos[0]['homepage']; ?>" target="_blank"><?php echo $base_infos[0]['homepage']; ?></a><?php endif; ?></td>
            </tr>
            <tr>
                <th>日本語スタッフ</th>
                <td><?php if($base_infos): ?><?php echo $base_infos[0]['staff_japanese']; ?> <?php endif; ?></td>
            </tr>
            <tr>
                <th>チェックイン</th>
                <td><?php if($base_infos): ?><?php echo $base_infos[0]['check_in']; ?><?php endif; ?></td>
            </tr>
            <tr>
                <th>チェックアウト</th>
                <td><?php if($base_infos): ?><?php echo $base_infos[0]['check_out']; ?><?php endif; ?></td>
            </tr>
          
        </table>
    </div>
    
    <div id="hotel_info2" class="box">
    	<div class="left">
        	<h3>基本サービス</h3>
			<?php $services = get_field('service');
				$shuttle = '×'; $fitness = '×';$room_service = '×'; $laundry = '×'; $public_pool = '×'; $kids_room = '×'; $baby_sitter = '×'; $lounge = '×'; $wifi = '×'; $activity = '×';
				if ($services) {
					foreach ($services as $val) {
						switch ($val) {
							case 'shuttle':
								$shuttle = '○';
								break;
							case 'fitness':
								$fitness = '○';
								break;
							case 'room_service':
								$room_service = '○';
								break;
							case 'laundry':
								$laundry = '○';
								break;
							case 'public_pool':
								$public_pool = '○';
								break;
							case 'kids_room':
								$kids_room = '○';
								break;
							case 'baby_sitter':
								$baby_sitter = '○';
								break;
							case 'lounge':
								$lounge = '○';
								break;
							case 'wifi':
								$wifi = '○';
								break;
							case 'activity':
								$activity = '○';
								break;
							default:
								break;
						}
					}
				}
			?>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th>シャトルサービス</th>
                    <td><?php echo $shuttle;?></td>
                </tr>
                <tr>
                    <th>フットネスジム</th>
                    <td><?php echo $fitness;?></td>
                </tr>
                <tr>
                    <th>ルームサービス</th>
                    <td><?php echo $room_service;?></td>
                </tr>
                <tr>
                    <th>ランドリーサービス</th>
                    <td><?php echo $laundry;?></td>
                </tr>
                <tr>
                    <th>パブリックプール</th>
                    <td><?php echo $public_pool;?></td>
                </tr>
                <tr>
                    <th>キッズルーム</th>
                    <td><?php echo $kids_room;?></td>
                </tr>
                <tr>
                    <th>ベビーシッター</th>
                    <td><?php echo $baby_sitter;?></td>
                </tr>
                <tr>
                    <th>デバーチャーラウンジ</th>
                    <td><?php echo $lounge;?></td>
                </tr>
                <tr>
                    <th>WIFI</th>
                    <td><?php echo $wifi;?></td>
                </tr>
                <tr>
                    <th>アクティビティー</th>
                    <td><?php echo $activity;?></td>
                </tr>
				
            </table>
        </div>
    	<div class="right">
        	<h3>ホテル基本設備</h3>
			<?php $amenites  = get_field('amenity');
				$air_conditione = '×';$bathtub = '×';$bath_item = '×';$toothbrush = '×';$tv = '×';$audio_player = '×';$fridge = '×';$towel = '×';
				$bar = '×';$bathrobe = '×';$safety_box = '×';$hair_dryer = '×';$kettle_pot = '×';
				if ($amenites) {
					foreach ($amenites as $val) {
						switch ($val) {
							case 'air_conditione':
								$air_conditione = '○';
								break;
							case 'bathtub':
								$bathtub = '○';
								break;
							case 'bath_item':
								$bath_item = '○';
								break;
							case 'toothbrush':
								$toothbrush = '○';
								break;
							case 'tv':
								$tv = '○';
								break;
							case 'audio_player':
								$audio_player = '○';
								break;
							case 'fridge':
								$fridge = '○';
								break;
							case 'towel':
								$towel = '○';
								break;
							case 'bar':
								$bar = '○';
								break;
							case 'bathrobe':
								$bathrobe = '○';
								break;
							case 'safety_box':
								$safety_box = '○';
								break;
							case 'hair_dryer':
								$hair_dryer = '○';
								break;
							case 'kettle_pot':
								$kettle_pot = '○';
								break;
							default:
								break;
						}
					}
				}	
				
			?>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th>エアコン</th> <td><?php echo $air_conditione; ?></td>
                </tr>
                <tr>
                    <th>バスタブ</th><td><?php echo $bathtub; ?></td>
                </tr>
                <tr>
                    <th>石けん・シャンプー・コンディショナー</th><td><?php echo $bath_item; ?></td>
                </tr>
                <tr>
                    <th>歯ブラシ</th><td><?php echo $toothbrush; ?></td>
                </tr>
                <tr>
                    <th>テレビ</th><td><?php echo $tv; ?></td>
                </tr>
                <tr>
                    <th>CD/DVDプレイヤー</th><td><?php echo $audio_player; ?></td>
                </tr>
                <tr>
                    <th>冷蔵庫</th><td><?php echo $fridge; ?></td>
                </tr>
                <tr>
                    <th>タオル</th><td><?php echo $towel; ?></td>
                </tr>
                <tr>
                    <th>ミニバー</th><td><?php echo $bar; ?></td>
                </tr>
                <tr>
                    <th>バスローブ（ゆかた）</th><td><?php echo $bathrobe; ?></td>
                </tr>
                <tr>
                    <th>セーフティーボックス</th><td><?php echo $safety_box; ?></td>
                </tr>
                <tr>
                    <th>ヘアードライヤー</th><td><?php echo $hair_dryer; ?></td>
                </tr>
                <tr>
                    <th>湯沸かしポット</th><td><?php echo $kettle_pot; ?></td>
                </tr>
            </table>
        </div>
    </div>
    
	<?php $icons = get_field('icon');
		$girls = false; $alone = false; $couple = false; $family = false; $group = false; $honeymoon = false; $premium = false;
		if ($icons) {
			foreach ($icons as $row) {
				if ($row == 'girls') { $girls = true; }
				else if ($row == 'alone') { $alone = true; }
				else if ($row == 'couple') { $couple = true; }
				else if ($row == 'family') { $family = true; }
				else if ($row == 'group') { $group = true; }
				else if ($row == 'honeymoon') {$honeymoon = true; }
				else if ($row == 'premium') {$premium = true; }
			}
		}
	?>
    <?php if($girls || $alone || $couple || $family || $group || $honeymoon || $premium): ?>
    <div id="icon_list">
    	<ul>
        	<?php if($girls): ?>
        	<li><img src="/img/villa/osusume_icon01.gif" width="46" height="46" alt="女子旅"></li>
            <?php endif; ?>
        	<?php if($alone): ?>
        	<li><img src="/img/villa/osusume_icon02.gif" width="46" height="46" alt="ひとり旅"></li>
            <?php endif; ?>
        	<?php if($couple): ?>
        	<li><img src="/img/villa/osusume_icon03.gif" width="46" height="46" alt="カップル"></li>
            <?php endif; ?>
        	<?php if($family): ?>
        	<li><img src="/img/villa/osusume_icon04.gif" width="46" height="46" alt="ファミリー"></li>
            <?php endif; ?>
			<?php if($honeymoon): ?>
        	<li><img src="/img/villa/osusume_icon05.gif" width="46" height="46" alt="グループ"></li>
            <?php endif; ?>
			<?php if($group): ?>
        	<li><img src="/img/villa/osusume_icon06.gif" width="46" height="46" alt="ハネムーン"></li>
            <?php endif; ?>
        	<?php if($premium): ?>
        	<li><img src="/img/villa/osusume_icon07.gif" width="46" height="46" alt="プレミアム世代"></li>
            <?php endif; ?>
        </ul>
        <div class="icon_btn"><a href="/icon/hotel_osusume.html" target="window_name" onclick="disp('/icon/hotel_osusume.html')">おすすめアイコンについて</a></div>
    </div>
    <?php endif; ?>
   
	<?php 
		$hotel_images = '';
		if (post_custom('hotel_images')) {
			$hotel_images = get_field('hotel_images');
		}
	?>
    <?php if($hotel_images): ?>
    <ul id="hotel_photo">
		<?php foreach ($hotel_images as $image):?>
			<?php if ($image['image']['url']): ?>
			<li>
				<div class="photo"><img src="<?php echo $image['image']['url']; ?>"></div>
				<?php if($image['image']['caption']): ?>
				<span><?php echo $image['image']['caption']; ?></span>
				<?php endif; ?>
			</li>
			<?php endif;?>
		<?php endforeach;?>
    </ul>
    <?php endif; ?>
    
	<?php
		$lounges = '';
		if (post_custom('lounges')) {
			$lounges = get_field('lounges');
		}
	?>
    <?php if($lounges): ?>
    <div id="lounge">
    	<ul>
			<?php foreach ($lounges as $row): ?>
			<li>
				<h3><?php echo $row['name']?></h3>
				<div class="box">
					<div class="photo"><img src="<?php echo $row['image']['url'] ? $row['image']['url'] : ''; ?>" alt="<?php $row['name']; ?>"></div>
					<div class="txt">
						<p><?php echo nl2br($row['content']); ?></p>
						<ul>
							<li>■営業時間：<?php echo nl2br($row['business_hours']); ?></li>
							<li>■最終入場時間：<?php echo nl2br($row['last_admission_time']); ?></li>
						</ul>
					</div>
				</div>
			</li>
        	<?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>
</div><!-- id=hotel -->

<?php
		$rooms = '';
		if (post_custom('rooms')) {
			$rooms = get_field('rooms');
		}
	?>
<?php if($rooms): ?>
<div id="rooms" class="section">
	<h2>客室情報</h2>
    
    <div id="rooms_first">
    	<ul>
			<?php foreach ($rooms as $key => $row): 
				if ($key == 5) break;
			?>
			<li class="box">
				<div class="right">
					<h3><?php echo $row['name'];?></h3>
					<p><?php echo nl2br($row['content']); ?></p>
					<ul>
						<li>・客室の広さ：<?php echo $row['size']; ?></li>
						<li>・お部屋の数：<?php echo $row['count']; ?></li>
						<li>・設置ベッド：<?php echo $row['bed']; ?></li>
					</ul>
					<div class="room_detail">
						<?php echo $row['properties']; ?>
					</div>
				</div>
				<!-- 画像・プラン -->
				<div class="left">
					<div class="photo"><img src="<?php echo $row['image']['url'] ? $row['image']['url'] : ''; ?>"></div>
					<span><?php echo $row['image']['caption'] ? $row['image']['caption'] : ''; ?></span>
					<?php if ($row['layout_image']['url']):?>
					<div class="photo"><img src="<?php echo $row['layout_image']['url'] ? $row['layout_image']['url'] : ''; ?>"></div>
					<span><span><?php echo $row['layout_image']['caption'] ? $row['layout_image']['caption'] : ''; ?></span></span>
					<?php endif; ?>
					<div class="btn"><a href="<?php echo $row['plan_link']; ?>" target="_blank">このお部屋のプランを見る</a></div>
				</div>
			</li>
			<?php endforeach; ?>
        </ul>
    </div>
	
    <?php if(count($rooms) > 5): ?>
    <div id="room_other">
    	<ul>
        	<?php foreach ($rooms as $key => $row): 
				if ($key < 5) continue;
			?>
			<li class="box">
				<div class="right">
					<h3><?php echo $row['name'];?></h3>
					<p><?php echo nl2br($row['content']); ?></p>
					<ul>
						<li>・客室の広さ：<?php echo $row['size']; ?></li>
						<li>・お部屋の数：<?php echo $row['count']; ?></li>
						<li>・設置ベッド：<?php echo $row['bed']; ?></li>
					</ul>
					<div class="room_detail">
						<?php echo $row['properties']; ?>
					</div>
				</div>
				<!-- 画像・プラン -->
				<div class="left">
					<div class="photo"><img src="<?php echo $row['image']['url'] ? $row['image']['url'] : ''; ?>"></div>
					<span><?php echo $row['image']['caption'] ? $row['image']['caption'] : ''; ?></span>
					<?php if ($row['layout_image']['url']):?>
					<div class="photo"><img src="<?php echo $row['layout_image']['url'] ? $row['layout_image']['url'] : ''; ?>"></div>
					<span><?php echo $row['layout_image']['caption'] ? $row['layout_image']['caption'] : ''; ?></span>
					<?php endif; ?>
					<div class="btn"><a href="<?php echo $row['plan_link']; ?>" target="_blank">このお部屋のプランを見る</a></div>
				</div>
			</li>
			<?php endforeach; ?>
        </ul>
    </div>
    
    <div class="slide_btn"><a>すべての客室をみる</a></div>
    <?php endif; ?>
</div><!-- id=rooms -->
<?php endif; ?>

<?php
	$spas = '';
	if (post_custom('spas')) {
		$spas = get_field('spas');
	}
?>
<?php if(post_custom('spas')): ?>
<div id="spa" class="section">
	<h2>スパ</h2>
    <div id="spa_first">
		<h3><?php echo $spas[0]['name']; ?></h3>
		<div id="spa_main">
			<div class="photo"><img src="<?php echo $spas[0]['image']['url'] ? $spas[0]['image']['url'] : ''; ?>"></div>
			<div class="txt">
				<p><?php echo nl2br($spas[0]['content']); ?></p>
				<?php if($spas[0]['business_hours'] || $spas[0]['last_admission_time']): ?>
				<ul>
					<?php if($spas[0]['business_hours']): ?>
					<li>■営業時間：<?php echo $spas[0]['business_hours']; ?></li>
					<?php endif; ?>
					<?php if($spas[0]['last_admission_time']): ?>
					<li>■最終入場時間：<?php echo $spas[0]['last_admission_time']; ?></li>
					<?php endif; ?>
				</ul>
				<?php endif; ?>
			</div>
		</div>
    
        <h4><?php echo $spas[0]['package_name']?></h4>
		<?php if(isset($spas[0]['packages']) && $spas[0]['packages']): ?>
			<ul>
				<?php foreach ($spas[0]['packages'] as $pa): ?>
				<li>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th><strong>■<?php echo $pa['name']; ?></strong>
								<span><?php echo $pa['time']; ?><br><?php echo $pa['price']; ?>
							</th>
							<td>
								<?php echo nl2br($pa['content']); ?>
								<div class="btn"><a href="<?php echo $pa['reserve_link']?>" target="_blank">このメニューを予約する</a></div>
							</td>
						</tr>
					</table>
				</li>	
				<?php endforeach; ?>
			</ul>
        <?php endif; ?>
    </div>
    <br>
    <?php if(count($spas) > 1): ?>
    <div id="spa_other">
		<?php foreach ($spas as $key => $row): ?>
		<?php if ($key==0) continue; ?>
			<h3><?php echo $row['name']; ?></h3>
			 <div id="spa_main">
				 <div class="photo"><img src="<?php echo $row['image']['url'] ? $row['image']['url'] : ''; ?>"></div>
				 <div class="txt">
					 <p><?php echo nl2br($row['content']); ?></p>
					 <?php if($row['business_hours'] || $row['last_admission_time']): ?>
					 <ul>
						 <?php if($row['business_hours']): ?>
						 <li>■営業時間：<?php echo $spas[0]['business_hours']; ?></li>
						 <?php endif; ?>
						 <?php if($row['last_admission_time']): ?>
						 <li>■最終入場時間：<?php echo $row['last_admission_time']; ?></li>
						 <?php endif; ?>
					 </ul>
					 <?php endif; ?>
				 </div>
			</div>
			<h4><?php echo $row['package_name']?></h4>
			<?php if(isset($row['packages']) && $row['packages']): ?>
				<ul>
					<?php foreach ($row['packages'] as $pa): ?>
					<li>
						<table border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th><strong>■<?php echo $pa['name']; ?></strong>
									<span><?php echo $pa['time']; ?><br><?php echo $pa['price']; ?>
								</th>
								<td>
									<?php echo nl2br($pa['content']); ?>
									<div class="btn"><a href="<?php echo $pa['reserve_link']?>" target="_blank">このメニューを予約する</a></div>
								</td>
							</tr>
						</table>
					</li>	
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		 <br>	
		<?php endforeach; ?>	
    </div>
    
    <div class="slide_btn"><a>すべてのスパメニューをみる</a></div>
    <?php endif; ?>
</div><!-- id=spa -->
<?php endif; ?>

<?php
	$restaurants = '';
	if (post_custom('restaurants')) {
		$restaurants = get_field('restaurants');
	}
?>
<?php if($restaurants): ?>
<div id="restaurant" class="section">
	<h2>レストラン</h2>
    
    <div id="rest_first">
    	<ul>
			<li class="box">
				<!-- レストラン画像 -->
				<div class="photo"><img src="<?php echo $restaurants[0]['image']['url'] ? $restaurants[0]['image']['url'] : ''; ?>"></div>
				<!-- テキスト情報 -->
				<div class="txt">
				<h3><?php echo $restaurants[0]['name']; ?></h3>
				<p><?php echo nl2br($restaurants[0]['content']); ?></p>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<th>内容</th><td><?php echo $restaurants[0]['genre']; ?></td>
					</tr>
					<tr>
						<th>営業時間</th><td><?php echo $restaurants[0]['business_hours']?></td>
					</tr>
					<tr>
						<th>場所</th><td><?php echo $restaurants[0]['place']?></td>
					</tr>
					<tr>
						<th>収容人数</th><td><?php echo $restaurants[0]['seating_capacity']?></td>
					</tr>
				</table>
			</li>
        </ul>
    </div>
    
    <?php if(count($restaurants) > 1): ?>
    <div id="rest_other">
    	<ul>
			<?php foreach ($restaurants as $key => $row): ?>
			<?php if ($key==0) continue; ?>
			<li class="box">
					<!-- レストラン画像 -->
					<div class="photo"><img src="<?php echo $row['image']['url'] ? $row['image']['url'] : ''; ?>"></div>
					<!-- テキスト情報 -->
					<div class="txt">
					<h3><?php echo $row['name']; ?></h3>
					<p><?php echo nl2br($row['content']); ?></p>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<th>内容</th><td><?php echo $row['genre']; ?></td>
						</tr>
						<tr>
							<th>営業時間</th><td><?php echo $row['business_hours']?></td>
						</tr>
						<tr>
							<th>場所</th><td><?php echo $row['place']?></td>
						</tr>
						<tr>
							<th>収容人数</th><td><?php echo $row['seating_capacity']?></td>
						</tr>
					</table>
				</li>
			<?php endforeach; ?>
        </ul>
    </div>
    
    <div class="slide_btn"><a>すべてのレストラン情報をみる</a></div>
    <?php endif; ?>
</div><!-- id=restaurant -->
<?php endif; ?>

<div id="tour2" class="tour">
</div>
<script type="text/javascript">
　　$(document).ready(function(){
　　  $('#tour2').html($('#tour1').html());
　　});
</script>
<?php
	$faqs = '';
	if (post_custom('Q&A')) {
		$faqs = get_field('Q&A');
	}
?>
<?php if($faqs): ?>
<div id="faq">
	<div class="inner">
        <ul>
			<?php foreach ($faqs as $key => $row): ?>
			<li>
				<h3><?php echo nl2br($row['question'])?></h3>
				<p><strong>&nbsp;</strong><br>
				<?php echo nl2br($row['answer'])?>
			</li>
			<?php endforeach; ?>
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
<?php //the_content(); ?>
 <?php if ( 0 === get_query_var( 'page' ) ) : ?>
<?php /*?>詳細ページ<?php */?>
<?php else : ?>
<?php /*?>料金ページ<?php */?>  
    <!--<div id="return"><a href="/villa/padma-resort-bali-at-legian/">パドマ リゾート バリ アット レギャン 詳細ページに戻る</a></div>-->
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


<?php if(post_custom('baligirl_rank')): ?>
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
<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if(is_single_hotel()): ?>
<script type="text/javascript">
$(function(){
  try{
    $("div#rank").append('<img src="/img/osusume_rank<?php echo post_custom('baligirl_rank') ?>.jpg" width="<?php echo $levels[post_custom('baligirl_rank')] ?>" height="17" alt="バリガール・ランク <?php echo str_replace('-', '～', post_custom('hotel_baligirl_rank')) ?>つ星" class="rank<?php echo post_custom('hotel_baligirl_rank') ?>">');
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


<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if(is_single_hotel()): ?>
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
<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if(is_single_hotel()): ?>
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
<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if(is_single_hotel()): ?>
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

<?php //if(is_single('padma-resort-bali-at-legian')): ?>
<?php if(is_single_hotel()): ?>
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
