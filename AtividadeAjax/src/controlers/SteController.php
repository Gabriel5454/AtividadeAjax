<?php
  
function random_str($length = 32): string
{
return bin2hex(string: random_bytes (length: $length / 2));
}
$length = 20; 
$rand_str = random_str( $length);

echo $rand_str;
 
#simula um demora na resposta do controller
 
sleep(seconds: 5);
 