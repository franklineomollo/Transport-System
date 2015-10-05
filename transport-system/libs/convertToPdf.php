<?php
		require 'pdfcrowd.php';

		$client = new Pdfcrowd("jillo", "25b0a534c4d1aa2363ad31da9313c0b4");
		$pdf = $client->convertURI('http://google.com/');
	?>