	<?php

		  if(!isset($_COOKIE['username']))
		   { 
		   	if(!isset($_COOKIE['password']))
		   {       
        	setcookie('username', openssl_encrypt($_POST['uname'], 'AES-256-CBC', 'my secret key AAA', 0, 'my secret iv AAA'), time() + (86400 * 21)); // 86400 = 1 day
        	setcookie('password', openssl_encrypt($_POST['pass'], 'AES-256-CBC', 'my secret key AAA', 0, 'my secret iv AAA'), time() + (86400 * 21)); 
		}
      }else exit;

		?>
