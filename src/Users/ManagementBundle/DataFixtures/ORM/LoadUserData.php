<?php

namespace Users\ManagementBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
#use Doctrine\Common\DataFixtures\AbstractFixture; // for abstract fixture
#use Doctrine\Common\DataFixtures\OrderedFixtureInterface; // for specifying the order of the fixtures 
use Symfony\Component\DependencyInjection\ContainerAwareInterface; // use to access services to be loaded here
use Symfony\Component\DependencyInjection\ContainerInterface; // container interfaces
use Doctrine\Common\Persistence\ObjectManager;
use Users\ManagementBundle\Entity\UserTest;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
	/**
     * @var ContainerInterface
     */
    private $container;

	/**
     * {@inheritDoc}
     */
	public function setContainer (ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	/**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new UserTest();
        $user->setEmail('jhoanne.villariaza@gmail.com')
        	 ->setFirstName('Jhoanne')
        	 ->setLastName('Villariaza')
        	 ->setAccountStatus('0')
        	 ->setSalt(md5(uniqid(mt_rand())));

        //hashing the password
       	$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
       	$password = $encoder->encodePassword('joan@123', $user->getSalt());

       	$user->setPassword($password);

        $manager->persist($user);
        $manager->flush();
    }
}