<?php

namespace App\DataFixtures;

use App\Entity\DayTrip;
use App\DataFixtures\TripFixtures;
use App\DataFixtures\HideoutFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class DayTripFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {

        // SEOUL 1

        $dayTrip = new DayTrip();
        $dayTrip->setName('Logement')
                ->setDate(new \DateTime('2019-01-15'))
                ->addHideout($this->getReference('bukchon_guesthouse'))
                ->setTrip($this->getReference('bukchon'));
        $manager->persist($dayTrip);
        $this   ->addReference('bukchon_logement', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 1 : Arrivée')
                ->setDate(new \DateTime('2019-01-15'))
                ->addHideout($this->getReference('bukchon_guesthouse'))
                ->setTrip($this->getReference('bukchon'));
        $manager->persist($dayTrip);
        $this   ->addReference('bukchon_day_1', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 2 : Bukchon')
                ->setDate(new \DateTime('2019-01-16'))
                ->addHideout($this->getReference('bukchon_guesthouse'))
                ->setTrip($this->getReference('bukchon'));
        $manager->persist($dayTrip);
        $this   ->addReference('bukchon_day_2', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 3 : Bukchon')
                ->setDate(new \DateTime('2019-01-17'))
                ->addHideout($this->getReference('bukchon_guesthouse'))
                ->setTrip($this->getReference('bukchon'));
        $manager->persist($dayTrip);
        $this   ->addReference('bukchon_day_3', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 4 : Départ')
                ->setDate(new \DateTime('2019-01-18'))
                ->addHideout($this->getReference('bukchon_guesthouse'))
                ->setTrip($this->getReference('bukchon'));
        $manager->persist($dayTrip);
        $this   ->addReference('bukchon_day_4', $dayTrip);

        // HONGDAE

        $dayTrip = new DayTrip();
        $dayTrip->setName('Logement')
                ->setDate(new \DateTime('2019-01-18'))
                ->addHideout($this->getReference('hongdae_airbnb'))
                ->setTrip($this->getReference('hongdae'));
        $manager->persist($dayTrip);
        $this   ->addReference('hongdae_logement', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 1 : Balade')
                ->setDate(new \DateTime('2019-01-18'))
                ->addHideout($this->getReference('hongdae_airbnb'))
                ->setTrip($this->getReference('hongdae'));
        $manager->persist($dayTrip);
        $this   ->addReference('hongdae_day_1', $dayTrip);

        // GANGNEUNG

        $dayTrip = new DayTrip();
        $dayTrip->setName('Logement')
                ->setDate(new \DateTime('2019-02-06'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_logement', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 1 : Arrivée')
                ->setDate(new \DateTime('2019-02-06'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_1', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 2 : Tour du lac')
                ->setDate(new \DateTime('2019-02-07'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_2', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 3 : Parc Olympique')
                ->setDate(new \DateTime('2019-02-08'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_3', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 4 : Rando sur la côte')
                ->setDate(new \DateTime('2019-02-09'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_4', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 5 : Repos')
                ->setDate(new \DateTime('2019-02-10'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_5', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 6 : Montagnes')
                ->setDate(new \DateTime('2019-02-11'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_6', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 7 : Repos')
                ->setDate(new \DateTime('2019-02-12'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_7', $dayTrip);

        $dayTrip = new DayTrip();
        $dayTrip->setName('Day 8 : Départ')
                ->setDate(new \DateTime('2019-02-13'))
                ->addHideout($this->getReference('capsule_inn_gangneung'))
                ->setTrip($this->getReference('gangneung'));
        $manager->persist($dayTrip);
        $this   ->addReference('gangneung_day_8', $dayTrip);
        
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TripFixtures::class,
            HideoutFixtures::class,
        ];
    }
}
