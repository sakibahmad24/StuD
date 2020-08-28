<?php

//application/libraries/CreatorJwt.php

require APPPATH . '/libraries/JWT.php';

class CreatorJwt
{


	/*************This function generate token private key**************/

	PRIVATE $key = "54F1AF9187A5F34C63403A1B95BF89C651CBABD3A47C028336F2AF739F01C8A5";
	public function GenerateToken($data)
	{
		$jwt = JWT::encode($data, $this->key);
		return $jwt;
	}


	/*************This function DecodeToken token **************/

	public function DecodeToken($token)
	{
		$decoded = JWT::decode($token, $this->key, array('HS256'));
		$decodedData = (array) $decoded;
		return $decodedData;
	}
}
