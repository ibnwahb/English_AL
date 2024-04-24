<?php
if(isset($_GET['file'])) {
    $file = $_GET['file'];

    // Path to the PDF files directory
    $filepath = 'pdfs/' . $file;

    // Check if the file exists
    if(file_exists($filepath)) {
        // Set headers for PDF download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        // Read the file
        readfile($filepath);
        exit;
    } else {
        // If the file doesn't exist, display an error message
        echo 'File not found.';
    }
}
?>
