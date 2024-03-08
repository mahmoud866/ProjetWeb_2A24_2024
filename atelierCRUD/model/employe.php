<?php
class Employe{
    private ?int $id=null;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $email;
    private ?DateTime $dob;

    public function __construct($id=null,$firstName,$lastName,$email,$dob)
    {
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->email=$email;
        $this->dob=$dob;
    }

    public function getid(){return $this->id;}
    public function getfirstName(){return $this->firstName;}
    public function getlastName(){return $this->lastName;}
    public function getemail(){return $this->email;}
    public function getdob(){return $this->dob;}

    public function setfirstName(string $val){$this->firstName=$val;}
    public function setlastName(string $val){$this->lastName=$val;}
    public function setemail(string $val){$this->email=$val;}
    public function setdob(DateTime $val){$this->dob=$val;}
}
?>