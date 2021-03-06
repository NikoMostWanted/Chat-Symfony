<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10/10/15
 * Time: 19:14
 */

namespace ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */

class Users
{

    /**
     * @ORM\OneToMany(targetEntity="Speak", mappedBy="users")
     */

    private $speak;

    /**
     * @ORM\ManyToOne(targetEntity="PersonName", inversedBy="users")
     * @ORM\JoinColumn(name="name_id", referencedColumnName="id")
     */

    private $personName;

    /**
     * @ORM\ManyToOne(targetEntity="PersonSurname", inversedBy="users")
     * @ORM\JoinColumn(name="surname_id", referencedColumnName="id")
     */

    private $personSurname;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=50)
     */

    private $login;

    /**
     * @ORM\Column(type="string")
     */

    private $password;

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
     * Set login
     *
     * @param string $login
     *
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set personName
     *
     * @param \ChatBundle\Entity\PersonName $personName
     *
     * @return Users
     */
    public function setPersonName(\ChatBundle\Entity\PersonName $personName = null)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Get personName
     *
     * @return \ChatBundle\Entity\PersonName
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Set personSurname
     *
     * @param \ChatBundle\Entity\PersonSurname $personSurname
     *
     * @return Users
     */
    public function setPersonSurname(\ChatBundle\Entity\PersonSurname $personSurname = null)
    {
        $this->personSurname = $personSurname;

        return $this;
    }

    /**
     * Get personSurname
     *
     * @return \ChatBundle\Entity\PersonSurname
     */
    public function getPersonSurname()
    {
        return $this->personSurname;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->speak = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add speak
     *
     * @param \ChatBundle\Entity\Speak $speak
     *
     * @return Users
     */
    public function addSpeak(\ChatBundle\Entity\Speak $speak)
    {
        $this->speak[] = $speak;

        return $this;
    }

    /**
     * Remove speak
     *
     * @param \ChatBundle\Entity\Speak $speak
     */
    public function removeSpeak(\ChatBundle\Entity\Speak $speak)
    {
        $this->speak->removeElement($speak);
    }

    /**
     * Get speak
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpeak()
    {
        return $this->speak;
    }
}
