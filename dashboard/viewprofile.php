<?php
include ('includes/connection.php');
include ('includes/adminheader.php');
?>


<style>

@import url('https://fonts.googleapis.com/css?family=Covered+By+Your+Grace&display=swap');

.page-header {
    font-family:'Covered By Your Grace', cursive;
    text-shadow: 0 2px white, 0 3px #777;

}



h4 , p {
  color: #F26998;
  font-size: 20px;
  font-family:'Covered By Your Grace', cursive;
  letter-spacing: 2px;

}



</style>


<div id="wrapper">

        
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">

<?php 
if (isset($_GET['name'])) {
    $user = mysqli_real_escape_string($conn , $_GET['name']);
    $query = "SELECT * FROM users WHERE username= '$user' ";
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
    if (mysqli_num_rows($run_query) > 0 ) {
    while ($row = mysqli_fetch_array($run_query)) {
	$name = $row['name'];
	$email = $row['email'];
	$course = $row['course'];
	$role = $row['role'];
	$bio = $row['about'];
	$image = $row['image'];
    $joindate = $row['joindate'];
    $gender = $row['gender'];
}
}
else {
	$name = "N/A";
	$email = "N/A";
	$course = "N/A";
	$role = "N/A";
	$bio = "N/A";
	$image = "profile.jpeg";
    $gender = "N/A";
    $joindate = "N/A";
}

?>



<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="profilepics/<?php echo $image; ?>" size=300x500 alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                           <?php echo $name; ?></h4>
                        <p>
                            <font color= "#111110" > Department: </font> <?php echo $course; ?>
                            <br/>
                            <font color= "#111110" > Gender: </font> <?php echo $gender; ?>
                            <br/>
                            <font color="#111110">  Email: </font> <?php echo $email; ?>
                            <br />
                            <font color="#111110"> Join Date: </font> <?php echo $joindate; ?>
                            <br/>
                            <font color="#111110" > Bio: </font> <?php echo $bio; ?>
                            </p>
                            
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


             <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php } else {
    header("location:index.php");
    } ?>
