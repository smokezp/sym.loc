<?php

namespace App\Controller;


use App\Service\SomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    private $my_service;

    public function __construct(SomeService $service)
    {
        $this->my_service = $service;
    }

    /**
     * @param $page
     *
     *  @Route("/blog/{page<\d+>?1}/{category}", name="blog_list")
     *
     */
    public function list($page)
    {
        $this->my_service->someMethod();
        // ...
    }

    /**
     * Matches /blog/*
     * but not /blog/slug/extra-part
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        $url = $this->generateUrl(
            'blog_show',
            ['slug' => 'my-blog-post']
        );
    }
}