<?php
	require 'vendor/autoload.php';
	// reference the Dompdf namespace
	use Dompdf\Dompdf;

	// instantiate and use the dompdf class
	$dompdf = new Dompdf();



	ob_start();
	    include dirname(__FILE__).'/index.php';
	    $content = ob_get_clean();


	$dompdf->loadHtml($content);

	// (Optional) Setup the paper size and orientation
	$dompdf->setPaper('letter', 'portrait');
	$dompdf->set_option('isHtml5ParserEnabled', true);

	// Render the HTML as PDF
	$dompdf->render();

	// Output the generated PDF to Browser
	$dompdf->stream();


	/*require __DIR__.'/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	use Spipu\Html2Pdf\Exception\Html2PdfException;
	use Spipu\Html2Pdf\Exception\ExceptionFormatter;
	try {
	    ob_start();
	    include dirname(__FILE__).'/index2.php';
	    $content = ob_get_clean();

	    $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', 0);
	    $html2pdf->writeHTML($content);
	    // $html2pdf->createIndex('Sommaire', 25, 12, false, true, 1);
	    $html2pdf->output('bookmark.pdf');
	} catch (Html2PdfException $e) {
	    $html2pdf->clean();

	    $formatter = new ExceptionFormatter($e);
	    echo $formatter->getHtmlMessage();
	}*/
?>