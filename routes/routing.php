<?php


use Helper\Functions;
use Route\Route;
use Session\Session;
use Database\DB;

Route::get("/elo/{siema}", function($req) {
    echo $req->uri("siema");
//    $req->get("siema");
//    $req->post("siema");
});

Route::get("404", function() {
    echo "404";
});