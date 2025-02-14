<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $basededatos = "ach";

  // Create connection
  $conn = new mysqli($servidor, $usuario, $clave, $basededatos);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Sanitizar y obtener datos del formulario
  $fecha = filter_input(INPUT_POST, 'fecha');
  $country = filter_input(INPUT_POST, 'country');
  $sector = filter_input(INPUT_POST, 'sector');
  $company = filter_input(INPUT_POST, 'company');
  $role = filter_input(INPUT_POST, 'role');
  $gender = filter_input(INPUT_POST, 'gender');
  $education = filter_input(INPUT_POST, 'education');
  $age = filter_input(INPUT_POST, 'age');

  // Preparar y ejecutar query
  $stmt = $conn->prepare("INSERT INTO home 
            (fecha, country, sector, company, role, gender, education, age) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  $stmt->bind_param(
    "ssssssss",
    $fecha,
    $country,
    $sector,
    $company,
    $role,
    $gender,
    $education,
    $age
  );

  if ($stmt->execute()) {
    header("Location: criterios.php");
    exit();
  } else {
    echo "<p class='error'>Error al guardar los datos: " . $conn->error . "</p>";
  }

  $stmt->close();
  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PESTEL analysis and Porter strategies evaluation form">
  <title> PESTEL & Porter Strategy Evaluation Form </title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header class="header">
    <div class="logo-container">
      <img src="Logo_TdeA.jpg" alt="Logo Tecnológico de Antioquia Institución Universitaria Logo">
    </div>
    <div class="header-content">
      <h1>PESTEL analysis and Porter strategies</h1>
      <h2>Evaluation of Criteria, subcriteria and strategies for <span class="highlight">Strategic Selection</span></h2>
    </div>
  </header>

  <main class="container">
    <section class="instructions">
      <h3>Instructions for Completing the Survey with the Saaty Scale</h3>
      <p>The following survey aims to compare the relative importance of different criteria or factors. We use a scale from 1 to 9 to evaluate these comparisons:</p>
      <ul class="scale-list">
        <li><strong>1:</strong> Both criteria are equally important</li>
        <li><strong>3:</strong> First criterion is slightly more important</li>
        <li><strong>5:</strong> First criterion is clearly more important</li>
        <li><strong>7:</strong> First criterion is much more important</li>
        <li><strong>9:</strong> First criterion is extremely more important</li>
        <li><strong>2, 4, 6, 8:</strong> Intermediate values between adjacent levels</li>
      </ul>

      <div class="example">
        <h4>Example</h4>
        <p>When comparing "Political Criteria" vs "Economic Criteria":</p>
        <ul>
          <li>Select "Political Criteria" first if much more important</li>
          <li>Select "Economic Criteria" first if more important</li>
        </ul>
      </div>
      <p class="note">Note: Maintain consistent comparisons reflecting your expert judgment.</p>
    </section>


    <form class="evaluation-form" action="" method="post">
      <fieldset>
        <legend>Participant Information</legend>

        <div class="form-group">
          <label for="fecha">Date:</label>
          <input type="date" id="fecha" name="fecha" required>
        </div>

        <div class="form-group">
          <label for="country">Country:</label>
          <input type="text" id="country" name="country" placeholder="Enter country" required>
        </div>

        <div class="form-group">
          <label for="sector">Economic Sector:</label>
          <select id="sector" name="sector" required>
            <option value="">Select Sector</option>
            <option value="commerce">Commerce</option>
            <option value="industry">Industry</option>
            <option value="services">Services</option>
            <option value="construction">Construction</option>
            <option value="transportation">Transportation</option>
          </select>
        </div>

        <div class="form-group">
          <label for="company">Company:</label>
          <input type="text" id="company" name="company" placeholder="Enter company name" required>
        </div>

        <div class="form-group">
          <label for="role">Position:</label>
          <select id="role" name="role" required>
            <option value="">Select Position</option>
            <option value="ceo">CEO</option>
            <option value="coo">COO</option>
            <option value="cfo">CFO</option>
            <option value="cio">CIO</option>
            <option value="cto">CTO</option>
            <option value="cmo">CMO</option>
            <option value="cko">CKO</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="education">Educational Level:</label>
          <select id="education" name="education" required>
            <option value="">Select Education Level</option>
            <option value="technical">Technical</option>
            <option value="technological">Technological</option>
            <option value="professional">Professional</option>
            <option value="master">Master</option>
            <option value="doctorate">Doctorate</option>
            <option value="other">Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="age">Age Range:</label>
          <select id="age" name="age" required>
            <option value="">Select Age Range</option>
            <option value="20-30">20 - 30</option>
            <option value="31-40">31 - 40</option>
            <option value="41-50">41 - 50</option>
            <option value="50+">More than 50</option>
          </select>
        </div>
      </fieldset>

      <div class="form-actions">
        <button type="submit" class="submit-btn">Submit Evaluation</button>
      </div>
    </form>
  </main>
</body>

</html>