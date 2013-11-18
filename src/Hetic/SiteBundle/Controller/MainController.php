<?php

namespace Hetic\SiteBundle\Controller;

use Hetic\SiteBundle\Entity\Article;

use Hetic\SiteBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class MainController extends Controller
{


    public function indexAction()
    {
        return $this->render('HeticSiteBundle:Default:index.html.twig');

    }
    public function productsAction()
    {
        return $this->render('HeticSiteBundle:Default:products.html.twig');

    }
    public function loginAction()
    {
        return $this->render('HeticSiteBundle:Default:login.html.twig');

    }

    public function dashboardAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $article = new Article();
        $form = $this->createForm(new ArticleType($article), $article);
        $form->handleRequest($request);

//        $paginator  = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//            $articles,
//            $this->get('request')->query->get('page', 1)/*page number*/,
//            3/*limit per page*/
//        );

        /**
         * If Is Post
         */
        if ($request->getMethod() === "POST") {

            if ($form->isValid()) {
                $em->persist($article);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    "L'article a bien été ajouté en base !"
                );
                return $this->redirect($this->generateUrl('hetic_site_hello'));
            }
        }

        return $this->render('HeticSiteBundle:Default:dashboard.html.twig',
            array('form' => $form->createView())
        );

    }


}
