<?php

namespace App\DataFixtures;

use App\Entity\Picture;
use App\Entity\DayTrip;
use App\DataFixtures\DayTripFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class PictureFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        // BUKCHON //

        // DAY TRIP "LOGEMENT"

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161116.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:11:16.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161154.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:11:54.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161231.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:12:31.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161257.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:12:57.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161357.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:13:57.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161437.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:14:37.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161447.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:14:47.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161457.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:14:57.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_161508.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:15:08.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_162343.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:23:43.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_162350.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:23:50.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190115_162509.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T16:25:09.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190116_081324.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T08:13:24.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_logement'));
        $manager->persist($picture);

        // DAY TRIP "BUKCHON DAY 1 ARRIVEE"

        $picture = new Picture();
        $picture->setName('Incheon Airport')
                ->setUrl('IMG_20190115_103104.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T10:31:04.000Z'))
                ->setLat('37.446855')
                ->setLng('126.451947')
                ->setdayTrip($this->getReference('bukchon_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Paris Baguette')
                ->setUrl('IMG_20190115_143737.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-15T14:37:37.000Z'))
                ->setLat('37.579378')
                ->setLng('126.986681')
                ->setdayTrip($this->getReference('bukchon_day_1'));
        $manager->persist($picture);

        // DAY TRIP "BUKCHON DAY 2 BUKCHON"

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190116_081317.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T08:13:17.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_091038.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:10:38.000Z'))
                ->setLat('37.583200')
                ->setLng('126.987712')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_091338.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:13:38.000Z'))
                ->setLat('37.583214')
                ->setLng('126.986089')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_091910.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:19:10.000Z'))
                ->setLat('37.582677')
                ->setLng('126.985713')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_092739.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:27:39.000Z'))
                ->setLat('37.582765')
                ->setLng('126.982541')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village - Bukchon Asian Cultural Art Museum')
                ->setUrl('IMG_20190116_094130.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:41:30.000Z'))
                ->setLat('37.583969')
                ->setLng('126.983409')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village - Bukchon Asian Cultural Art Museum')
                ->setUrl('IMG_20190116_094137.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:41:37.000Z'))
                ->setLat('37.583969')
                ->setLng('126.983409')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_094250.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:42:50.000Z'))
                ->setLat('37.583480')
                ->setLng('126.983239')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_094314.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:43:14.000Z'))
                ->setLat('37.583461')
                ->setLng('126.983078')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_094325.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:43:25.000Z'))
                ->setLat('37.583462')
                ->setLng('126.983059')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_094445.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:44:45.000Z'))
                ->setLat('37.582880')
                ->setLng('126.983541')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Village')
                ->setUrl('IMG_20190116_094448.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T09:44:48.000Z'))
                ->setLat('37.582880')
                ->setLng('126.983541')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sur le chemin de Gyeongbokgung')
                ->setUrl('IMG_20190116_100018.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:00:18.000Z'))
                ->setLat('37.576012')
                ->setLng('126.983997')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sur le chemin de Gyeongbokgung - Dongshipjagak')
                ->setUrl('IMG_20190116_100612.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:06:12.000Z'))
                ->setLat('37.576100')
                ->setLng('126.979938')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gwanghwamun')
                ->setUrl('IMG_20190116_101313.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:13:13.000Z'))
                ->setLat('37.576580')
                ->setLng('126.977237')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gwanghwamun')
                ->setUrl('IMG_20190116_101411.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:14:11.000Z'))
                ->setLat('37.576629')
                ->setLng('126.976844')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gwanghwamun')
                ->setUrl('IMG_20190116_101452.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:14:52.000Z'))
                ->setLat('37.576630')
                ->setLng('126.976713')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gwanghwamun')
                ->setUrl('IMG_20190116_101513.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:15:13.000Z'))
                ->setLat('37.576629')
                ->setLng('126.976844')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gwanghwamun')
                ->setUrl('IMG_20190116_101756.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:17:56.000Z'))
                ->setLat('37.576321')
                ->setLng('126.977322')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Heungnyemun')
                ->setUrl('IMG_20190116_101804.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:18:04.000Z'))
                ->setLat('37.576321')
                ->setLng('126.977322')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Heungnyemun')
                ->setUrl('IMG_20190116_102136.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:21:36.000Z'))
                ->setLat('37.576536')
                ->setLng('126.977259')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Yeongjegyo')
                ->setUrl('IMG_20190116_102307.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:23:07.000Z'))
                ->setLat('37.577114')
                ->setLng('126.976975')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Heungnyemun')
                ->setUrl('IMG_20190116_102404.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:24:04.000Z'))
                ->setLat('37.577083')
                ->setLng('126.977019')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Yeongjegyo')
                ->setUrl('IMG_20190116_102638.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:26:38.000Z'))
                ->setLat('37.577277')
                ->setLng('126.976958')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Yuhwamun')
                ->setUrl('IMG_20190116_102659.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:26:59.000Z'))
                ->setLat('37.577438')
                ->setLng('126.976960')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongmun')
                ->setUrl('IMG_20190116_102709.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:27:09.000Z'))
                ->setLat('37.577501')
                ->setLng('126.976958')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_102749.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:27:49.000Z'))
                ->setLat('37.577859')
                ->setLng('126.976997')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongmun')
                ->setUrl('IMG_20190116_102818.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:28:18.000Z'))
                ->setLat('37.577846')
                ->setLng('126.976938')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongmun')
                ->setUrl('IMG_20190116_102821.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:28:21.000Z'))
                ->setLat('37.577846')
                ->setLng('126.976938')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongmun')
                ->setUrl('IMG_20190116_102824.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:28:24.000Z'))
                ->setLat('37.577846')
                ->setLng('126.976938')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103039.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:30:39.000Z'))
                ->setLat('37.578436')
                ->setLng('126.977122')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103050.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:30:50.000Z'))
                ->setLat('37.578436')
                ->setLng('126.977122')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103058.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:30:58.000Z'))
                ->setLat('37.578436')
                ->setLng('126.977122')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103105.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:31:05.000Z'))
                ->setLat('37.578436')
                ->setLng('126.977122')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103125.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:31:25.000Z'))
                ->setLat('37.578408')
                ->setLng('126.977023')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongmun')
                ->setUrl('IMG_20190116_103130.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:31:30.000Z'))
                ->setLat('37.578408')
                ->setLng('126.977023')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103239.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:32:39.000Z'))
                ->setLat('37.578556')
                ->setLng('126.977158')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103250.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:32:50.000Z'))
                ->setLat('37.578556')
                ->setLng('126.977158')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103257.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:32:57.000Z'))
                ->setLat('37.578556')
                ->setLng('126.977158')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103341.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:33:41.000Z'))
                ->setLat('37.578698')
                ->setLng('126.977065')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Geunjeongjeon')
                ->setUrl('IMG_20190116_103347.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:33:47.000Z'))
                ->setLat('37.578698')
                ->setLng('126.977065')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Sajeongjeon')
                ->setUrl('IMG_20190116_103439.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:34:39.000Z'))
                ->setLat('37.578947')
                ->setLng('126.977000')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Sajeongjeon')
                ->setUrl('IMG_20190116_103508.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:35:08.000Z'))
                ->setLat('37.579032')
                ->setLng('126.977013')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Sajeongjeon')
                ->setUrl('IMG_20190116_103516.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:35:16.000Z'))
                ->setLat('37.579032')
                ->setLng('126.977013')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Sajeongjeon')
                ->setUrl('IMG_20190116_103528.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:35:28.000Z'))
                ->setLat('37.579032')
                ->setLng('126.977013')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Cheonchujeon')
                ->setUrl('IMG_20190116_103732_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:37:32.000Z'))
                ->setLat('37.579089')
                ->setLng('126.976730')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung')
                ->setUrl('IMG_20190116_103747.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:37:47.000Z'))
                ->setLat('37.579128')
                ->setLng('126.976765')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gangnyeongjeon')
                ->setUrl('IMG_20190116_103938.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:39:38.000Z'))
                ->setLat('37.579416')
                ->setLng('126.976929')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gyeongseongjeon')
                ->setUrl('IMG_20190116_103949.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:39:49.000Z'))
                ->setLat('37.579450')
                ->setLng('126.976861')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung')
                ->setUrl('IMG_20190116_104010.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:40:10.000Z'))
                ->setLat('37.579550')
                ->setLng('126.976731')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongbokgung - Gangnyeongjeon')
                ->setUrl('IMG_20190116_104025.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:40:25.000Z'))
                ->setLat('37.579561')
                ->setLng('126.976613')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Hamwonjeon')
                ->setUrl('IMG_20190116_104108.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:41:08.000Z'))
                ->setLat('37.579851')
                ->setLng('126.976494')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Gyeonghoeru')
                ->setUrl('IMG_20190116_104153.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:41:53.000Z'))
                ->setLat('37.579919')
                ->setLng('126.976349')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Gyeonghoeru')
                ->setUrl('IMG_20190116_104209.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:42:09.000Z'))
                ->setLat('37.579919')
                ->setLng('126.976349')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jib-Ogjae')
                ->setUrl('IMG_20190116_105016.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:50:16.000Z'))
                ->setLat('37.582901')
                ->setLng('126.975984')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jib-Ogjae')
                ->setUrl('IMG_20190116_105103_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:51:03.000Z'))
                ->setLat('37.583252')
                ->setLng('126.975904')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jib-Ogjae')
                ->setUrl('IMG_20190116_105113.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:51:13.000Z'))
                ->setLat('37.583252')
                ->setLng('126.975904')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);
        
        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105258.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:52:58.000Z'))
                ->setLat('37.583252')
                ->setLng('126.975904')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105335.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:53:35.000Z'))
                ->setLat('37.583062')
                ->setLng('126.976984')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105400.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:54:00.000Z'))
                ->setLat('37.582946')
                ->setLng('126.977168')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105414.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:54:14.000Z'))
                ->setLat('37.582946')
                ->setLng('126.977168')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105453.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:54:53.000Z'))
                ->setLat('37.583165')
                ->setLng('126.977380')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105459.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:54:59.000Z'))
                ->setLat('37.583165')
                ->setLng('126.977380')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105645.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:56:45.000Z'))
                ->setLat('37.583430')
                ->setLng('126.977221')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105700.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:57:00.000Z'))
                ->setLat('37.583481')
                ->setLng('126.977221')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Geoncheonggung')
                ->setUrl('IMG_20190116_105901.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T10:59:01.000Z'))
                ->setLat('37.582889')
                ->setLng('126.977423')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Hyangwonjeong Pavilion')
                ->setUrl('IMG_20190116_110033.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:00:33.000Z'))
                ->setLat('37.582218')
                ->setLng('126.977622')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Hyangwonjeong Pavilion')
                ->setUrl('IMG_20190116_110058.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:00:58.000Z'))
                ->setLat('37.582218')
                ->setLng('126.977622')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jibgyeongdang')
                ->setUrl('IMG_20190116_110405.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:04:05.000Z'))
                ->setLat('37.581472')
                ->setLng('126.977083')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jibgyeongdang')
                ->setUrl('IMG_20190116_110411.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:04:11.000Z'))
                ->setLat('37.581472')
                ->setLng('126.977083')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jibgyeongdang')
                ->setUrl('IMG_20190116_110436.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:04:36.000Z'))
                ->setLat('37.581632')
                ->setLng('126.977121')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangnyeongjeon - Jibgyeongdang')
                ->setUrl('IMG_20190116_110447.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:04:47.000Z'))
                ->setLat('37.581661')
                ->setLng('126.977120')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('The National Folk Museum of Korea')
                ->setUrl('IMG_20190116_112130.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:21:30.000Z'))
                ->setLat('37.581746')
                ->setLng('126.979127')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('The National Folk Museum of Korea')
                ->setUrl('IMG_20190116_115154.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:51:54.000Z'))
                ->setLat('37.581746')
                ->setLng('126.979127')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('The National Folk Museum of Korea')
                ->setUrl('IMG_20190116_115645.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:56:45.000Z'))
                ->setLat('37.580888')
                ->setLng('126.978858')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('The National Folk Museum of Korea')
                ->setUrl('IMG_20190116_115651.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T11:56:45.000Z'))
                ->setLat('37.580888')
                ->setLng('126.978858')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190116_220007.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-16T22:00:07.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_day_2'));
        $manager->persist($picture);

        // DAY TRIP "BUKCHON DAY 3 BUKCHON"

        $picture = new Picture();
        $picture->setName('En approche de Changdeokgung')
                ->setUrl('IMG_20190117_092546.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:25:46.000Z'))
                ->setLat('37.579290')
                ->setLng('126.988264')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Donhwamun')
                ->setUrl('IMG_20190117_092924.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:29:24.000Z'))
                ->setLat('37.577664')
                ->setLng('126.989802')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Jinseonmun')
                ->setUrl('IMG_20190117_093525.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:35:25.000Z'))
                ->setLat('37.578596')
                ->setLng('126.990296')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung')
                ->setUrl('IMG_20190117_093607.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:36:07.000Z'))
                ->setLat('37.578929')
                ->setLng('126.990361')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Naewewon')
                ->setUrl('IMG_20190117_093842.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:38:42.000Z'))
                ->setLat('37.578995')
                ->setLng('126.990334')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Jinseonmun')
                ->setUrl('IMG_20190117_093938.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:39:38.000Z'))
                ->setLat('37.578502')
                ->setLng('126.990469')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Jinseonmun')
                ->setUrl('IMG_20190117_093951.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:39:51.000Z'))
                ->setLat('37.578567')
                ->setLng('126.990539')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongmun + Sugjangmun')
                ->setUrl('IMG_20190117_093951.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:39:51.000Z'))
                ->setLat('37.578567')
                ->setLng('126.990539')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094116.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:41:16.000Z'))
                ->setLat('37.578998')
                ->setLng('126.990998')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094149.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:41:49.000Z'))
                ->setLat('37.579180')
                ->setLng('126.990969')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094212.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:42:12.000Z'))
                ->setLat('37.579240')
                ->setLng('126.990894')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094311.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:43:11.000Z'))
                ->setLat('37.579357')
                ->setLng('126.991100')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094322.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:43:22.000Z'))
                ->setLat('37.579357')
                ->setLng('126.991100')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094328.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:43:28.000Z'))
                ->setLat('37.579357')
                ->setLng('126.991100')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094337.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:43:37.000Z'))
                ->setLat('37.579357')
                ->setLng('126.991100')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094502.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:45:02.000Z'))
                ->setLat('37.579362')
                ->setLng('126.991158')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094502.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:45:02.000Z'))
                ->setLat('37.579362')
                ->setLng('126.991158')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094510.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:45:10.000Z'))
                ->setLat('37.579362')
                ->setLng('126.991158')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongmun')
                ->setUrl('IMG_20190117_094519.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:45:19.000Z'))
                ->setLat('37.579362')
                ->setLng('126.991158')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094541.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:45:41.000Z'))
                ->setLat('37.579368')
                ->setLng('126.991243')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094614.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:46:14.000Z'))
                ->setLat('37.579263')
                ->setLng('126.991450')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongmun')
                ->setUrl('IMG_20190117_094748.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:47:48.000Z'))
                ->setLat('37.579411')
                ->setLng('126.991740')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon')
                ->setUrl('IMG_20190117_094809.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:48:09.000Z'))
                ->setLat('37.579458')
                ->setLng('126.991736')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_094820.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:48:20.000Z'))
                ->setLat('37.579458')
                ->setLng('126.991736')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_094835.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:48:35.000Z'))
                ->setLat('37.579503')
                ->setLng('126.991698')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon')
                ->setUrl('IMG_20190117_094907.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:49:07.000Z'))
                ->setLat('37.579624')
                ->setLng('126.991710')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon')
                ->setUrl('IMG_20190117_094912.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:49:12.000Z'))
                ->setLat('37.579624')
                ->setLng('126.991710')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon')
                ->setUrl('IMG_20190117_094920.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:49:20.000Z'))
                ->setLat('37.579624')
                ->setLng('126.991710')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon')
                ->setUrl('IMG_20190117_094926.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:49:26.000Z'))
                ->setLat('37.579624')
                ->setLng('126.991710')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095027.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:50:27.000Z'))
                ->setLat('37.579396')
                ->setLng('126.991900')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095142.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:51:42.000Z'))
                ->setLat('37.579348')
                ->setLng('126.992159')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095250.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:52:50.000Z'))
                ->setLat('37.579671')
                ->setLng('126.991925')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seonjeongjeon + Injeongjeon')
                ->setUrl('IMG_20190117_095328.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:53:28.000Z'))
                ->setLat('37.579923')
                ->setLng('126.991913')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095350.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:53:50.000Z'))
                ->setLat('37.579954')
                ->setLng('126.991980')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095541.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:55:41.000Z'))
                ->setLat('37.579829')
                ->setLng('126.992311')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095557.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:55:57.000Z'))
                ->setLat('37.579855')
                ->setLng('126.992177')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095619.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:56:19.000Z'))
                ->setLat('37.579848')
                ->setLng('126.992227')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Daejojeon')
                ->setUrl('IMG_20190117_095650.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:56:50.000Z'))
                ->setLat('37.579970')
                ->setLng('126.992356')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Daejojeon')
                ->setUrl('IMG_20190117_095727.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:57:27.000Z'))
                ->setLat('37.580108')
                ->setLng('126.992402')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang')
                ->setUrl('IMG_20190117_095854.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T09:58:54.000Z'))
                ->setLat('37.579958')
                ->setLng('126.992791')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Huijeongdang + Seonjeongjeon')
                ->setUrl('IMG_20190117_100130.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:01:30.000Z'))
                ->setLat('37.579318')
                ->setLng('126.992402')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Seongjeonggak')
                ->setUrl('IMG_20190117_100158.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:01:58.000Z'))
                ->setLat('37.579287')
                ->setLng('126.992556')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Gyeongchungjeon')
                ->setUrl('IMG_20190117_101137.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:11:37.000Z'))
                ->setLat('37.579651')
                ->setLng('126.993502')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Tongmyeongjeon + Yanghwadang')
                ->setUrl('IMG_20190117_101158.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:11:58.000Z'))
                ->setLat('37.579500')
                ->setLng('126.993588')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Gyeongchungjeon + Tongmyeongjeon')
                ->setUrl('IMG_20190117_101346.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:13:46.000Z'))
                ->setLat('37.579108')
                ->setLng('126.994197')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Haminjeong')
                ->setUrl('IMG_20190117_101409.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:14:09.000Z'))
                ->setLat('37.578966')
                ->setLng('126.994229')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Haminjeong')
                ->setUrl('IMG_20190117_101451.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:14:51.000Z'))
                ->setLat('37.578812')
                ->setLng('126.994245')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Haminjeong')
                ->setUrl('IMG_20190117_101533.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:15:33.000Z'))
                ->setLat('37.578826')
                ->setLng('126.994237')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Binyangmun')
                ->setUrl('IMG_20190117_101533.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:15:33.000Z'))
                ->setLat('37.578752')
                ->setLng('126.994523')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung')
                ->setUrl('IMG_20190117_101645.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:16:45.000Z'))
                ->setLat('37.578782')
                ->setLng('126.994964')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Myeongjeongmun')
                ->setUrl('IMG_20190117_101700.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:17:00.000Z'))
                ->setLat('37.578782')
                ->setLng('126.994964')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung - Honghwamun')
                ->setUrl('IMG_20190117_101801.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:18:01.000Z'))
                ->setLat('37.578809')
                ->setLng('126.995714')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung')
                ->setUrl('IMG_20190117_101811.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:18:11.000Z'))
                ->setLat('37.578809')
                ->setLng('126.995714')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Chundangji')
                ->setUrl('IMG_20190117_102119.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:21:19.000Z'))
                ->setLat('37.581371')
                ->setLng('126.995164')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden')
                ->setUrl('IMG_20190117_103331.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:33:31.000Z'))
                ->setLat('37.581554')
                ->setLng('126.993290')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Buyongji')
                ->setUrl('IMG_20190117_104128.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:41:28.000Z'))
                ->setLat('37.581676')
                ->setLng('126.993252')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Eosumun + Juhablu')
                ->setUrl('IMG_20190117_103414.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:34:14.000Z'))
                ->setLat('37.581849')
                ->setLng('126.992757')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Eosumun + Juhablu')
                ->setUrl('IMG_20190117_104209.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:42:09.000Z'))
                ->setLat('37.581881')
                ->setLng('126.992791')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Yeonghwadang')
                ->setUrl('IMG_20190117_104327.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:43:27.000Z'))
                ->setLat('37.581871')
                ->setLng('126.993123')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Yeonghwadang')
                ->setUrl('IMG_20190117_104448.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:44:48.000Z'))
                ->setLat('37.581875')
                ->setLng('126.993373')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Aelyeonji')
                ->setUrl('IMG_20190117_105250.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T10:52:50.000Z'))
                ->setLat('37.582686')
                ->setLng('126.993258')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Jondeogjeong')
                ->setUrl('IMG_20190117_110204.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:02:04.000Z'))
                ->setLat('37.584077')
                ->setLng('126.992964')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Jondeogjeong')
                ->setUrl('IMG_20190117_110235.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:02:35.000Z'))
                ->setLat('37.584097')
                ->setLng('126.992941')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Jondeogjeong')
                ->setUrl('IMG_20190117_110340.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:03:40.000Z'))
                ->setLat('37.584105')
                ->setLng('126.992811')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Seungjaejeong')
                ->setUrl('IMG_20190117_110523.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:05:23.000Z'))
                ->setLat('37.583677')
                ->setLng('126.993045')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Seungjaejeong')
                ->setUrl('IMG_20190117_110544.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:05:44.000Z'))
                ->setLat('37.583781')
                ->setLng('126.992951')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Yeongyeongdang')
                ->setUrl('IMG_20190117_111240.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:12:40.000Z'))
                ->setLat('37.583224')
                ->setLng('126.992224')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Seonghyangjae')
                ->setUrl('IMG_20190117_111355.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:13:55.000Z'))
                ->setLat('37.583402')
                ->setLng('126.992486')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Nongsujeong')
                ->setUrl('IMG_20190117_111419.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:14:19.000Z'))
                ->setLat('37.583421')
                ->setLng('126.992600')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Seonghyangjae')
                ->setUrl('IMG_20190117_111429.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:14:29.000Z'))
                ->setLat('37.583390')
                ->setLng('126.992618')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung Secret Garden - Seungjaejeong')
                ->setUrl('IMG_20190117_111431.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:14:31.000Z'))
                ->setLat('37.583390')
                ->setLng('126.992618')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changdeokgung - Injeongjeon')
                ->setUrl('IMG_20190117_113602.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:36:02.000Z'))
                ->setLat('37.578905')
                ->setLng('126.991222')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);
        
        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Seongjong\'s Taesilbi')
                ->setUrl('IMG_20190117_114317.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:43:17.000Z'))
                ->setLat('37.580671')
                ->setLng('126.994426')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Seongjong\'s Taesilbi')
                ->setUrl('IMG_20190117_114326.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:43:26.000Z'))
                ->setLat('37.580671')
                ->setLng('126.994426')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Green House')
                ->setUrl('IMG_20190117_114751.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:47:51.000Z'))
                ->setLat('37.582673')
                ->setLng('126.994389')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Green House')
                ->setUrl('IMG_20190117_114817.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:48:17.000Z'))
                ->setLat('37.582673')
                ->setLng('126.994124')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Green House')
                ->setUrl('IMG_20190117_115045.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T11:50:45.000Z'))
                ->setLat('37.583057')
                ->setLng('126.994097')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Changgyeonggung park - Green House')
                ->setUrl('IMG_20190117_120808.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T12:08:08.000Z'))
                ->setLat('37.582902')
                ->setLng('126.994430')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Daegaksa')
                ->setUrl('IMG_20190117_123405.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T12:34:05.000Z'))
                ->setLat('37.573706')
                ->setLng('126.991579')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Daegaksa')
                ->setUrl('IMG_20190117_123654.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T12:36:54.000Z'))
                ->setLat('37.573546')
                ->setLng('126.991770')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Un restau quelque part')
                ->setUrl('IMG_20190117_132005.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T13:20:05.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Un restau quelque part')
                ->setUrl('IMG_20190117_132412.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T13:24:12.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Samil main street')
                ->setUrl('IMG_20190117_202408.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T20:24:08.000Z'))
                ->setLat('37.569695')
                ->setLng('126.989087')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Bosingak (14ème)')
                ->setUrl('IMG_20190117_203228.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T20:32:28.000Z'))
                ->setLat('37.569551')
                ->setLng('126.983694')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ujeongguk street')
                ->setUrl('IMG_20190117_203306_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-17T20:33:06.000Z'))
                ->setLat('37.569515')
                ->setLng('126.983415')
                ->setdayTrip($this->getReference('bukchon_day_3'));
        $manager->persist($picture);

        // DAY TRIP "DEPART"

        $picture = new Picture();
        $picture->setName('Bukchon Guesthouse')
                ->setUrl('IMG_20190118_083503.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T08:35:03.000Z'))
                ->setLat('37.578654')
                ->setLng('126.985737')
                ->setdayTrip($this->getReference('bukchon_day_4'));
        $manager->persist($picture);

        // HONGDAE //

        // DAY TRIP "LOGEMENT"

        $picture = new Picture();
        $picture->setName('Hongdae Airbnb')
                ->setUrl('IMG_20190118_180942.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T18:09:42.000Z'))
                ->setLat('37.557288')
                ->setLng('126.932325')
                ->setdayTrip($this->getReference('hongdae_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Hongdae Airbnb')
                ->setUrl('IMG_20190118_220631.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T22:06:31.000Z'))
                ->setLat('37.557288')
                ->setLng('126.932325')
                ->setdayTrip($this->getReference('hongdae_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Hongdae Airbnb')
                ->setUrl('IMG_20190121_084614.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-21T08:46:14.000Z'))
                ->setLat('37.557288')
                ->setLng('126.932325')
                ->setdayTrip($this->getReference('hongdae_logement'));
        $manager->persist($picture);

        // DAY TRIP "HONGDAE DAY 1 BALADE"

        $picture = new Picture();
        $picture->setName('Sinchon streets - Seoul Korea Temple')
                ->setUrl('IMG_20190118_113459.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T11:34:59.000Z'))
                ->setLat('37.558415')
                ->setLng('126.931443')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets - Seoul Korea Temple')
                ->setUrl('IMG_20190118_113533.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T11:35:33.000Z'))
                ->setLat('37.558201')
                ->setLng('126.931627')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets')
                ->setUrl('IMG_20190118_113727.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T11:37:27.000Z'))
                ->setLat('37.559211')
                ->setLng('126.932552')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets - Changcheon Methodist Church')
                ->setUrl('IMG_20190118_114806.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T11:48:06.000Z'))
                ->setLat('37.558849')
                ->setLng('126.936818')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets')
                ->setUrl('IMG_20190118_115308.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T11:53:08.000Z'))
                ->setLat('37.558856')
                ->setLng('126.939159')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets - Sinhyeon Church')
                ->setUrl('IMG_20190118_120744.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T12:07:44.000Z'))
                ->setLat('37.558837')
                ->setLng('126.947700')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets')
                ->setUrl('IMG_20190118_122456.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T12:24:56.000Z'))
                ->setLat('37.556554')
                ->setLng('126.938143')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sinchon streets')
                ->setUrl('IMG_20190118_205528.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-01-18T20:55:28.000Z'))
                ->setLat('37.557923')
                ->setLng('126.937666')
                ->setdayTrip($this->getReference('hongdae_day_1'));
        $manager->persist($picture);

        // GANGNEUNG //

        // DAY TRIP "GANGNEUNG LOGEMENT"

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190206_160109.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T16:01:09.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190206_160125.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T16:01:25.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190206_160229.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T16:02:29.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190206_160240.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T16:02:40.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190206_224307.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T22:43:07.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190207_200638.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T20:06:38.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190207_202746.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T20:27:46.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190207_203258.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T20:32:58.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190207_203304.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T20:33:04.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_logement'));
        $manager->persist($picture);
        

        // DAY TRIP "GANGNEUNG DAY 1 ARRIVEE"

        /* ---> départ bus à Séoul
        $picture = new Picture();
        $picture->setName('Départ en bus')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T12:17:46.000Z'))
                ->setUrl('IMG_20190206_121746.jpg')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);*/

        $picture = new Picture();
        $picture->setName('Gangmun Sotdae Bridge')
                ->setUrl('IMG_20190206_173511.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:35:11.000Z'))
                ->setLat('37.79689')
                ->setLng('128.91715')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190206_173520.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:35:20.000Z'))
                ->setLat('37.79689')
                ->setLng('128.91715')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Sotdae Bridge')
                ->setUrl('IMG_20190206_173556.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:35:56.000Z'))
                ->setLat('37.79724')
                ->setLng('128.91705')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Lighthouse')
                ->setUrl('IMG_20190206_173604.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:36:04.000Z'))
                ->setLat('37.79724')
                ->setLng('128.91705')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Jetée en face du phare')
                ->setUrl('IMG_20190206_173608.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:36:08.000Z'))
                ->setLat('37.79724')
                ->setLng('128.91705')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Sotdae Bridge + Gangmun Lighthouse')
                ->setUrl('IMG_20190206_173721.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:35:56.000Z'))
                ->setLat('37.79772')
                ->setLng('128.91676')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Beach')
                ->setUrl('IMG_20190206_173752.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:37:52.000Z'))
                ->setLat('37.79788')
                ->setLng('128.91697')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);
        
        $picture = new Picture();
        $picture->setName('Gangmun Lighthouse')
                ->setUrl('IMG_20190206_173804.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:38:04.000Z'))
                ->setLat('37.79788')
                ->setLng('128.91697')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Sotdae Bridge')
                ->setUrl('IMG_20190206_173810.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:38:10.000Z'))
                ->setLat('37.79788')
                ->setLng('128.91697')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Lake')
                ->setUrl('IMG_20190206_174908.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T17:49:08.000Z'))
                ->setLat('37.80070')
                ->setLng('128.91094')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Sotdae Bridge')
                ->setUrl('IMG_20190206_180825.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-06T18:08:25.000Z'))
                ->setLat('37.79775')
                ->setLng('128.91624')
                ->setdayTrip($this->getReference('gangneung_day_1'));
        $manager->persist($picture);


        // DAY TRIP "GANGNEUNG DAY 2 TOUR DU LAC"

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190207_121913.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:19:13.000Z'))
                ->setLat('37.79689')
                ->setLng('128.91715')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Lighthouse')
                ->setUrl('IMG_20190207_122009.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:20:09.000Z'))
                ->setLat('37.797374')
                ->setLng('128.91691')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Jetée en face du phare')
                ->setUrl('IMG_20190207_122019.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:20:19.000Z'))
                ->setLat('37.797374')
                ->setLng('128.91691')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Beach')
                ->setUrl('IMG_20190207_122915.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:29:15.000Z'))
                ->setLat('37.80288')
                ->setLng('128.91047')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Lake')
                ->setUrl('IMG_20190207_125419_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:54:19.000Z'))
                ->setLat('37.800905')
                ->setLng('128.902725')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Lake')
                ->setUrl('IMG_20190207_130136.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:01:36.000Z'))
                ->setLat('37.798040')
                ->setLng('128.898492')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Chamsori Gramophone Museum')
                ->setUrl('IMG_20190207_130248.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:02:48.000Z'))
                ->setLat('37.797781')
                ->setLng('128.897668')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Charmsori Gramophone Edison Film Museum')
                ->setUrl('IMG_20190207_130253.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:02:53.000Z'))
                ->setLat('37.797834')
                ->setLng('128.897686')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Charmsori Gramophone Edison Film Museum')
                ->setUrl('IMG_20190207_130324.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:03:24.000Z'))
                ->setLat('37.798012')
                ->setLng('128.897780')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Charmsori Gramophone & Edison Film Museums')
                ->setUrl('IMG_20190207_131050.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:10:50.000Z'))
                ->setLat('37.797277')
                ->setLng('128.897385')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Pavillon')
                ->setUrl('IMG_20190207_131446.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:14:46.000Z'))
                ->setLat('37.794967')
                ->setLng('128.896405')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Pavillon')
                ->setUrl('IMG_20190207_131525.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:15:25.000Z'))
                ->setLat('37.795042')
                ->setLng('128.896605')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Pavillon')
                ->setUrl('IMG_20190207_131535.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:15:35.000Z'))
                ->setLat('37.795058')
                ->setLng('128.896628')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Pavillon')
                ->setUrl('IMG_20190207_131548.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:15:48.000Z'))
                ->setLat('37.795074')
                ->setLng('128.896590')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Pavillon')
                ->setUrl('IMG_20190207_131614.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:16:14.000Z'))
                ->setLat('37.795103')
                ->setLng('128.896673')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Prickly Waterlily Wetland')
                ->setUrl('IMG_20190207_132759.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:27:59.000Z'))
                ->setLat('37.791724')
                ->setLng('128.896546')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Makguksu at Gangneung\'s parent\'s house')
                ->setUrl('IMG_20190207_140922.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:09:22.000Z'))
                ->setLat('37.783889')
                ->setLng('128.882438')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145016.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:50:16.000Z'))
                ->setLat('37.785605')
                ->setLng('128.884805')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145043.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:50:43.000Z'))
                ->setLat('37.785656')
                ->setLng('128.884806')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145151.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:51:51.000Z'))
                ->setLat('37.785867')
                ->setLng('128.885173')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145349.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:53:49.000Z'))
                ->setLat('37.786333')
                ->setLng('128.885216')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145352.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:53:52.000Z'))
                ->setLat('37.786333')
                ->setLng('128.885216')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145409.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:54:09.000Z'))
                ->setLat('37.786401')
                ->setLng('128.885163')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145441.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:54:41.000Z'))
                ->setLat('37.786541')
                ->setLng('128.885104')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145627.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:56:27.000Z'))
                ->setLat('37.786579')
                ->setLng('128.885279')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145636.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:56:36.000Z'))
                ->setLat('37.786579')
                ->setLng('128.885279')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145723.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:57:23.000Z'))
                ->setLat('37.786627')
                ->setLng('128.885170')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145757.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:57:57.000Z'))
                ->setLat('37.786614')
                ->setLng('128.885041')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145937.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:59:37.000Z'))
                ->setLat('37.786804')
                ->setLng('128.885067')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_145954.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:59:54.000Z'))
                ->setLat('37.786855')
                ->setLng('128.885085')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_150252.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:02:52.000Z'))
                ->setLat('37.786840')
                ->setLng('128.885369')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_150540.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:05:40.000Z'))
                ->setLat('37.787023')
                ->setLng('128.884346')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_150632.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:06:32.000Z'))
                ->setLat('37.786764')
                ->setLng('128.884480')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_150850.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:08:50.000Z'))
                ->setLat('37.786271')
                ->setLng('128.884541')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_150920.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:09:20.000Z'))
                ->setLat('37.786271')
                ->setLng('128.884541')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_151123.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:11:23.000Z'))
                ->setLat('37.786774')
                ->setLng('128.884808')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_151159.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:11:59.000Z'))
                ->setLat('37.786811')
                ->setLng('128.884732')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_151702.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:17:02.000Z'))
                ->setLat('37.787180')
                ->setLng('128.884020')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_151816.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:18:16.000Z'))
                ->setLat('37.786813')
                ->setLng('128.884034')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Sungyojang House (18th century)')
                ->setUrl('IMG_20190207_151951.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:19:51.000Z'))
                ->setLat('37.785877')
                ->setLng('128.884366')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Ecological Reserve')
                ->setUrl('IMG_20190207_153406.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:34:06.000Z'))
                ->setLat('37.783433')
                ->setLng('128.885514')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Ecological Reserve')
                ->setUrl('IMG_20190207_153533.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:35:33.000Z'))
                ->setLat('37.782686')
                ->setLng('128.884566')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Ecological Reserve')
                ->setUrl('IMG_20190207_153737.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:37:37.000Z'))
                ->setLat('37.781008')
                ->setLng('128.882376')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Embroidery Museum')
                ->setUrl('IMG_20190207_155159.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T15:51:59.000Z'))
                ->setLat('37.778118')
                ->setLng('128.880172')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Embroidery Museum')
                ->setUrl('IMG_20190207_163333_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T16:33:33.000Z'))
                ->setLat('37.778118')
                ->setLng('128.880172')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Embroidery Museum')
                ->setUrl('IMG_20190207_164040.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T16:40:40.000Z'))
                ->setLat('37.778118')
                ->setLng('128.880172')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170007.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:00:07.000Z'))
                ->setLat('37.778714')
                ->setLng('128.877499')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170107.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:01:07.000Z'))
                ->setLat('37.779213')
                ->setLng('128.877706')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170212.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:02:12.000Z'))
                ->setLat('37.779305')
                ->setLng('128.877702')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170315.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:03:15.000Z'))
                ->setLat('37.779181')
                ->setLng('128.877570')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170544.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:05:44.000Z'))
                ->setLat('37.779441')
                ->setLng('128.877425')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170635.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:06:35.000Z'))
                ->setLat('37.779394')
                ->setLng('128.877239')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170802.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:08:02.000Z'))
                ->setLat('37.779442')
                ->setLng('128.877158')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_170838.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:08:38.000Z'))
                ->setLat('37.779496')
                ->setLng('128.877248')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_172029.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:20:29.000Z'))
                ->setLat('37.778904')
                ->setLng('128.877121')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Ojukheon House')
                ->setUrl('IMG_20190207_173234.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:32:34.000Z'))
                ->setLat('37.777785')
                ->setLng('128.876855')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Ecological Reserve')
                ->setUrl('IMG_20190207_175207.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:52:07.000Z'))
                ->setLat('37.783208')
                ->setLng('128.886358')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyeongpo Ecological Reserve')
                ->setUrl('IMG_20190207_175511.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T17:55:11.000Z'))
                ->setLat('37.782987')
                ->setLng('128.889241')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Prickly Waterlily Wetland')
                ->setUrl('IMG_20190207_180045.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:00:45.000Z'))
                ->setLat('37.786499')
                ->setLng('128.893842')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Prickly Waterlily Wetland')
                ->setUrl('IMG_20190207_181017.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:10:17.000Z'))
                ->setLat('37.790673')
                ->setLng('128.902976')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Lake')
                ->setUrl('IMG_20190207_181241.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:12:41.000Z'))
                ->setLat('37.792287')
                ->setLng('128.903654')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Lake')
                ->setUrl('IMG_20190207_181311.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:13:11.000Z'))
                ->setLat('37.792287')
                ->setLng('128.903654')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Lake')
                ->setUrl('IMG_20190207_181836.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:18:36.000Z'))
                ->setLat('37.795930')
                ->setLng('128.907572')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gyongpo Lake')
                ->setUrl('IMG_20190207_182128.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T18:21:28.000Z'))
                ->setLat('37.798430')
                ->setLng('128.908198')
                ->setdayTrip($this->getReference('gangneung_day_2'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY 3 PARC OLYMPIQUE"

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_115920.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T11:59:20.000Z'))
                ->setLat('37.791438')
                ->setLng('128.909856')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_120107.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:01:07.000Z'))
                ->setLat('37.791732')
                ->setLng('128.909461')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_120145.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:01:45.000Z'))
                ->setLat('37.791770')
                ->setLng('128.909575')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_120304.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:03:04.000Z'))
                ->setLat('37.791920')
                ->setLng('128.909603')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_120318.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:03:18.000Z'))
                ->setLat('37.791926')
                ->setLng('128.909659')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Heo Gyun and Heo Nanseolheon Memorial Park')
                ->setUrl('IMG_20190208_120601.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:06:01.000Z'))
                ->setLat('37.791791')
                ->setLng('128.909458')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Forêt')
                ->setUrl('IMG_20190208_123216.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:32:16.000Z'))
                ->setLat('37.787433')
                ->setLng('128.909274')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Forêt')
                ->setUrl('IMG_20190208_123323.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:33:23.000Z'))
                ->setLat('37.786860')
                ->setLng('128.909566')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Forêt')
                ->setUrl('IMG_20190208_123608_BURST001_COVER.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:36:08.000Z'))
                ->setLat('37.784394')
                ->setLng('128.911091')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Forêt')
                ->setUrl('IMG_20190208_123858.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:38:58.000Z'))
                ->setLat('37.782673')
                ->setLng('128.911800')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Paris Baguette')
                ->setUrl('IMG_20190208_125655.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T12:56:55.000Z'))
                ->setLat('37.783384')
                ->setLng('128.916012')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Parc Olympique')
                ->setUrl('IMG_20190208_135945.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T13:59:45.000Z'))
                ->setLat('37.774092')
                ->setLng('128.901413')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Parc Olympique')
                ->setUrl('IMG_20190208_140249.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:02:49.000Z'))
                ->setLat('37.773830')
                ->setLng('128.899908')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Parc Olympique')
                ->setUrl('IMG_20190208_140553.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:05:53.000Z'))
                ->setLat('37.774597')
                ->setLng('128.898678')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Jungang Methodist Church')
                ->setUrl('IMG_20190208_143603.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-07T14:36:03.000Z'))
                ->setLat('37.781503')
                ->setLng('128.896034')
                ->setdayTrip($this->getReference('gangneung_day_3'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY 4 RANDO CÔTE"

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190209_090154.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:01:54.000Z'))
                ->setLat('37.794912')
                ->setLng('128.919208')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190209_090338.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:03:38.000Z'))
                ->setLat('37.794446')
                ->setLng('128.920141')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190209_091008.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:10:08.000Z'))
                ->setLat('37.790844')
                ->setLng('128.922729')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190209_092746.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:27:46.000Z'))
                ->setLat('37.780947')
                ->setLng('128.935946')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anmok Beach')
                ->setUrl('IMG_20190209_093801.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:38:01.000Z'))
                ->setLat('37.773564')
                ->setLng('128.946220')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anmok Beach')
                ->setUrl('IMG_20190209_093813.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:38:13.000Z'))
                ->setLat('37.773564')
                ->setLng('128.946220')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anmok Beach')
                ->setUrl('IMG_20190209_094502.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:45:02.000Z'))
                ->setLat('37.771324')
                ->setLng('128.949429')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Pine Wind Bridge')
                ->setUrl('IMG_20190209_095253.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:52:53.000Z'))
                ->setLat('37.769022')
                ->setLng('128.951493')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Pine Wind Bridge')
                ->setUrl('IMG_20190209_095344.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T09:53:44.000Z'))
                ->setLat('37.768708')
                ->setLng('128.951324')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Namhangjin Beach')
                ->setUrl('IMG_20190209_100039.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T10:00:39.000Z'))
                ->setLat('37.765194')
                ->setLng('128.953702')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Base aérienne de Gangneung')
                ->setUrl('IMG_20190209_110218.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T11:02:18.000Z'))
                ->setLat('37.746470')
                ->setLng('128.924081')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Plaine agricole')
                ->setUrl('IMG_20190209_110512.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T11:05:12.000Z'))
                ->setLat('37.744475')
                ->setLng('128.926123')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Plaine agricole')
                ->setUrl('IMG_20190209_110851.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T11:08:52.000Z'))
                ->setLat('37.743906')
                ->setLng('128.929899')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Port de Anin')
                ->setUrl('IMG_20190209_123214.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T12:32:14.000Z'))
                ->setLat('37.734428')
                ->setLng('128.989859')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anin Beach')
                ->setUrl('IMG_20190209_123218.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T12:32:18.000Z'))
                ->setLat('37.734428')
                ->setLng('128.989859')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_130522.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:05:22.000Z'))
                ->setLat('37.726238')
                ->setLng('128.991803')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_130530.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:05:30.000Z'))
                ->setLat('37.725697')
                ->setLng('128.991617')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_130649.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:06:49.000Z'))
                ->setLat('37.724596')
                ->setLng('128.990332')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_131037.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:10:37.000Z'))
                ->setLat('37.722956')
                ->setLng('128.990162')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_131243.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:12:43.000Z'))
                ->setLat('37.722537')
                ->setLng('128.990519')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_131256.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:12:56.000Z'))
                ->setLat('37.722537')
                ->setLng('128.990519')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_131333.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:13:33.000Z'))
                ->setLat('37.722059')
                ->setLng('128.990913')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132431.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:24:31.000Z'))
                ->setLat('37.718500')
                ->setLng('128.993849')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132459.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:24:59.000Z'))
                ->setLat('37.718500')
                ->setLng('128.993849')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132547.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:25:47.000Z'))
                ->setLat('37.718557')
                ->setLng('128.993595')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132615.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:26:15.000Z'))
                ->setLat('37.718557')
                ->setLng('128.993595')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132640.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:26:40.000Z'))
                ->setLat('37.718557')
                ->setLng('128.993595')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_132647.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:26:47.000Z'))
                ->setLat('37.718557')
                ->setLng('128.993595')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_133134.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:31:34.000Z'))
                ->setLat('37.716575')
                ->setLng('128.994783')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_133157.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:31:57.000Z'))
                ->setLat('37.716266')
                ->setLng('128.994859')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_133416.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:34:16.000Z'))
                ->setLat('37.715963')
                ->setLng('128.996068')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_135027.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:50:27.000Z'))
                ->setLat('37.710261')
                ->setLng('129.000125')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_135449.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:54:49.000Z'))
                ->setLat('37.708114')
                ->setLng('129.000566')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_135454.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:54:54.000Z'))
                ->setLat('37.708114')
                ->setLng('129.000566')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_135513.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T13:55:13.000Z'))
                ->setLat('37.708114')
                ->setLng('129.000566')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_140316.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T14:03:16.000Z'))
                ->setLat('37.705082')
                ->setLng('129.002830')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_144947.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T14:03:16.000Z'))
                ->setLat('37.693004')
                ->setLng('129.003845')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_145208.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T14:52:08.000Z'))
                ->setLat('37.691324')
                ->setLng('129.012485')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anbo Mountain Trail')
                ->setUrl('IMG_20190209_145725.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T14:57:25.000Z'))
                ->setLat('37.689249')
                ->setLng('129.022647')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Jeongdongjin Beach')
                ->setUrl('IMG_20190209_152642.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T15:26:42.000Z'))
                ->setLat('37.690856')
                ->setLng('129.034441')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Jeongdongjin Beach')
                ->setUrl('IMG_20190209_152648.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T15:26:42.000Z'))
                ->setLat('37.690856')
                ->setLng('129.034441')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Jeongdongjin Beach')
                ->setUrl('IMG_20190209_152714.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T15:26:42.000Z'))
                ->setLat('37.690856')
                ->setLng('129.034441')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Goseongmok Beach')
                ->setUrl('IMG_20190209_154607.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T15:46:07.000Z'))
                ->setLat('37.700930')
                ->setLng('129.021438')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Deungmyeong Beach')
                ->setUrl('IMG_20190209_155727.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T15:57:27.000Z'))
                ->setLat('37.702934')
                ->setLng('129.018690')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Deungmyeong Beach')
                ->setUrl('IMG_20190209_160107.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:01:07.000Z'))
                ->setLat('37.703805')
                ->setLng('129.017396')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Deungmyeong Beach')
                ->setUrl('IMG_20190209_160552.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:05:52.000Z'))
                ->setLat('37.703838')
                ->setLng('129.016442')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_161521.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:15:21.000Z'))
                ->setLat('37.705984')
                ->setLng('129.013070')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_161950.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:19:50.000Z'))
                ->setLat('37.706332')
                ->setLng('129.012360')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_162618.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:26:18.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_162639.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:26:39.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_162743.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:27:43.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163256.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:32:56.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163346.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:33:46.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163525.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:35:25.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163654.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:36:54.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163746.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:37:46.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163818.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:38:18.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163855.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:38:55.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_163945.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:39:45.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164230.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:42:30.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164408.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:44:08.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164433.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:44:33.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164614.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:46:14.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164625.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:46:25.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164719.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:47:19.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_164816.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:48:16.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_165016.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:50:16.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_165056.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:50:56.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_165418.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:54:18.000Z'))
                ->setLat('37.706294')
                ->setLng('129.011935')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_165904.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:59:04.000Z'))
                ->setLat('37.706220')
                ->setLng('129.011648')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_165911.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T16:59:11.000Z'))
                ->setLat('37.706220')
                ->setLng('129.011648')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170007.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:00:07.000Z'))
                ->setLat('37.706519')
                ->setLng('129.011856')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170201.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:02:01.000Z'))
                ->setLat('37.706789')
                ->setLng('129.011510')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170250.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:02:50.000Z'))
                ->setLat('37.706860')
                ->setLng('129.011256')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170547.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:05:47.000Z'))
                ->setLat('37.707030')
                ->setLng('129.010304')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170757.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:07:57.000Z'))
                ->setLat('37.706676')
                ->setLng('129.009459')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170833.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:08:33.000Z'))
                ->setLat('37.706614')
                ->setLng('129.009172')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170918.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:09:18.000Z'))
                ->setLat('37.706566')
                ->setLng('129.008904')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_170957.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:09:57.000Z'))
                ->setLat('37.706523')
                ->setLng('129.008793')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171031.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:10:31.000Z'))
                ->setLat('37.706566')
                ->setLng('129.008735')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171042.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:10:42.000Z'))
                ->setLat('37.706566')
                ->setLng('129.008735')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171316.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:13:16.000Z'))
                ->setLat('37.706121')
                ->setLng('129.007737')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171631.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:16:31.000Z'))
                ->setLat('37.706048')
                ->setLng('129.009802')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171656.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:16:56.000Z'))
                ->setLat('37.705984')
                ->setLng('129.009895')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171712.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:17:12.000Z'))
                ->setLat('37.705984')
                ->setLng('129.009895')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171728.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:17:28.000Z'))
                ->setLat('37.706061')
                ->setLng('129.010056')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171747.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:17:47.000Z'))
                ->setLat('37.706084')
                ->setLng('129.010025')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171806.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:18:06.000Z'))
                ->setLat('37.706140')
                ->setLng('129.009951')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_171950.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:19:50.000Z'))
                ->setLat('37.706513')
                ->setLng('129.009494')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_172045.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:20:45.000Z'))
                ->setLat('37.706426')
                ->setLng('129.009489')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_172225.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:22:25.000Z'))
                ->setLat('37.706326')
                ->setLng('129.009905')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_172458.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:24:58.000Z'))
                ->setLat('37.705919')
                ->setLng('129.010718')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_172716.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T17:27:16.000Z'))
                ->setLat('37.706360')
                ->setLng('129.011423')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Haslla Art World')
                ->setUrl('IMG_20190209_180724_BURST002.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-09T18:07:24.000Z'))
                ->setLat('37.707493')
                ->setLng('129.011948')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190210_013619.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T01:36:19.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190210_013748.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T01:37:48.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190210_013801.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T01:38:01.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_4'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY 5 REPOS"

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190210_122256.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T12:22:56.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190210_222835.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T22:28:35.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_013601.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-10T01:36:01.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_022344.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T02:23:44.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_022412_1.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T02:24:12.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_022436.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T02:24:36.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_022457.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T02:24:57.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Capsule Inn Gangneung')
                ->setUrl('IMG_20190211_023551.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T02:35:51.000Z'))
                ->setLat('37.794764')
                ->setLng('128.918137')
                ->setdayTrip($this->getReference('gangneung_day_5'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY 6 MONTAGNES"

        $picture = new Picture();
        $picture->setName('Vers tombe royale de Kim Juwon, fondateur des Kim de Gangneung')
                ->setUrl('IMG_20190211_120219.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:02:19.000Z'))
                ->setLat('37.760075')
                ->setLng('128.794618')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Vers tombe royale de Kim Juwon, fondateur des Kim de Gangneung')
                ->setUrl('IMG_20190211_120438.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:04:38.000Z'))
                ->setLat('37.760582')
                ->setLng('128.794939')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Vers tombe royale de Kim Juwon, fondateur des Kim de Gangneung')
                ->setUrl('IMG_20190211_120445.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:04:45.000Z'))
                ->setLat('37.760582')
                ->setLng('128.794939')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Tombe royale de Kim Juwon, fondateur des Kim de Gangneung')
                ->setUrl('IMG_20190211_124336.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:43:36.000Z'))
                ->setLat('37.762232')
                ->setLng('128.796470')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Tombe royale de Kim Juwon, fondateur des Kim de Gangneung')
                ->setUrl('IMG_20190211_124356.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:43:56.000Z'))
                ->setLat('37.762134')
                ->setLng('128.796670')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Chemin forestier')
                ->setUrl('IMG_20190211_125403.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T12:54:03.000Z'))
                ->setLat('37.764773')
                ->setLng('128.796788')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Picnic')
                ->setUrl('IMG_20190211_132009.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T13:20:09.000Z'))
                ->setLat('37.768853')
                ->setLng('128.777308')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Picnic')
                ->setUrl('IMG_20190211_132037.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T13:20:37.000Z'))
                ->setLat('37.768853')
                ->setLng('128.777308')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Picnic')
                ->setUrl('IMG_20190211_132323.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T13:23:23.000Z'))
                ->setLat('37.768730')
                ->setLng('128.777363')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Picnic')
                ->setUrl('IMG_20190211_132343.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T13:23:43.000Z'))
                ->setLat('37.768600')
                ->setLng('128.777368')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_133555.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T13:35:55.000Z'))
                ->setLat('37.767946')
                ->setLng('128.772905')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_140148.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:01:48.000Z'))
                ->setLat('37.75598')
                ->setLng('128.76029')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_140610.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:06:10.000Z'))
                ->setLat('37.75407')
                ->setLng('128.75952')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_140623.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:06:10.000Z'))
                ->setLat('37.75407')
                ->setLng('128.75952')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_142847.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:28:47.000Z'))
                ->setLat('37.74789')
                ->setLng('128.75325')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_144025.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:40:25.000Z'))
                ->setLat('37.74606')
                ->setLng('128.75214')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_144224.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:42:24.000Z'))
                ->setLat('37.74573')
                ->setLng('128.75193')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_144231.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:42:31.000Z'))
                ->setLat('37.74573')
                ->setLng('128.75193')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_144242.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:42:42.000Z'))
                ->setLat('37.74573')
                ->setLng('128.75193')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('En route vers le sommet')
                ->setUrl('IMG_20190211_144303.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T14:43:03.000Z'))
                ->setLat('37.74573')
                ->setLng('128.75193')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150235.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:02:35.000Z'))
                ->setLat('37.74074')
                ->setLng('128.74443')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150251.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:02:51.000Z'))
                ->setLat('37.74074')
                ->setLng('128.74443')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150530.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:05:30.000Z'))
                ->setLat('37.74093')
                ->setLng('128.74433')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150536.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:05:36.000Z'))
                ->setLat('37.74093')
                ->setLng('128.74433')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150640.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:06:40.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150649.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:06:49.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150657.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:06:57.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150732.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:07:32.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150752.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:07:52.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_150822.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:08:22.000Z'))
                ->setLat('37.74156')
                ->setLng('128.74403')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_151435.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:14:35.000Z'))
                ->setLat('37.739806')
                ->setLng('128.743392')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_151440.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:14:40.000Z'))
                ->setLat('37.739806')
                ->setLng('128.743392')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_154132.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:41:32.000Z'))
                ->setLat('37.72895')
                ->setLng('128.74388')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_154745.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:47:45.000Z'))
                ->setLat('37.726478')
                ->setLng('128.745389')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_154802.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:48:02.000Z'))
                ->setLat('37.726478')
                ->setLng('128.745389')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_155854.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:58:54.000Z'))
                ->setLat('37.72307')
                ->setLng('128.74435')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_155859.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:58:59.000Z'))
                ->setLat('37.72307')
                ->setLng('128.74435')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_155907.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:59:07.000Z'))
                ->setLat('37.72307')
                ->setLng('128.74435')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_155912.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T15:59:12.000Z'))
                ->setLat('37.72307')
                ->setLng('128.74435')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Seonjaryeong pass')
                ->setUrl('IMG_20190211_160025.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:00:25.000Z'))
                ->setLat('37.722904')
                ->setLng('128.745070')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Seonjaryeong pass')
                ->setUrl('IMG_20190211_160145.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:01:45.000Z'))
                ->setLat('37.722435')
                ->setLng('128.745144')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Seonjaryeong pass')
                ->setUrl('IMG_20190211_160148.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:01:48.000Z'))
                ->setLat('37.722435')
                ->setLng('128.745144')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes')
                ->setUrl('IMG_20190211_160533.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:05:33.000Z'))
                ->setLat('37.719626')
                ->setLng('128.745831')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Observatoire')
                ->setUrl('IMG_20190211_162749.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:27:49.000Z'))
                ->setLat('37.70362')
                ->setLng('128.75480')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Observatoire')
                ->setUrl('IMG_20190211_162755.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:27:55.000Z'))
                ->setLat('37.70362')
                ->setLng('128.75480')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Observatoire')
                ->setUrl('IMG_20190211_162802.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:28:02.000Z'))
                ->setLat('37.70362')
                ->setLng('128.75480')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Crète des éoliennes - Observatoire')
                ->setUrl('IMG_20190211_162837.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T16:28:37.000Z'))
                ->setLat('37.70362')
                ->setLng('128.75480')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Descente vers Gangneung - Old Street Garden')
                ->setUrl('IMG_20190211_171928.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T17:19:28.000Z'))
                ->setLat('37.702446')
                ->setLng('128.786611')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Descente vers Gangneung - Old Street Garden')
                ->setUrl('IMG_20190211_171951.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T17:19:51.000Z'))
                ->setLat('37.702461')
                ->setLng('128.786766')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Descente vers Gangneung - Old Street Garden')
                ->setUrl('IMG_20190211_172109.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T17:21:09.000Z'))
                ->setLat('37.702435')
                ->setLng('128.786929')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Coordoonées gps de l\'arrêt de bus, pas moyen de retrouver où c\'est')
                ->setUrl('IMG_20190211_180115.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-11T18:01:15.000Z'))
                ->setLat('37.731558')
                ->setLng('128.810763')
                ->setdayTrip($this->getReference('gangneung_day_6'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY 7 REPOS"

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190212_130231.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-12T13:02:31.000Z'))
                ->setLat('37.796953')
                ->setLng('128.918258')
                ->setdayTrip($this->getReference('gangneung_day_7'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190212_130237.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-12T13:02:37.000Z'))
                ->setLat('37.796953')
                ->setLng('128.918258')
                ->setdayTrip($this->getReference('gangneung_day_7'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangmun Beach')
                ->setUrl('IMG_20190212_130248.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-12T13:02:48.000Z'))
                ->setLat('37.796953')
                ->setLng('128.918258')
                ->setdayTrip($this->getReference('gangneung_day_7'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Caffé Pascucci')
                ->setUrl('IMG_20190212_132126.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-12T13:21:26.000Z'))
                ->setLat('37.796321')
                ->setLng('128.917196')
                ->setdayTrip($this->getReference('gangneung_day_7'));
        $manager->persist($picture);

        // DAY TRIP "GANGNEUNG DAY DEPART"

        $picture = new Picture();
        $picture->setName('Gangneung Station')
                ->setUrl('IMG_20190213_113731.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T11:37:31.000Z'))
                ->setLat('37.763703')
                ->setLng('128.899739')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Station')
                ->setUrl('IMG_20190213_113951.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T11:39:51.000Z'))
                ->setLat('37.764322')
                ->setLng('128.899831')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Gangneung Station')
                ->setUrl('IMG_20190213_114000.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T11:40:00.000Z'))
                ->setLat('37.764322')
                ->setLng('128.899831')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture = new Picture();
        $picture->setName('Anin Beach')
                ->setUrl('IMG_20190213_131138.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T11:11:38.000Z'))
                ->setLat('37.733467')
                ->setLng('128.990200')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Anin Beach')
                ->setUrl('IMG_20190213_131144.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T11:11:44.000Z'))
                ->setLat('37.732920')
                ->setLng('128.990580')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Goseongmok Beach')
                ->setUrl('IMG_20190213_131520.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:15:20.000Z'))
                ->setLat('37.701942')
                ->setLng('129.019700')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Goseongmok Jeongdongjin Rail Bike Terminal Station')
                ->setUrl('IMG_20190213_131547.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:15:47.000Z'))
                ->setLat('37.699801')
                ->setLng('129.022243')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin Station')
                ->setUrl('IMG_20190213_131736.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:17:36.000Z'))
                ->setLat('37.692854')
                ->setLng('129.031106')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin Station')
                ->setUrl('IMG_20190213_131916.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:19:16.000Z'))
                ->setLat('37.692168')
                ->setLng('129.032022')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin')
                ->setUrl('IMG_20190213_132159.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:21:59.000Z'))
                ->setLat('37.688906')
                ->setLng('129.035783')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin')
                ->setUrl('IMG_20190213_132202.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:22:02.000Z'))
                ->setLat('37.688276')
                ->setLng('129.035977')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin')
                ->setUrl('IMG_20190213_132210.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:22:10.000Z'))
                ->setLat('37.687011')
                ->setLng('129.036158')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Jeongdongjin')
                ->setUrl('IMG_20190213_132211.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:22:11.000Z'))
                ->setLat('37.686697')
                ->setLng('129.036182')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Dogik Beach')
                ->setUrl('IMG_20190213_133147.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:31:47.000Z'))
                ->setLat('37.614576')
                ->setLng('129.062826')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $picture->setName('Quelque part entre Gangneung et Yeongju')
                ->setUrl('IMG_20190213_154033.jpg')
                ->setShotTime(new \DateTimeImmutable('2019-02-13T13:31:47.000Z'))
                ->setLat('36.984539')
                ->setLng('129.089883')
                ->setdayTrip($this->getReference('gangneung_day_8'));
        $manager->persist($picture);

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            DayTripFixtures::class,
        ];
    }
}
