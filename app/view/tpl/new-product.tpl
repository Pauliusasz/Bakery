<div style="text-align: center">
<form method="POST" action="?view=product&action=create">

    <div>EAN :</div>
    <input type="number" name="ean"> <br>

    <div>Mato vienetas:</div>
    <select name="unit">

        <option value="KG">KG</option>
        <option value="PCS">VNT</option>

    </select> <br>

    <div>Pavadinimas:</div>
    <input type="text" name="name"> <br>

    <div>Svoris:</div>
    <input type="number" step="0.001" name="weight"> <br>

    <div>Savikaina:</div>
    <input type="number" step="0.01" name="prime_cost"> <br>

    <div>Pardavimo kaina:</div>
    <input type="number" step="0.01" name="sale_price"> <br>

    <br><input type="Submit" class= "btn btn-success" value="Išsaugoti duomenis">
</form>
</div>;
