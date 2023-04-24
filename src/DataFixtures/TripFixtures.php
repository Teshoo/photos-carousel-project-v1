<?php

namespace App\DataFixtures;

use App\Entity\Trip;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TripFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $trip = new Trip();
        $trip   ->setName('Bukchon');
        $manager->persist($trip);
        $this   ->addReference('bukchon', $trip);
        
        $trip = new Trip();
        $trip   ->setName('Hongdae');
        $manager->persist($trip);
        $this   ->addReference('hongdae', $trip);

        $trip = new Trip();
        $trip   ->setName('Busan');
        $manager->persist($trip);
        $this   ->addReference('busan', $trip);

        $trip = new Trip();
        $trip   ->setName('Gwanak-gu');
        $manager->persist($trip);
        $this   ->addReference('gwanak-gu', $trip);

        $trip = new Trip();
        $trip   ->setName('Gangneung');
        $manager->persist($trip);
        $this   ->addReference('gangneung', $trip);

        $trip = new Trip();
        $trip   ->setName('Gyeongju');
        $manager->persist($trip);
        $this   ->addReference('gyeongju', $trip);

        $trip = new Trip();
        $trip   ->setName('Gwangju');
        $manager->persist($trip);
        $this   ->addReference('gwangju', $trip);

        $trip = new Trip();
        $trip   ->setName('Yeosu');
        $manager->persist($trip);
        $this   ->addReference('yeosu', $trip);

        $trip = new Trip();
        $trip   ->setName('Jeju-si 1');
        $manager->persist($trip);
        $this   ->addReference('jeju-si_1', $trip);

        $trip = new Trip();
        $trip   ->setName('Seogwipo');
        $manager->persist($trip);
        $this   ->addReference('seogwipo', $trip);

        $trip = new Trip();
        $trip   ->setName('Jeju-si 2');
        $manager->persist($trip);
        $this   ->addReference('jeju-si_2', $trip);

        $manager->flush();
    }
}
