<?php

	if (!unlink('./'.$_GET['d'])) {
		echo "no se puedo borrar -> ".$_GET['d'];
	}


?>