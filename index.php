<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>

<?php include 'navbar.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A-R-M</title>

    <!-- Bootstrap css File-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Font- Awesome-->
    <link rel="stylesheet" href="./css/all.min.css">

    <!-- Custom css File-->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
     
    <!-- Start Header Area-->

    <!-- End Header Area-->

    <!-- Start of Main Area-->
    <main class="site-main">
            <section class="site-banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 site-title">
                              <h1 class="text-uppercase">Place For :</h1>
                                <h1 class="text-uppercase typing"></h1>
                                <div class="  site-buttons">
                                    <div class="d-flex flex-row flex-wrap">
                                        <button type="button" class="btn button text-uppercase"><a href=login.php><font color="black">For Dashboard</font></a></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 banner-image">
                                <img src="./img/header.jpg" alt="banner-img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </section>

    </main>

    <!-- End of Main Area-->


    <!-- Jquery File-->
    <script src="./js/jquery.3.4.1.js"></script>


    <!-- Bootstrap js File-->
    <script src="./js/bootstrap.min.js"></script>

    <script src="./js/script.js"></script>
</body>
</html>
<?php include 'includes/footer.php';?>


