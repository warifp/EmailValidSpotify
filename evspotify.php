<?php
echo "\n\e[1;35m============================[ EMAIL VALID SPOTIFY ]==========================\e[0m\r\n";

echo "\nEmail : ";
$email = trim(fgets(STDIN));
$c = curl_init();
curl_setopt($c, CURLOPT_URL, 'https://www.spotify.com/id/xhr/json/isEmailAvailable.php?email=' . $email);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION,true);
$cekme = curl_exec($c);
curl_close($c);
if($cekme == "false")
{
	echo "{$email} : \e[1;32mLIVE\e[0m\n\n";
}else{
	echo "{$email} : \e[0;31mDEAD!\e[0m\n\n";
}