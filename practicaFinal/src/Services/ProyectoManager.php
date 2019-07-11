<?php


namespace App\Services;

/**
 * Class ProyectoManager
 * @package App\Services
 *
 * Servicio para la gestión de proyectos
 */
class ProyectoManager
{
    /**
     * Crear Presupuesto
     * -------------------------------------------------------------
     * ARGUMENTOS:
     * Solicitudpresupuesto -> modelo específico para el formulario de la acción de solicitar presupuesto desde la web
     *
     * ACCIONES:
     * Crea un presupuesto mediante las caracteristicas recibidas
     *
     * Envia un mail al usuario con la información
     *
     * Envia un correo al comercial con la información
     *
     * RETORNO:
     * Retorna los datos necesarios para mostrar en pantalla la configuración final del presupuesto -> Objeto Presupuesto
     */
    public function crearPresupuesto(SolicitudPresupuesto $solicitud): App\Entity\Presupuesto {

    }

    /**
     * Crear Proyecto
     * -------------------------------------------------------------
     * ARGUMENTOS:
     * Presupuesto -> Objecto Presupuesto
     *
     * ACCIONES:
     * Crea un proyecto de un presupuesto aprobado
     *
     * Envia un mail al usuario y los jefes de ventas con el presupuesto final
     *
     * RETORNO:
     * Retorna true si todo ha ido bien y false si hay algun error en el envio
     */
    public function crearProyecto(Presupuesto $presupuesto): boolean {

    }


}