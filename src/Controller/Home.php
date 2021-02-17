<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController{
    /**
     * @Route("/Home", name="Home")
     */
    public function Entrar(){    
        return $this->render('Index.html.twig');
    }
    
     /**
     * @Route("/Pruebas", name="Pruebas")
     */
    public function prueba_base(){

        $manager = $this->getDoctrine()->getManager();
        $consulta=$manager->createQuery('SELECT per from App\Entity\Personal per');
        
        $personal=$consulta->getResult();
        
        return $this->render("Pruebas.html.twig", array('datos' =>$personal));
    }
}

?>