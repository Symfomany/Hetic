<?php

namespace Hetic\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Article
 * @ORM\Entity
 * @ORM\Table(name="tag")
 * @ORM\HasLifecycleCallbacks()
 */
class Tag
{

    public function __construct(){
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
     * @Assert\NotBlank(
     *     message = "Le mot ne doit pas etre vide"
     * )
     * @ORM\Column(name="word", type="string", length=200, nullable=true)
     */
    private $word;


    /**
     * @ORM\ManyToMany(targetEntity="Article", mappedBy="tags")
     */
    private $articles;


    public function __toString(){
        return $this->word;
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
     * Set word
     *
     * @param string $word
     * @return Tag
     */
    public function setWord($word)
    {
        $this->word = $word;
    
        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }


    /**
     * Add articles
     *
     * @param \Hetic\SiteBundle\Entity\Article $articles
     * @return Tag
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
}