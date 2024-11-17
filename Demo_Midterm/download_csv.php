<?php
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=students.csv");

readfile("students.csv");
?>
