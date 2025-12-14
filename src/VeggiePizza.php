<?php

declare(strict_types=1);

namespace PizzaYoshks;

use Pizza\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name     = 'Овощная пицца';
        $this->sauce    = 'Томатный соус';
        $this->toppings = ['Болгарский перец', 'Оливки', 'Лук', 'Грибы', 'Помидоры'];
    }
}