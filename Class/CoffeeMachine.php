<?php

namespace Class;

class CoffeeMachine
{
    protected int $cups;

    public function __construct(int $cups)
    {
        $this->cups = $cups;
    }

    public function select(string $selection)
    {
        $result = match ($selection) {
            'espresso' => $this->makeEspresso(),
            default => 'eureur'
        };
        return $result;
    }
    protected function makeEspresso()
    {
        for ($i = 0; $i < $this->cups; $i++) {
            echo 'Cafe Espresso n ' .  $i + 1 . ' servi ! ';
        }
    }
}
