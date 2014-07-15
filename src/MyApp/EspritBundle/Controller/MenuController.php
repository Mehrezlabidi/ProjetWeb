<?php

namespace MyApp\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\EspritBundle\Entity\Menu;
use MyApp\EspritBundle\Form\MenuType;



class MenuController extends Controller
{
    
    
    
    public function sendAction()
    {
        
        $menu = new Menu();
        $form = $this->createForm(new MenuType , $menu);
        $request = $this->getRequest();
        if( $request->isMethod('Post')  ){
            
           $form->bind($request);
           
           if($form->isValid())
               
               {
               $menu = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($menu);
               $em->flush();
               return $this->redirect($this->generateUrl('my_app_esprit_menu_show'));
               }
        }
        
       return $this->render('MyAppEspritBundle:Menu:send.html.twig',array('form'=>$form->createView())); 
    }
    
    
    /**
     * Show a Menu entry
     */
    public function showAction()
    {
         $em = $this->getDoctrine()->getManager();

        $menu = $em->getRepository('MyAppEspritBundle:Menu')->findAll();

        return $this->render('MyAppEspritBundle:Menu:show.html.twig', array(
            'menu' => $menu,
        ));
    }
    
    
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $menu = $em->getRepository('MyAppEspritBundle:Menu')->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('No Menu found for id '.$id);
        }

        $em->remove($menu);
        $em->flush();

        return $this->redirect($this->generateUrl('my_app_esprit_menu_show'));
    }
    
    
    
    
    
    
    
    public function editAction($id, Request $request) {

    $em = $this->getDoctrine()->getManager();
    $menu = $em->getRepository('MyAppEspritBundle:Menu')->find($id);
    if (!$menu) {
      throw $this->createNotFoundException(
              'No menu found for id ' . $id
      );
    }
    
    $form = $this->createFormBuilder($menu)
        
        ->add('position', 'integer')
        ->add('title', 'text')
        ->add('utilisateur','entity',array('class'=>'MyApp\EspritBundle\Entity\Utilisateur','property'=>'id'))
        
        ->getForm();

    $form->handleRequest($request);
 
    if ($form->isValid()) {
        $em->flush();
      
    }
    
    $build['form'] = $form->createView();

    return $this->render('MyAppEspritBundle:Menu:edit.html.twig', $build);
  }
    
    
    
    
    
    
    
    
    
    
}
