<?php

session_start();

$data = $_POST;

if (empty($data['chartNumber']) ||
    empty($data['firstName']) ||
    empty($data['lastName']) ||
    empty($data['birthdate']) ||
    empty($data['age']) ||
    empty($data['gender'])) {
    $_SESSION['messages'][] = 'Please fill all required fields!';
    header('Location: clinicalRegister.php');
    exit;
}

// Variables for connecting and uploading survey to database
$servername = "localhost";
$username = "tfellows";
$password = "Vb-_MIsgQ/hjfQ@H";
$dbname = "CEDIS_db";
$dsn = 'mysql:dbname='.$dbname.';host='.$servername.";";

$dtz = new DateTimeZone("America/Toronto");
$dt = new DateTime("now", $dtz);
$currentDateTime = $dt->format("Y-m-d") . " " . $dt->format("H:i:s");

try {
    $connection = new PDO($dsn, $username, $password);
} catch (PDOException $exception) {
    $_SESSION['messages'][] = 'Connection failed: ' . $exception->getMessage();
    header('Location: clinicalRegister.php');
    exit;
}

$statement = $connection->prepare(
    'INSERT INTO `demographicTable` (`chartNumber`, `firstName`, `middleName`, `lastNam>
if ($statement) {
    $result = $statement->execute([
        ':chartNumber' => $data['chartNumber'],
        ':firstName' => $data['firstName'],
        ':middleName' => $data['middleName'],
        ':lastName' => $data['lastName'],
        ':birthdate' => $data['birthdate'],
        ':age' => $data['age'],
        ':gender' => $data['gender'],
        ':occupation' => $data['occupation'],
        ':maritalStatus' => $data['maritalStatus'],
        ':postalCode' => $data['postalCode'],
        ':provinceIssueHCN' => $data['provinceIssueHCN'],
        ':residenceType' => $data['residenceType'],
    ]);

    if ($result) {
        $_SESSION['messages'][] = 'Thank you for registering!';
        header('Location: clinicalInfo.php');
        exit;
    }
}
