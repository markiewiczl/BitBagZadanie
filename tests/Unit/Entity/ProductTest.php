<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Product\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testItReturnsColorOfProduct()
    {
        $product = new Product();

        $product->setColor('blue');

        $this->assertSame('blue', $product->getColor());
    }
}
