<?php


namespace App\Controller;



use App\Service\Greeter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("hello")
     * @param Greeter $greeter
     * @return Response
     */
    function hello(Greeter $greeter)
    {
        $message =  $greeter->greet();
        return new Response($message);
    }
}