<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\SyncBlue\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
	   ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],
    ]
];


\OC::$server->getNavigationManager()->add(function () {
    $urlGenerator = \OC::$server->getURLGenerator();
    return [
        'id' => 'syncblue',
        'order' => 10,
        'href' => $urlGenerator->linkToRoute('syncblue.page.index'),
        'icon' => $urlGenerator->imagePath('syncblue', 'sync-blue-logo.png'),
        'name' => \OC::$server->getL10N('syncblue')->t('sync.blue®'),
    ];
});