<?php
namespace routes;
class Router {

    function __construct()
    {
        require_once PATH_SITE.'/routes/routes.php';
    }

    private $routes = [];
    /**
     * Добавляет маршрут в список маршрутов.
     *
     * @param string $route URI маршрута (например, 'home' или 'products').
     * @param string $handler Обработчик маршрута (например, 'HomeController@index').
     */
    public function addRoute($route, $handler) {
        $this->routes[$route] = $handler;
    }

    /**
     * Обрабатывает текущий маршрут.
     *
     * @param string $route Текущий URI маршрута.
     */
    public function handle($route) {
        // Проверка, существует ли маршрут в списке
        if (isset($this->routes[$route])) {
            // Вызов обработчика для данного маршрута
            $handler = $this->routes[$route];
            $this->callHandler($handler);
        } else {
            // Обработка ситуации, когда маршрут не найден
            header("HTTP/1.0 404 Not Found");
            echo "Страница не найдена!";
        }
    }

    /**
     * Вызывает обработчик маршрута.
     *
     * @param string $handler Обработчик маршрута (например, 'HomeController@index').
     */
    private function callHandler($handler) {
        // Предполагаем, что обработчик представляет собой строку с именем контроллера и метода
        list($controller, $method) = explode('@', $handler);

        // Создание объекта контроллера
        $className="\\controllers\\{$controller}";
        $controllerObject = new $className;

        // Вызов метода контроллера
        $controllerObject->$method();



    }
}
