<?php

for($n=0; $n<26; $n++){
	$output = preg_replace_callback(
		'|[a-zA-Z]|',
		create_function(
			'$matches',
			'$ac=ord($matches[0])+'.$n.';return chr($ac<=90?$ac:($ac>122?$ac-26:(ord($matches[0])<= 90?$ac-26:$ac)));'
		),$argv[1]);
	
	print "n:$n\n$output\n\n";
}
