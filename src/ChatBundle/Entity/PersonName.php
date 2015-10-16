<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10/10/15
 * Time: 18:30
 */

namespace ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="PersonName")
 */

class PersonName
{

    /**
     * @ORM\OneToMany(targetEntity="Users", mappedBy="personName")
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
     * @ORM\Column(type="string", unique=true, length=100)
     */

    private $personName;

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
     * Set personName
     *
     * @param string $personName
     *
     * @return PersonName
     */
    public function setPersonName($personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Add user
     *
     * @param \ChatBundle\Entity\Users $user
     *
     * @return PersonName
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
