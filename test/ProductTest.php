<?php

declare(strict_types=1);

use Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    protected Product $product;

    public function setUp(): void
    {
        $this->product = new Product;
    }

    public function tearDown(): void
    {
        // todo
    }

    public function testName(): void
    {
        $this->product->setName('product_1');
        $this->assertEquals($this->product->getName(), 'product_1');
    }

    public function testTags(): void
    {
        $tags = ['tag_1', 'tag_2'];
        $this->product->setTags($tags);
        $this->assertEquals($this->product->getTags(), $tags);

        $tags[] = 'tag_3';
        $this->product->addTags(['tag_3']);
        $this->assertEquals($this->product->getTags(), $tags);

        $tags[] = 'tag_4';
        $this->product->addTags(['tag_4']);
        $this->assertEquals($this->product->getTags(), $tags);

        $this->assertTrue($this->product->hasTags());

        $this->product->clearTags();
        $this->assertFalse($this->product->hasTags());
    }
}
