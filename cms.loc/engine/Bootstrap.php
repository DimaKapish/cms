<?php

require_once __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/Function.php';


use Engine\Cms;
use Engine\DI\DI; //import class DI

try{
    //Экземпляр класс DI
    $di = new DI();

    $services = require __DIR__.'/Config/service.php';

    //Инициализируем сервисы
    foreach ($services as $service) {
        $provider = new $service($di);
        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();

}catch( \ErrorException $e){
    echo $e->getMessage();
}