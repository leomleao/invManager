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
    'action' => 'create'
]);

$router->addGet('/users/{id}', [
    'controller' => 'users',
    'action' => 'read'
]);

$router->addPut('/users/{id}', [
    'controller' => 'users',
    'action' => 'update'
]);

$router->addDelete('/users/{id}', [
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

$router->addGet('/items/{id}', [
    'controller' => 'items',
    'action' => 'read'
]);

$router->addPut('/items/{id}', [
    'controller' => 'items',
    'action' => 'update'
]);

$router->addDelete('/items/{id}', [
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

$router->addGet('/allocations/{id}', [
    'controller' => 'allocations',
    'action' => 'read'
]);

$router->addPut('/allocations/{id}', [
    'controller' => 'allocations',
    'action' => 'update'
]);

$router->addDelete('/allocations/{id}', [
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

$router->addGet('/itemtypes/{id}', [
    'controller' => 'itemtypes',
    'action' => 'read'
]);

$router->addPut('/itemtypes/{id}', [
    'controller' => 'itemtypes',
    'action' => 'update'
]);

$router->addDelete('/itemtypes/{id}', [
    'controller' => 'itemtypes',
    'action' => 'delete'
]);



return $router;