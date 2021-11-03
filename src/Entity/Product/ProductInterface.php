<?php

namespace App\Entity\Product;

interface ProductInterface
{
    public const PRODUCT_COLOR_BLUE="blue";
    public const PRODUCT_COLOR_RED="red";
    public const PRODUCT_COLOR_GREEN="green";

    public function getColor(): ?string;

    public function setColor(?string $color): void;
}
