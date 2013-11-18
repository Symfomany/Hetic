<?php

namespace Hetic\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Article
 * @ORM\Entity
 * @ORM\Table(name="images_category")
 * @ORM\HasLifecycleCallbacks()
 */
class ImageCategory
{

    public function __construct(){
        $this->dateCreated = new \Datetime('now');
        $this->cover = false;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="picture", type="text", nullable=true)
     */
    private $path;

    /**
     * @Assert\Image(
     *     minWidth = 200,
     *     minHeight  = 200,
     *     maxWidth = 3000,
     *     maxHeight = 3000,
     *     maxSize = "5000k",
     *     mimeTypes = {"image/jpg","image/jpeg", "image/png", "image/gif", " image/bmp"},
     *     mimeTypesMessage = "Image au format non supporté",
     *    maxWidthMessage = "Image trop grande en largeur {{ width }}px. Le maximum en largeur est de {{ max_width }}px" ,
     *    minWidthMessage = "Image trop petite en largeur {{ width }}px. Le minimum en largeur est de {{ min_width }}px" ,
     *    minHeightMessage = "Image trop petite en hauteur {{ height }}px. Le mimum en hauteur est de {{ min_height }}px" ,
     *    maxHeightMessage = "Image trop grande en hauteur  {{ height }}px. Le maximum en hauteur est de {{ max_height }}px" ,
     *    groups={"addfile"}
     * )
     */
    public $file;

    /**
     * @var string
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @ORM\Column(name="cover", type="boolean", nullable=true)
     */
    private $cover;


    /**
     * @ORM\ManyToOne(targetEntity="Category",inversedBy="images")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;



    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->getCategory()->getId().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/categories/';
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload($id = null)
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file) {
            return;
        }

        if(!is_dir(@mkdir($this->getUploadRootDir().'/'.$id)))
            @mkdir($this->getUploadRootDir().'/'.$id);


        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé

        $rewritefile = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();

        $this->file->move($this->getUploadRootDir().'/'.$id, $rewritefile);

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->path = $rewritefile;

//        $this->path = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();


        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
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
     * Set title
     *
     * @param text $title
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }


    /**
     * Get title
     *
     * @return text 
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Set dateCreated
     *
     * @param datetime $dateCreated
     * @return Image
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
     * Set path
     *
     * @param text $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Get path
     *
     * @return text 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set cover
     *
     * @param boolean $cover
     * @return Image
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * Get cover
     *
     * @return boolean 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set category
     *
     * @param Hetic\SiteBundle\Entity\Category $category
     * @return ImageCategory
     */
    public function setCategory(\Hetic\SiteBundle\Entity\Category $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return Hetic\SiteBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}