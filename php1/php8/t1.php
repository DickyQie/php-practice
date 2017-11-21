<?php

class Pcrson{
	function say(){
		echo "this is say";
	}

	function sing($name){
		echo $name.' this is sing';
	}
}
//反射方式对象调用方法

$per=new Pcrson();
$me=new ReflectionMethod($per,'say');
$me->invoke($per);

echo "<br>";
$me2=new ReflectionMethod($per,'sing');
$me2->invokeArgs($per,array('zq'));