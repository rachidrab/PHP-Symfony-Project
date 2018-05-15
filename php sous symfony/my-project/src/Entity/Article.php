<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article implements JsonSerializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="text", length=65535, nullable=false)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", length=65535, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="text", length=65535, nullable=false)
     */
    private $descrip;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;


    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getDescrip()
    {
        return $this->descrip;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function jsonSerialize()
    { 
        return array(
            'id' => $this->id,
            'title'=> json_encode($this->title, JSON_UNESCAPED_UNICODE),
            'author'=> json_encode($this->author, JSON_UNESCAPED_UNICODE),
            'link'=> $this->link,
            'descrip'=> json_encode($this->descrip, JSON_UNESCAPED_UNICODE),
            'image'=> $this->image
        );
    }
}
