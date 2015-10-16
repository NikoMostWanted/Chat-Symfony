<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 11/10/15
 * Time: 18:32
 */

namespace ChatBundle\Controller;


use ChatBundle\Entity\PersonName;
use ChatBundle\Entity\PersonSurname;
use ChatBundle\Entity\Users;
use ChatBundle\Form\Registration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class RegistrationController extends Controller
{

    /**
     * @Route("/registration", name="registration")
     * @Template("ChatBundle:Chat:registration.html.twig")
     */

    public function indexAction(Request $request)
    {
        $registration = new Registration();
        $form = $this->createFormBuilder($registration)
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('login', 'text')
            ->add('password', 'password')
            ->add('registration','submit', array('label'=>'Registration'))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $personName = new PersonName();
            $personName->setPersonName($registration->getName());
            $personSurname = new PersonSurname();
            $personSurname->setSurname($registration->getSurname());
            $users = new Users();
            $users->setLogin($registration->getLogin());
            $users->setPassword($registration->getPassword());
            $users->setPersonName($personName);
            $users->setPersonSurname($personSurname);
            $em = $this->getDoctrine()->getManager();
            $em->persist($personName);
            $em->persist($personSurname);
            $em->persist($users);
            $em->flush();
            return $this->redirectToRoute('chat');
        }

        return array('form' => $form->createView());
    }
}