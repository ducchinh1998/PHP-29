<?php 
class Student {
    var $HoTen;
    var $GioiTinh;
    var $NgaySinh;
    var $QueQuan;

    function setName($name){
        $this->HoTen = $name;
    }

    function getName(){
        return $this->HoTen;
    }

    function setGender($gender){
        $this->GioiTinh = $gender;
    }

    function getGender(){
        return $this->GioiTinh;
    }

    function setBirthday($Birthday){
        $this->NgaySinh = $Birthday;
    }

    function getBirthday(){
        return $this->NgaySinh;
    }

    function setVillage($Village){
        $this->QueQuan = $Village;
    }

    function getVillage(){
       return $this->QueQuan ;
    }

}

$student = new Student();
$student->setName('Chính');
$student->setGender('Nam');
$student->setBirthday('05/10/1998');
$student->setVillage('Hải Dương');
echo $student->getName()."<br/>";
echo $student->getGender()."<br/>";
echo $student->getBirthday()."<br/>";
echo $student->getVillage()."<br/>";

?>