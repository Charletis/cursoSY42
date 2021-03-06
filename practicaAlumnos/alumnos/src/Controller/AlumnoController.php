<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Entity\Alumno;
use App\Entity\Asignatura;
use App\Entity\Nota;

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
        $em = $this->getDoctrine()->getManager();
        $notas = $em->getRepository(Nota::class)->getLastNotas($alumno);
        return $this->render('alumno/notas.html.twig', [
            'alumno' => $alumno,
            'notas' => $notas
        ]);
    }

    /**
     * @Route("/asignaturas/{alumno}", name="asignaturas")
     */
    public function asignaturasAction(Alumno $alumno){
        if(!$alumno){
            $this->createNotFoundException("El alumno no existe");
        }
        $em = $this->getDoctrine()->getManager();
        $asignaturas = $em->getRepository(Asignatura::class)->findAll();
        return $this->render('alumno/asignaturas.html.twig', [
            'alumno' => $alumno,
            'asignaturas' => $asignaturas
        ]);
    }
    
    /**
    * @Route("/asignaturas/{asignatura}/baja/{alumno}", name="asignatura_baja")
    */
    public function asignaturaBajaAction(Asignatura $asignatura, Alumno $alumno){
        $em = $this->getDoctrine()->getManager();
        try {
            $asignatura->removeAlumno($alumno);
            $em->persist($asignatura);
            $em->flush();

            $this->addFlash(
                'notice',
                'Se dió de baja en '.$asignatura->getNombre().'.'
            );

        } catch (Exception $e) {
            $this->addFlash(
                'error',
                'La acción no pudo llevarse a cabo.'
            );
        }
        return $this->redirectToRoute('asignaturas', array('alumno' => $alumno->getId()));
    }
    
    /**
    * @Route("/asignaturas/{asignatura}/matricular/{alumno}", name="asignatura_matricular")
    */
    public function asignaturaMatricularAction(Asignatura $asignatura, Alumno $alumno){
    $em = $this->getDoctrine()->getManager();
        try {
            $asignatura->addAlumno($alumno);
            $em->persist($asignatura);
            $em->flush();

            $this->addFlash(
                'notice',
                'Se matriculó en '.$asignatura->getNombre().'.'
            );

        } catch (Exception $e) {
            $this->addFlash(
                'error',
                'La acción no pudo llevarse a cabo.'
            );
        }
        return $this->redirectToRoute('asignaturas', array('alumno' => $alumno->getId()));
    }
}
