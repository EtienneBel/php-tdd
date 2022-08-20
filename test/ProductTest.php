<?php

declare(strict_types=1);

class ProductTest extends PHPUnit\Framework\TestCase
{

    public function testName(): void
    {
        $product = new src\Product;
        $product->setName('product_1');
        $this->assertEquals($product->getName(), 'prodcut_1');
    }
}
