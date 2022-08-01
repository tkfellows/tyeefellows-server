<!DOCTYPE html>
<html lang="en">
<style>
input[type=text], select {
  width: 50%;
  padding: 4px 10px;
  margin: 4px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
    display: flex;
  justify-content: end;
    align-items: end;

}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 4px 20px;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<head>
  <title>Patient Registration</title>
</head>
<body>
  <h1>Patient Registration Form</h1>
    <?php require_once 'messages.php';
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);
    ?>
    <form action= "uploadClinicalRegister.php" method="POST">
      Chart Number*: <input type="text" name="chartNumber" />
      First Name*: <input type="text" name="firstName" />
      Middle Name: <input type="text" name="middleName" />
      Last Name*: <input type="text" name="lastName" />
      Birthdate*: <input type="text" name="birthdate" />
      Age*: <input type="text" name="age" />
      Gender*: <input type="text" name="gender" />
      Occupation: <input type="text" name="occupation" />
      Marital Status: <input type="text" name="maritalStatus" />
      Postal Code: <input type="text" name="postalCode" />
      Province Issue HCN: <input type="text" name="provinceIssueHCN" />
      Residence Type: <input type="text" name="residenceType" />
      <input type="submit" value="Register" />
    </form>
</body>
</html>