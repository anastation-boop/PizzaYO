<?php

declare(strict_types=1);

namespace PizzaYoshks;

use Pizza\Pizza;


class MoscowPizzaStore extends \Pizza\PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese'    => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'veggie'    => new VeggiePizza(),
            default     => throw new \InvalidArgumentException("Неизвестный тип: $type"),
        };
    }
}