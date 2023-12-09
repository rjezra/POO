<?php

namespace Class\User;

class User
{
    private int $id;

    public function __construct()
    {
        $this->id = rand();
    }
}
