<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\EventDispatcher\EventDispatcher;

use App\Entity\SolicitudPresupuesto;
use App\Event\SolicitudPresupuestoEvent;

use App\Entity\Presupuesto;
use App\Event\PresupuestoTerminadoEvent;

class EventosController extends AbstractController
{
    public function createPresupuestoAction()
    {
        $dispatcher	=	new	EventDispatcher();

        $solicitud = new SolicitudPresupuesto();
        // ...

        $eventoSolicitud = new SolicitudPresupuestoEvent($solicitud);
        $dispatcher->dispatch('presupuesto.solicitud', $eventoSolicitud);

        // ...

    }

    public function finishPresupuestoAction(Presupuesto $presupuesto)
    {
        $dispatcher	=	new	EventDispatcher();

        $eventoPresupuesto = new PresupuestoTerminadoEvent($presupuesto);
        $dispatcher->dispatch('presupuesto.terminado', $eventoPresupuesto);

        // ...

    }
}