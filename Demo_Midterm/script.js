function validateForm() {
  const studentId = document.getElementById("studentId").value;
  if (!studentId.match(/^[0-9]+$/)) {
    alert("Student ID should contain only numbers.");
    return false;
  }
  return true;
}
