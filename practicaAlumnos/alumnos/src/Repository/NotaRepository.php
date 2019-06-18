<?php

namespace App\Repository;

use App\Entity\Asignatura;
use App\Entity\Nota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nota[]    findAll()
 * @method Nota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nota::class);
    }

    public function getLastNotas($alumno) {
        $asignaturas = $alumno->getAsignatura();

        $result = array();
        foreach ($asignaturas as $value){
            $notas = $this->getEntityManager()
                ->createQueryBuilder()
                ->select('n')
                ->from(Nota::class, 'n')
                ->where('n.alumno = :alumno')
                ->andWhere('n.asignatura = :asignatura')
                ->setParameters(array(":alumno" => $alumno, ":asignatura" => $value))
                ->orderBy('n.fecha', 'DESC')
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();
            if(!$notas){
                $result[$value->getNombre()] = '';
            }else{
                $result[$value->getNombre()] = $notas->getNota();
            }
        }

        return $result;
    }
}
