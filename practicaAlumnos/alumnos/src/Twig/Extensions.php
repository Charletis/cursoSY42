<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Extensions extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            new TwigFilter('nota', array($this, 'notaFilter')),
        );
    }

    public function notaFilter($number, $decimales = 2)
    {
        if($number != '') {
            $nota = number_format((float)$number, $decimales, ',', '.');
            if ($nota >= 5) {
                $nota = $nota . ' &#128077;';
            } else {
                $nota = $nota . ' &#128078;';
            }

            return $nota;
        }
        return '';
    }

}