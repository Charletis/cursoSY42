<?php


namespace App\Services;


/**
 * Class EstadosManager
 * @package App\Services
 *
 *   Servicio para la gestión de estados
 */
class EstadosManager
{

    /**
     * Aprobar Solicitud Presupuesto
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Presupuesto -> Objecto Presupuesto
     *
     * ACCIONES:
     * Cambia el estado del Presupuesto a Aprobada
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function aprobarSolicitudPresupuesto(Presupuesto $presupuesto): boolean {

    }

    /**
     * Rechazar Solicitud Presupuesto
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Presupuesto -> Objecto Presupuesto
     *
     * ACCIONES:
     * Cambia el estado del Presupuesto a Rechazada
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function rechazarSolicitudPresupuesto(Presupuesto $presupuesto): boolean {

    }

    /**
     * Aprobar Proyecto
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Proyecto -> Objecto Proyecto
     *
     * ACCIONES:
     * Cambia el estado del Proyecto a Aprobado
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function aprobarProyecto(Proyecto $proyecto): boolean {

    }

    /**
     * Proyecto En Proceso
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Proyecto -> Objecto Proyecto
     *
     * ACCIONES:
     * Cambia el estado del Proyecto a En proceso
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function enprocesoProyecto(Proyecto $proyecto): boolean {

    }

    /**
     * Terminar Proyecto
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Proyecto -> Objecto Proyecto
     *
     * ACCIONES:
     * Cambia el estado del Proyecto a Terminado
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y un array de error con un mensaje en caso de intentar terminar un proyecto con tareas sin terminar.
     */
    public function terminarProyecto(Proyecto $proyecto) {

    }

    /**
     * Asignar Tarea
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Tarea -> Objecto Tarea
     *
     * ACCIONES:
     * Cambia el estado de la Tarea a Asignada
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function asignarTarea(Tarea $tarea): boolean {

    }

    /**
     * Terminar Tarea
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Tarea -> Objecto Tarea
     *
     * ACCIONES:
     * Cambia el estado del Tarea a Terminada
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function terminarTarea(Tarea $tarea): boolean {

    }

}