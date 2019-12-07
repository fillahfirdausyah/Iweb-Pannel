<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../in/d7e.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE setting SET 
logo_a = '$_POST[logo_a]',
logo = '$_POST[logo]',
icon = '$_POST[icon]',
slide_top_indi = '$_POST[slide_top_indi]',
slide_indi = '$_POST[slide_indi]',
slide_top_stat = '$_POST[slide_top_stat]',
slide_top_width = '$_POST[slide_top_width]',
slide_top_height = '$_POST[slide_top_height]',
slide_stat = '$_POST[slide_stat]',
slide_width = '$_POST[slide_width]',
slide_height = '$_POST[slide_height]',
icon_menu = '$_POST[icon_menu]',
sis_name = '$_POST[sis_name]',
side_menu = '$_POST[side_menu]',
full_name = '$_POST[full_name]',
facebook = '$_POST[facebook]',
topic = '$_POST[topic]',
theme = '$_POST[theme]',
font_menu = '$_POST[font_menu]',
menu_atas_color = '$_POST[menu_atas_color]',
menu_bwh_color = '$_POST[menu_bwh_color]',
txt = '$_POST[txt]',
txt_run = '$_POST[txt_run]',
shadow = '$_POST[shadow]',
menu_atas = '$_POST[menu_atas]',
menu_bwh = '$_POST[menu_bwh]',
bg_site = '$_POST[bg_site]',
site = '$_POST[site]',
seo = '$_POST[seo]',
email = '$_POST[email]',
phone = '$_POST[phone]',
rekening = '$_POST[rekening]',
time_work = '$_POST[time_work]',
video = '$_POST[video]',
video_des = '$_POST[video_des]',
mobile_menu = '$_POST[mobile_menu]',
mobile_button = '$_POST[mobile_button]',
mobile_font = '$_POST[mobile_font]',
widget = '$_POST[widget]'

WHERE id='$_POST[id]' ";

if( $link->query($query) ) {
	echo "Data Tersimpan";
}else{
	echo "Data tidak tersimpan";
}

$link->close();


?>