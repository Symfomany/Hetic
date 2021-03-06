<?php

namespace Hetic\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Article
 * @Gedmo\Tree(type="nested")
 * @ORM\Entity(repositoryClass="Hetic\SiteBundle\Repository\CategoryRepository")
 * @ORM\Table(name="category")
 * @ORM\HasLifecycleCallbacks()
 */
class Category
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @Assert\NotBlank(
     *     message = "Le titre ne doit pas etre vide"
     * )
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(name="path", type="string", length=3000, nullable=true)
     */
    private $path;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(name="cover", type="text", nullable=true)
     */
    private $cover;

    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="category", cascade={"all"},orphanRemoval=true)
     */
    protected $articles;

    /**
     * @ORM\OneToMany(targetEntity="Produit", mappedBy="category", cascade={"all"},orphanRemoval=true)
     */
    protected $produits;

    /**
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="cates", cascade={"all"},orphanRemoval=true)
     */
    protected $articless;


    /**
     * @var string
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;


    /**
     * @var string
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;


    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Category", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;


    /**
     * @ORM\OneToMany(targetEntity="ImageCategory",mappedBy="category", cascade={"all"},orphanRemoval=true)
     */
    protected $images;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->visible = true;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }


    public function __toString(){
        return $this->name;
    }


    /**
     * Set title
     *
     * @param text $title
     * @return Image
     */
    public function getStarPicture()
    {
        $images = $this->getImages();
        if(!empty($images))
            foreach($images as $image){
                if($image->getCover() == true){
                    return $image;
                    break;
                }
            }

        return null;
    }


    /**
     * Add articles
     *
     * @param \Hetic\SiteBundle\Entity\Article $articles
     * @return Category
     */
    public function addArticle(\Hetic\SiteBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Hetic\SiteBundle\Entity\Article $articles
     */
    public function removeArticle(\Hetic\SiteBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add articless
     *
     * @param Hetic\SiteBundle\Entity\Article $articless
     * @return Category
     */
    public function addArticles(\Hetic\SiteBundle\Entity\Article $articless)
    {
        $this->articless[] = $articless;
        return $this;
    }

    /**
     * Remove articless
     *
     * @param Hetic\SiteBundle\Entity\Article $articless
     */
    public function removeArticles(\Hetic\SiteBundle\Entity\Article $articless)
    {
        $this->articless->removeElement($articless);
    }

    /**
     * Get articless
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getArticless()
    {
        return $this->articless;
    }

    /**
     * Set dateCreated
     *
     * @param datetime $dateCreated
     * @return Category
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return datetime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Category
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Category
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return Category
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;
        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Category
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     * @return Category
     */
    public function setRoot($root)
    {
        $this->root = $root;
        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set parent
     *
     * @param Hetic\SiteBundle\Entity\Category $parent
     * @return Category
     */
    public function setParent(\Hetic\SiteBundle\Entity\Category $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return Hetic\SiteBundle\Entity\Category 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add children
     *
     * @param Hetic\SiteBundle\Entity\Category $children
     * @return Category
     */
    public function addChildren(\Hetic\SiteBundle\Entity\Category $children)
    {
        $this->children[] = $children;
        return $this;
    }

    /**
     * Remove children
     *
     * @param Hetic\SiteBundle\Entity\Category $children
     */
    public function removeChildren(\Hetic\SiteBundle\Entity\Category $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set cover
     *
     * @param text $cover
     * @return Category
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * Get cover
     *
     * @return text 
     */
    public function getCover()
    {
        return $this->cover;
    }

    public function getOptionLabel()
    {
        return str_repeat(
            html_entity_decode('&nbsp;', ENT_QUOTES, 'UTF-8'),
            ($this->getLvl() + 1) * 3
        ) . $this->getName();
    }


    /**
     * Set path
     *
     * @param string $path
     * @return Category
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add produits
     *
     * @param Hetic\SiteBundle\Entity\Produit $produits
     * @return Category
     */
    public function addProduit(\Hetic\SiteBundle\Entity\Produit $produits)
    {
        $this->produits[] = $produits;
        return $this;
    }

    /**
     * Remove produits
     *
     * @param Hetic\SiteBundle\Entity\Produit $produits
     */
    public function removeProduit(\Hetic\SiteBundle\Entity\Produit $produits)
    {
        $this->produits->removeElement($produits);
    }

    /**
     * Get produits
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Add images
     *
     * @param Hetic\SiteBundle\Entity\ImageCategory $images
     * @return Category
     */
    public function addImage(\Hetic\SiteBundle\Entity\ImageCategory $images)
    {
        $this->images[] = $images;
        return $this;
    }

    /**
     * Remove images
     *
     * @param Hetic\SiteBundle\Entity\ImageCategory $images
     */
    public function removeImage(\Hetic\SiteBundle\Entity\ImageCategory $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }
}