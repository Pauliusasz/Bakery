<?php

@include_once ('database.php');

$query = 'SELECT * FROM `bakery_products_history` ORDER BY `date`';
$productsHistory = db_query($query);

$query = 'SELECT * FROM `bakery_products`';
$products = db_query($query);

@include_once('view/data-table.php');