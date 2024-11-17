<?php
session_start(); // Bắt đầu session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deleteId = $_POST['deleteStudentId'];
    $filename = 'students.csv';
    $tempFile = 'temp_students.csv';

    if (file_exists($filename)) {
        $file = fopen($filename, 'r');
        $temp = fopen($tempFile, 'w');

        // Bỏ qua dòng tiêu đề
        fputcsv($temp, ['Student ID', 'Name', 'Sex', 'Birthdate']);
        $deleted = false;

        while (($data = fgetcsv($file)) !== FALSE) {
            if ($data[0] != $deleteId) {
                fputcsv($temp, $data);
            } else {
                $deleted = true; // Đánh dấu là đã xóa
            }
        }

        fclose($file);
        fclose($temp);

        // Nếu đã xóa, thay thế file gốc bằng file tạm
        if ($deleted) {
            rename($tempFile, $filename);
            $_SESSION['deleteMessage'] = "Student with ID $deleteId has been deleted successfully.";
        } else {
            unlink($tempFile); // Xóa file tạm nếu không có gì bị xóa
            $_SESSION['deleteMessage'] = "Student not found.";
        }
    } else {
        $_SESSION['deleteMessage'] = "File not found.";
    }

    header("Location: index.php"); // Chuyển hướng lại trang index.php
    exit();
}
?>
