<?php

$getMethod = 'get';
$postMethod = 'post';
$putMethod = 'put';
$deleteMethod = 'delete';

$homeBaseUrl = '/home';
$userBaseUrl = '/users';
$roleBaseUrl = '/roles';
$configBaseUrl = '/configs';
$pageBaseUrl = '/pages';
$fileManagerUrl = '/file-manager';
$postCategoryUrl = '/post-categories';
$postUrl = '/posts';
$testimonialUrl = '/testimonials';
$teamUrl = '/teams';
$contactUsUrl = '/contact-us';
$eventUrl = '/events';
$menuBaseUrl = '/menus';
$monitorUrl = '/monitor';
$redirectionUrl = '/redirections';
$activityUrl = '/activities';
$partnerUrl = '/partners';

return [
    // routes entered in this array are accessible by any user no matter what role is given
    'permissionGrantedbyDefaultRoutes' => [
        [
            'url' => $homeBaseUrl,
            'method' => $getMethod,
        ],
        [
            'url' => '/logout',
            'method' => $getMethod,
        ],
        [
            'url' => '/dashboard',
            'method' => $getMethod,
        ],
        [
            'url' => '/profile',
            'method' => $getMethod,
        ],
        [
            'url' => '/profile/*',
            'method' => $putMethod,
        ],
        [
            'url' => '/change-password',
            'method' => $getMethod,
        ],
        [
            'url' => '/change-password',
            'method' => $putMethod,
        ],

    ],

    // All the routes are accessible by super user by default
    // routes entered in this array are not accessible by super user
    'permissionDeniedToSuperUserRoutes' => [],

    'modules' => [
        [
            'name' => 'Dashboard',
            'icon' => "<i class='fa fa-home'></i>",
            'hasSubmodules' => false,
            'route' => $homeBaseUrl,
            'routeIndexName' => 'home.index',
            'routeName' => 'home',
            'permissions' => [
                [
                    'name' => 'View Dashboard',
                    'route' => [
                        'url' => $homeBaseUrl,
                        'method' => $getMethod,
                    ],
                ]
            ],
        ],

//        [
//            'name' => ' Events',
//            'icon' => "<i class='fa fa-cube'></i>",
//            'hasSubmodules' => false,
//            'route' => $eventUrl,
//            'routeIndexName' => 'events.index',
//            'routeName' => 'events',
//            'permissions' => [
//                [
//                    'name' => 'View Event',
//                    'route' => [
//                        'url' => $eventUrl,
//                        'method' => $getMethod,
//                    ],
//                ],
//                [
//                    'name' => 'Create Event',
//                    'route' => [
//                        [
//                            'url' => $eventUrl . '/create',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $eventUrl,
//                            'method' => $postMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Edit Event',
//                    'route' => [
//                        [
//                            'url' => $eventUrl . '/*/edit',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $eventUrl . '/*',
//                            'method' => $putMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Delete Event',
//                    'route' => [
//                        'url' => $eventUrl . '/*',
//                        'method' => $deleteMethod,
//                    ],
//                ],
//                [
//                    'name' => 'Delete  Event Gallery',
//                    'route' => [
//                        'url' => $eventUrl . '/delete-gallery/*',
//                        'method' => $getMethod,
//                    ],
//                ],
//            ],
//        ],
        [
            'name' => 'Contact Us',
            'icon' => "<i class='fa fa-phone'></i>",
            'hasSubmodules' => false,
            'route' => $contactUsUrl,
            'routeIndexName' => 'contact-us.index',
            'routeName' => 'contact-us',
            'permissions' => [
                [
                    'name' => 'View Contact Us',
                    'route' => [
                        'url' => $contactUsUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Delete Contact Us',
                    'route' => [
                        'url' => $contactUsUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ]
            ],
        ],
        [
            'name' => 'User Management',
            'icon' => "<i class='fa fa-user'></i>",
            'hasSubmodules' => true,
            'routeIndexNameMultipleSubMenu' => ['users.index', 'roles.index'], //use for opening sidenav menu only
            'submodules' => [
                [
                    'name' => 'Users',
                    'icon' => "<i class='fa fa-users'></i>",
                    'hasSubmodules' => false,
                    'route' => $userBaseUrl,
                    'routeIndexName' => 'users.index',
                    'routeName' => 'users',
                    'permissions' => [
                        [
                            'name' => 'View Users',
                            'route' => [
                                'url' => $userBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Users',
                            'route' => [
                                [
                                    'url' => $userBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $userBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Users',
                            'route' => [
                                'url' => $userBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ]
                    ],
                ],
                [
                    'name' => 'Roles',
                    'icon' => "<i class='fa fa-tags'></i>",
                    'hasSubmodules' => false,
                    'route' => $roleBaseUrl,
                    'routeIndexName' => 'roles.index',
                    'routeName' => 'roles',
                    'permissions' => [
                        [
                            'name' => 'View Roles',
                            'route' => [
                                'url' => $roleBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Roles',
                            'route' => [
                                [
                                    'url' => $roleBaseUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $roleBaseUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Roles',
                            'route' => [
                                'url' => $roleBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
            ],
        ],
//        [
//            'name' => 'Testimonial',
//            'icon' => "<i class='fa fa-user-friends'></i>",
//            'hasSubmodules' => false,
//            'route' => $testimonialUrl,
//            'routeIndexName' => 'testimonials.index',
//            'routeName' => 'testimonials',
//            'permissions' => [
//                [
//                    'name' => 'View Testimonial',
//                    'route' => [
//                        'url' => $testimonialUrl,
//                        'method' => $getMethod,
//                    ],
//                ],
//                [
//                    'name' => 'Create Testimonial',
//                    'route' => [
//                        [
//                            'url' => $testimonialUrl . '/create',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $testimonialUrl,
//                            'method' => $postMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Edit Testimonial',
//                    'route' => [
//                        [
//                            'url' => $testimonialUrl . '/*/edit',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $testimonialUrl . '/*',
//                            'method' => $putMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Delete Testimonial',
//                    'route' => [
//                        'url' => $testimonialUrl . '/*',
//                        'method' => $deleteMethod,
//                    ],
//                ]
//            ],
//
//        ],
        [
            'name' => 'Partner',
            'icon' => "<i class='fa fa-user-graduate'></i>",
            'hasSubmodules' => false,
            'route' => $partnerUrl,
            'routeIndexName' => 'partners.index',
            'routeName' => 'partners',
            'permissions' => [
                [
                    'name' => 'View Partner',
                    'route' => [
                        'url' => $partnerUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Partner',
                    'route' => [
                        [
                            'url' => $partnerUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $partnerUrl,
                            'method' => $postMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Edit Partner',
                    'route' => [
                        [
                            'url' => $partnerUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $testimonialUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Testimonial',
                    'route' => [
                        'url' => $testimonialUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ]
            ],

        ],

        [
            'name' => 'Team',
            'icon' => "<i class='fa fa-users'></i>",
            'hasSubmodules' => false,
            'route' => $teamUrl,
            'routeIndexName' => 'teams.index',
            'routeName' => 'teams',
            'permissions' => [
                [
                    'name' => 'View Team',
                    'route' => [
                        'url' => $teamUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Team',
                    'route' => [
                        [
                            'url' => $teamUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $teamUrl,
                            'method' => $postMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Edit Team',
                    'route' => [
                        [
                            'url' => $teamUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $teamUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Team',
                    'route' => [
                        'url' => $teamUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ]
            ],

        ],
        [
            'name' => 'Post',
            'icon' => "<i class='fa fa-signs-post' aria-hidden='true'></i>",
            'hasSubmodules' => true,
            'routeIndexNameMultipleSubMenu' => ['post-categories.index', 'posts.index'],
            'submodules' => [
                [
                    'name' => 'Category',
                    'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                    'route' => $postCategoryUrl,
                    'routeIndexName' => 'post-categories.index',
                    'routeName' => 'post-categories',
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Category',
                            'route' => [
                                'url' => $postCategoryUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Category',
                            'route' => [
                                [
                                    'url' => $postCategoryUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $postCategoryUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Category',
                            'route' => [
                                [
                                    'url' => $postCategoryUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $postCategoryUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Category',
                            'route' => [
                                'url' => $postCategoryUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Post',
                    'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                    'route' => $configBaseUrl,
                    'routeIndexName' => 'posts.index',
                    'routeName' => 'posts',
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Post',
                            'route' => [
                                'url' => $postUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Post',
                            'route' => [
                                [
                                    'url' => $postUrl . '/create',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $postUrl,
                                    'method' => $postMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Edit Post',
                            'route' => [
                                [
                                    'url' => $postUrl . '/*/edit',
                                    'method' => $getMethod,
                                ],
                                [
                                    'url' => $postUrl . '/*',
                                    'method' => $putMethod,
                                ],
                            ],
                        ],
                        [
                            'name' => 'Delete Post',
                            'route' => [
                                'url' => $postUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],

            ],
        ],
        [
            'name' => 'Pages',
            'icon' => "<i class='fa fa-file'></i>",
            'hasSubmodules' => false,
            'route' => $pageBaseUrl,
            'routeIndexName' => 'pages.index',
            'routeName' => 'pages',
            'permissions' => [
                [
                    'name' => 'View Page',
                    'route' => [
                        'url' => $pageBaseUrl,
                        'method' => $getMethod,
                    ],
                ],
                [
                    'name' => 'Create Page',
                    'route' => [
                        [
                            'url' => $pageBaseUrl . '/create',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $pageBaseUrl,
                            'method' => $postMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Edit Page',
                    'route' => [
                        [
                            'url' => $pageBaseUrl . '/*/edit',
                            'method' => $getMethod,
                        ],
                        [
                            'url' => $pageBaseUrl . '/*',
                            'method' => $putMethod,
                        ],
                    ],
                ],
                [
                    'name' => 'Delete Users',
                    'route' => [
                        'url' => $pageBaseUrl . '/*',
                        'method' => $deleteMethod,
                    ],
                ]
            ],

        ],
//        [
//            'name' => 'Redirection',
//            'icon' => "<i class='fa fa-link'></i>",
//            'hasSubmodules' => false,
//            'route' => $redirectionUrl,
//            'routeIndexName' => 'redirections.index',
//            'routeName' => 'redirections',
//            'permissions' => [
//                [
//                    'name' => 'View Redirection',
//                    'route' => [
//                        'url' => $redirectionUrl,
//                        'method' => $getMethod,
//                    ],
//                ],
//                [
//                    'name' => 'Create Redirection',
//                    'route' => [
//                        [
//                            'url' => $redirectionUrl . '/create',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $redirectionUrl,
//                            'method' => $postMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Edit Redirection',
//                    'route' => [
//                        [
//                            'url' => $redirectionUrl . '/*/edit',
//                            'method' => $getMethod,
//                        ],
//                        [
//                            'url' => $redirectionUrl . '/*',
//                            'method' => $putMethod,
//                        ],
//                    ],
//                ],
//                [
//                    'name' => 'Delete Redirection',
//                    'route' => [
//                        'url' => $redirectionUrl . '/*',
//                        'method' => $deleteMethod,
//                    ],
//                ]
//            ],
//        ],
        [
            'name' => ' Activities Tracking',
            'icon' => "<i class='fa fa-video-camera'></i>",
            'hasSubmodules' => false,
            'route' => $eventUrl,
            'routeIndexName' => 'activities.index',
            'routeName' => 'activities',
            'permissions' => [
                [
                    'name' => 'View Activity',
                    'route' => [
                        'url' => $eventUrl,
                        'method' => $getMethod,
                    ],
                ],
            ],
        ],
        [
            'name' => 'File Manager',
            'icon' => "<i class='fa fa-folder'></i>",
            'hasSubmodules' => false,
            'route' => $fileManagerUrl,
            'routeIndexName' => 'file-manager.index',
            'routeName' => 'file-manager',
            'permissions' => [
                [
                    'name' => 'Manager File Manager',
                    'route' => [
                        'url' => $fileManagerUrl,
                        'method' => $getMethod,
                    ],
                ],
            ],

        ],
        [
            'name' => 'Settings',
            'icon' => "<i class='fa fa-cogs' aria-hidden='true'></i>",
            'hasSubmodules' => true,
            'routeIndexNameMultipleSubMenu' => ['configs.index','menus.index'],
            'submodules' => [
                [
                    'name' => 'Configs',
                    'icon' => '<i class="fa fa-cog" aria-hidden="true"></i>',
                    'route' => $configBaseUrl,
                    'routeIndexName' => 'configs.index',
                    'routeName' => 'configs',
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Configs',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Config',
                            'route' => [
                                'url' => $configBaseUrl,
                                'method' => $postMethod,
                            ],
                        ],
                        [
                            'name' => 'Edit Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $putMethod,
                            ],
                        ],
                        [
                            'name' => 'Delete Config',
                            'route' => [
                                'url' => $configBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Menu Builder',
                    'icon' => '<i class="fa fa-menu" aria-hidden="true"></i>',
                    'route' => $menuBaseUrl,
                    'routeIndexName' => 'menus.index',
                    'routeName' => 'menus',
                    'hasSubmodules' => false,
                    'permissions' => [
                        [
                            'name' => 'View Menu',
                            'route' => [
                                'url' => $menuBaseUrl,
                                'method' => $getMethod,
                            ],
                        ],
                        [
                            'name' => 'Create Menu',
                            'route' => [
                                'url' => $menuBaseUrl,
                                'method' => $postMethod,
                            ],
                        ],
                        [
                            'name' => 'Edit Menu',
                            'route' => [
                                'url' => $menuBaseUrl . '/*',
                                'method' => $putMethod,
                            ],
                        ],
                        [
                            'name' => 'Delete Menu',
                            'route' => [
                                'url' => $menuBaseUrl . '/*',
                                'method' => $deleteMethod,
                            ],
                        ],
                    ],
                ],

            ],
        ],
        [
            'name' => 'Resource Monitor',
            'icon' => "<i class='fa fa-campground'></i>",
            'hasSubmodules' => false,
            'route' => $monitorUrl,
            'routeIndexName' => 'monitor.index',
            'routeName' => 'monitor',
            'permissions' => [
                [
                    'name' => 'View Resource Monitor',
                    'route' => [
                        'url' => $monitorUrl,
                        'method' => $getMethod,
                    ],
                ]
            ],
        ],
    ],
];
