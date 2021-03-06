<?php

namespace app;


use app\controller\ProductController;
use app\controller\ProductHistoryController;

class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET')
        {
            switch ($view)
            {
                case ('product');
                    if ($action == 'new')
                        (new ProductController())->create();
                    elseif ($action=='list')
                        (new ProductController())->list();


                    break;

                case ('product_history');
                    if ($action == 'new')
                        (new ProductHistoryController())->create();
                    elseif ($action=='list')
                        (new ProductHistoryController())->list();


                    break;

            }

        }
        elseif ($method == 'POST')
        {

            switch ($view)
            {
                case ('product');
                    if ($action == 'create')
                        (new ProductController())->store();
                    break;
                case ('product_history');
                    if ($action == 'create')
                        (new ProductHistoryController())->store();
                    break;
            }
        }

    }

    private function show (string $text)
    {
        echo $text;
    }
}