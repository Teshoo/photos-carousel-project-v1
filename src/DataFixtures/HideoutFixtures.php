<?php

namespace App\DataFixtures;

use App\Entity\Hideout;
use App\DataFixtures\TripFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HideoutFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $hideout = new Hideout();
        $hideout->setName('Bukchon Guesthouse')
            ->setLat('37.578654')
            ->setLng('126.985737');
        $manager->persist($hideout);
        $this   ->addReference('bukchon_guesthouse', $hideout);

        $hideout = new Hideout();
        $hideout->setName('Hongdae Airbnb')
            ->setLat('37.557288')
            ->setLng('126.932325');
        $manager->persist($hideout);
        $this   ->addReference('hongdae_aribnb', $hideout);

        $hideout = new Hideout();
        $hideout->setName('Capsule Inn Gangneung')
                ->setLat('37.794764')
                ->setLng('128.918137');
        $manager->persist($hideout);
        $this   ->addReference('capsule_inn_gangneung', $hideout);

        $manager->flush();
    }
}
