<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Photo;

class LoadPhotoData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $photo1 = new Photo();
        $photo1->setimage('003.jpg');
        $photo1->setUpdatedAt(new \DateTime('now'));

        $photo4 = new Photo();
        $photo4->setimage('15maggio14028.jpg');
        $photo4->setUpdatedAt(new \DateTime('now'));

        $photo5 = new Photo();
        $photo5->setimage('15maggio14076.jpg');
        $photo5->setUpdatedAt(new \DateTime('now'));

        $photo6 = new Photo();
        $photo6->setimage('15maggio14080.jpg');
        $photo6->setUpdatedAt(new \DateTime('now'));

        $photo7 = new Photo();
        $photo7->setimage('016.jpg');
        $photo7->setUpdatedAt(new \DateTime('now'));

        $photo9 = new Photo();
        $photo9->setimage('19marzo013.jpg');
        $photo9->setUpdatedAt(new \DateTime('now'));

        $photo10 = new Photo();
        $photo10->setimage('020.jpg');
        $photo10->setUpdatedAt(new \DateTime('now'));

        $photo11 = new Photo();
        $photo11->setimage('024.jpg');
        $photo11->setUpdatedAt(new \DateTime('now'));

        $photo12 = new Photo();
        $photo12->setimage('028.jpg');
        $photo12->setUpdatedAt(new \DateTime('now'));

        $photo14 = new Photo();
        $photo14->setimage('070.jpg');
        $photo14->setUpdatedAt(new \DateTime('now'));

        $photo15 = new Photo();
        $photo15->setimage('111.jpg');
        $photo15->setUpdatedAt(new \DateTime('now'));

        $photo16 = new Photo();
        $photo16->setimage('112.jpg');
        $photo16->setUpdatedAt(new \DateTime('now'));

        $photo17 = new Photo();
        $photo17->setimage('115.jpg');
        $photo17->setUpdatedAt(new \DateTime('now'));

        $photo18 = new Photo();
        $photo18->setimage('443.jpg');
        $photo18->setUpdatedAt(new \DateTime('now'));

        $photo19 = new Photo();
        $photo19->setimage('444.jpg');
        $photo19->setUpdatedAt(new \DateTime('now'));

        $photo20 = new Photo();
        $photo20->setimage('467.jpg');
        $photo20->setUpdatedAt(new \DateTime('now'));

        $photo22 = new Photo();
        $photo22->setimage('kk023.jpg');
        $photo22->setUpdatedAt(new \DateTime('now'));

        $manager->persist($photo1);
        $manager->persist($photo4);
        $manager->persist($photo5);
        $manager->persist($photo6);
        $manager->persist($photo7);
        $manager->persist($photo9);
        $manager->persist($photo10);
        $manager->persist($photo11);
        $manager->persist($photo12);
        $manager->persist($photo14);
        $manager->persist($photo15);
        $manager->persist($photo16);
        $manager->persist($photo17);
        $manager->persist($photo18);
        $manager->persist($photo19);
        $manager->persist($photo20);
        $manager->persist($photo22);
        $manager->flush();
    }
}
