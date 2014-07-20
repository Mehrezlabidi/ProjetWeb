<?php

namespace MyApp\EspritBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\EspritBundle\Entity\Article;
use MyApp\EspritBundle\Form\ArticleType;



class ArticleController extends Controller
{
    
    
    
    public function sendAction()
    {
        
        $article = new Article();
        $form = $this->createForm(new ArticleType , $article);
        $request = $this->getRequest();
        if( $request->isMethod('Post')  ){
            
           $form->bind($request);
           
           if($form->isValid())
               
               {
               $article = $form->getData();
               $em = $this->getDoctrine()->getManager();
               $em->persist($article);
               $em->flush();
               return $this->redirect($this->generateUrl('my_app_esprit_article_show'));
               }
        }
        
       return $this->render('MyAppEspritBundle:Article:send.html.twig',array('form'=>$form->createView())); 
    }
    
    
    /**
     * Show a Article entry
     */
    public function showAction()
    {
         $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('MyAppEspritBundle:Article')->findAll();

        return $this->render('MyAppEspritBundle:Article:show.html.twig', array(
            'article' => $article,
        ));
    }
    
    
    
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $article = $em->getRepository('MyAppEspritBundle:Article')->find($id);

        if (!$article) {
            throw $this->createNotFoundException('No Article found for id '.$id);
        }

        $em->remove($article);
        $em->flush();

        return $this->redirect($this->generateUrl('my_app_esprit_article_show'));
    }
    
    
    
    
    
    
    
    public function editAction($id, Request $request) {

    $em = $this->getDoctrine()->getManager();
    $article = $em->getRepository('MyAppEspritBundle:Article')->find($id);
    if (!$article) {
      throw $this->createNotFoundException(
              'No Article found for id ' . $id
      );
    }
    
    $form = $this->createFormBuilder($article)
        
        ->add('position', 'integer')
        ->add('title', 'text')
        ->add('rubrique','entity',array('class'=>'MyApp\EspritBundle\Entity\Rubrique','property'=>'id'))
      ##  ->add('sousrubrique','entity',array('class'=>'MyApp\EspritBundle\Entity\Sousrubrique','property'=>'id'))
            
        ->getForm();

    $form->handleRequest($request);
 
    if ($form->isValid()) {
        $em->flush();
      
    }
    
    $build['form'] = $form->createView();

    return $this->render('MyAppEspritBundle:Article:edit.html.twig', $build);
  }
    
    
    
    
    
    
    
    
    
    
}
