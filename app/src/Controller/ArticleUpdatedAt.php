<?php

namespace App\Controller;

use App\Entity\Article;
use DateTimeImmutable;

class ArticleUpdatedAt
{
    public function __invoke(Article $data)
    {
        $data->setUpdatedAt(new \DateTimeImmutable());
        return $data;
    }
}
