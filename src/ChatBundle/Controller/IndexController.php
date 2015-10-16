<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 11/10/15
 * Time: 18:59
 */

namespace ChatBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{

    /**
     *@Route("/index")
     *@Template("ChatBundle:Chat:index.html.twig")
     */

    public function indexAction()
    {
        return array();
    }
}