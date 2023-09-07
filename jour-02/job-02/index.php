<?php

function find_one_student(string $email): array
{

    $db = "mysql:host=localhost;dbname=lp_official";
    $host = "root";
    $password = "";

    try {
        $bdd = new PDO($db, $host, $password);
        //echo "connexion reussie";
    } catch (PDOexception $e) {
        die('Erreur :' . $e->getMessage());
    }

    $request = $bdd->prepare("SELECT * FROM student Where email = :email");
    $request->execute(["email" => $email]);
    $student = $request->fetchAll(PDO::FETCH_ASSOC);
    return $student;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>

    <form action="index.php" method="GET">
        <input type="text" name="input-email-student" placeholder="input-email-student">
        <button type="submit" name="submit">Envoyer</button>
    </form>

    <table>
        <tr>
            <th>id</th>
            <th>grade_id</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </tr>

        <?php if (isset($_GET['input-email-student'])) {
            $students = find_one_student($_GET['input-email-student']);
            foreach ($students as $value) : ?>

                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['grade_id'] ?></td>
                    <td><?= $value['email'] ?></td>
                    <td><?= $value['fullname'] ?></td>
                    <td><?= $value['birthdate'] ?></td>
                    <td><?= $value['gender'] ?></td>
                </tr>
        <?php endforeach;
        } ?>
    </table>

</body>

</html>