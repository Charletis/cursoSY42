<?php
// src/EventSubscriber/PresupuestoSubscriber.php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;


use App\Services\EmailManager;
use App\Event\SolicitudPresupuestoEvent;
use App\Event\PresupuestoTerminadoEvent;

class PresupuestoSubscriber implements EventSubscriberInterface
{
    private $emailManager;

    public function __construct(EmailManager $emailManager)
    {
        $this->emailManager = $emailManager;
    }

    public static function getSubscribedEvents()
    {
        return array(
            SolicitudPresupuestoEvent::NAME => 'onPresupuestoSolicitado',
            PresupuestoTerminadoEvent::NAME	=>	'onPresupuestoAprobado'
        );
    }

    public function onPresupuestoSolicitado(SolicitudPresupuestoEvent $solicitud) {
        $this->emailManager->envioEmailSolicitudPresupuestoUsuario($solicitud->getSolicitudPresupuesto());
        $this->emailManager->envioEmailSolicitudPresupuestoComercial($solicitud->getSolicitudPresupuesto());
    }

    public function onPresupuestoAprobado(PresupuestoTerminadoEvent $presupuesto) {
        $this->emailManager->envioEmailPresupuestoAprobado($presupuesto->getPresupuesto());
    }

}