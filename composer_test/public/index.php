<?php
require "../vendor/autoload.php";
    
$app = new \Slim\Slim(array(
        "debug" => true,
            "templates.path" => "../templates"
        ));

$app->get("/", function () use ($app) {
        $app->render("index.php");
})->name("home");

$app->post("/hello/", function () use ($app) {
        $req = $app->request();
            $name = $req->post("name");
            $app->render("hello.php", array("name" => $name));
})->name("hello");

$app->run();
