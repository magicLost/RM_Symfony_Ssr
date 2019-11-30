<?php

namespace App\Controller\HomeController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render("home/index.html.twig");
        //return $this->json(["result" => "success"]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render("home/test.html.twig");
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contacts()
    {
        return $this->render("home/contacts.html.twig");
    }

    /**
     * @Route("/large-print", name="largePrint")
     */
    public function largePrint()
    {
        return $this->render("home/largePrint.html.twig");
    }
}

