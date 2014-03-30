<?php

namespace margogi\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Post {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="margogi\BlogBundle\Entity\User", mappedBy="posts", fetch="EAGER")
     */
    protected $user;

    /**
     * @ORM\OneToMany(targetEntity="margogi\BlogBundle\Entity\Comment", mappedBy="post", fetch="LAZY")
     */
    protected $comments;

    /**
     * @ORM\OneToMany(targetEntity="margogi\BlogBundle\Entity\Image", mappedBy="post", fetch="LAZY")
     */
    protected $images;

    /**
     * @ORM\ManyToMany(targetEntity="margogi\BlogBundle\Entity\Tag", mappedBy="post", fetch="LAZY")
     */
    protected $tags;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $content;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $enableComments;

} 