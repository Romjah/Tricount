<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_calcul_index' => [['group'], ['_controller' => 'App\\Controller\\CalculController::index'], [], [['variable', '/', '[^/]++', 'group', true], ['text', '/calcul']], [], [], []],
    'app_calcul_new' => [[], ['_controller' => 'App\\Controller\\CalculController::new'], [], [['text', '/calcul/new']], [], [], []],
    'app_calcul_show' => [['id'], ['_controller' => 'App\\Controller\\CalculController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calcul']], [], [], []],
    'app_calcul_edit' => [['id'], ['_controller' => 'App\\Controller\\CalculController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calcul']], [], [], []],
    'app_calcul_delete' => [['id'], ['_controller' => 'App\\Controller\\CalculController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calcul']], [], [], []],
    'app_expense_attachment_index' => [[], ['_controller' => 'App\\Controller\\ExpenseAttachmentController::index'], [], [['text', '/expense/attachment/']], [], [], []],
    'app_expense_attachment_new' => [[], ['_controller' => 'App\\Controller\\ExpenseAttachmentController::new'], [], [['text', '/expense/attachment/new']], [], [], []],
    'app_expense_attachment_show' => [['id'], ['_controller' => 'App\\Controller\\ExpenseAttachmentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/attachment']], [], [], []],
    'app_expense_attachment_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpenseAttachmentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/expense/attachment']], [], [], []],
    'app_expense_attachment_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpenseAttachmentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/attachment']], [], [], []],
    'app_expense_category_index' => [[], ['_controller' => 'App\\Controller\\ExpenseCategoryController::index'], [], [['text', '/expense/category/']], [], [], []],
    'app_expense_category_new' => [[], ['_controller' => 'App\\Controller\\ExpenseCategoryController::new'], [], [['text', '/expense/category/new']], [], [], []],
    'app_expense_category_show' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/category']], [], [], []],
    'app_expense_category_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/expense/category']], [], [], []],
    'app_expense_category_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/category']], [], [], []],
    'app_expense_comment_index' => [[], ['_controller' => 'App\\Controller\\ExpenseCommentController::index'], [], [['text', '/expense/comment/']], [], [], []],
    'app_expense_comment_new' => [[], ['_controller' => 'App\\Controller\\ExpenseCommentController::new'], [], [['text', '/expense/comment/new']], [], [], []],
    'app_expense_comment_show' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCommentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/comment']], [], [], []],
    'app_expense_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/expense/comment']], [], [], []],
    'app_expense_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpenseCommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/comment']], [], [], []],
    'app_expense_index' => [[], ['_controller' => 'App\\Controller\\ExpenseController::index'], [], [['text', '/expense/']], [], [], []],
    'app_expense_new' => [[], ['_controller' => 'App\\Controller\\ExpenseController::new'], [], [['text', '/expense/new']], [], [], []],
    'app_expense_show' => [['id'], ['_controller' => 'App\\Controller\\ExpenseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense']], [], [], []],
    'app_expense_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpenseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/expense']], [], [], []],
    'app_expense_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpenseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense']], [], [], []],
    'app_expense_participant_index' => [[], ['_controller' => 'App\\Controller\\ExpenseParticipantController::index'], [], [['text', '/expense/participant/']], [], [], []],
    'app_expense_participant_new' => [[], ['_controller' => 'App\\Controller\\ExpenseParticipantController::new'], [], [['text', '/expense/participant/new']], [], [], []],
    'app_expense_participant_show' => [['id'], ['_controller' => 'App\\Controller\\ExpenseParticipantController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/participant']], [], [], []],
    'app_expense_participant_edit' => [['id'], ['_controller' => 'App\\Controller\\ExpenseParticipantController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/expense/participant']], [], [], []],
    'app_expense_participant_delete' => [['id'], ['_controller' => 'App\\Controller\\ExpenseParticipantController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/expense/participant']], [], [], []],
    'app_group_index' => [[], ['_controller' => 'App\\Controller\\GroupController::index'], [], [['text', '/group/']], [], [], []],
    'app_group_new' => [[], ['_controller' => 'App\\Controller\\GroupController::new'], [], [['text', '/group/new']], [], [], []],
    'app_group_show' => [['id'], ['_controller' => 'App\\Controller\\GroupController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], [], []],
    'app_group_edit' => [['id'], ['_controller' => 'App\\Controller\\GroupController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], [], []],
    'app_group_delete' => [['id'], ['_controller' => 'App\\Controller\\GroupController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/group']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_user_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/user/login']], [], [], []],
    'app_notification_index' => [[], ['_controller' => 'App\\Controller\\NotificationController::index'], [], [['text', '/notification/']], [], [], []],
    'app_notification_new' => [[], ['_controller' => 'App\\Controller\\NotificationController::new'], [], [['text', '/notification/new']], [], [], []],
    'app_notification_show' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_notification_edit' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_notification_delete' => [['id'], ['_controller' => 'App\\Controller\\NotificationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/notification']], [], [], []],
    'app_payment_index' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment/']], [], [], []],
    'app_payment_new' => [[], ['_controller' => 'App\\Controller\\PaymentController::new'], [], [['text', '/payment/new']], [], [], []],
    'app_payment_show' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], [], []],
    'app_payment_edit' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], [], []],
    'app_payment_delete' => [['id'], ['_controller' => 'App\\Controller\\PaymentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/payment']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\RegisterController::new'], [], [['text', '/user/new']], [], [], []],
    'app_settlement_index' => [[], ['_controller' => 'App\\Controller\\SettlementController::index'], [], [['text', '/settlement/']], [], [], []],
    'app_settlement_new' => [[], ['_controller' => 'App\\Controller\\SettlementController::new'], [], [['text', '/settlement/new']], [], [], []],
    'app_settlement_show' => [['id'], ['_controller' => 'App\\Controller\\SettlementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/settlement']], [], [], []],
    'app_settlement_edit' => [['id'], ['_controller' => 'App\\Controller\\SettlementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/settlement']], [], [], []],
    'app_settlement_delete' => [['id'], ['_controller' => 'App\\Controller\\SettlementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/settlement']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], [], []],
    'app_user_group' => [[], ['_controller' => 'App\\Controller\\UserController::groupUsers'], [], [['text', '/user/']], [], [], []],
    'app_user_account' => [[], ['_controller' => 'App\\Controller\\UserController::account'], [], [['text', '/user/account']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
];
