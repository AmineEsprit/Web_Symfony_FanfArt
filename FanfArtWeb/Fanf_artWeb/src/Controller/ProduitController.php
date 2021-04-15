<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use GestionProduitBundle\Entity\CategorieProduit;
use GestionProduitBundle\Entity\CommentaireProduit;
use GestionProduitBundle\Entity\RatingProduit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="produit_index", methods={"GET"})
     */
    public function index(): Response
    {
        $produits = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    /**
     * @Route("/newProduit", name="produit_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('produit_index');
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        $deleteForm = $this->createDeleteForm($produit);
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Produit $produit): Response
    {
        $deleteForm = $this->createDeleteForm($produit);
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produit->UploadProfilePicture();
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('produit_edit', array('id' => $produit->getId()));
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="produit_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('produit_index');
    }

    public function listpAction(){

        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('GestionProduitBundle:Produit')->findAll();
        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('produit/listp.html.twig', array(
            'produits' => $produits,

        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

    /**
     * Creates a form to delete a produit entity.
     *
     * @param \GestionProduitBundle\Entity\Produit $produit The produit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Produit $produit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('produit_delete', array('id' => $produit->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    function deleteCAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $comment = $em->getRepository(CommentaireProduit::class)->find($id);
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute("produit_shop");

    }

    /**
     * @Route("/shopProduit", name="produit_shop")
     */
    public function shopAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $queryBuilder=$em->getRepository('GestionProduitBundle:Produit')->createQueryBuilder('p');
        if ($request->query->getAlnum('filter')) {
            $listeproduits=$queryBuilder->where('p.nomProd LIKE :nomProd')
                ->setParameter('nomProd', '%' . $request->query->getAlnum('filter') . '%')
                ->getQuery()
                ->getResult();
        }
        else
            $listeproduits = $em->getRepository('GestionProduitBundle:Produit')->findAll();
        $em2=$this->getDoctrine()->getManager();
        $categories=$em2->getRepository('GestionProduitBundle:CategorieProduit')->findAll();
        $produits  = $this->get('knp_paginator')->paginate(
            $listeproduits,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            6/*nbre d'éléments par page*/
        );
        $produitsR=$em->getRepository(\src\Entity\Produit::class)->findAll();
        $notes=array();
        foreach ($produitsR as $p){
            $notesP=$em->getRepository(RatingProduit::class)->findByProduit($p);
            if ($notesP!=null){
                $somme=0;
                foreach ($notesP as $noteP)
                    $somme+=$noteP->getNote();
                $notes[$p->getId()]=round($somme/count($notesP));
            }else
                $notes[$p->getId()]=0;
        }
        $notesC=$notes;
        $meilleurs=Array();
        $best=Array();
        for ($i=0;$i<3;$i++)
        {
            $idmp=null;
            $nmp=-1;
            foreach($notesC as $idp => $note)
            {
                if ($note>$nmp)
                {
                    $nmp=$note;
                    $idmp=$idp;
                }
            }
            if ($idmp!=null){
                array_push($meilleurs, $idmp);
                array_push($best, $em->getRepository(Produit::class)->find($idmp));
                unset($notesC[$idmp]);
            }
        }
        return $this->render('produit/shop.html.twig', array(
            'produits' => $produits,
            'categories'=>$categories,
            'notes'=>$notes,
            'meilleurs'=>$best
        ));
    }

  /*  public function detailsAction(Request $request, \src\Entity\Produit $produit, $id){

        $user=$this->getUser();
        $add_comment = new CommentaireProduit();
        $em = $this->getDoctrine()->getManager();
        $comments=$em->getRepository(CommentaireProduit::class)->findByProduit($produit);
        $add_comment->setProduit($produit);
        $add_comment->setUser($user);
        $add_comment->setDateC( new \DateTime());
        $form = $this->createFormBuilder($add_comment)

            ->add('contenu', TextareaType::class)

            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $add_comment = $form->getData();
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($add_comment);
                $em->flush();

                return $this->redirectToRoute('produit_details', array('id' => $produit->getId()));


            }
        }
        $rating=$em->getRepository(RatingProduit::class)->findOneBy(array('user'=>$user, 'produit'=>$produit));
        if ($rating == null)
        {
            $rating=new RatingProduit();
            $rating->setNote(0);
        }
        return $this->render('produit/details.html.twig', array(
            'produit' => $produit,
            'form' => $form->createView(),
            'comment' => $add_comment,
            'comments' => $comments,
            'rating'=>$rating
        ));
    }*/

    public function categoriesAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $em2=$this->getDoctrine()->getManager();
        $categories=$em2->getRepository('GestionProduitBundle:CategorieProduit')->findAll();
        $listeproduits = $em->getRepository('GestionProduitBundle:Produit')->findByCategorie( $em->getRepository(CategorieProduit::class)->find($id));
        $produits  = $this->get('knp_paginator')->paginate(
            $listeproduits,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            5/*nbre d'éléments par page*/
        );
        $notes=array();
        foreach ($produits as $p){
            $notesP=$em->getRepository(RatingProduit::class)->findByProduit($p);
            if ($notesP!=null){
                $somme=0;
                foreach ($notesP as $noteP)
                    $somme+=$noteP->getNote();
                $notes[$p->getId()]=round($somme/count($notesP));
            }else
                $notes[$p->getId()]=0;
        }
        $notesC=$notes;
        $meilleurs=Array();
        $best=Array();
        for ($i=0;$i<3;$i++)
        {
            $idmp=null;
            $nmp=-1;
            foreach($notesC as $idp => $note)
            {
                if ($note>$nmp)
                {
                    $nmp=$note;
                    $idmp=$idp;
                }
            }
            if ($idmp!=null){
                array_push($meilleurs, $idmp);
                array_push($best, $em->getRepository(\src\Entity\Produit::class)->find($idmp));
                unset($notesC[$idmp]);
            }
        }
        return $this->render('produit/shop.html.twig', array(
            'produits' => $produits,
            'categories'=>$categories,
            'notes'=>$notes,
            'meilleurs'=>$best
        ));
    }

    function noterAction($id,$note){
        $user=$this->getUser();
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository(\src\Entity\Produit::class)->find($id);
        $rating=$em->getRepository(RatingProduit::class)->findOneBy(array('user'=>$user, 'produit'=>$produit));
        if ($rating==null){
            $rating=new RatingProduit();
            $rating->setNote($note);
            $rating->setUser($user);
            $rating->setProduit($produit);
            $em->persist($rating);
        }else
            $rating->setNote($note);
        $em->flush();
        return new Response($note);
    }

}
