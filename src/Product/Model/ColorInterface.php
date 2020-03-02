<?php

declare(strict_types=1);

namespace App\Product\Model;

interface ColorInterface
{
    public function getColor(): ?string;

    public function setColor(?string $name): void;
}
