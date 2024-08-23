<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#$routes->get('/', 'Home::index');
$routes->get('/', 'UserController::login');

$routes->match(['get', 'post'], 'login', 'UserController::login', ["filter" => "noauth"]);
// Admin routes
$routes->group("alegria4", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Alegria4Controller::index");
});
// Editor routes
$routes->group("heliconia", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "HeliconiaController::index");
});

$routes->group("tucanes", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "TucanesController::index");
});

$routes->group("zorzal", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "ZorzalController::index");
});

$routes->group("hatochico", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "HatochicoController::index");
});

$routes->group("arboleda", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "ArboledaController::index");
});

$routes->group("caobo", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "CaoboController::index");
});

$routes->group("castano", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "CastanoController::index");
});

$routes->group("chaletlacabana", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "ChaletlacabanaController::index");
});

$routes->group("edenluz", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "EdenluzController::index");
});

$routes->group("esperanza3", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Esperanza3Controller::index");
});

$routes->group("lucerna", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "LucernaController::index");
});

$routes->group("plazuelas", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "PlazuelasController::index");
});

$routes->group("pratum", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "PratumController::index");
});

$routes->group("roma3", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Roma3Controller::index");
});

$routes->group("sansebastian", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "SansebastianController::index");
});

$routes->group("santabarbara", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "SantabarbaraController::index");
});

$routes->group("senderoslaurel", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "SenderoslaurelController::index");
});

$routes->group("verona", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "VeronaController::index");
});

$routes->group("zapan1", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Zapan1Controller::index");
});

$routes->group("villahato", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "VillahatoController::index");
});

$routes->group("cedrosuba", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "CedrosubaController::index");
});

$routes->group("encanto4", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "Encanto4Controller::index");
});

$routes->group("huerto", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "HuertoController::index");
});

$routes->group("huertas", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "HuertasController::index");
});
$routes->group("torresdelasamericas", ["filter" => "auth"], function ($routes) {
    $routes->get("/", "TorresdelasamericasController::index");
});

$routes->get('logout', 'UserController::logout');