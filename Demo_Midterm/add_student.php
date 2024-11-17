<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $studentId = $_POST["studentId"];
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $birthdate = $_POST["birthdate"];

    $data = [$studentId, $name, $sex, $birthdate];
    $file = fopen("students.csv", "a");

    fputcsv($file, $data);
    fclose($file);

    header("Location: index.php");
    exit();
}
?>
