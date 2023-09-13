<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/expense/attachment' => [[['_route' => 'app_expense_attachment_index', '_controller' => 'App\\Controller\\ExpenseAttachmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/expense/attachment/new' => [[['_route' => 'app_expense_attachment_new', '_controller' => 'App\\Controller\\ExpenseAttachmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expense/category' => [[['_route' => 'app_expense_category_index', '_controller' => 'App\\Controller\\ExpenseCategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/expense/category/new' => [[['_route' => 'app_expense_category_new', '_controller' => 'App\\Controller\\ExpenseCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expense/comment' => [[['_route' => 'app_expense_comment_index', '_controller' => 'App\\Controller\\ExpenseCommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/expense/comment/new' => [[['_route' => 'app_expense_comment_new', '_controller' => 'App\\Controller\\ExpenseCommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expense' => [[['_route' => 'app_expense_index', '_controller' => 'App\\Controller\\ExpenseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/expense/new' => [[['_route' => 'app_expense_new', '_controller' => 'App\\Controller\\ExpenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/expense/participant/new' => [[['_route' => 'app_expense_participant_new', '_controller' => 'App\\Controller\\ExpenseParticipantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/group' => [[['_route' => 'app_group_index', '_controller' => 'App\\Controller\\GroupController::index'], null, ['GET' => 0], null, true, false, null]],
        '/group/new' => [[['_route' => 'app_group_new', '_controller' => 'App\\Controller\\GroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/notification' => [[['_route' => 'app_notification_index', '_controller' => 'App\\Controller\\NotificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/notification/new' => [[['_route' => 'app_notification_new', '_controller' => 'App\\Controller\\NotificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/payment/new' => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/settlement' => [[['_route' => 'app_settlement_index', '_controller' => 'App\\Controller\\SettlementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/settlement/new' => [[['_route' => 'app_settlement_new', '_controller' => 'App\\Controller\\SettlementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/expense/(?'
                    .'|attachment/([^/]++)(?'
                        .'|(*:203)'
                        .'|/edit(*:216)'
                        .'|(*:224)'
                    .')'
                    .'|c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:256)'
                            .'|/edit(*:269)'
                            .'|(*:277)'
                        .')'
                        .'|omment/([^/]++)(?'
                            .'|(*:304)'
                            .'|/edit(*:317)'
                            .'|(*:325)'
                        .')'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:346)'
                        .'|/edit(*:359)'
                        .'|(*:367)'
                    .')'
                    .'|participant(?'
                        .'|(*:390)'
                        .'|/([^/]++)(?'
                            .'|(*:410)'
                            .'|/edit(*:423)'
                            .'|(*:431)'
                        .')'
                    .')'
                .')'
                .'|/group/([^/]++)(?'
                    .'|(*:460)'
                    .'|/edit(*:473)'
                    .'|(*:481)'
                .')'
                .'|/notification/([^/]++)(?'
                    .'|(*:515)'
                    .'|/edit(*:528)'
                    .'|(*:536)'
                .')'
                .'|/payment/([^/]++)(?'
                    .'|(*:565)'
                    .'|/edit(*:578)'
                    .'|(*:586)'
                .')'
                .'|/settlement/([^/]++)(?'
                    .'|(*:618)'
                    .'|/edit(*:631)'
                    .'|(*:639)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:665)'
                    .'|/edit(*:678)'
                    .'|(*:686)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'app_expense_attachment_show', '_controller' => 'App\\Controller\\ExpenseAttachmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_expense_attachment_edit', '_controller' => 'App\\Controller\\ExpenseAttachmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'app_expense_attachment_delete', '_controller' => 'App\\Controller\\ExpenseAttachmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_expense_category_show', '_controller' => 'App\\Controller\\ExpenseCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_expense_category_edit', '_controller' => 'App\\Controller\\ExpenseCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'app_expense_category_delete', '_controller' => 'App\\Controller\\ExpenseCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_expense_comment_show', '_controller' => 'App\\Controller\\ExpenseCommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_expense_comment_edit', '_controller' => 'App\\Controller\\ExpenseCommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        325 => [[['_route' => 'app_expense_comment_delete', '_controller' => 'App\\Controller\\ExpenseCommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'app_expense_show', '_controller' => 'App\\Controller\\ExpenseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        359 => [[['_route' => 'app_expense_edit', '_controller' => 'App\\Controller\\ExpenseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [[['_route' => 'app_expense_delete', '_controller' => 'App\\Controller\\ExpenseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_expense_participant_index', '_controller' => 'App\\Controller\\ExpenseParticipantController::index'], [], ['GET' => 0], null, true, false, null]],
        410 => [[['_route' => 'app_expense_participant_show', '_controller' => 'App\\Controller\\ExpenseParticipantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_expense_participant_edit', '_controller' => 'App\\Controller\\ExpenseParticipantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_expense_participant_delete', '_controller' => 'App\\Controller\\ExpenseParticipantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        460 => [[['_route' => 'app_group_show', '_controller' => 'App\\Controller\\GroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_group_edit', '_controller' => 'App\\Controller\\GroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'app_group_delete', '_controller' => 'App\\Controller\\GroupController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        515 => [[['_route' => 'app_notification_show', '_controller' => 'App\\Controller\\NotificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_notification_edit', '_controller' => 'App\\Controller\\NotificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        536 => [[['_route' => 'app_notification_delete', '_controller' => 'App\\Controller\\NotificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'app_payment_delete', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        618 => [[['_route' => 'app_settlement_show', '_controller' => 'App\\Controller\\SettlementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => 'app_settlement_edit', '_controller' => 'App\\Controller\\SettlementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        639 => [[['_route' => 'app_settlement_delete', '_controller' => 'App\\Controller\\SettlementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        678 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        686 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
