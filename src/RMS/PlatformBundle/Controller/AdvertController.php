<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RMS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
       $content = $this->get('templating')->render('RMSPlatformBundle:Advert:advert.html.twig');
       return new Response($content);
        
    }
    
    public function viewAction($id){
        //$content = $this->get('templating')->render('RMSPlatformBundle:Advert:view.html.twig');
        //return new Response($content);
        return new Response("id de la vue : ".$id);
    }
}
