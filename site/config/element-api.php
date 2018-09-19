<?php

use craft\elements\Entry;
use craft\elements\MatrixBlock;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        'api/blog.json' => [
            'elementType' => Entry::class,
            'criteria' => ['section' => 'blog'],
            // 'transformer' => function(Entry $entry) {
            //   $matrixBlocks =[];
            //   foreach($entry->getFieldValue('bodyContent')->all() as $block) {
            //       switch ($block->type->handle) {
            //           case 'moduleText':
            //               $matrixBlocks[] = [
            //                   'moduleText' => $block->moduleText
            //               ];
            //               break;
            //       }
            //   }
            //     return [
            //         'title' => $entry->title,
            //         'url' => $entry->url,
            //         'id' => $entry->id,
            //         'slug' => $entry->slug,
            //         'postDate' => $entry->postDate,
            //         'featuredThumbnail' => $entry->featuredThumbnail->first()->filename,
            //         'jsonUrl' => UrlHelper::url("blog/{$entry->id}.json"),
            //         // 'bodyContent' => $entry->bodyContent,
            //         'bodyContent' => $entry->$matrixBlocks
            //     ];
            // },
        ]
    ]
];