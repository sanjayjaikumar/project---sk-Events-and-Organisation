<?php
include('conif.php');
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    // Fetch the latest booking data
    $query = "SELECT * FROM booking ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($san, $query);

    if ($result === false) {
        die('Error: ' . mysqli_error($san));
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Store fetched data in session variables if needed
        $_SESSION['event'] = $row['event'];
        $_SESSION['planes'] = $row['planes']; // Corrected 'planeses' to 'planes'
        $_SESSION['event_date'] = $row['event_date'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['number'] = $row['number'];
        $_SESSION['amount'] = $row['amount'];
    }

    require('./fpdf186/fpdf.php');

    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->AddPage();

    $pdf->Ln(20);

    $pdf->SetTextColor(0, 0, 255);
    $pdf->SetFont('Arial', 'B', 25);
    $pdf->Cell(0, 10, 'SK Events & Entertainments', 0, 1, 'C');

    $pdf->Ln(5); // Space between the title and the invoice text
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Arial', 'B', 20);
    $pdf->Cell(0, 10, 'Invoice', 0, 1, 'C');

    $pdf->Ln(20); // Line break before customer details

    $pdf->SetFont('Arial', '', 12);
    

    // Customer details
    $data = array(
        array('Customer Name:', $_SESSION['name']),
        array('Mobile NO:', $_SESSION['number']),
    );
    $pdf->Cell(0, 10, 'Date: ' . date('d-m-Y'), 10, 1);

    foreach ($data as $row) {
        $pdf->Cell(47, 10, $row[0], 0);
        $pdf->Cell(0, 10, $row[1], 0, 1);
    }

    $pdf->Ln(10);

    // Table header
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(47, 10, 'Event', 1);
    $pdf->Cell(47, 10, 'planes', 1); // Corrected 'planeses' to 'planes'
    $pdf->Cell(47, 10, 'Event Date', 1);
    $pdf->Cell(47, 10, 'Address', 1);
    $pdf->Ln();

    // Table content
    $pdf->SetFont('Arial', '', 12); // Set to normal font

    $events = [
        [$_SESSION['event'], $_SESSION['planes'], $_SESSION['event_date'], $_SESSION['address']],
    ];

    foreach ($events as $row) {
        foreach ($row as $column) {
            $pdf->Cell(47, 10, $column, 1);
        }
        $pdf->Ln();
    }

    $pdf->Ln(10);

    // Amount
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Total Amount: ' . $_SESSION['amount'], 0, 1, 'C'); // Added amount display

    // Output PDF
    $pdf->Output();

} else {
    echo "Please log in first to see this page.";
}
?>
