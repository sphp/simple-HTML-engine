# Simple HTML Engine

a super simple HTML generator

 * html function
 * $tag param is html tag name
 * $doc param is html or string inside tag / input Placeholder (array or single)
 * $opt param is html tag attrbibutes  (array)
 
# examples

 * $button   = html("button","Submit");
 * $inputs[] = html("input", "Username",	['type'=>'text','name'=>'username']);
 * $inputs[] = html("input", "Full Name",	['type'=>'text','name'=>'fullname']);
 * $inputs[] = html("input", "Email",	['type'=>'email','name'=>'email']);
 * $inputs[] = html("input", "password",	['type'=>'password','name'=>'password']);
 * $inputs[] = html("input", "",		['type'=>'button','name'=>'Submit','value'=>'Submit']);

 * echo html("form", $inputs, ['mathod'=>'post','action'=>'']);
