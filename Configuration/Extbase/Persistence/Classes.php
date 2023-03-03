<?php

declare(strict_types=1);

return [
    \GeorgRinger\News\Domain\Model\News::class => [
        'subclasses' => [
            4 => \Polimi\Pressroom\Domain\Model\Pressroom::class,
        ]
    ],
    Polimi\Pressroom\Domain\Model\Pressroom::class => [
        'tableName' => 'tx_news_domain_model_news',
        'recordType' => 4,
    ]
];
