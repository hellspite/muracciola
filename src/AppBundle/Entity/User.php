<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $username;

    public function setUsername($username){

        $this->username = $username;

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {

        return ['ROLE_ADMIN'];

    }

    public function getPassword()
    {

    }

    public function getSalt()
    {
    }

    public function eraseCredentials()
    {
    }
}

