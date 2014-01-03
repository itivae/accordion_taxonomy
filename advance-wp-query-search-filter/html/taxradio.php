
<?php


if ( $count > 0 ){
			
			
			echo '<li class="searchl">';
			echo '<h3 class="search-list">';
	echo '<div class="awqsf_box taxoradio-'.$c.'"><label class="taxo-label-'.$c.'">'.$v['taxlabel'].'</label>&nbsp;&nbsp;<img src="/wp-content/plugins/advance-wp-query-search-filter/css/images/down.png" alt="down arrow"/><br>';
		echo '</h3>';
		echo '<div>';
	echo '<input  type="hidden" name="taxo['.$c.'][name]" value="'.$v['taxname'].'">';
	
	foreach ( $terms as $term ) {
		$selected = '';
		
		$selected = (isset($_GET['taxo'][$c]['term']) && $_GET['taxo'][$c]['term']==$term->slug) ? 'checked="checked"' : '';
		echo '<label class="taxradio"><input type="radio" id="taxo-'.$c.'" name="taxo['.$c.'][term]" value="'.$term->slug.'" '.$selected.'>'.$term->name.'</label>';

	}
echo '</div>';
echo '</li>';
echo '<div style="clear:both"></div>';



}
?>
