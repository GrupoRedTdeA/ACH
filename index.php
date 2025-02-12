<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$basededatos = "ach";

$enlace = mysqli_connect($servidor, $usuario, $clave, $basededatos)

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Form ACH </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0 auto;
      padding: 20px;

    }

    h1,
    h2,
    h3 {
      color: #333;
    }

    form {
      background-color: #f4f4f4;
      border-radius: 5px;
      padding: 20px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <img src="Logo_TdeA.jpg" />
  <h1>PESTEL analysis and Porter strategies</h1>
  <h2>Evaluation of Criteria, subcriteria and strategies for <span class='var'>Strategic Selection</span></h2>
  <h3>Instructions for Completing the Survey with the Saaty Scale</h3>
  <p>The following survey aims to compare the relative importance of different criteria or factors. We use a scale from 1 to 9 to evaluate these comparisons. Below is a description of how to use this scale:<br>
    1: Both criteria are equally important.<br>
    3: The first criterion is slightly more important than the second criterion.<br>
    5: The first criterion is clearly more important than the second criterion.<br>
    7: The first criterion is much more important than the second criterion.<br>
    9: The first criterion is extremely more important than the second criterion.<br>
    2, 4, 6, 8: These are intermediate values used when the importance lies between two adjacent levels.<br>

    For each pair of criteria, please select the number that best represents the relative importance of the first criterion compared to the second criterion. If you consider the second criterion to be more important, select it.<br>
  <h3>Example</h3> If you are comparing "Political Criteria" and "Economic Criteria" and you consider "Political Criteria" to be much more important than "Economic Criteria", you would select "Political Criteria" and then comparing "Political Criteria" as the first criterion and "Economic Criteria" as the second criterion. Conversely, if you believe that "Economic Criteria" are more important than "Political Criteria", you would select "Economic Criteria" and then comparing "Economic Criteria" as the first criterion and "Political Criteria" as the second criterion.<br>
  Remember that all comparisons should be consistent and reflect your expert judgment on the importance of the criteria in relation to the others.
  </p>

  <form action="#" name="form" method="post">

    <label> Date </label>
    <input type="date" name="date"> <br>

    <label> Country </label>
    <input type="text" name="country" placeholder="--"> <br>

    <label for="Sector">Economic Sector</label>
    <select name="sec" id="Sector">
      <option value="0">Select</option>
      <option value="1">Commerce</option>
      <option value="2">Industry</option>
      <option value="3">Services</option>
      <option value="3">Construction</option>
      <option value="3">Transportation</option>
    </select><br>

    <label> Company </label>
    <input type="text" name="company" placeholder="--"> <br>

    <label for="role">Position</label>
    <select name="rol" id="role">
      <option value="0">Select</option>
      <option value="1">CEO</option>
      <option value="2">COO</option>
      <option value="3">CFO</option>
      <option value="4">CIO</option>
      <option value="5">CTO</option>
      <option value="6">CIO</option>
      <option value="7">CMO</option>
      <option value="8">CKO</option>
      <option value="9">Other</option>
    </select><br>

    <label for="gender">Gender</label>
    <select name="gen" id="gender">
      <option value="0">Select</option>
      <option value="female">Female</option>
      <option value="male">Male</option>
      <option value="other">Other</option>
    </select><br>

    <label for="educationalLevel">Educational level</label>
    <select name="edu" id="educationalLevel">
      <option value="0">Select a level</option>
      <option value="1">Technical</option>
      <option value="2">Technological</option>
      <option value="3">Professional</option>
      <option value="4">Master</option>
      <option value="5">Doctorate</option>
      <option value="6">Other</option> <br>
    </select><br>

    <label for="ageRange">Age range</label>
    <select name="age" id="ageRange">
      <option value="0">Select an age range</option>
      <option value="1">20 - 30</option>
      <option value="2">31 - 40</option>
      <option value="3">41 - 50</option>
      <option value="4">More than 50</option>
    </select><br>

    <tr><input type='submit' value='Send' name='pc_submit' /></td>
      <td colspan='2'>
      <td class='ca'></td>
    </tr><br>
    <a href="criterios.php">Continue</a>


</body>

</html>

<?php

if (isset($_POST['pc_submit'])) {
  $date = $_POST['date'];
  $country = $_POST['country'];
  $economic_Sector = $_POST['sector'];
  $company = $_POST['company'];
  $role = $_POST['rol'];
  $gender = $_POST['gen'];
  $educationa_level = $_POST['edu'];
  $age_range = $_POST['age'];

  $insertardatos = "INSERT INTO home VALUES('$date', '$country', '$economic_Sector', '$company', '$role', '$gender', '$educationa_level', '$age_range', '')";

  $ejecutarinsertar = mysqli_query($enlace, $insertardatos);
}

?>