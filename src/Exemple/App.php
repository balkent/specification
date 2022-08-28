<?php

declare(strict_types=1);

namespace Exemple;

use Exemple\Fruit\Apple;
use Exemple\Fruit\Banana;
use Exemple\Fruit\Orange;

class App
{
    public function run()
    {
		$fruits = [
			new Banana(5),
			new Apple(3),
			new Orange(2),
		];

		echo "-------------------------\n\r";
		if ((new FruitBasket($fruits))->goodBasket()) {
			echo "it good basket\n\r";
		} else {
			echo "it not good basket\n\r";
		}
		echo "-------------------------\n\r";
		if ((new FruitBasket($fruits))->goodBasketWithChain()) {
			echo "it good basket with chain\n\r";
		} else {
			echo "it not good basket with chain\n\r";
		}
    }
}
