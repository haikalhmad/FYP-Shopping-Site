<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="style.css" rel="stylesheet">
    <title>Checkout</title>
</head>
<body>
    <div class="container" style="color: white;">
    <?php

    $servername="localhost";
    $username="root";
    $password="";

    $dbase="kerepekdb";

    $conn=new mysqli($servername, $username, $password, $dbase);

    if ($conn->connect_error) {
        die("Connection failed: " .$conn->connect_error);
    } else
        $sql="SELECT * FROM product";
        $result=$conn->query($sql);

        if($result->num_rows>0):
            while($row=$result->fetch_assoc()): //print_r($row);
            ?>
            
            <div class="col-sm-4 col-md-3">
                <form method="post" action="cart.php?action=add&id=<?php echo $row['id']; ?>">
                    <div class="product">
                        <img src="<?php echo $row['image']; ?>" class="img-responsive" />
                    </div>
                </form>
            </div>

            <?php
            endwhile;
        endif;
    ?>
    </div>

    <!--JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>