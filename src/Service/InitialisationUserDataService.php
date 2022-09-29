<?php

namespace App\Service;

use App\Entity\Galery;
use App\Entity\ImageDefault;
use Doctrine\ORM\EntityManagerInterface;

class InitialisationUserDataService
{

    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function initialiserGalery($user)
    {
        for ($i = 1; $i <= 3; $i++) {
            $galery = new Galery();
            $galery->setUser($user)
                ->setName('Galery' . $i);
            $this->manager->persist($galery);
        }
        $this->manager->flush();
    }
}
