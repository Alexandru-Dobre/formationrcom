<?php
return array(
    'templates' => array(
        'themes' => array(
            'formation' => array(
                'label' => 'Formation',
                'basePath' => realpath(__DIR__ . '/../themes/formation'),
                'noBootstrap' => true,
                'css' => array(
                    '/css/bootstrap.min.css',
                ),
                'js' => array(
                    '/js/blockDef.js',
                ),
                'img' => array(
                )
            ),
        )
    ),
    'blocksDefinition' => array(
        'carrouselVideo' => array(
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/carrouselVideo.json'
        ),
    )
);