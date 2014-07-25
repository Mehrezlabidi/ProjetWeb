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
        
        ->add('texte', 'text')   
        ->add('image', 'text') 
        ->add('nom', 'text')
        ->add('date', 'date')   
            
            
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
    
    
    
    
    
    
    
    
public function topAction($max = 50)
{
    $em = $this->container->get('doctrine')->getEntityManager();
    
    
    /*recuperer article*/
    $qb1 = $em->createQueryBuilder();
    $qb1->select('a')
     ->from('MyAppEspritBundle:Article', 'a')   
     ->setMaxResults($max);
     $query1 = $qb1->getQuery();
    $article = $query1->getResult();
    
     /*recuperer rubrique*/
     $qb2= $em->createQueryBuilder();
     $qb2->select('b')
      ->from('MyAppEspritBundle:Rubrique', 'b')   
      ->setMaxResults($max);
     $query2 = $qb2->getQuery();
     $rubrique = $query2->getResult();
     
     /*recuperer sousrubrique*/
     $qb3= $em->createQueryBuilder();
     $qb3->select('c')
      ->from('MyAppEspritBundle:Sousrubrique', 'c')   
      ->setMaxResults($max);
     $query3 = $qb3->getQuery();
     $sousrubrique = $query3->getResult();
     
    /*recuperer actualite*/
     $qb4= $em->createQueryBuilder();
     $qb4->select('c')
      ->from('MyAppEspritBundle:Actualite', 'c')   
      ->setMaxResults($max);
     $query4 = $qb4->getQuery();
     $actualite = $query4->getResult();
     
     /*recuperer menu*/
     $qb5= $em->createQueryBuilder();
     $qb5->select('c')
      ->from('MyAppEspritBundle:Menu', 'c')   
      ->setMaxResults($max);
     $query5 = $qb5->getQuery();
     $menu = $query5->getResult();
   
    
      /*recuperer role*/
     $qb6= $em->createQueryBuilder();
     $qb6->select('c')
      ->from('MyAppEspritBundle:Role', 'c')   
      ->setMaxResults($max);
     $query6 = $qb6->getQuery();
     $role = $query6->getResult();
     
   
    
    
    
    
     
    return $this->container->get('templating')->renderResponse('MyAppEspritBundle:Article:lister.html.twig', array(
        
        'article' => $article,
        'rubrique' => $rubrique,
        'sousrubrique' => $sousrubrique,
        'actualite' => $actualite,
        'menu' => $menu,
        'role' => $role,
        
    ));
}
    
    
}
