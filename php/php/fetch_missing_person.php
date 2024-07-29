<?php

include('../db/db.php');
$sql = "SELECT * FROM missing_person";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		?>
 <div class="grid-item"><img style="width: 90%;height: 200px;" src="../img/missing/<?=$row['photo']?>"></div>

		<?php
	}
}










?>