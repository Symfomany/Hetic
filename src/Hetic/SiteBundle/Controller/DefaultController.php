<?php

namespace Hetic\SiteBundle\Controller;

use Hetic\SiteBundle\Entity\Article;
use Hetic\SiteBundle\Entity\Category;
use Hetic\SiteBundle\Entity\Tag;
use Hetic\SiteBundle\Form\ArticleType;
use Hetic\SiteBundle\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * Page About
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('HeticSiteBundle:Default:about.html.twig');
    }

    /**
     * Page Contact
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render('HeticSiteBundle:Default:contact.html.twig');
    }

    /**
     * Get Articles By Category
     * @param Category $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getArticlesByCategoryAction(Category $id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('HeticSiteBundle:Category')->findAll();

        $article = new Article();

        $form = $this->createForm(new ArticleType($article), $article);
        $form->handleRequest($request);

        $articles = $em->getRepository('HeticSiteBundle:Article')->getArticlesByCategory($id);

        $this->get('session')->getFlashBag()->add(
            'notice',
            "Tri par category"
        );
        return $this->render('HeticSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'articles' => $articles,'categories' => $categories, 'article' => $article));
    }

    /**
     * Get Articles by Tag
     * @param $tag
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getArticlesByTagsAction($tag)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('HeticSiteBundle:Category')->findAll();

        $article = new Article();

        $form = $this->createForm(new ArticleType($article), $article);
        $articles = $em->getRepository('HeticSiteBundle:Article')->getArticlesByTags($tag);

        $this->get('session')->getFlashBag()->add(
            'notice',
            "Tri par tags"
        );
        return $this->render('HeticSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'articles' => $articles,'categories' => $categories, 'article' => $article));
    }

    /**
     * Homepage
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $article = new Article();
        $form = $this->createForm(new ArticleType($article), $article);
        $form->handleRequest($request);

        $articles = $em->getRepository('HeticSiteBundle:Article')->getArticlesByRate();
        $categories = $em->getRepository('HeticSiteBundle:Category')->findAll();

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
        return $this->render('HeticSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'articles' => $articles, 'categories' => $categories, 'article' => $article));
    }


    /**
     * Sort By Category
     * @param Category $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categorysortAction(Category $id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $article = new Article();
        $form = $this->createForm(new ArticleType($article), $article);
        $form->handleRequest($request);

        $articles = $em->getRepository('HeticSiteBundle:Article')->getArticlesByCategory($id);
        $categories = $em->getRepository('HeticSiteBundle:Category')->findAll();

//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//            $articles,
//            $this->get('request')->query->get('page', 1) /*page number*/,
//            3/*limit per page*/
//        );

        return $this->render('HeticSiteBundle:Default:index.html.twig', array('form' => $form->createView(), 'articles' => $articles, 'categories' => $categories, 'article' => $article, 'category' => $id));
    }

    /**
     * Remove an Article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function removeArticleAction(Article $id)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article a bien été supprimé en base!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }


    /**
     * Create a category
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function categorycreateAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $category = new Category();
        $form = $this->createForm(new CategoryType($category), $category);
        $form->handleRequest($request);

        /**
         * If Is Post
         */
        if ($request->getMethod() === "POST") {
            if ($form->isValid()) {
                $em->persist($category);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    "La category a bien été ajouté en base!"
                );
                return $this->redirect($this->generateUrl('hetic_site_hello'));
            }

        }
        return $this->render('HeticSiteBundle:Default:createcategory.html.twig', array('form' => $form->createView()));
    }

    /**
     * Edit a category
     * @param Category $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function categoryeditAction(Category $id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new CategoryType($id), $id);
        $form->handleRequest($request);

        /**
         * If Is Post
         */
        if ($request->getMethod() === "POST") {
            if ($form->isValid()) {
                $em->persist($id);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    "La category a bien été modifiée en base!"
                );
                return $this->redirect($this->generateUrl('hetic_site_hello'));
            }

        }
        return $this->render('HeticSiteBundle:Default:editcategory.html.twig', array('form' => $form->createView(), 'category' => $id));
    }


    /**
     * Edit a article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editableAction(Article $id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('HeticSiteBundle:Article')->findAll();

        $form = $this->createForm(new ArticleType($id), $id);

        $form->handleRequest($request);
        /**
         * If Is Post
         */
        if ($request->getMethod() === "POST") {
            if ($form->isValid()) {
                $em->persist($id);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    "L'article a bien été modifié en base!"
                );
                return $this->redirect($this->generateUrl('hetic_site_hello'));
            }
        }
        return $this->render('HeticSiteBundle:Default:edit.html.twig', array('form' => $form->createView(), 'article' => $id, 'articles' => $articles));
    }


    /**
     * Remove a tag
     * @param Tag $id
     * @param Article $aid
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function tagremoveAction(Tag $id, Article $aid)
    {
        $em = $this->getDoctrine()->getManager();
        $aid->removeTag($id);
        $em->persist($aid);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'notice',
            "Le tag   a bien été supprimé de l'article en base!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }


    /**
     * Invisible an article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function invisibleAction(Article $id)
    {
        $em = $this->getDoctrine()->getManager();
        $id->setIsVisible(false);
        $em->persist($id);
        $em->flush();


        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article est visible now!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }


    /**
     * Detail a category
     * @param Category $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categorydetailAction(Category $id)
    {
        return $this->render('HeticSiteBundle:Default:categorydetail.html.twig', array('category' => $id));
    }


    /**
     * Detail a article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function articledetailAction(Article $id)
    {
        return $this->render('HeticSiteBundle:Default:articlesingle.html.twig', array('article' => $id));
    }


    /**
     * Plus 1 for article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function bonusarticleAction(Article $id)
    {
        $em = $this->getDoctrine()->getManager();
        $id->setPoint($id->getPoint() + 1);
        $em->persist($id);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article est visible now!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }


    /**
     * Moins 1 for article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function malusarticleAction(Article $id)
    {
        $em = $this->getDoctrine()->getManager();
        $id->setPoint($id->getPoint() - 1);
        $em->persist($id);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article est visible now!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }

    /**
     * See article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function seearticleAction(Article $id)
    {
        return $this->render('HeticSiteBundle:Default:detail.html.twig', array('article' => $id));
    }

    /**
     * Visible an article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function visibleAction(Article $id)
    {
        $em = $this->getDoctrine()->getManager();
        $id->setIsVisible(true);
        $em->persist($id);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article est visible now!"
        );
        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }

    /**
     * Put In Star
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function putInStarAction(Article $id)
    {
        $session = $this->get('session');
        $stars = $session->get('stars');

        if (empty($stars) || $stars == 1)
            $stars = array();

        $stars[] = $id->getId();
        $session->set('stars', $stars);

        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article a bien été ajouté en favoris!"
        );

        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }

    /**
     * Remove an article
     * @param Article $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function pullInStarAction(Article $id)
    {
        $session = $this->get('session');
        $stars = $session->get('stars');

        if (empty($stars) || $stars == 1)
            $stars = array();
        else
            unset($stars[$id->getId()]);

        if (!empty($stars))
            foreach ($stars as $key => $star) {
                if ($star == $id->getId())
                    unset($stars[$key]);
            }

        $session->set('stars', $stars);
        $this->get('session')->getFlashBag()->add(
            'notice',
            "L'article a bien été supprimé de vos favoris!"
        );

        return $this->redirect($this->generateUrl('hetic_site_hello'));
    }
}
