<?php

namespace Users\ManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Validate;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @ORM\Column(type="string", length=255)
     * @Validate\NotBlank()
     * @Validate\Length(max = 4096)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=60)
     * @Validate\NotBlank()
     * @Validate\Length(max = 4096)
     */

    protected $salt;

    /**
     * @ORM\Column(type="string", length=60)
     * @Validate\NotBlank()
     * @Validate\Length(max = 4096)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", length=60)
     * @Validate\NotBlank()
     * @Validate\Length(max = 4096)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $accountStatus;


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
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
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
     * Set password
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set accountStatus
     *
     * @param integer $accountStatus
     * @return User
     */
    public function setAccountStatus($accountStatus)
    {
        $this->accountStatus = $accountStatus;

        return $this;
    }

    /**
     * Get accountStatus
     *
     * @return integer 
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }
    public function getUsername()
    {
        return $this->email;
    }
    public function eraseCredentials()
    {

    }
}
