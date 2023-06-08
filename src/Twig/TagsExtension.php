<?php

/*
 * This file is part of Monsieur Biz' Admin Better Login plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusAdminBetterLoginPlugin\Twig;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TagsExtension extends AbstractExtension
{
    private ParameterBagInterface $parameterBag;

    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('monsieurbiz_admin_better_login_get_tags', [$this, 'getTags']),
        ];
    }

    public function getTags(): array
    {
        return (array) $this->parameterBag->get('monsieurbiz_sylius_admin_better_login.tags');
    }
}
