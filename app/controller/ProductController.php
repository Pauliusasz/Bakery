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
        $model = new Product();

        print_r($_POST);

        return '';
    }

}