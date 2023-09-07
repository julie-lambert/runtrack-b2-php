<?php


function find_all_students() : array{

    $db = "mysql:host=localhost;dbname=lp_official";
$host = "root";
$password = "";

try {
    $bdd = new PDO($db, $host, $password);
    echo "connexion reussie";
} catch (PDOexception $e){
    die('Erreur :' . $e->getMessage());
}

    $request = $bdd -> prepare("SELECT * FROM student");
    $request -> execute();
    $student = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $student;
}

$students = find_all_students();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>id</th>
            <th>grade_id</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </tr>
        <?php foreach($students as $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['grade_id'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['fullname'] ?></td>
                <td><?= $value['birthdate'] ?></td>
                <td><?= $value['gender'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>