<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 11/10/15
 * Time: 18:29
 */

namespace ChatBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AuthorizationController extends Controller
{

    /**
     *@Route("/authorization", name="authorization")
     *@Template("ChatBundle:Chat:authorization.html.twig")
     */

    public function indexAction()
    {
        return array();
    }
}