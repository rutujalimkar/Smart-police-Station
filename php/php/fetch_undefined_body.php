<?php

include('../db/db.php');
$sql = "SELECT * FROM unidentified_dead_bodies";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		?>
 <div class="grid-item"><img style="width: 90%;" src="../img/dead_body/<?=$row['photo']?>"></div>

		<?php
	}
}










?>