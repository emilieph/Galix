<?php


namespace App\Controller;


class JoinController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Join/index.html.twig');
    }
}