<?php

namespace App\Controller;

use App\Entity\ProdTest;
use App\Form\ProdTestType;
use App\Repository\ProdTestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/prod/test")
 */
class ProdTestController extends AbstractController
{
    /**
     * @Route("/", name="prod_test_index", methods={"GET"})
     */
    public function index(ProdTestRepository $prodTestRepository): Response
    {
        return $this->render('prod_test/index.html.twig', [
            'prod_tests' => $prodTestRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="prod_test_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $prodTest = new ProdTest();
        $form = $this->createForm(ProdTestType::class, $prodTest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($prodTest);
            $entityManager->flush();

            return $this->redirectToRoute('prod_test_index');
        }

        return $this->render('prod_test/new.html.twig', [
            'prod_test' => $prodTest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prod_test_show", methods={"GET"})
     */
    public function show(ProdTest $prodTest): Response
    {
        return $this->render('prod_test/show.html.twig', [
            'prod_test' => $prodTest,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="prod_test_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ProdTest $prodTest): Response
    {
        $form = $this->createForm(ProdTestType::class, $prodTest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prod_test_index');
        }

        return $this->render('prod_test/edit.html.twig', [
            'prod_test' => $prodTest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="prod_test_delete", methods={"POST"})
     */
    public function delete(Request $request, ProdTest $prodTest): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prodTest->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($prodTest);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prod_test_index');
    }
}
