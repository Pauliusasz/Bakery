<?php
/**
 * Created by PhpStorm.
 * User: Paulius
 * Date: 2017.12.09
 * Time: 13:32
 */

namespace app\controller;


use app\model\ProductHistory;

class ProductHistoryController
{
    public function create()
    {
        return file_get_contents('app\view\productHistory\new.php');
    }

    public function store(): string
    {
        $model = new ProductHistory();
        $model->create($_POST);

        //Redirecting to LIST
        header('Location: ?view=product_history&action=list');

        return '';
    }

    public function list()
    {
        $model = new ProductHistory();
        $result = ($model->list());
        $header = $data = '';

        $days = $rows = [];
        $keys = '';

        foreach ($result as $value) {
            if (!isset($result[$value['id']])) print_r($result);
            die();
            {
                $rows[$value['id']] = [];
                $rows[$value['id']] = '<td>' . $value . '</td>';
            }
        }

        foreach ($result as $value) {
            if (!isset($days[$value['date']])) {
                $days[$value['date']] = $value['date'];
                $keys .= "<th>VL</th> <th>PG</th> <th>PR</th> <th>SG</th> <th>GL</th>";


                foreach ($rows as &$product) {
                    $product[$value['date']] = "<td></td> <td></td> <td></td> <td></td> <td></td>";
                }
            }


            $rows[$value['product_id']][$value['date']] = '<td>' . $value['initial'] . '</td>' . '<td>' . $value['produced'] . '</td>' . '<td>' . $value['sold'] . '</td>' . '<td>' . $value['damaged'] . '</td>' . '<td>' . $value['closed'] . '</td>';
        }
    }
}
