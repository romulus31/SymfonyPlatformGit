<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace RMS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller {

    public function indexAction() {
        $content = $this->get('templating')->render('RMSPlatformBundle:Advert:advert.html.twig');
        return new Response($content);
//        $url = $this->get('router')->generate(
//            'oc_platform_view', // 1er argument : le nom de la route
//            array('id' => 5)    // 2e argument : les valeurs des paramètres
//        );
//         return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }

    public function viewAction($id) {

        // Récupération de la session
//    $session = $req->getSession();
//    
//    // On récupère le contenu de la variable user_id
//    $userId = $session->get('user_id');
//    // On définit une nouvelle valeur pour cette variable user_id
//    $session->set('user_id', 91);
//    // On n'oublie pas de renvoyer une réponse
//    return new Response("Je suis une page de test, je n'ai rien à dire");
        //return new \Symfony\Component\HttpFoundation\JsonResponse(array('id'=>$id));
        //$url = $this->get('router')->generate('hello-world');
        //return new RedirectResponse($url);
        //$content = $this->get('templating')->render('RMSPlatformBundle:Advert:view.html.twig');
        //return new Response($content);
        // if($request->isMethod('GET')){
        //$tag = $request->query->get('sdf');
        //return new Response("id de la vue : ".$id." et du tag : ".$tag);
        // On veut avoir l'URL de l'annonce d'id 5.
        // $url vaut « /platform/advert/5 »
        // On utilise le raccourci : il crée un objet Response
        // Et lui donne comme contenu le contenu du template
        return $this->get('templating')->renderResponse(
                        'RMSPlatformBundle:Advert:view.html.twig', array('id' => $id) // on crée un tableau associatif avec comme id 'id' et la valeur de id
                        // que l'on passe en paramètre à la vue
        );
    }

    public function addAction(Request $request) {
        $session = $request->getSession();

        // Bien sûr, cette méthode devra réellement ajouter l'annonce
        // Mais faisons comme si c'était le cas
        $session->getFlashBag()->add('info', 'Annonce bien enregistrée');
        // Le « flashBag » est ce qui contient les messages flash dans la session
        // Il peut bien sûr contenir plusieurs messages :
        $session->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');
        // Puis on redirige vers la page de visualisation de cette annonce
        return $this->redirect($this->generateUrl('rms_platform_view', array('id' => 5)));
    }

}
