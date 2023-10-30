<?php
require_once(__DIR__ . '/vendor/tecnickcom/tcpdf/tcpdf.php');
require_once 'vendor/autoload.php';

// Replace these variables with your actual data
$customerName = "John Doe";
$date = date("Y-m-d");
$invoiceNumber = "12345";
$totalAmount = 100.00;

// Create a new PDF document
$pdf = new TCPDF();
$pdf->SetAutoPageBreak(TRUE, 15);

// Add a page
$pdf->AddPage();

// Set the font
$pdf->SetFont('helvetica', '', 12);

// Output the receipt content
$html = '<h1>Receipt</h1>';
$html .= "<p><strong>Customer Name:</strong> $customerName</p>";
$html .= "<p><strong>Date:</strong> $date</p>";
$html .= "<p><strong>Invoice Number:</strong> $invoiceNumber</p>";

$html .= '<table border="1">
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Item 1</td>
            <td>2</td>
            <td>$50.00</td>
            <td>$100.00</td>
        </tr>
    </table>';

$html .= "<p><strong>Total Amount:</strong> $" . number_format($totalAmount, 2) . "</p>";

$pdf->writeHTML($html, true, false, true, false, '');

// Set the file name and disposition (attachment to force download)
$filename = "receipt.pdf";
$pdf->Output($filename, 'D');

// Clean the output buffer to prevent any additional output
ob_end_clean();
