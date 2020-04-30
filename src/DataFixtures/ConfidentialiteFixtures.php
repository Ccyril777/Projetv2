<?php

namespace App\DataFixtures;

use App\Entity\Confidentialite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class ConfidentialiteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker  =  Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 5; $i++) {
            $confidentialite = new Confidentialite();
            $confidentialite->setConfidentialiteName($faker->lastname);
            $manager->persist($confidentialite);
        }
        $manager->flush();
    }
}
