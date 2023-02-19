<?php
    include_once 'config/dbcon.php';
    $date_today = date("Y-m-d");
	$sql = "SELECT * FROM messenger WHERE date='$date_today' ";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	   $i= 1;
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "<td>";
            echo '<div class="btn-group">';
            echo '<i class="fa-solid fa-paper-plane"></i>';
            echo '</div>';
            echo "</td>";
            echo "</tr>";
          }
	}
?>