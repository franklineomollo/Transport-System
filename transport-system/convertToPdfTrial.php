<?php
require 'pdfcrowd.php';
require 'ticket.php';

try
{   
    // create an API client instance
    $client = new Pdfcrowd("jaylo91", "ccc14154912dec3657f5e045e2f4047b");

    // convert a web page and store the generated PDF into a $pdf variable
     $pdf = $client->convertHtml("<head></head><body></body>");

    // set HTTP response headers
    header("Content-Type: application/pdf");
    header("Cache-Control: max-age=0");
    header("Accept-Ranges: none");
    header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

    // send the generated PDF 
    echo $pdf;
}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>
