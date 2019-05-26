<?php

namespace Cms\Controller;

class HomeController extends CmsController
{

    public function index(){

        $data = ['name' => 'Dimas'];
        $this->view->render('index', $data);
    }

    public function news(){
        echo 'News Page';
    }
    public function news_id($id){
        echo 'News Page ' . $id;
    }
}