<?php
// src\Event\PresupuestoTerminadoEvent
namespace App\Event;

use Symfony\Component\EventDispatcher\Event;
use App\Entity\Presupuesto;

class PresupuestoTerminadoEvent extends Event
{
    const NAME = 'presupuesto.terminado';

    protected $presupuesto;

    public function __construct(Presupuesto $presupuesto)
    {
        $this->presupuesto = $presupuesto;
    }

    /**
     * @return Presupuesto
     */
    public function getPresupuesto(): Presupuesto
    {
        return $this->presupuesto;
    }
}