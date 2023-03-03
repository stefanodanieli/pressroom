<?php

declare(strict_types=1);

return [
    \GeorgRinger\News\Domain\Model\News::class => [
        'subclasses' => [
            4 => \Polimiacre\Pressroom\Domain\Model\Pressroom::class,
        ]
    ],
    Polimiacre\Pressroom\Domain\Model\Pressroom::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => 4,
    ]
];
