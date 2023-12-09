<?php

namespace Class;

class OfficeReservation
{
    private static ?self $_instance = null;
    private function __construct()
    {
        echo 'Nouvele instance !!!';
    }
    public static function getInstance(): self
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }
}
