<?php
class classFilter extends FilterBase {	
	public static function filter($value, $options = array(), $report=null) {
		if(!isset($value['class'])) $value['class'] = '';
		$value['class'] = trim($value['class'].' '.$options['class']);
		
		return $value;
	}
}