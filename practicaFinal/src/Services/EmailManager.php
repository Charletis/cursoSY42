<?php


namespace App\Services;

/**
 * Class EmailManager
 * @package App\Services
 *
 *   Servicio para la gestión de los envíos de correo
 */
class EmailManager
{
    /**
     * Envio email Solicitud Presupuesto a Usuario
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Solicitudpresupuesto -> modelo específico para el formulario de la acción de solicitar presupuesto desde la web
     *
     * ACCIONES:
     * Envia un mail al usuario con la información
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailSolicitudPresupuestoUsuario(SolicitudPresupuesto $solicitud): boolean {

    }

    /**
     * Envio email Solicitud Presupuesto a Comercial
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Solicitudpresupuesto -> modelo específico para el formulario de la acción de solicitar presupuesto desde la web
     *
     * ACCIONES:
     * Envia un mail al comercial con la información
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailSolicitudPresupuestoComercial(SolicitudPresupuesto $solicitud): boolean {

    }

    /**
     * Envio email Presupuesto Aprobado
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Presupuesto -> Objecto Presupuesto
     *
     * ACCIONES:
     * Envia un mail con el presupuesto aprobado a los jefes de proyecto y usuario
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailPresupuestoAprobado(Presupuesto $presupuesto): boolean {

    }

    /**
     * Envio email Proyecto En Proceso
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Proyecto -> Objecto Proyecto
     *
     * ACCIONES:
     * Envia un mail con el proyecto en proceso a los tecnicos y usuario
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailProyectoEnproceso(Proyecto $proyecto): boolean {

    }

    /**
     * Envio email Proyecto Terminado
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Proyecto -> Objecto Proyecto
     *
     * ACCIONES:
     * Envia un mail con el proyecto terminado a los tecnicos y usuario
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailProyectoTerminado(Proyecto $proyecto): boolean {

    }

    /**
     * Envio email Tarea Asignada
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Tarea -> Objecto Tarea
     *
     * ACCIONES:
     * Envia un mail con el tarea asignada al tecnico
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailTareaAsignada(Tarea $tarea): boolean {

    }

    /**
     * Envio email Tarea Terminada
     * -----------------------------------------------------------
     *
     * ARGUMENTOS:
     * Tarea -> Objecto Tarea
     *
     * ACCIONES:
     * Envia un mail con el tarea asignada a los jefes de proyecto
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function envioEmailTareaTerminada(Tarea $tarea): boolean {

    }

}