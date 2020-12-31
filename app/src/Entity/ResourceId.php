<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

trait ResourceId
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"article_read","user_read", "user_detail_read", "article_detail_read"})
     */
    private int $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
