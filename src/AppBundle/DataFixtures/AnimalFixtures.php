<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $animal1 = new Animal();
        $animal1->setSpecies('Dog');
        $animal1->setBreed('Beagle');

        $animal2 = new Animal();
        $animal2->setSpecies('Dog');
        $animal2->setBreed('Belgian Sheepdog');

        $animal3 = new Animal();
        $animal3->setSpecies('Cat');
        $animal3->setBreed('Abyssinian');

        $manager->persist($animal1);
        $manager->persist($animal2);
        $manager->persist($animal3);

        $manager->flush();
    }
}
