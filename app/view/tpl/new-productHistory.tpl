<div style="text-align: center">
    <form method="POST" action="?view=product_history&action=create">


        <div>Data 				 :</div> <input type="date" name="date"> <br>

        <div>Prekė :</div>
        <select name = "product_id">
<!--            --><?php
//
//            $query = 'SELECT `id`, `name` FROM `bakery_products` WHERE `deleted_at` IS NULL ORDER BY `name` ASC ';
//            $result = db_query($query);
//            print_r($result);
//            foreach ($result as $value)
//            {
//                echo '<option value = '.$value['id'].'>'.$value['name'].'</option>';
//            }
//
//
//print_r($value);
//            ?>

            <option value="1ee1301e-d393-11e7-ba81-448a5bf30711">Aguoninė</option>
            <option value="e39f421e-d391-11e7-ba81-448a5bf30711">Varškės</option>


        </select>

        <div>Vakarykštis likutis :</div> <input type="number" name="initial"> <br>
        <div>Pagaminta           :</div> <input type="number" name="produced"> <br>
        <div>Parduota            :</div> <input type="number" name="sold"> <br>
        <div>Sugadinta           :</div> <input type="number" name="damaged"> <br>
        <div>Galutinis likutis   :</div> <input type="number" name="closed"> <br>

        <input type="Submit" value="Išsaugoti duomenis">
    </form>
</div>;
