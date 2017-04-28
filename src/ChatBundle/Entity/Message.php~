<?php

namespace ChatBundle\Entity;

use ChatBundle\Repository\MessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;


/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="ChatBundle\Repository\MessageRepository")
 */
class Message
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
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datetime", type="datetime")
     */
    private $datetime;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="messages")
     */
    private $user;

    public function __construct()
    {
        $this->datetime = new \DateTime();
    }


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
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     *
     * @return Message
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set user
     *
     * @param \ChatBundle\Entity\User $user
     *
     * @return Message
     */
    public function setUser(\ChatBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ChatBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
