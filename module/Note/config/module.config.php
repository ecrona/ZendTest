<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Note\Controller\Index' => 'Note\Controller\IndexController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'note' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/note[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Note\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'note' => __DIR__ . '/../view',
        ),
    ),
);