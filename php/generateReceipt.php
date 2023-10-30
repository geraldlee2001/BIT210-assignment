<?php
require_once('../vendor/tecnickcom/tcpdf/tcpdf.php');


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
?>


class PDF extends TCPDF {
function Header() {
// Add an image or any other header content if needed
}

function Footer() {
// Add a footer if needed
}
}

// Create a new PDF instance
$pdf = new PDF();
$pdf->AddPage();

// Replace these variables with your actual data
$customerName = "John Doe";
$date = date("Y-m-d");
$invoiceNumber = "12345";

// Define an array of items (item name, description, and quantity)
$items = [
["Item 1", "Description 1", 2],
["Item 2", "Description 2", 3],
["Item 3", "Description 3", 1],
];

// Initialize total amount
$totalAmount = 0;

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'Receipt', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Customer Name: ' . $customerName, 0, 1);
$pdf->Cell(0, 10, 'Date: ' . $date, 0, 1);
$pdf->Cell(0, 10, 'Invoice Number: ' . $invoiceNumber, 0, 1);
$pdf->Cell(0, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Item', 1);
$pdf->Cell(60, 10, 'Description', 1);
$pdf->Cell(30, 10, 'Quantity', 1);
$pdf->Cell(40, 10, 'Total', 1);
$pdf->SetFont('Arial', '', 12);

foreach ($items as $item) {
$itemName = $item[0];
$itemDescription = $item[1];
$itemQuantity = $item[2];
$itemTotal = $itemQuantity * 50.00; // Replace 50.00 with the actual item price

// Update the total amount
$totalAmount += $itemTotal;

$pdf->Cell(40, 10, $itemName, 1);
$pdf->Cell(60, 10, $itemDescription, 1);
$pdf->Cell(30, 10, $itemQuantity, 1);
$pdf->Cell(40, 10, '$' . number_format($itemTotal, 2), 1);
}

$pdf->Cell(0, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(170, 10, 'Total Amount: $' . number_format($totalAmount, 2), 1);

// Generate the PDF file and send it for download
$pdf->Output('receipt.pdf', 'D');