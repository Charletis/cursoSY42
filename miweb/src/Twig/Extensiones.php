<?php


namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Extensiones extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('tt', array($this, 'timeToToday')),
        );
    }

    public function timeToToday($date) {
        $today = new \DateTime();
        $diffDate = (is_string($date))?new \DateTime($date):null;

        if($diffDate){
            $diferencia = $diffDate->diff($today);
            if($diferencia->format('%y') >= '1'){
                return $diferencia->format('Hace %y años y %m meses');
            }elseif(($diferencia->format('%m') >= '1') && ($diferencia->format('%y') < '1')){
                return $diferencia->format('Hace %m meses');
            }elseif(($diferencia->format('%d') >= '1') && ($diferencia->format('%m') < '1')){
                return $diferencia->format('Hace %d días');
            }elseif(($diferencia->format('%h') >= '1') && ($diferencia->format('%d') < '1')){
                return $diferencia->format('Hace %h horas');
            }elseif(($diferencia->format('%i') >= '1') && ($diferencia->format('%h') < '1')){
                return $diferencia->format('Hace %i minutos');
            }elseif($diferencia->format('%i') < '1'){
                return 'Ahora';
            }
        }else{
            return false;
        }

    }

}