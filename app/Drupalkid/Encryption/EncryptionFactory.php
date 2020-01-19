<?php

namespace Drupalkid\Encryption;

use Drupalkid\Encryption\EncryptionClient;

class EncryptionFactory
{
    public static function encrypt($text, $type)
    {
        return new EncryptionClient($text, $type);
    }
    public static function decrypt($text, $type)
    {
        return new EncryptionClient($text, $type);
    }
}
