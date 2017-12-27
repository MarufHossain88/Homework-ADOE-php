<?php

$result=' ';

if(isset($_POST['btn'])){
    echo "<pre>";

    require_once "Demo.php";
    $demo= new Demo();

    $result = $demo-> AtoZ ($_POST);
}

?>


<form action="" method="post">
<table>

    <tr>
        <th>First number</th>
        <td>
            <input type="text" name="first_number" value="<?php echo $_POST['first_number'];?>">
        </td>
    </tr>

    <tr>
        <th>Second number</th>
        <td>
            <input type="text" name="second_number" value="<?php echo $_POST['second_number'];?>">
        </td>
    </tr>

    <tr>
        <th>Result</th>
        <td>
            <input type="text" name="result" value="<?php echo $result;?>">
        </td>
    </tr>

    <tr>
        <th></th>
        <td>
            <input type="submit" name="btn" value="A-Z">
            <input type="submit" name="btn" value="Z-A">
            <input type="submit" name="btn" value="Odd">
            <input type="submit" name="btn" value="Even">
        </td>
    </tr>

</table>
</form>