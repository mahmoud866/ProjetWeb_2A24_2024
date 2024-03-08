<?php
include '../config.php';
include '../model/employe.php';
class EmployeC
{
    public function listEmploye()
    {
        $sql="SELECT * FROM employe";
        $db= config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

    }
    function deleteEmploye($id)
    {
        $sql="DELETE FROM employe WHERE id = :id";
        $db= config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id', $id);

        try{
            $req->execute();
        }catch(Exception $e){
            die('Erroe:' . $e->getMessage());
        }
    }
    /*function addEmploye($employe)
    {
    $sql="INSERT INTO employe VALUES (NULL, :firstname, :lastname, :email, :dob)";
    $db = config::getConnexion5();
    try{
        print_r($emplpoye->getdob()->format('Y-m-d'));
        $query = $db->perpare($sql);
        $query->execute
        (
            [
            'firstname'->$employe->getfirstName(),
            'lastname'->$employe->getlastName(),
            'email'->$employe->getemail(),
            'dob'->$employe->getdob()->format('Y/m/d')
            ]
        );
    } catch(Exception $e){
        echo 'Error: '.$e->getMessage();
    }
    }*/
    /*public function addEmploye($employe)
    {
        $sql = "INSERT INTO employe VALUES (NULL, :firstname, :lastname, :email, :dob)";
        $db = config::getConnexion();

        try {
            $query = $db->prepare($sql);

            $query->execute([
                'firstname' => $employe->getfirstName(),
                'lastname' => $employe->getlastName(),
                'email' => $employe->getemail(),
                'dob' => $employe->getdob()->format('Y-m-d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}*/
public function addEmploye($firstname, $lastname, $email, $dob)
{
    $sql = "INSERT INTO employe (id,lastname, firstname,email, dob) VALUES (NULL, :lastname, :firstname, :email, :dob)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'dob' => $dob
        ]);
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function updateEmploye($id, $firstname, $lastname, $email, $dob)
{
    $sql = "UPDATE employe SET FirstName=:firstname, LastName=:lastname, email=:email, dob=:dob WHERE id=:id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindParam(':id', $id);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':email', $email);
        $query->bindParam(':dob', $dob);
        $query->execute();
        echo $query->rowCount() . " records updated successfully";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

public function getEmploye($id)
{
    $sql = "SELECT * FROM employe WHERE id = :id";
    $db = config::getConnexion();
    $query = $db->prepare($sql);
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}
}
?>