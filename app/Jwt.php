<?php

namespace app;

final class Jwt
{
	public static function getToken($id)
	{
        $key = '1Yit8*Mb6A';

        $header = [ 'alt' => 'HS256', 'typ' => 'JWT' ];
        $header = json_encode($header);
        $header = base64_encode($header);

        $payload = [ 'iss' => 'emersonsilveira.com.br', 'sub' => $id ];
        $payload = json_encode($payload);
        $payload = base64_encode($payload);

        $signature = hash_hmac('sha256', "$header.$payload", $key, true);
        $signature = base64_encode($signature);

        $token = "$header.$payload.$signature";

        return $token;
    }

    public static function tokenIsValid($id, $token)
	{
        $tmp = Jwt::getToken($id);
		
        if ( $token === $tmp )
		{
            return true;
        }
		
        return false;
    }

}