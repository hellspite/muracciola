<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;

class LoadPostData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $news1 = new Post();
        $date1 = new \DateTime('27 march 2016');
        $news1->setDate($date1);
        $news1->setTitle('Menu di Pasqua');
        $news1->setText('Antipasto pasquale; lasagnetta carciofi e stracchino; fettuccine al ragù di faraona e chiodini; abbacchio alla scottadito con spalla di maialino agli aromi e patate al forno; dolce; acqua vino caffè; prezzo 30 euro');

        $manager->persist($news1);
        $manager->flush();
    }
}
