<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/user' => [[['_route' => 'user_create', '_controller' => 'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCreatePostController'], null, ['POST' => 0], null, false, false, null]],
        '/user/auth' => [[['_route' => 'user_auth', '_controller' => 'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserAuthenticatePostController'], null, ['POST' => 0], null, false, false, null]],
        '/user/current' => [[['_route' => 'user_current', 'auth' => true, '_controller' => 'MyCoon\\Apps\\Backoffice\\Backend\\Controller\\User\\UserCurrentGetController'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
