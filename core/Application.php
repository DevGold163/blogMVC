<?php


namespace app\core;

class Application {

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;

    public static Application  $app;

    public Controller  $controller;

    public function getController(): Controller
    {
        return $this->controller;
    }

    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }

    public function __construct($rootPath)
    {
        self::$app=$this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request,$this->response);
    }

    public function run() {
        echo $this->router->resolve();
    }


}