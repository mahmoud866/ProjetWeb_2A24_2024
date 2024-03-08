<?php
include '../controller/employeC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp1 = new employeC();
    $emp1->addEmploye(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['Email'],
        $_POST['Dob']
    );
    header('Location:listEmploye.php');
}
?>

<html>
<body>
    <form method="POST">
        <table width="50%">
            <tr>
                <td><label for="firstname">First Name:</label></td>
                <td><input type="text" id="firstname" name="firstname" required minlength="2" maxlength="20" size="10" required></td>
            </tr>
            <tr>
                <td><label for="lastname">Last Name:</label></td>
                <td><input type="text" id="lastname" name="lastname" required minlength="2" maxlength="20" size="10" required></td>
            </tr>
            <tr>
                <td><label for="Email">Email:</label></td>
                <td><input type="email" id="Email" name="Email" required minlength="2" maxlength="20" size="10"></td>
            </tr>
            <tr>
                <td><label for="Dob">Date de naissance:</label></td>
                <td><input type="date" id="Dob" name="Dob" required minlength="2" maxlength="20" size="10"></td>
            </tr>
        </table><br>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>
