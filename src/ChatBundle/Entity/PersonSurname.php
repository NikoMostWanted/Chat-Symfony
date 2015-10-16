<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10/10/15
 * Time: 19:09
 */

namespace ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="PersonSurname")
 */

class PersonSurname
{

    /**
     * * @ORM\OneToMany(targetEntity="Users", mappedBy="personSurname")
     */

    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * 
     * @ORM\Column(type="string", unique=true, length=100)
     */

    private $surname;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return PersonSurname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Add user
     *
     * @param \ChatBundle\Entity\Users $user
     *
     * @return PersonSurname
     */
    public function addUser(\ChatBundle\Entity\Users $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ChatBundle\Entity\Users $user
     */
    public function removeUser(\ChatBundle\Entity\Users $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
