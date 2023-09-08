<?php
    function insert_student($gradeId, $email, $fullname, $birthdate, $gender){

        $db = "mysql:host=localhost;dbname=lp_official";
        $host = "root";
        $password = "";
    
        try {
            $bdd = new PDO($db, $host, $password);
            //echo "connexion reussie";
        } catch (PDOexception $e) {
            die('Erreur :' . $e->getMessage());
        }

        $request = $bdd->prepare("INSERT INTO student(grade_id, email, fullname, birthdate, gender) VALUES (:grade_id, :email, :fullname, :birthdate, :gender)");
        $request ->bindParam(':grade_id', $gradeId);
        $request ->bindParam(':email', $email);
        $request ->bindParam(':fullname', $fulllname);
        $request ->bindParam(':birthdate', $birthdate);
        $request ->bindParam(':gender', $gender);
        $request->execute();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="grade_id">
        <input type="mail" name="email">
        <input type="text" name="fullname">
        <input type="date" name="birthdate">
        <select name="gender">
            <option value="">please choose an option</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
    </form>
</body>
</html>