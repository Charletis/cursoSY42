<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostController extends AbstractController
{

    public function article()
    {
        $date = '2019-06-01 11:01';
        return $this->render('twig/practica5.html.twig', array('date'=>$date));
       return new Response(
           '<html><body>
           <div>Article: '.$article.'</div>
           <div>Year: '.$year.'</div>
           <div>Local: '.$_locale.'</div>
           <div>Formato: '.$_format.'</div>
           </body></html>'
       );
    }
}