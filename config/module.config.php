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
        'geoSearchResults' => array(
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/geoSearchResults.json'
        ),
        'journalViewer' => array(
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/journalViewer.json'
        ),
    ),
    'extension_paths' => array(
        'form' => array(
            'path' => realpath(__DIR__ . '/../expaths/form'),
            'css' => array(),
            'js' => array('js/blockDef.js'),
            'angularModules' => array()
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'Journaux' => 'Formationnrcom\\Collection\\Journaux',
        ),

    ),
    'namespaces_api' => array(
        'Formationnrcom',
    ),
    'appExtension' => array(
        'formation' => array(
            'basePath' => realpath(__DIR__ . '/../app-extension') . '/formation',
            'definitionFile' => realpath(__DIR__ . '/../app-extension') . '/formation.json'
        )
    ),
    'router' => array (
        'routes' => array(
            'journal' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/backoffice/journal',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Formationnrcom\\Backoffice\\Controller',
                        'controller' => 'journal',
                        'action' => 'index'
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:action]',
                            '__NAMESPACE__' => 'Formationnrcom\\Backoffice\\Controller',
                            'constraints' => array(
                                'controller' => 'journal',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array()
                        )
                    )
                )
            ),

        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Formationnrcom\\Backoffice\\Controller\\Journal' => 'Formationnrcom\\Backoffice\\Controller\\JournalController'
        ),
    ),
);