<?php

declare(strict_types=1);

namespace spec\App\Entity\Product;

use App\Entity\Product\Product;
use App\Product\Model\ColorInterface;
use PhpSpec\ObjectBehavior;

final class ProductSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Product::class);
    }

    function its_color_is_mutable(): void
    {
        $this->setColor('zielony');
        $this->getColor()->shouldReturn('zielony');
    }

    function it_is_a_colorable(): void
    {
        $this->shouldHaveType(ColorInterface::class);
    }

}
