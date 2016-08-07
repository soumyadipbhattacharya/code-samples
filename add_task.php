<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imerit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
##########################################################

$sql = "SELECT id, job_name FROM job";

$result = $conn->query($sql);
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $forum[] = $row;
    }
  ?>
         Available Jobs: <select name="categories">
<?php         
     foreach ($forum as $value) {
  ?>
                    <option value=" <?php $value['id']; ?> ">
                       <?php echo $value['job_name']; ?>
                    </option>             
<?php
                            }  //end of foreach
      ?>
          </select>
<?php
$conn->close();
?> 