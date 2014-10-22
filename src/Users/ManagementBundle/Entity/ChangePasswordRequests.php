<?php

namespace Users\ManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Validate;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ChangePasswordRequests
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChangePasswordRequests
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Validate\NotBlank()
     * @Validate\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="datetime")
     * @Validate\NotBlank()
     */

    protected $requested_at;

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
     * Set email
     *
     * @param string $email
     * @return ChangePasswordRequests
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set requested_at
     *
     * @param \DateTime $requestedAt
     * @return ChangePasswordRequests
     */
    public function setRequestedAt($requestedAt)
    {
        $this->requested_at = $requestedAt;

        return $this;
    }

    /**
     * Get requested_at
     *
     * @return \DateTime 
     */
    public function getRequestedAt()
    {
        return $this->requested_at;
    }
}
