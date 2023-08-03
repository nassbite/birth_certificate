<?php
  include_once 'conf/db.php';
?>

<?php
if (isset($_POST['submit'])){

 $nam = $_POST['name'];
 $plac = $_POST['place'];
 $anothe = $_POST['another_name'];
 $dat = $_POST['date'];
 $register_dat = $_POST['register_date'];
 $surnam = $_POST['surname'];
 $father_occupatio = $_POST['father_occupation'];
 $father_nationalit = $_POST['father_nationality'];
 $mother_maide = $_POST['mother_maiden'];
 $mother_nationalit = $_POST['mother_nationality'];
 $signature_offe = $_POST['signature'];
 $gande = $_POST['sex'];
 $cod = $_POST['code'];

 
 $stmt = $conn->prepare("INSERT INTO certficate (name, place, another, date, register_date, surname, father_occupation, father_nationality, mother_maiden, mother_nationality, signature_offer, gander, code)
 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
 $stmt->bind_param("sssssssssssss", $nam, $plac, $anothe, $dat, $register_dat, $father_occupatio, $surnam, $father_nationalit, $mother_maide, $mother_nationalit, $signature_offe, $gande, $cod);
 $stmt->execute();

 if(isset($_POST['submit'])) {
  session_destroy();
  header('Location:table.php');
}

//  $sql = "SELECT id, name, place, another, date, register_date, surname, father_occupation, father_nationality, mother_maiden, mother_nationality, signature_offer, gander, code FROM certficate";
//  $result = $conn->query($sql);
 
// if ($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()){
      
//        echo "<table>. <tr> id: " ."<td>" .$row["id"] ."</td>. <td> name: " . $row["name"]." .</td>. where born: " . $row["place"].  " name if any: " . $row["another"]." " .  " date of birth: " . $row["date"]." "  . " date register: " . $row["register_date"]." "  ." surname of father: " . $row["surname,"]." " . " father occupation: " .$row["father_occupation"]."  father nationality: " . $row["father_nationality"]." " ." mother and maiden of mother: " . $row["mother_maiden"]." " . " mother nationality: " .$row["mother_nationality"]." " . " signature: " .$row["signature_offer"]." "  . " gander: " . $row["gander"]." " ." code: " . $row["code"]. "</td>"."<tr> </table> . <br";
      
//   }

  

}



?>



