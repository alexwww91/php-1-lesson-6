
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numberOne">
        <select name="operation" id="operation">
            <option value='sum'>+</option>
            <option value='minus'>-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="numberTwo">
        <input type="submit" name="submit" value="Посчитать">
    </form>
    <div><?php
    if ($_POST["submit"]) {
        $numOne = $_POST["numberOne"];
        $numTwo = $_POST["numberTwo"];
        $operation = $_POST["operation"];
    
        if (!$operation || (!$numOne && $numOne != '0') || (!$numTwo && $numTwo != '0')) {
            $error_result = 'Не все поля заполнены';
        } else { 
            if(!is_numeric($numOne) || !is_numeric($numTwo)) {
                $error_result = "Операнды должны быть числами";
            }
            else 
                switch($operation){
                case 'sum':
                    $result = $numOne + $numTwo;
                    break;
                case 'minus':
                    $result = $numOne - $numTwo; 
                    break;
                case 'multiply':
                    $result = $numOne * $numTwo;
                    break;
                case 'divide':
                    if( $numTwo == '0')
                    $error_result = "На ноль делить нельзя!"; 
                    else
                        $result = $numOne / $numTwo;
                        break;    
                }
        } 
    }

    if(isset($error_result)) {
        echo "Ошибка: $error_result";
     }    
    else {
        echo "Ответ: $result";
    }
    ?></div>
</body>
</html>