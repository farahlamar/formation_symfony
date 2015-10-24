<?php

namespace formation\AnnonceBundle\Controller;

use formation\AnnonceBundle\Entity\Categorie;
use formation\AnnonceBundle\Form\AnnonceType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use formation\AnnonceBundle\Entity\Annonce;
class AnnonceController extends Controller
{
    public function indexAction($entier1,$entier2)
    {
        $somme=$entier1+$entier2;
        return $this->render('formationAnnonceBundle:Annonce:index.html.twig', array('somme' => $somme,'entier1' =>$entier1,'entier2'=>$entier2));
    }
    public function AjoutAction() 
    {
        $em= $this->getDoctrine()->getManager();
        $categorie1=new Categorie();
        $categorie1->setNom("Dev Web");
        $em->persist($categorie1);
        $categorie2=new Categorie();
        $categorie2->setNom("Dev Mobile");
        $em->persist($categorie2);
          $categorie3=new Categorie();
        $categorie3->setNom("Infographie");
        $em->persist($categorie3);
        $em->flush();
        
$this->addFlash('notice', 'vos changements ont été sauvegardés !')    ;    
        return $this->render('formationAnnonceBundle:Annonce:ajout.html.twig');
    }
    
    public function listerAction()
    {
        $em=  $this->getDoctrine()->getManager();
        $categorie = $em->getRepository("formationAnnonceBundle:Categorie")->findAll();
         return $this->render('formationAnnonceBundle:Annonce:lister.html.twig',array('categorie'=>$categorie));
    }
    public function AjouterAction()
    {
        $annonce = new Annonce();
        $message='';
        $em=  $this->getDoctrine()->getManager();
        $form = $this->createForm(new \formation\AnnonceBundle\Form\AnnonceType(),$annonce);
        $request = $this->getRequest();
        if ($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($annonce);
                $em->flush();
                $message='Annonce ajouté avec succèe! ';
                $annonce = new Annonce();
                $form = $this->createForm(new \formation\AnnonceBundle\Form\AnnonceType(),$annonce);
            }
        }
    return $this->render('formationAnnonceBundle:Annonce:formulaire.html.twig',array('f'=>$form->createView(),'message'=>$message));
        
    }
     public function listeAnnonceAction()
    {
        $em=  $this->getDoctrine()->getManager();
        $annonce = $em->getRepository("formationAnnonceBundle:Annonce")->findAll();
         return $this->render('formationAnnonceBundle:Annonce:listeAnnonce.html.twig',array('annonce'=>$annonce));
    }
    
    public function editerAction($id)
    {
        $message='';
        
         $em=  $this->getDoctrine()->getManager();
         
         $annonce = $em->getRepository("formationAnnonceBundle:Annonce")->find($id);
           	
	
         $form= $this->createForm(new AnnonceType(),$annonce);
         $request = $this->getRequest();
         
         if ($request->getMethod()=='POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $em->persist($annonce);
                $em->flush();
                $message='Annonce modifié';
            }
        }
      return $this->render('formationAnnonceBundle:Annonce:formulaire.html.twig',array('f'=>
          $form->createView(),'message'=>$message));
         
    }
    public function supprimerAction($id) {
        
         $em=  $this->getDoctrine()->getManager();
         $annonce = $em->getRepository("formationAnnonceBundle:Annonce")->find($id);
         if(!$annonce)
         {
             throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException("Annonce non trouvé");
         
         }
         
            $em->remove($annonce);
            $em->flush();
            $annonce = $em->getRepository("formationAnnonceBundle:Annonce")->findAll();
            return $this->render('formationAnnonceBundle:Annonce:listeAnnonce.html.twig',array('annonce'=>$annonce));
    }
    public function TopAction()
    {
      $em=  $this->getDoctrine()->getManager();
      $query= $em->createQuery('select A from formationAnnonceBundle:Annonce A ORDER BY A.id DESC ')
              ->setMaxResults(3);
      $Annonces=$query->getResult();
      return $this->render('formationAnnonceBundle:Annonce:listeAnnonce.html.twig',array('annonce'=>$Annonces));
    }
    
    public function TextAction()
    {
        //on récupère le service
        $verif = $this->container->get('formation_annonce_verif');
        //Je pars du principe que $text contient le texte d'un message quelconque
        $text ='bonjour';
        if($verif->isInferieur($text))
        {
            throw new Exception('Votre msg est < 50');
        }
    }
}
