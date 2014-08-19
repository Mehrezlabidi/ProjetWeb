<?php

namespace MyApp\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\EspritBundle\Entity\Rubrique;
use MyApp\EspritBundle\Form\RubriqueType;



class RubriqueController extends Controller
{
    
    
    
    public function sendAction()
    {
        
        $rubrique = new Rubrique();
       
        
        $form = $this->createForm(new RubriqueType , $rubrique);
        $request = $this->getRequest();
        if( $request->isMethod('Post')  ){
            
           $form->bind($request);
           
           if($form->isValid())
               
               {
               $rubrique = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($rubrique);
               $em->flush();
               return $this->redirect($this->generateUrl('my_app_esprit_rubrique_show'));
               }
        }
        
       return $this->render('MyAppEspritBundle:Rubrique:send.html.twig',array('form'=>$form->createView())); 
    }
    
    
    /**
     * Show a Rubrique entry
     */
    public function showAction()
    {
         $em = $this->getDoctrine()->getManager();

        $rubrique = $em->getRepository('MyAppEspritBundle:Rubrique')->findAll();

        return $this->render('MyAppEspritBundle:Rubrique:show.html.twig', array(
            'rubrique' => $rubrique,
        ));
    }
    
    
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $rubrique= $em->getRepository('MyAppEspritBundle:Rubrique')->find($id);

        if (!$rubrique) {
            throw $this->createNotFoundException('No Rubrique found for id '.$id);
        }

        $em->remove($rubrique);
        $em->flush();

        return $this->redirect($this->generateUrl('my_app_esprit_rubrique_show'));
    }
    
    
    
    
    
    
    
    public function editAction($id, Request $request) {

    $em = $this->getDoctrine()->getManager();
    $rubrique = $em->getRepository('MyAppEspritBundle:Rubrique')->find($id);
    if (!$rubrique) {
      throw $this->createNotFoundException(
              'No rubrique found for id ' . $id
      );
    }
    
    $form = $this->createFormBuilder($rubrique)
        
        ->add('position', 'integer')
        ->add('title', 'text')
        ->add('menu','entity',array('class'=>'MyApp\EspritBundle\Entity\Menu','property'=>'title'))
        
        ->getForm();

    $form->handleRequest($request);
 
    if ($form->isValid()) {
        $em->flush();
       return $this->redirect($this->generateUrl('my_app_esprit_rubrique_show'));
    }
                            
       return $this->render('MyAppEspritBundle:Rubrique:edit.html.twig',array('form'=>$form->createView())); 
    }
     
}
