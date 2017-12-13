<?php

namespace app\model;


use app\model\interfaces\Destroyable;
use app\model\interfaces\Manageable;

class ProductHistory extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_products_history';
    public function create(array $data)
    {
        $query=$this->generateInsertQuery( $data,true);
        $this->query($query);

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