<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Classroom Management</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <img src="logo.png" alt="Logo" class="logo" />
    <div class="container">
      <h1>Classroom Management System</h1>

      <!-- Form to add a new student -->
      <form
        action="add_student.php"
        method="post"
        class="form-section"
        onsubmit="return validateForm()"
      >
        <h2>Add New Student</h2>
        <label for="studentId">Student ID:</label>
        <input type="text" id="studentId" name="studentId" required />

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" required />

        <button type="submit" class="button">Add Student</button>
      </form>

      <!-- Display and action buttons -->
      <div class="action-buttons">
        <button onclick="location.href='display_students.php'" class="button">
          Display Students
        </button>
        <button onclick="location.href='download_csv.php'" class="button">
          Download CSV
        </button>
      </div>

      <!-- Form to delete a student -->
      <form action="delete_student.php" method="post" class="form-section">
        <h2>Delete Student</h2>
        <label for="deleteStudentId">Select Student to Delete:</label>
        <select id="deleteStudentId" name="deleteStudentId">
          <?php include 'student_options.php'; ?>
        </select>
        <button type="submit" class="button delete-button">
          Delete Student
        </button>
      </form>
    </div>

    


    <script src="script.js"></script>
  </body>
</html>
