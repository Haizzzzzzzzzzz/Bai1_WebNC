
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <label for="">a: </label>
        <input type="text" id="a" name="a" value="">
        <label for="">b: </label>
        <input type="text" id="b" name="b" value="">
        <input type="submit" name = "button" value = "Giai PT">
        <?php
    if(isset($_POST['button']))
    {
        $a = $_POST['a'];
        echo '<br/>';
        $b = $_POST['b'];
        if($a==""){
                echo "a khong duoc rong";
                 }
                    else if($b==""){
                        echo "b khong duoc rong";
                    }
                    else if($a == 0){
                        if($b==0){
                            echo "phuong trinh vo so nghiem";
                        }
                        else{
                            echo "Phuong trinh vo nghiem";
                        }
                    }
                    else{
                        echo (-$b)/($a);
                    }
}
    
    ?>
    </form>
</body>
</html>