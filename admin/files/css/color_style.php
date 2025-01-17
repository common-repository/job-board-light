<?php

$color_setting=get_option('epjbdir_color');	
if($color_setting==""){$color_setting='#0099fe';}
$color_setting=str_replace('#','',$color_setting);

?>
<style>
.btn-custom {
  background-color: #<?php echo esc_html($color_setting); ?>;
}
.range input[type="range"]::-webkit-slider-thumb {
background-color: #<?php echo esc_html($color_setting); ?>;
}
.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: #<?php echo esc_html($color_setting); ?>;
}
.btn-custom {
  background-color: #<?php echo esc_html($color_setting); ?>;
  border: 2px solid #<?php echo esc_html($color_setting); ?>;
 
}
.btn-custom-search {
  background-color: #<?php echo esc_html($color_setting); ?>;
  border: 2px solid #<?php echo esc_html($color_setting); ?>;

}
.cbp-l-filters-button .cbp-filter-item.cbp-filter-item-active { 
  background-color: #<?php echo esc_html($color_setting); ?>;
  border-color: #<?php echo esc_html($color_setting); ?>;
 } 
 .cbp-l-filters-button .cbp-filter-counter {
	 background-color: #<?php echo esc_html($color_setting); ?>;
}	
.cbp-l-inline-view {
	border: 1px solid #<?php echo esc_html($color_setting); ?>;
	background-color: #<?php echo esc_html($color_setting); ?>;

}	 
.btn-custom {
 background-color: #<?php echo esc_html($color_setting); ?>;
 border: 2px solid #<?php echo esc_html($color_setting); ?>;
}	
#profile-account2 .green-haze {
	  background-color: #<?php echo esc_html($color_setting); ?> !important;
	  border: 2px solid #<?php echo esc_html($color_setting); ?>;	
	}
.uou-rangeslider .rangeslider__handle {
    background: #<?php echo esc_html($color_setting); ?>;
}	
.uou-rangeslider .rangeslider__handle {
    background: #<?php echo esc_html($color_setting); ?>;
}
.cbp-singlePageInline-active .cbp-l-caption-body {
  background: #<?php echo esc_html($color_setting); ?>;
}
.cbp-l-filters-button .cbp-filter-item {
  border: 2px solid #<?php echo esc_html($color_setting); ?>;
  color: #<?php echo esc_html($color_setting); ?>;
 } 
 .cbp-l-inline-view:hover {
  color: #<?php echo esc_html($color_setting); ?>;
  background: #fff;
  border-color:#<?php echo esc_html($color_setting); ?>; 
 }


.cbp-l-filters-button .cbp-filter-item:hover { 
  color: #fff;
  border-color: #<?php echo esc_html($color_setting); ?>; 
  background: #<?php echo esc_html($color_setting); ?>;  
 }
.cbp-caption-fadeIn .cbp-caption-activeWrap {	
 background-color:#<?php echo esc_html($color_setting); ?>;
}	
.fa-star{
color: #<?php echo esc_html($color_setting); ?>;

}
.icon-blue:hover {
  color: #<?php echo esc_html($color_setting); ?>;
 }  
 .cbp-l-project-details-title span a span {
  color: #<?php echo esc_html($color_setting); ?>;
}
.doctor-slider .cbp-nav-controls .cbp-nav-prev {
  background: #<?php echo esc_html($color_setting); ?>;
}
.btn-custom {
  background-color: #<?php echo esc_html($color_setting); ?> !important;
  border: 2px solid #<?php echo esc_html($color_setting); ?> !important; 
  
}
.fav-button {
  border: 1px solid #<?php echo esc_html($color_setting); ?>;
}
.specialist-list  li:before {
color: #<?php echo esc_html($color_setting); ?>;
}	  
#profile-account2 .portlet-title .nav li.active a {
	  background:  #<?php echo esc_html($color_setting); ?>;
	  border-bottom-color: #<?php echo esc_html($color_setting); ?> !important;
}
#profile-account2 .portlet-title .nav li.active a:before {	
	border-top: 10px solid #<?php echo esc_html($color_setting); ?>;
}	
#profile-account2 a.btn-custom-reverse {
		color: #<?php echo esc_html($color_setting); ?> !important;		
		border: 2px solid #<?php echo esc_html($color_setting); ?> !important;
}	
#profile-account2 .green-haze {
	  background-color: #<?php echo esc_html( $color_setting );  ?> !important;
	  border: 2px solid #<?php echo esc_html( $color_setting );  ?>;
	  
	}	
.listing-table .table-head th {
	  background: #<?php echo esc_html( $color_setting );  ?> !important;	
}
#profile-account2 .profile-usermenu .active{
     border-left: 5px solid #<?php echo esc_html( $color_setting );  ?>;
   }	 
 #profile-account2  .nav li:hover .icon-round{
  border: 1px solid #<?php echo esc_html( $color_setting );  ?>;
}  
#profile-account2  .portlet-title  .nav li:hover{
  border-bottom: 5px solid #<?php echo esc_html( $color_setting );  ?>;
}
#profile-account2  .portlet-title  .nav li.active{
  border-bottom: 5px solid #<?php echo esc_html( $color_setting );  ?>;
}
.profile-usermenu ul li.active a {
	border-left: 2px solid #<?php echo esc_html( $color_setting );  ?>;
	 color: #<?php echo esc_html( $color_setting );  ?> !important;

}	 
.tags a{
 background:#<?php echo esc_html( $color_setting );  ?> !important;
}	
 .tags a:before{
	 border-color:transparent #<?php echo esc_html( $color_setting );  ?> transparent transparent;
} 	  
.cbp-l-filters-button .cbp-filter-counter:before {
 border-top: 4px solid #<?php echo esc_html( $color_setting );  ?>;
}	
</style>	