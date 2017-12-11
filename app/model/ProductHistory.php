<?php

namespace app\model;


use app\model\interfaces\Destroyable;
use app\model\interfaces\Manageable;

class ProductHistory extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_products_history';
    public function create(array $data)
    {
        print_r($data);

        $this->generateInsertQuery('Bakery_products',$data,true);
        $query =$this->generateInsertQuery('Bakery_products',$data,true);

        print_r($this->query($query));
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

}