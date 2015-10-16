<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10/10/15
 * Time: 19:26
 */

namespace ChatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Speak")
*/

class Speak
{

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="speak")
     * @ORM\JoinColumn(name="users_id", referencedColumnName="id")
     */

    private $users;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @ORM\Column(type="text")
     */

    private $text;

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
     * Set text
     *
     * @param string $text
     *
     * @return Speak
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set users
     *
     * @param \ChatBundle\Entity\Users $users
     *
     * @return Speak
     */
    public function setUsers(\ChatBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \ChatBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }
}
