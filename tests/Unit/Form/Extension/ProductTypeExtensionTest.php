<?php

namespace App\Tests\Unit\Form\Extension;

use App\Entity\Product\ProductInterface;
use App\Form\Extension\ProductTypeExtension;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilder;

class ProductTypeExtensionTest extends TestCase
{
    /**
     * @var MockObject|FormBuilder
     */
    private $builder;

    /**
     * @var ProductTypeExtension
     */
    private $productType;

    protected function setUp(): void
    {
        $this->builder = $this->createMock(FormBuilder::class);

        $this->productType = new ProductTypeExtension();
    }

    public function testItReturnsProductTypeClass(): void
    {
        $productTE = new ProductTypeExtension();

        $this->assertSame([ProductType::class], $productTE->getExtendedTypes());
    }

    public function testItBuildsForm(): void
    {
        $this->builder
            ->expects($this->once())
            ->method('add')
            ->with('color', ChoiceType::class, [
                'choices'  => [
                    'Unset' => null,
                    'Red' => ProductInterface::PRODUCT_COLOR_RED,
                    'Blue' => ProductInterface::PRODUCT_COLOR_BLUE,
                    'Green' => ProductInterface::PRODUCT_COLOR_GREEN,
                ]])
            ->willReturn($this->builder,[]);


        $this->productType->buildForm($this->builder, []);
    }
}


