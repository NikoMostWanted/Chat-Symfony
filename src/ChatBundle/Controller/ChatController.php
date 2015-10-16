<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 12/10/15
 * Time: 21:27
 */

namespace ChatBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ChatController extends Controller
{

    /**
     *@Route("/chat", name="chat")
     *@Template("ChatBundle:Chat:chat.html.twig")
     */

    public function indexAction()
    {
        return array();
    }
}