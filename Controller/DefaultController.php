<?php

namespace DJP\DockerPHPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DJPDockerPHPBundle:Default:index.html.twig');
    }
}
