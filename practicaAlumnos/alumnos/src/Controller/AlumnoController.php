<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Entity\Alumno;

class AlumnoController extends AbstractController
{
    /**
     * @Route("/alumnos", name="alumnos")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $alumnos = $em->getRepository(Alumno::class)->findAll();
        return $this->render('alumno/index.html.twig', [
            'alumnos' => $alumnos,
        ]);
    }

    /**
     * @Route("/notas/{alumno}", name="notas")
     */
    public function notasAction(Alumno $alumno){
        if(!$alumno){
            $this->createNotFoundException("El alumno no existe");
        }
        return $this->render('alumno/notas.html.twig', [
            'alumno' => $alumno
        ]);
    }

    /**
     * @Route("/asignaturas/{alumno}", name="asignaturas")
     */
    public function asignaturasAction(Alumno $alumno){
        if(!$alumno){
            $this->createNotFoundException("El alumno no existe");
        }
        return $this->render('alumno/asignaturas.html.twig', [
            'alumno' => $alumno
        ]);
    }
}
