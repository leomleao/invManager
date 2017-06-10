<?php
/*
 * Define custom routes. File gets included in the router service definition.
 */

use Phalcon\Mvc\Router;

// Create the router
$router = new Router();



/*
-- -----------------------------------------------------
-- Routes for users
-- -----------------------------------------------------
*/

$router->addPost('/users', [
    'controller' => 'users',
    'action'     => 'create'
]);

$router->addGet('/users/{id:[0-9]+}', [
    'controller' => 'users',
    'action'     => 'read'
]);

$router->addPut('/users/{id:[0-9]+}', [
    'controller' => 'users',
    'action' => 'update'
]);

$router->addDelete('/users/{id:[0-9]+}', [
    'controller' => 'users',
    'action' => 'delete'
]);


/*
-- -----------------------------------------------------
-- Routes for items
-- -----------------------------------------------------
*/

$router->addPost('/items', [
    'controller' => 'items',
    'action' => 'create'
]);

$router->addGet('/items/{id:[0-9]+}', [
    'controller' => 'items',
    'action' => 'read'
]);

$router->addPut('/items/{id:[0-9]+}', [
    'controller' => 'items',
    'action' => 'update'
]);

$router->addDelete('/items/{id:[0-9]+}', [
    'controller' => 'items',
    'action' => 'delete'
]);




/*
-- -----------------------------------------------------
-- Routes for allocations
-- -----------------------------------------------------
*/


$router->addPost('/allocations', [
    'controller' => 'allocations',
    'action' => 'create'
]);

$router->addGet('/allocations/{id:[0-9]+}', [
    'controller' => 'allocations',
    'action' => 'read'
]);

$router->addPut('/allocations/{id:[0-9]+}', [
    'controller' => 'allocations',
    'action' => 'update'
]);

$router->addDelete('/allocations/{id:[0-9]+}', [
    'controller' => 'allocations',
    'action' => 'delete'
]);


/*
-- -----------------------------------------------------
-- Routes for itemtypes
-- -----------------------------------------------------
*/


$router->addPost('/itemtypes', [
    'controller' => 'itemtypes',
    'action' => 'create'
]);

$router->addGet('/itemtypes/{id:[0-9]+}', [
    'controller' => 'itemtypes',
    'action' => 'read'
]);

$router->addPut('/itemtypes/{id:[0-9]+}', [
    'controller' => 'itemtypes',
    'action' => 'update'
]);

$router->addDelete('/itemtypes/{id:[0-9]+}', [
    'controller' => 'itemtypes',
    'action' => 'delete'
]);



return $router;