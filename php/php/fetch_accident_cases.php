<?php

include('../db/db.php');
$sql = "SELECT * FROM accident_cases";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		?>
 <div class="grid-item"><img style="width: 90%;" src="../img/accident/<?=$row['photo']?>"></div>

		<?php
	}
}










?>