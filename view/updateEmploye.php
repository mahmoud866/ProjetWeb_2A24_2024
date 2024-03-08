<?php
include '../Controller/EmployeC.php';

$employeC = new EmployeC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeC->updateEmploye(
        $_POST['id'],
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['email'],
        $_POST['dob']
    );
    header('Location:listEmploye.php');
}

$employeeId = $_GET['id'];
$employee = $employeC->getEmploye($employeeId); // Assuming you have a method to get employee details by ID

?>

<html>
<head></head>
<body>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $employeeId; ?>"> <!-- Hidden input for employee ID -->
        <table width="50%">
            <tr>
                <td><label for="firstname">First Name:</label></td>
                <td><input type="text" id="firstname" name="firstname" value="<?php echo $employee['firstname']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name:</label></td>
                <td><input type="text" id="lastname" name="lastname" value="<?php echo $employee['lastname']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" value="<?php echo $employee['email']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="dob">Date of Birth:</label></td>
                <td><input type="date" id="dob" name="dob" value="<?php echo $employee['dob']; ?>" required></td>
            </tr>
        </table><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>