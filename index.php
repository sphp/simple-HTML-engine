<?php
/* 
 * html function
 * $tag param is html tag name
 * $doc param is html or string inside tag / input Placeholder (array or single)
 * $opt param is html tag attrbibutes  (array)
 */
 
$button   = html("button","Submit");
$inputs[] = html("input", "Username",	['type'=>'text','name'=>'username']);
$inputs[] = html("input", "Full Name",	['type'=>'text','name'=>'fullname']);
$inputs[] = html("input", "Email",	['type'=>'email','name'=>'email']);
$inputs[] = html("input", "password",	['type'=>'password','name'=>'password']);
$inputs[] = html("input", "",		['type'=>'button','name'=>'Submit','value'=>'Submit']);

echo html("form", $inputs, ['mathod'=>'post','action'=>'']);

function html($tag,$doc=[],$opt=[]){
	$autocloseTags = ['img', 'br', 'hr', 'input', 'area', 'link', 'meta', 'param'];

	$_html = "<".$tag;
	if(!empty($opt))
		foreach($opt as $key=>$val) $_html .= " $key=\"$val\"";

	if(in_array($tag, $autocloseTags)){
		if(!empty($doc)) $_html .= " placeholder=\"$doc\" />";
		else $_html .= " />";
	}else{
		if(is_array($doc)) $_html .= " >" . implode(PHP_EOL, $doc);
		else $_html .= " >".$doc."</$tag>";
	}
	return $_html;
}

?>
