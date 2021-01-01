<?php

namespace App\Controller;

use App\Entity\Article;
use DateTimeImmutable;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ArticleUpdatedAt
{
    public function __invoke(Article $data)
    {
        $data->setUpdatedAt(new \DateTimeImmutable());
        return $data;
    }
}
