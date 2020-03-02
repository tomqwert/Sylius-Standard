<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ColorTypeExtension extends AbstractTypeExtension
{
    public const RED = 'czerwony';
    public const BLUE = 'niebieski';
    public const GREEN = 'zielony';

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('color', ChoiceType::class, [
            'label' => 'kolor',
            'required' => false,
            'choices' => [
                self::RED => self::RED,
                self::BLUE => self::BLUE,
                self::GREEN => self::GREEN,
            ],
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
