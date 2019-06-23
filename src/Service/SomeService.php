<?php

namespace App\Service;


use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SomeService
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function someMethod()
    {
        $url = $this->router->generate('about_us', [
            '_locale' => 'nl',
        ], UrlGeneratorInterface::ABSOLUTE_URL);
        dd($url);
        // ...
    }
}