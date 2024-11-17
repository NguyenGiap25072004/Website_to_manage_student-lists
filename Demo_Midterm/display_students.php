<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Students</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Class Members</h1>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Birthdate</th>
        </tr> 
        <?php
if (($file = fopen("students.csv", "r")) !== FALSE) {
    $students = [];
    fgetcsv($file); // Bỏ qua dòng tiêu đề

    while (($data = fgetcsv($file)) !== FALSE) {
        $students[] = $data;
    }
    fclose($file);

    // Sắp xếp mảng theo Student ID (giả sử Student ID ở cột 0)
    usort($students, function($a, $b) {
        return $a[0] - $b[0];
    });

    foreach ($students as $data) {
        echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td></tr>";
    }
}
?>
    </table>
    <button onclick="location.href='index.php'">Back</button>
</body>
</html>