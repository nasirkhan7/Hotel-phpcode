
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include'boot_css.php'?>
    <title>Hotel</title>
</head>

<body>
    <?php include'navbar.php';
    if(isset($_SESSION['succes'])){
        echo" 
        <div class='flash text-light p-3 bg-dark positionfixed ' style='top:0;right:0'>
        {$_SESSION['message']}

        </div>
        ";
    }
    
    ?>
    <div class="container mt-2 shadow p-3">
        <div class="h1 display-1 text-center">
            Add A Hotel
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img width="100%" src="https://www.pchotels.com/asset/welcome-image/pcbhurban.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <form action="./add.php" method="POST" enctype="multipart/form-data ">
                    <label for="">Hotel Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Add a hotel... ">
                    <label for="">Hotel Location</label>
                    <input class="form-control" type="text" name="location" placeholder="Add a location... ">
                    <label for="">price</label>
                    <input class="form-control" type="number" name="price" placeholder="Add a price... ">
                    <label for="">Hotel Description</label>
                    <textarea placeholder="Description..." class="form-control" name="desc" id="" cols="30"
                        rows="5"></textarea>
                    <label for="">Rooms</label>
                    <input class="form-control" type="number" name="rooms" placeholder="Add rooms.. ">
                    <label for="">Image</label>
                    <input type="file" name="image" id="">
                    <button class="btn btn-dark my-3 w-100">
                        Add Hotel
                    </button>

                </form>
            </div>



        </div>
    </div>




    <?php include'boot_js.php';
    session_unset();
    ?>
    <script>
        let flash = document.querySelector('.flash');
        setTimeout(() => {
            flash.style.transform = 'translateX(100%)';
            flash.style.transition = 'all 0.6s';

        },2000)
    </script>
</body>

</html>