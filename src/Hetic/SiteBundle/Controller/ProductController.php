<?php

namespace Hetic\SiteBundle\Controller;

use fg\Essence\Essence;
use fg\Essence\EssenceTest;
use Hetic\SiteBundle\Entity\Image;
use Hetic\SiteBundle\Entity\Meta;
use Hetic\SiteBundle\Entity\Produit;

use Hetic\SiteBundle\Entity\Seo;
use Hetic\SiteBundle\Form\ImageType;
use Hetic\SiteBundle\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class ProductController extends Controller
{

    public function indexAction()
    {
        return $this->render('HeticSiteBundle:Default:index.html.twig');

    }

    public function productsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository('HeticSiteBundle:Produit')->findAll();

        return $this->render('HeticSiteBundle:Product:products.html.twig', array('produits' => $products));
    }

    public function removeproductAction(Produit $id)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($id);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            "Le produit a bien été activé"
        );
        return $this->redirect($this->generateUrl('hetic_site_products'));
    }

    public function removeimageproductAction(Image $id)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($id);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            "L'image du produit a bien été activé"
        );
        return $this->redirect($this->generateUrl('hetic_site_products'));
    }


    public function coverimageproductAction(Image $id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $id->getProduit();
        $oldsimage = $product->getImages();
        if(!empty($oldsimage))
            foreach($oldsimage as $img){
                $img->setCover(false);
                $em->persist($img);
                $em->flush();
            }
        $id->setCover(true);
        $em->persist($id);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            "L'image du produit a bien été mise en avant"
        );
        return $this->redirect($this->generateUrl('hetic_site_products'));
    }

    public function pictureproductAction(Produit $id)
    {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();

        $image = new Image();
        $image->setProduit($id);
        $form = $this->createForm(new ImageType(), $image);
        $form->handleRequest($request);

        if ($request->getMethod() === "POST") {

            if ($form->isValid()) {
                $image->upload($id->getId());
                $em->persist($image);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "L'image a bien été ajouté"
                );
                return $this->redirect($this->generateUrl('hetic_site_products'));
            }
        }
        return $this->render('HeticSiteBundle:Product:pictureproduct.html.twig',
            array(
                'form' => $form->createView(),
                'produit' => $id,
            )
        );
    }

    public function visualizeproductAction(Produit $id)
    {
        return $this->render('HeticSiteBundle:Product:visualizeproduct.html.twig',
            array(
                'produit' => $id,
            )
        );
    }

    public function desactiveproductAction(Produit $id)
    {
        $em = $this->getDoctrine()->getManager();

        $id->setIsVisible(false);
        $em->persist($id);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            "Le produit a bien été désactivé"
        );
        return $this->redirect($this->generateUrl('hetic_site_products'));
    }

    public function activeproductAction(Produit $id)
    {
        $em = $this->getDoctrine()->getManager();

        $id->setIsVisible(true);
        $em->persist($id);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'success',
            "Le produit a bien été activé"
        );
        return $this->redirect($this->generateUrl('hetic_site_products'));
    }

    public function createproductAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $meta = new Meta();
        $produit = new Produit();
        $seo = new Seo();
        $produit->addSeo($seo);
        $produit->addMeta($meta);
        $seo->setProduit($produit);
        $meta->setProduit($produit);

        $form = $this->createForm(new ProductType(), $produit);
        $form->handleRequest($request);

        if ($request->getMethod() === "POST") {

            if ($form->isValid()) {
                $em->persist($produit);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "Le produit a bien été ajouté"
                );
                return $this->redirect($this->generateUrl('hetic_site_products'));
            }
        }
        return $this->render('HeticSiteBundle:Product:createproduct.html.twig',
            array(
                'form' => $form->createView(),
            )
        );

    }


    public function editproductAction(Produit $id)
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ProductType($id), $id);
        $form->handleRequest($request);

        $Essence = new \fg\Essence\Essence();
        $media = $Essence->embed($id->getVideo(), array(
            'maxwidth' => 400,
            'maxheight' => 200
        ));

        if ($request->getMethod() === "POST") {

            if ($form->isValid()) {
                $em->persist($id);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'success',
                    "Le produit a bien été edité"
                );
                return $this->redirect($this->generateUrl('hetic_site_products'));
            }
        }
        return $this->render('HeticSiteBundle:Product:editproduct.html.twig',
            array(
                'form' => $form->createView(),
                'produit' => $id,
                'video' => $media,
            )
        );

    }


}
