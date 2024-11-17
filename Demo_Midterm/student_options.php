<?php
// student_options.php

$filename = 'students.csv';

if (file_exists($filename)) {
    $file = fopen($filename, 'r');
    fgetcsv($file); // Bỏ qua dòng tiêu đề

    while (($data = fgetcsv($file)) !== FALSE) {
        echo '<option value="' . htmlspecialchars($data[0]) . '">' . htmlspecialchars($data[1]) . ' (' . htmlspecialchars($data[0]) . ')</option>';
    }

    fclose($file);
} else {
    echo '<option value="">No students available</option>';
}
?>
