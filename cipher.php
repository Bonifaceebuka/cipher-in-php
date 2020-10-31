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

	$out = encryptor($str_var); // this outputs the encrypted version of 'I am not a man'
	print_r($out);
	


?>