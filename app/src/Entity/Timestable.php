<?php

namespace App\Entity;

use Symfony\Component\Serializer\Annotation\Groups;

trait Timestable
{
     /**
     * @ORM\Column(type="datetime")
     * @Groups({"article_read","user_read", "user_detail_read", "article_detail_read"})
     */
    private \DateTimeInterface $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"article_read","user_read", "user_detail_read", "article_detail_read"})
     */
    private ?\DateTimeInterface $updatedAt;

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }


}
