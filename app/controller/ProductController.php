<?php
/**
 * Created by PhpStorm.
 * User: Paulius
 * Date: 2017.12.06
 * Time: 19:51
 */

namespace app\controller;


use app\model\Product;

class ProductController
{
    public function create()
    {
        return file_get_contents('app\view\product\new.php');
    }
    public function store() : string
    {
        //(new Product())->create($_POST);

        //Product::create($_POST);

        $model = new Product();
        $model->create($_POST);

        //Redirecting to LIST
        header ('Location: ?view=product&action=list');

        return '';
    }

    public function list()
    {
        $model = new Product();
        $model->list();
    }

}