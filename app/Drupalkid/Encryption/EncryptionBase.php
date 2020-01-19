<?php

namespace Drupalkid\Encryption;

use BadMethodCallException;

abstract class EncryptionBase
{
    public $text;
    public $type;
    public function __construct($text, $type)
    {
        $this->text = $text;
        $this->type = $type;
    }
    abstract public function load();
}
