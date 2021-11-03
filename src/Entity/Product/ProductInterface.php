<?php

declare(strict_types=1);

namespace App\Entity\Product;

interface ProductInterface
{
    public const PRODUCT_COLOR_BLUE="Blue";
    public const PRODUCT_COLOR_RED="Red";
    public const PRODUCT_COLOR_GREEN="Green";

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
