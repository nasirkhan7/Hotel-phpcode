<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include'boot_css.php'?>
    <title>Hotel</title>
</head>

<body>

    <?php include'navbar.php'?>
    <div class="container mt-3 shadow">
        <div class="row">
            <?php include'./config.php';
            $id = $_GET['id'];
            echo $id;
        //     $select = "SELECT * FROM hotel WHERE id = $id";
        //     $result = mysqli_query($connection, $select);
        //     if (mysqli_num_rows($result) > 0){
        //         while ($row = mysqli_fetch_assoc($result)) {
        //             echo"
        //             <div class='col-lg-6'>
        //             <img width='100%' height='300px' style='object-fit:cover' scr='./images/{$row['image']}'>
        //             </div>
        //             ";
        //     }
        // }
            ?>
        </div>
    </div>



    <?php include'boot_js.php'   ?>

</body>

</html>