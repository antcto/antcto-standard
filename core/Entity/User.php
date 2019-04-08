<?php

namespace AntCTO\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Table(name="antcto_user")
 * @ORM\Entity(repositoryClass="AntCTO\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
