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
       //$content = $this->get('templating')->render('RMSPlatformBundle:Advert:advert.html.twig');
       //return new Response($content);
        $url = $this->get('router')->generate(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
        );
         return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }
    
    public function viewAction($id){
        //$content = $this->get('templating')->render('RMSPlatformBundle:Advert:view.html.twig');
        //return new Response($content);
        //return new Response("id de la vue : ".$id);
         // On veut avoir l'URL de l'annonce d'id 5.
       
        // $url vaut « /platform/advert/5 »

       
    }
    
    public function addAction($id){
        $content = $this->get('templating')->render('RMSPlatformBundle:Advert:view.html.twig');
        return new Response($content);
        //return new Response("id de la vue : ".$id);
    }
}
