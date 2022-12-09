<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response("Hello world!");
    }

    /**
     * @Route("/news/{slug}")
     * @return
     */
    public function show($slug)
    {
        return new Response(sprintf("This is actually another page with the slug %s", $slug));
    }
}