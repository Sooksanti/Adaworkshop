<?php
function FCNaHCalllanguage($tFile, $tString) {
	
	$obj = & get_instance();
	if (@$_SESSION['lang'] == '' || @$_SESSION['lang'] == 'th') {
		@$_SESSION['lang'] = 'th';
		$lang = 'th';
	} else {
		$lang = $_SESSION['lang'];
	}
	$obj->lang->load($tFile,$lang);
	$aRs = $obj->lang->line($tString);
	print_r($aRs);
	if ($aRs) {
		return $aRs;
	} else {
		return $tString;
	}
}
