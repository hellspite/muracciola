<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Menu;

class LoadMenuData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $menu = new Menu();
        $menu->setText('Prova inserimento menu, testo esemplificativo');
        $menu->setIsVisible(false);

        $manager->persist($menu);
        $manager->flush();
    }
}
