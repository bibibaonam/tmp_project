<?php 
	if(in_category('hotel_price') || get_post_type(get_the_ID()) == 'hotel_price') {
		echo '<style>#gNavi02 .jQblend span{background-position: -275px -60px !important;}</style>';
	}
	function formatDay($day){
		if ($day) {
			return date('m月d日', strtotime($day)) ;
		}
		return '';
	}
?>
<br>

<div id="price_list">
	<div id="responsive">
		
	</div>
	<table id="room_price" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th rowspan="2" class="col-first"><div><?php echo get_field('hotel_name'); ?></div></th>
			<th></th>
			<th colspan="6" ><p class="pgraph">ホテル宿泊 基本代金<br>（税、サービス料含む／単位：円）</p></th>
			<th rowspan="2" >エキストラベット料金</th>
			<th rowspan="2" >最低宿泊数</th>
			<th rowspan="2" class="col-last"></th>
		</tr>
		<tr>
			<th class="sub number">定員数</th>
			<th class="sub date" colspan="2" >宿泊日</th>
			<th class="sub">1泊2日基本代金</th>
			<th class="sub">1人参加追加代金・延泊代金<br>（1泊あたり）</th>
			<th class="sub">レイトチェックアウト追加代金（18時まで）</th>
			<th class="sub">レイトチェックアウト追加代金（22時まで）</th>
		</tr>
		
		<!-- 部屋リスト -->
		<?php 
			$rooms = get_field('rooms');
			if ($rooms) :
				foreach($rooms as $room):
					$price_pattern = $room['price_pattern'];
					$rowspan = ($price_pattern) ? 'rowspan="'.count($price_pattern).'"' : '';
					
		?>		
			<tr>
				<td <?php echo $rowspan ?> class="col-first"><div><?php echo $room['name']; ?></div></td>
				<td <?php echo $rowspan ?> class=""><?php echo $room['capacity']; ?></td>
				<td class="pattern-sign"><?php echo isset($price_pattern[0]['price_pattern_sign'])? $price_pattern[0]['price_pattern_sign'] : '' ; ?></td>
				<td><?php echo isset($price_pattern[0]['period_start'])? formatDay($price_pattern[0]['period_start']) : '' ; ?>～<?php echo isset($price_pattern[0]['period_end'])? formatDay($price_pattern[0]['period_end']) : '' ; ?></td>
				<td><?php echo (isset($price_pattern[0]['price_base']) && $price_pattern[0]['price_base']) ? number_format($price_pattern[0]['price_base'], 0) : '' ; ?></td>
				<td><?php echo (isset($price_pattern[0]['price_extend_stay']) && $price_pattern[0]['price_extend_stay']) ? number_format($price_pattern[0]['price_extend_stay'], 0) : '' ; ?></td>
				<td><?php echo (isset($price_pattern[0]['price_late_check-out18']) && $price_pattern[0]['price_late_check-out18']) ? number_format($price_pattern[0]['price_late_check-out18'], 0) : '' ; ?></td>
				<td><?php echo (isset($price_pattern[0]['price_late_check-out22']) && $price_pattern[0]['price_late_check-out22']) ? number_format($price_pattern[0]['price_late_check-out22'], 0) : '' ; ?></td>
				<td><?php echo (isset($price_pattern[0]['price_extra_bed']) && $price_pattern[0]['price_extra_bed']) ? number_format($price_pattern[0]['price_extra_bed'], 0) : '' ; ?></td>
				<td><?php echo isset($price_pattern[0]['minimum_stay'])? $price_pattern[0]['minimum_stay']: '' ; ?></td>
				<td <?php echo $rowspan ?> class="col-last">
					<div class="btn">
						<?php if ($room['reserve_link']):?>
						<a target="_blank" href="<?php echo $room['reserve_link'];?>">今すぐ予約</a>
						<?php endif;?>
					</div>
				</td>
			</tr>
			<?php  if (count($price_pattern) > 1) :
				foreach ($price_pattern as $key => $pattern):
					if  ($key == 0)	{ continue; }
			?>
			<tr>
				<td class="sub"><?php echo isset($pattern['price_pattern_sign'])? $pattern['price_pattern_sign'] : '' ; ?></td>
				<td class="sub"><?php echo isset($pattern['period_start'])? formatDay($pattern['period_start']) : '' ; ?>～<?php echo isset($pattern['period_end'])? formatDay($pattern['period_end']) : '' ; ?></td>
				<td class="sub"><?php echo (isset($pattern['price_base']) && $price_pattern[0]['price_base']) ? number_format($pattern['price_base'], 0) : '' ; ?></td>
				<td class="sub"><?php echo (isset($pattern['price_extend_stay']) && $price_pattern[0]['price_extend_stay']) ? number_format($pattern['price_extend_stay'], 0) : '' ; ?></td>
				<td class="sub"><?php echo (isset($pattern['price_late_check-out18']) && $price_pattern[0]['price_late_check-out18']) ? number_format($pattern['price_late_check-out18'], 0) : '' ; ?></td>
				<td class="sub"><?php echo (isset($pattern['price_late_check-out22']) && $price_pattern[0]['price_late_check-out22']) ? number_format($pattern['price_late_check-out22'], 0) : '' ; ?></td>
				<td class="sub"><?php echo (isset($pattern['price_extra_bed']) && $price_pattern[0]['price_extra_bed']) ? number_format($pattern['price_extra_bed'], 0) : '' ; ?></td>
				<td class="sub"><?php echo isset($pattern['minimum_stay'])? $pattern['minimum_stay']: '' ; ?></td>
			</tr>
			<?php 
					endforeach;
				endif;?>
		<?php	
			endforeach;
			endif; 
		?>
		<!-- end 部屋リスト -->
		
		<!-- security_plan -->
		<?php if (get_field('security_plan')): ?>
		<tr>
			<td class="col-first"><div>安心プラン<br>（空港往復送迎+日本語ガイド）</div></td>
			<td colspan="10" class="col-last"><span class="pgraph"><?php echo nl2br(get_field('security_plan'))?></span></td>
		</tr>
		<?php endif;?>
		<!--  end security_plan -->
		
		<!-- 取消規定 -->
		<?php $cancell_rules = get_field('cancell_rules');?>
		<?php if ($cancell_rules): ?>
		
		<?php 
			$rowCount = 0;
			$htmlFirst = '';
			$htmlNext = '';
			foreach ($cancell_rules as $key => $rule):
				$elCount = count($rule['sign_list']);
				if (!$rule['cancell_rule'] && $elCount == 0){
					continue;
				}
				if ($rule['cancell_rule'] && $elCount == 0) {
					$rowCount = $rowCount + 1;
				} else {
					$rowCount = $rowCount + $elCount;
				}
				$elRowSpan = ($elCount) ? 'rowspan="'.$elCount.'"' : '';
				
				if ($key == 0) {
					$htmlFirst .= '<td class="">'.(isset($rule['sign_list'][0]) ? $rule['sign_list'][0]['sign'] : '').'</td>';
					$htmlFirst .= '<td colspan="8" '.$elRowSpan.' class="col-last"><span class="pgraph">'.$rule['cancell_rule'].'</span></td>';
				} else {
					$htmlNext .= '<tr>';
					$htmlNext .= '<td class="sub">'.(isset($rule['sign_list'][0]) ? $rule['sign_list'][0]['sign'] : '').'</td>';
					$htmlNext .= '<td colspan="8" '.$elRowSpan.' class="sub col-last"><span class="pgraph">'.$rule['cancell_rule'].'</span></td>';
					$htmlNext .= '</tr>';
				}
				if ($elCount > 0) {
					foreach ($rule['sign_list'] as $subkey => $sign) {
						if ($subkey == 0) {continue;}
						$htmlNext .= '<tr><td class="sub">'.$sign['sign'].'</td></tr>';
					}
				}
			endforeach;
			
			$rowSpan = ($rowCount) ? 'rowspan="'.$rowCount.'"' : '';
		?>
		<tr>
			<td <?php echo $rowSpan;?> class="col-first"><div>取消規定</div></td>
			<td <?php echo $rowSpan;?>></td>
			<?php echo $htmlFirst;?> 
		</tr>
		<?php echo $htmlNext; ?>
		<?php endif;?>
		<!--  end 取消規定 -->
		
		
		<!-- 含まれているもの -->
		<?php if (get_field('included')): ?>
		<tr>
			<td class="col-first"><div>含まれているもの</div></td>
			<td colspan="10" class="col-last"><span class="pgraph"><?php echo nl2br(get_field('included'))?></span></td>
		</tr>
		<!-- end 含まれているもの -->
		<?php endif;?>
		
		<!-- 注意 -->
		<?php if (get_field('attention')): ?>
		<tr>
			<td class="col-first"><div>注意</div></td>
			<td colspan="10" class="col-last"><span class="pgraph"><?php echo nl2br(get_field('attention'))?></span></td>
		</tr>
		<?php endif;?>
		<!-- end 注意 -->
		
		<!-- ホテル特典 -->
		<?php if (get_field('privilege')): ?>
		<tr>
			<td class="col-first"><div>ホテル特典</div></td>
			<td colspan="10" class="col-last"><span class="pgraph"><?php echo nl2br(get_field('privilege'))?></span></td>
		</tr>
		<?php endif;?>
		<!-- end ホテル特典 -->
	</table>
</div>

<script>
	jQuery(window).resize(function() {
		//resizeData();
	});
	jQuery(window).load(function(){
		resizeData();
	});
	function resizeData () {
		var windowWidth = jQuery(window).width();
		jQuery('#responsive').attr('style', 'display:none');
		if (windowWidth <= 800) {
			jQuery('#responsive').attr('style', 'display:block');
			var html = '';
			jQuery('#room_price').find('tr').each(function(indextr, eltr){
				var elHeightTr = jQuery(eltr).height();
				jQuery(eltr).attr('style', 'height: '+elHeightTr+'px !important;');
			});
			jQuery('.col-first').each(function(index, el){
				var elHeight = jQuery(el).height();
				html = html + '<div class="responsive-table" style="height:'+elHeight+'px !important;">';
				html = html + jQuery(el).html();
				html = html + '</div>';			
			});
			if (html) {
				jQuery('#responsive').html(html);
			}
			jQuery('.col-first').each(function(index, el){
				jQuery(el).attr('style', 'display:none');
			});
			
			jQuery('#price_list').addClass('responsive_price_list');
			jQuery('.col-last').attr('style', 'border-right: none !important');
		}
	}
</script>	