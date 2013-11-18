<?php

namespace Proxies\__CG__\Hetic\SiteBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Produit extends \Hetic\SiteBundle\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getStarPicture()
    {
        $this->__load();
        return parent::getStarPicture();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
    }

    public function setCreatedAtValue()
    {
        $this->__load();
        return parent::setCreatedAtValue();
    }

    public function getCreatedAtValue()
    {
        $this->__load();
        return parent::getCreatedAtValue();
    }

    public function setDatePublication($datePublication)
    {
        $this->__load();
        return parent::setDatePublication($datePublication);
    }

    public function getDatePublication()
    {
        $this->__load();
        return parent::getDatePublication();
    }

    public function setDateCreated($dateCreated)
    {
        $this->__load();
        return parent::setDateCreated($dateCreated);
    }

    public function getDateCreated()
    {
        $this->__load();
        return parent::getDateCreated();
    }

    public function setCategory(\Hetic\SiteBundle\Entity\Category $category = NULL)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function addTag(\Hetic\SiteBundle\Entity\Tag $tags)
    {
        $this->__load();
        return parent::addTag($tags);
    }

    public function removeTag(\Hetic\SiteBundle\Entity\Tag $tags)
    {
        $this->__load();
        return parent::removeTag($tags);
    }

    public function getTags()
    {
        $this->__load();
        return parent::getTags();
    }

    public function setIsVisible($isVisible)
    {
        $this->__load();
        return parent::setIsVisible($isVisible);
    }

    public function getIsVisible()
    {
        $this->__load();
        return parent::getIsVisible();
    }

    public function setPoint($point)
    {
        $this->__load();
        return parent::setPoint($point);
    }

    public function getPoint()
    {
        $this->__load();
        return parent::getPoint();
    }

    public function setNature($nature)
    {
        $this->__load();
        return parent::setNature($nature);
    }

    public function getNature()
    {
        $this->__load();
        return parent::getNature();
    }

    public function setCover($cover)
    {
        $this->__load();
        return parent::setCover($cover);
    }

    public function getCover()
    {
        $this->__load();
        return parent::getCover();
    }

    public function setReference($reference)
    {
        $this->__load();
        return parent::setReference($reference);
    }

    public function getReference()
    {
        $this->__load();
        return parent::getReference();
    }

    public function setEan($ean)
    {
        $this->__load();
        return parent::setEan($ean);
    }

    public function getEan()
    {
        $this->__load();
        return parent::getEan();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setIsShop($isShop)
    {
        $this->__load();
        return parent::setIsShop($isShop);
    }

    public function getIsShop()
    {
        $this->__load();
        return parent::getIsShop();
    }

    public function setEtat($etat)
    {
        $this->__load();
        return parent::setEtat($etat);
    }

    public function getEtat()
    {
        $this->__load();
        return parent::getEtat();
    }

    public function setLivraison($livraison)
    {
        $this->__load();
        return parent::setLivraison($livraison);
    }

    public function getLivraison()
    {
        $this->__load();
        return parent::getLivraison();
    }

    public function setExtras($extras)
    {
        $this->__load();
        return parent::setExtras($extras);
    }

    public function getExtras()
    {
        $this->__load();
        return parent::getExtras();
    }

    public function setPrixTTC($prixTTC)
    {
        $this->__load();
        return parent::setPrixTTC($prixTTC);
    }

    public function getPrixTTC()
    {
        $this->__load();
        return parent::getPrixTTC();
    }

    public function setPrixHT($prixHT)
    {
        $this->__load();
        return parent::setPrixHT($prixHT);
    }

    public function getPrixHT()
    {
        $this->__load();
        return parent::getPrixHT();
    }

    public function setTva($tva)
    {
        $this->__load();
        return parent::setTva($tva);
    }

    public function getTva()
    {
        $this->__load();
        return parent::getTva();
    }

    public function setQuantity($quantity)
    {
        $this->__load();
        return parent::setQuantity($quantity);
    }

    public function getQuantity()
    {
        $this->__load();
        return parent::getQuantity();
    }

    public function addSeo(\Hetic\SiteBundle\Entity\Seo $seo)
    {
        $this->__load();
        return parent::addSeo($seo);
    }

    public function removeSeo(\Hetic\SiteBundle\Entity\Seo $seo)
    {
        $this->__load();
        return parent::removeSeo($seo);
    }

    public function getSeo()
    {
        $this->__load();
        return parent::getSeo();
    }

    public function addMeta(\Hetic\SiteBundle\Entity\Meta $metas)
    {
        $this->__load();
        return parent::addMeta($metas);
    }

    public function removeMeta(\Hetic\SiteBundle\Entity\Meta $metas)
    {
        $this->__load();
        return parent::removeMeta($metas);
    }

    public function getMetas()
    {
        $this->__load();
        return parent::getMetas();
    }

    public function addCate(\Hetic\SiteBundle\Entity\Category $cates)
    {
        $this->__load();
        return parent::addCate($cates);
    }

    public function removeCate(\Hetic\SiteBundle\Entity\Category $cates)
    {
        $this->__load();
        return parent::removeCate($cates);
    }

    public function getCates()
    {
        $this->__load();
        return parent::getCates();
    }

    public function setAccroche($accroche)
    {
        $this->__load();
        return parent::setAccroche($accroche);
    }

    public function getAccroche()
    {
        $this->__load();
        return parent::getAccroche();
    }

    public function setProdparent(\Hetic\SiteBundle\Entity\Produit $prodparent = NULL)
    {
        $this->__load();
        return parent::setProdparent($prodparent);
    }

    public function getProdparent()
    {
        $this->__load();
        return parent::getProdparent();
    }

    public function addArticle(\Hetic\SiteBundle\Entity\Article $articles)
    {
        $this->__load();
        return parent::addArticle($articles);
    }

    public function removeArticle(\Hetic\SiteBundle\Entity\Article $articles)
    {
        $this->__load();
        return parent::removeArticle($articles);
    }

    public function getArticles()
    {
        $this->__load();
        return parent::getArticles();
    }

    public function setVideo($video)
    {
        $this->__load();
        return parent::setVideo($video);
    }

    public function getVideo()
    {
        $this->__load();
        return parent::getVideo();
    }

    public function setService($service)
    {
        $this->__load();
        return parent::setService($service);
    }

    public function setMetas(\Doctrine\Common\Collections\ArrayCollection $metas)
    {
        $this->__load();
        return parent::setMetas($metas);
    }

    public function getService()
    {
        $this->__load();
        return parent::getService();
    }

    public function addAccesory(\Hetic\SiteBundle\Entity\Produit $accesories)
    {
        $this->__load();
        return parent::addAccesory($accesories);
    }

    public function removeAccesory(\Hetic\SiteBundle\Entity\Produit $accesories)
    {
        $this->__load();
        return parent::removeAccesory($accesories);
    }

    public function getAccesories()
    {
        $this->__load();
        return parent::getAccesories();
    }

    public function addArticlesaccesorie(\Hetic\SiteBundle\Entity\Produit $articlesaccesories)
    {
        $this->__load();
        return parent::addArticlesaccesorie($articlesaccesories);
    }

    public function removeArticlesaccesorie(\Hetic\SiteBundle\Entity\Produit $articlesaccesories)
    {
        $this->__load();
        return parent::removeArticlesaccesorie($articlesaccesories);
    }

    public function getArticlesaccesories()
    {
        $this->__load();
        return parent::getArticlesaccesories();
    }

    public function setDateUpdated($dateUpdated)
    {
        $this->__load();
        return parent::setDateUpdated($dateUpdated);
    }

    public function getDateUpdated()
    {
        $this->__load();
        return parent::getDateUpdated();
    }

    public function addAccesorie(\Hetic\SiteBundle\Entity\Produit $accesories)
    {
        $this->__load();
        return parent::addAccesorie($accesories);
    }

    public function removeAccesorie(\Hetic\SiteBundle\Entity\Produit $accesories)
    {
        $this->__load();
        return parent::removeAccesorie($accesories);
    }

    public function addImage(\Hetic\SiteBundle\Entity\Image $images)
    {
        $this->__load();
        return parent::addImage($images);
    }

    public function removeImage(\Hetic\SiteBundle\Entity\Image $images)
    {
        $this->__load();
        return parent::removeImage($images);
    }

    public function getImages()
    {
        $this->__load();
        return parent::getImages();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'reference', 'video', 'service', 'ean', 'status', 'isShop', 'prixTTC', 'prixHT', 'etat', 'title', 'accroche', 'nature', 'cover', 'content', 'extras', 'datePublication', 'isVisible', 'livraison', 'quantity', 'tva', 'dateCreated', 'dateUpdated', 'point', 'category', 'cates', 'tags', 'seo', 'prodparent', 'metas', 'images', 'articles', 'accesories', 'articlesaccesories');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}