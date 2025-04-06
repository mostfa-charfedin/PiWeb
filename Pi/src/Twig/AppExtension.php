<?php

namespace App\Twig;

use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_user', [$this, 'getUser']),
        ];
    }

    public function getUser()
    {
        return $this->security->getUser();
    }
} 