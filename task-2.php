
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
        <input type="text" name="numberTwo">
        <input type="submit" name="sum" value="Сложить">
        <input type="submit" name="minus" value="Вычесть">
        <input type="submit" name="multiply" value="Умножить">
        <input type="submit" name="divide" value="Разделить">
    </form>
    <div><?php
    if ($_POST["sum"] || $_POST["minus"] || $_POST["multiply"] || $_POST["divide"]) {
        $numOne = $_POST["numberOne"];
        $numTwo = $_POST["numberTwo"];
        if ($_POST["sum"]) {$operation = "sum";} elseif ($_POST["minus"]) {$operation = "minus";} elseif ($_POST["multiply"]) {$operation = "multiply";} elseif ($_POST["divide"]) {$operation = "divide";}; 
    
        if ((!$numOne && $numOne != '0') || (!$numTwo && $numTwo != '0')) {
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