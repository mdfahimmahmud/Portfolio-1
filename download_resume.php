<?php
// Path to the resume PDF file
$resumeFilePath = 'resume.pdf';

// Check if the file exists
if (file_exists($resumeFilePath)) {
    // Set headers for file download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($resumeFilePath) . '"');
    header('Content-Length: ' . filesize($resumeFilePath));

    // Read the file and output it to the browser
    readfile($resumeFilePath);
    exit;
} else {
    // If the file does not exist, display an error message
    echo 'Resume file not found.';
}
?>
