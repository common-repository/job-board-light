<?php
	wp_enqueue_style('bootstrap-wp-jobboard-piblic-11', wp_jobboard_URLPATH . 'admin/files/css/iv-bootstrap.css');
	wp_enqueue_style('wp-jobboard-pricing-table', wp_jobboard_URLPATH . 'admin/files/css/pricing-table.css');
	wp_enqueue_style('font-awesome', wp_jobboard_URLPATH . 'admin/files/css/font-awesome/css/font-awesome.min.css');

	global $wpdb, $post;
	$currencies = array();
	$currencies['AUD'] ='$';$currencies['CAD'] ='$';
	$currencies['EUR'] ='€';$currencies['GBP'] ='£';
	$currencies['JPY'] ='¥';$currencies['USD'] ='$';
	$currencies['NZD'] ='$';$currencies['CHF'] ='Fr';
	$currencies['HKD'] ='$';$currencies['SGD'] ='$';
	$currencies['SEK'] ='kr';$currencies['DKK'] ='kr';
	$currencies['PLN'] ='zł';$currencies['NOK'] ='kr';
	$currencies['HUF'] ='Ft';$currencies['CZK'] ='Kč';
	$currencies['ILS'] ='₪';$currencies['MXN'] ='$';
	$currencies['BRL'] ='R$';$currencies['PHP'] ='₱';
	$currencies['MYR'] ='RM';$currencies['AUD'] ='$';
	$currencies['TWD'] ='NT$';$currencies['THB'] ='฿';
	$currencies['TRY'] ='TRY';	$currencies['CNY'] ='¥';
	$currencies['INR'] ='₹';
	$currencyCode= get_option('epjbjobboard_api_currency');
	$currencyCode=(isset($currencies[$currencyCode]) ? $currencies[$currencyCode] :$currencyCode );
	$args = array(
	'post_type' => 'jobboard_pack', 
	'post_status' => 'draft',
	'posts_per_page'=> '200', 
	'orderby'       => 'meta_value',
	'meta_key'      => 'jobboard_display_order',
	'order'          => 'ASC',
	);
	$the_query = new WP_Query( $args );
	$total_package=$the_query->found_posts;
	if($the_query->found_posts>0){
		if($total_package==1 || $total_package==2){
			$window_ratio='33.33';
			}else{
			$window_ratio= 100/$total_package;
		}
	}
	$color_setting=get_option('epjbdir_color');
	if($color_setting==""){$color_setting='#0099e5';}
	$color_setting=str_replace('#','',$color_setting);
?>
<div class="bootstrap-wrapper pricing-table-content">
	<div class="container ">
		<div class="row">
		<?php
			$iv_gateway = get_option('jobboard_payment_gateway');
			if($iv_gateway=='woocommerce'){
				$api_currency= get_option( 'woocommerce_currency' );
				$currencyCode= get_woocommerce_currency_symbol( $api_currency );
			}
			$membership_pack = $the_query->posts;
			if($the_query->found_posts>0){
				$page_name_reg=get_option('epjbjobboard_registration' );
				$feature_max=0;
				foreach ( $membership_pack as $row5 )
				{
					$feature_arr = array_filter(explode("\n", $row5->post_content));
					$last_li_no=sizeof($feature_arr);
					if($last_li_no > $feature_max){
						$feature_max=$last_li_no;
					}
				}
				$i=0;
				$pt=0;$amount_only='';
				foreach ( $membership_pack as $row )
				{	$amount_only='';
					$recurring_text='  ';
					if(get_post_meta($row->ID, 'jobboard_package_cost', true)=='0' or get_post_meta($row->ID, 'jobboard_package_cost', true)==""){
						$amount= 'Free';
						}else{
						$amount= $currencyCode.' '. get_post_meta($row->ID, 'jobboard_package_cost', true);
						$amount_only= get_post_meta($row->ID, 'jobboard_package_cost', true);
					}
					$recurring= get_post_meta($row->ID, 'jobboard_package_recurring', true);
					if($recurring == 'on'){
						$amount= $currencyCode.' '. get_post_meta($row->ID, 'jobboard_package_recurring_cost_initial', true);
						$amount_only= get_post_meta($row->ID, 'jobboard_package_recurring_cost_initial', true);
						$count_arb=get_post_meta($row->ID, 'jobboard_package_recurring_cycle_count', true);
						if($count_arb=="" or $count_arb=="1"){
							$recurring_text=" per ".' '.get_post_meta($row->ID, 'jobboard_package_recurring_cycle_type', true);
							}else{
							$recurring_text=' per '.$count_arb.' '.get_post_meta($row->ID, 'jobboard_package_recurring_cycle_type', true).'s';
						}
						}else{
						$recurring_text=' &nbsp; ';
					}
					if($i>3){
						$pt=0;
					}
					$pt++;
				?>				
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-pricing <?php echo (get_post_meta($row->ID, '_is_it_feature', true)=='yes'?'special-single-price': ''); ?> ">
						<div class="pricing-head">
							<h2 class="pricing-price">
								<?php
									if($amount_only!=''){
									?>
									<span><?php echo esc_html($currencyCode); ?></span> <?php echo esc_html($amount_only);?>
									<?php
										}else{
										esc_html_e('Free','finaluser');
									}
								?>
							</h2>
							<h4 class="pricing-time"><?php echo strtoupper($row->post_title); ?> </h4>
						</div>
						<div class="pricing-body">
							<p class="short-desc"><?php echo esc_html(get_post_meta($row->ID,'package_subtitle',true)); ?> </p>
							<div class="pricing-details">
								<?php	$aw=0;
									for($i=0;$i<20;$i++){
										if(get_post_meta($row->ID,'package_feature_'.$i,true)!=''){?>
										<div class="single-pricing-details clearfix">
											<div class="spd-left">
												<i class="fa <?php echo esc_html(get_post_meta($row->ID,'feature_icon_'.$i,true));?>"></i>
											</div>
											<div class="spd-right">
												<p>
													<?php echo esc_html(get_post_meta($row->ID,'package_feature_'.$i,true));?>
												</p>
											</div>
										</div>
										<?php
										}
									}
								?>
							</div>
							<a class="btn btn-primary pricing-buy-now" href="<?php echo get_page_link($page_name_reg).'?&package_id='.esc_attr($row->ID); ?>"><?php esc_html_e('BUY NOW','finaluser'); ?></a>
							<span class="mgbtm"><p></p><span>
							</div>
							</div>
						</div>
						<?php
							$i++;
						}
					}
				?>
				
			</div>
		</div>	
	</div>	