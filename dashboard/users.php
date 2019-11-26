                     
                     
                     
                     
                     
                     
                     
                     
                     
<?php include ('includes/connection.php'); 
include "includes/adminheader.php"; ?>


<?php if($_SESSION['role'] == 'ARM')  
{ 
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



</style>


	 <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">

                        
                        <h1 class="page-header">
                            All Users
                        </h1>



    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Course</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        
        <?php 
            
            $query = "SELECT * FROM users ORDER BY name ASC ";
            $select_users = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if (mysqli_num_rows($select_users) > 0 ) {
            while ($row = mysqli_fetch_array($select_users)) {
                $user_id = $row['id'];
                $username = $row['username'];
                $name = $row['name'];
                $user_email = $row['email'];
                $user_role = $row['role'];
                $user_course = $row['course'];
                echo "<tr>";
                echo "<td>$user_id</td>";
                echo "<td><a href='viewprofile.php?name=$username' target='_blank' style='color:#fff'> $username</a></td>";
                echo "<td>$name</td>";
                echo "<td>$user_email</td>";
                echo "<td>$user_role</td>";
                echo "<td>$user_course</td>";
                echo "<td><a onClick=\"javascript: return confirm('Are You Sure You Want Delete The User?')\" href='users.php?delete=$user_id' style='color:#fff'><i class='fa fa-times fa-lg'></i>delete</a></td>";
                echo "</tr>";
             }
        ?>

    </tbody>
 </table>

<?php 
}

    if (isset($_GET['delete'])) {
        $the_user_id = mysqli_real_escape_string($conn , $_GET['delete']);
        $query0 = "SELECT role FROM users WHERE id = '$the_user_id'";
        $result = mysqli_query($conn , $query0) or die(mysqli_error($conn));
        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_array($result);
            $id1 = $row['role'];
        }
        if ($id1 == 'ARM') {
            echo "<script>alert('admin cannot be deleted');</script>";
        }
        else {

        $query = "DELETE FROM users WHERE id = '$the_user_id'";

        $delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0 ) {
            echo "<script>alert('user deleted successfully');
            window.location.href= 'users.php';</script>";
        }
        else {
        	 echo "<script>alert('error');
            window.location.href= 'users.php';</script>";
        }
    }
}
    ?>

    <?php } else {
    	header("location: index.php");
    }
    ?>

    </div>
    </div>
    </div>
    </div>

    </div>
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>