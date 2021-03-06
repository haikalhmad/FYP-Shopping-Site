<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="#" rel="stylesheet">
    <title>Manager Home Page</title>
</head>
<body>
    <!--PHP to verify manager session is active or not-->
    <?php
        session_start();
        if(!isset($_SESSION['manager'])) {
            header("Location:index.php");
        }
    ?>

    <!--Product Table-->
    <div class="container pt-5">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <h2>Welcome, Manager</h2>
        </div>
        <div class="pb-5 d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="manager_panel.php" class="btn btn-secondary">Go back to main panel</a>
            <a href="manager.php?logout=true" class="btn btn-danger">Log Out</a>
        </div>
        
    <div style="clear:both"></div>
        <br>
        
        <div class="table-responsive">
            <table class="table">
                <tr><th colspan="5"><h3>Product Details</h3></th></tr>
                <tr>
                  <th width="10%">Customer Email</th>
                  <th width="10%">Customer Name</th>
                  <th width="15%">Payment Status</th>
                  <th width="15%">Date</th>
                  <th width="25%">Delivery Status</th>
                  <th width="25%">Action</th>
                </tr>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'kerepekdb');
        $query = 'SELECT * FROM payments ORDER BY id ASC';
        $result = mysqli_query($connect, $query);

        if($result) :
            if(mysqli_num_rows($result)>0) :
                while($payments = mysqli_fetch_assoc($result)) :
                    //print_r($payments);
                    $id = $payments['id'];
        ?>

                <tr>
                  <td><?php echo $payments['cust_email']; ?></td>
                  <td><?php echo $payments['cust_name']; ?></td>
                  <td><?php echo $payments['payment_status']; ?></td>
                  <td><?php echo $payments['date_time']; ?></td>
                  <td><?php echo $payments['delivery_status']; ?></td>
                  <td>
                    <div class="d-grid gap-2 d-md-flex">
                    <form action="manager_update_payment.php?updateid=<?php echo $id; ?>" method="post">
                        <button class="btn btn-success" type="submit" name="Update">Update</button>
                    </form>
                    <form action="manager_delete_payment.php?deleteid=<?php echo $id; ?>" method="post">
                        <button class="btn btn-danger" type="submit" name="Delete">Delete</button>
                    </form>
                    </div>
                  </td>
                </tr>

            <?php
                endwhile;
            endif;
        endif;
        ?>

        </table>
        </div>
    </div>

    <!--JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>