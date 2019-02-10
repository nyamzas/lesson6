<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Моя галерея </h1>
 
    </div>
<br>
    <div class="form">
        <form  action="" method="POST">
            <p>типа чат</p>
            <input name="name" type="text" placeholder="Ник"><br><br>
            <input name="text" type="text" placeholder = "Ваше сообщение"><br><br>
            <p><input type="submit" value="Отправить"></p>
            
        </form>
    </div>

    <?php
        

        require_once "connection.php";
        $query = <<<SQL
            INSERT INTO `mail`(`name`, `text`) VALUES ('$name','$text');
            SQL;
        $result = mysqli_query($link, $query);
        $array_result = array();
	    while($row = mysqli_fetch_assoc($result)) {
             $array_result[] = $row;
        }
        --Warning: mysqli_fetch_assoc() expects parameter 1 to be mysqli_result, bool given in C:\xampp\htdocs\lesson6.1\index.php on line 34
        -- Array ( ) 1
        
        print_r ($array_result) ;
        print_r(mysqli_error($link));
        print_r(mysqli_affected_rows($link));
    
        mysqli_close($link);
    ?>
</body>
</html>