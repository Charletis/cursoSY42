<?php
// src\Event\SolicitudPresupuestoEvent
namespace App\Event;

use Symfony\Component\EventDispatcher\Event;
use App\Entity\SolicitudPresupuesto;

class SolicitudPresupuestoEvent extends Event
{
    const NAME = 'presupuesto.solicitud';

    protected $solicitudPresupuesto;

    public function __construct(SolicitudPresupuesto $solicitudPresupuesto)
    {
        $this->solicitudPresupuesto = $solicitudPresupuesto;
    }

    /**
     * @return SolicitudPresupuesto
     */
    public function getSolicitudPresupuesto(): SolicitudPresupuesto
    {
        return $this->solicitudPresupuesto;
    }
}