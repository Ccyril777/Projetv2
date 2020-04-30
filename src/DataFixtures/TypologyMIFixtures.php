<?php

namespace App\DataFixtures;

use App\Entity\TypologyMI;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class TypologyMIFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 10; $i++) {
            $typologymi = new typologymi();
            $typologymi->setShortName($faker->firstname);
            $typologymi->setLongName($faker->lastname);
            $typologymi->setDescription($faker->text);
            $manager->persist($typologymi);
        }
        $manager->flush();
    }
}
