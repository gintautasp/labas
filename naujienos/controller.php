<?php

	$content_html = __DIR__ . '/html.php';
	
	$html_webe = file_get_contents ( "https://www.respublika.lt/lt/naujienos/" );
	/*
	<li class="news_list_row">
                    	    <a href="/lt/naujienos/sportas/tokyo_2020/tokijo_olimpiniu_zaidyniu_rengejai_ismete_daugiau_kaip_4_tukst_maisto_rinkiniu_skirtu_savanoriams/"><img src="uploads/img/catalog/1/photo_for_homepage_1_10541888.jpg" alt="" class="news_list_img" /></a>
                    	    <div class="news_list_title"><p class="news_title_red news_title_red_mobile" style="margin:10px 0 12px 0; margin-left:8px; width:100%;"><a class="news_subcategory_link" href="/lt/naujienos/sportas/tokyo_2020/">Tokyo 2020</a><br><br><a class="news_title_red_link_small" style="font-size:16px; color: black;" href="/lt/naujienos/sportas/tokyo_2020/tokijo_olimpiniu_zaidyniu_rengejai_ismete_daugiau_kaip_4_tukst_maisto_rinkiniu_skirtu_savanoriams/">Tokijo olimpiniu �aidyniu rengejai i�mete daugiau kaip 4 tukst. maisto rinkiniu, skirtu savanoriams</a></p><p class="block_text news_list_text" style="font-size:14px; margin-left:8px;"><span>Tokijo vasaros olimpiniu �aidyniu rengejai turejo i�mesti daugiau kaip 4 tukst. nepanaudotu maisto rinkiniu, kurie buvo skirti savanoriams...</p><p class="news_list_date">2021 liepos 28 10:58:00</p></div>
                	</li>
			„Norime būti stipriausiųjų aštuntuke“
	*/
	
	$nuoroda_vidine = '[\/0-9a-zA-z_-]{1,}';
	$failas_vidinis = '[\/0-9a-zA-z_.-]{1,}';
	$tarpas_perkelimas = '[\s]{0,}';
	$tekstukas = '[\/0-9a-zA-zĄČĘĖĮŠŲŪŽąčęėįšųūž\s_.,\(\):;!?„“–-]{1,}';
	$data_respublikos = '[\/0-9a-zA-zĄČĘĖĮŠŲŪŽąčęėįšųūž\s:_.-]{1,}';
	
	$naujienu_reguliari_israiska = 
			'/<li class="news_list_row">'  . $tarpas_perkelimas
			. '<a href="(' . $nuoroda_vidine . ')"\><img src="(' . $failas_vidinis . ')" alt="" class="news_list_img" \/\><\/a\>' . $tarpas_perkelimas
			. '<div class="news_list_title"\><p class="news_title_red news_title_red_mobile" style="margin:10px 0 12px 0; margin-left:8px; width:100%;"\><a class="news_subcategory_link" href="(' . $nuoroda_vidine . ')"\>(' . $tekstukas . ')<\/a\>'
			. '<br\><br\><a class="news_title_red_link_small" style="font-size:16px; color: black;" href="(' . $nuoroda_vidine . ')"\>' 
			 . '(' . $tekstukas . ')' . '<\/a\><\/p\>'
			 . '<p class="block_text news_list_text" style="font-size:14px; margin-left:8px;"\><span\>(' . $tekstukas . ')<\/p\><p class="news_list_date"\>'
			 . '(' . $data_respublikos . ')<\/p\><\/div\>' . $tarpas_perkelimas
                	. '<\/li\>'
		. '/';
	
	include 'list_parser.class.php';
	
	$list_parser = new ListParser();
	
	$rez = $list_parser -> parse ( $naujienu_reguliari_israiska, $html_webe );