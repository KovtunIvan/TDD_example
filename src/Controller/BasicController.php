<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BasicController extends AbstractController
{
    /**
     * @Route("test/")
     */
    public function print()
    {
        return new Response('Everything`s fine');
    }
}