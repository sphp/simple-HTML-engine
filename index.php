<?php
/*
 * HTML function:
 * 1st parameter is html tag name
 * 2nd parameter is html tag attributes (supported type array or JSON)
 * 3rd parameter is inner html or any content (supported type array or string)
 */
function html($tag, $_attr="", $_html=""){
	$autocloseTags = ["img", "br", "hr", "input", "area", "link", "meta", "param"];
	if(!is_array($_attr))
		$_attr = json_decode($_attr,true);
	$dom = "<".$tag;
	if(!empty($_attr)){
		foreach($_attr as $key=>$val)
			$dom .= " $key=\"$val\"";
	}
	if(in_array($tag, $autocloseTags) ){
		$dom .= " />";
	}else{
		if(is_array($_html))
			$dom .= " >" . implode('', $_html) . "</$tag>";
		else
			$dom .= " >".$_html."</$tag>";
	}
	return $dom;
}

$button   = html("button","Submit");
$inputs[] = html("input", '{"type":"text","name":"username"}');
$inputs[] = html("input", '{"type":"text","name":"fullname"}');
$inputs[] = html("input", '{"type":"email","name":"email"}');
$inputs[] = html("input", '{"type":"password","name":"password"}');
$inputs[] = html("input", ['type'=>'button','name'=>'Submit','value'=>'Submit']);

echo html("form",['mathod'=>'post','action'=>''], $inputs);

?>
