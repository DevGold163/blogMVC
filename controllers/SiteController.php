<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {

        $param = [
            'name'=>"Welcome TheCodeholic"
        ];
        return $this->render('home',$param);
    }


    public function handleContact(Request $request): string
    {
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";
        exit;
        return "Handling submitted data";
    }

    public function contact()
    {
        return $this->render('contact');
    }
}