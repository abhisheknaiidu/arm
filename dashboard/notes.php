
<?php include 'includes/connection.php'; ?>

<?php include 'includes/adminheader.php';
?>
<?php 
if (isset($_SESSION['role']) && $_SESSION['role'] == 'ARM') {

header("location: index.php");
}
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Covered+By+Your+Grace&display=swap');

.page-header {
    font-family:'Covered By Your Grace', cursive;
    text-shadow: 0 2px white, 0 3px #777;
    font-size: 30px;

}

thead  {
  background: #360736;
  color: #fff;
  font-size: 20px;
  text-transform: uppercase;
  font-family:'Covered By Your Grace', cursive;
  letter-spacing: 2px;
}

td {
  background: #FF6F91;
  color: #111110;
  font-size: 19px;
  font-family:'Covered By Your Grace', cursive;
  letter-spacing: 2px;
}

.btn {
    background:#fff;
}



</style>

    <div id="wrapper">
<?php ?>
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <div class="col-xs-4">
            <a href="uploadnote.php" class="btn btn-primary"><font color="#111110">New DOCUMENT</a>
            </div>
                        MY DOCUMENTS
                        </h1>
                         
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Type </th>
                        <th>Uploaded on</th>
                        <th>Status</th>
                        <th>View</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $currentuser = $_SESSION['username'];

$query = "SELECT * FROM uploads WHERE file_uploader= '$currentuser' ORDER BY file_uploaded_on DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file_date = $row['file_uploaded_on'];
    $file_status = $row['status'];
    $file = $row['file'];

    echo "<tr>";
    echo "<td>$file_name</td>";
    echo "<td>$file_description</td>";
    echo "<td>$file_type</td>";
    echo "<td>$file_date</td>";
    echo "<td>$file_status</td>";
    echo "<td><a href='allfiles/$file' target='_blank' style='color:#fff'>View </a></td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$file_id' style='color:#fff'><i class='fa fa-times' ></i>Delete</a></td>";

    echo "</tr>";

}
}
else {
    echo "<script>alert('No Documents YET, Start uploading now');
    window.location.href= 'uploadnote.php';</script>";
}
?>


                </tbody>
            </table>
</form>
</div>
</div>
</div>
 <?php
 
    if (isset($_GET['del'])) {
        $note_del = mysqli_real_escape_string($conn, $_GET['del']);
        $file_uploader = $_SESSION['username'];
        $del_query = "DELETE FROM uploads WHERE file_id='$note_del' AND file_uploader = '$file_uploader' ";
        $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Document Deleted Successfully');
            window.location.href='notes.php';</script>";
        }
        else {
         echo "<script>alert('error occured.try again!');</script>";   
        }
        }
   ?>    


 <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html

