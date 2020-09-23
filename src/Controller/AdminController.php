<?php


namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_index")
    */
    public function index() :Response
    {
        return $this->render('index.html.twig', [
            'website' => "Admin",
        ]);
    }
}

