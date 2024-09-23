<?php
    $result = 0;
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $angka1 = $_POST['angka1'];
        $operation = $_POST['operation'];
        $angka2 = $_POST['angka2'];
    }
    // echo $angka1, $angka2, $operation;
    // $formula = $angka1.$operation.$angka2;
    // echo $formula;
    // $result = eval("return $formula;");

    if($operation === '+'){
        $result = (int)$angka1 + (int)$angka2;
    }else if($operation === "+"){
        $result =(int)$angka1 - (int)$angka2;
    }else if($operation === '*'){
        $result = (int)$angka1 * (int)$angka2;
    }else if($operation === '/'){
        $result = $angka1 / $angka2;
    }

    echo $result;
?>


<html>
    <!-- supported op - + * / -->

    <body>
        <form method="post">
            <input type="text"
            name="angka1"/>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text"
            name="angka2">
            =
            <input type="text"
            id="result"
            value="<?= $result?>
            ">
            <input type="submit"
            name="submit">
        </form>
    </body>

</html>