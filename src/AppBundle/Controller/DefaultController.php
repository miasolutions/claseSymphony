<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/saludo/{nombre}/{apellido}", name="saludar")
     */
    public function saludarAction($nombre, $apellido, Request $request){
        $saludo = "<html><body><h1>Hola Mundo!</h1></body></html>";

        return $this->render("demo/saludo.html.twig",array(
            "nombre" => $nombre,
            "apPaterno" => $apellido,
        ));
    }
    /**
     * @Route("/personas/listar", name="saludar")
     */
    public function listarAction(Request $request){

        $personas = array(
            ["nombre" => "Juan", "apellido" => "Perez"],
            ["nombre" => "Maria", "apellido" => "Cabrera"],
            ["nombre" => "Hernan", "apellido" => "Leyton"],
            ["nombre" => "Claudia", "apellido" => "Sanchez"],
        );

        return $this->render("demo/personas.html.twig",array(
            "personas" => $personas,
        ));
    }


}
