<?php
	function format_currency($number){
		return 'Rp.'.number_format($number,0,",",".").",-";
	}
?>