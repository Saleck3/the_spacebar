<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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

        $coments = array("Este es el comentario 1", "Este es el segundo comentario", "this is the 3rd comment");


        return $this->render('article/show.html.twig',[
            'title' => ucwords(str_replace('-', ' ',$slug)),
            'comments'=> $coments,
            ]);
    }
}