<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 05.03.19
 * Time: 23:22
 */

namespace App\Security;


class TokenGenerator
{
    private const ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    public  function  getRandomSecureToken(int $length = 30): string
    {
        $token = '';
        $maxNumber = strlen(self::ALPHABET);

        for ($i = 0; $i < $length; $i++) {
            $token .= self::ALPHABET[random_int(0, $maxNumber - 1)];
        }

        return $token;
    }
}