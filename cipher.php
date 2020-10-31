<?php
	function encryptor($str)
	{
		$str_arr1 = ['a', 'o', 'p', 't', 's', 'j', 'm'];
		$str_arr2 = ['e', 'u' ,'b', 'd' ,'c' ,'g' ,'n'];
		
		$strreplace = $str;

		for ($i=0; $i <= count($str_arr1) -1; $i++) { 
			$strreplace = str_replace($str_arr1[$i], $str_arr2[$i], $strreplace);
		}

		return $strreplace;
	}

	function decryptor($str)
	{
		$str_arr1 = ['a', 'o', 'p', 't', 's', 'j', 'm'];
		$str_arr2 = ['e', 'u' ,'b', 'd' ,'c' ,'g' ,'n'];
		
		$strreplace = $str;

		for ($i=0; $i <= count($str_arr1) -1; $i++) { 
			$strreplace = str_replace($str_arr2[$i],$str_arr1[$i], $strreplace);
		}

		return $strreplace;
	}

	$str_var = 'I am not a man';

	$out = decryptor($str_var);
	print_r($out);
	// What you see here is an answer to an assessment question for Php back-end developer's job given to me on "date"
	// Hi, I am Agbo Boniface Ebuka. This is a php function that will encode words using the following rules:
	// To be able to use this source code, just clone the repository and drop the files in your XAMPP or WAMPP directory and access it like this localhost/encrytor.php for the encryptor or localhost/dencrytor.php for the decryption function.

	// Thanks and Happy coding


?>