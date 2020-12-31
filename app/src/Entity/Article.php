<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\ArticleUpdatedAt;
use App\Repository\ArticleRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @ApiResource(
 *     collectionOperations={
 *          "get"={
 *               "normalization_context"={"groups"={"article_read"}}
 *          },
 *          "post",
 *     },
 *     itemOperations={
 *          "get"={
 *               "normalization_context"={"groups"={"article_detail_read"}}
 *          },
 *          "put",
 *          "patch",
 *          "delete",
 *          "put_updated_at"={
 *              "method"="PUT",
 *              "path"="/articles/{id}/updated-at",
 *              "controller"=ArticleUpdatedAt::class,
 *          }
 *     }
 * )
 */
class Article
{
    use ResourceId;
    use Timestable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article_read", "user_detail_read", "article_detail_read"})
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups({"article_read", "user_detail_read", "article_detail_read"})
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"article_detail_read"})
     */
    private $author;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }
}
