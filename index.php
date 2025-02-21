<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servidor = "localhost";
  $usuario = "root";
  $clave = "";
  $basededatos = "ahp";

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
  $position = filter_input(INPUT_POST, 'position');
  $gender = filter_input(INPUT_POST, 'gender');
  $education = filter_input(INPUT_POST, 'education');
  $age = filter_input(INPUT_POST, 'age');

  // Preparar y ejecutar query
  $stmt = $conn->prepare("INSERT INTO home 
            (fecha, country, sector, company, position, gender, education, age) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  $stmt->bind_param(
    "ssssssss",
    $fecha,
    $country,
    $sector,
    $company,
    $position,
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
<html lang="es">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="PESTEL analysis and Porter strategies evaluation form">
  <title> Formulario de evaluación de la estrategia PESTEL y Porter </title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header class="header">
    <div class="logo-container">
      <img src="Logo_TdeA.jpg" alt="Logo Tecnológico de Antioquia Institución Universitaria Logo">
    </div>
    <div class="header-content">
      <h1>Análisis PESTEL y estrategias de Porter</h1>
      <h2>Evaluación de Criterios, subcriterios y estrategias para <span class="highlight">la Selección Estratégica</span></h2>
    </div>
  </header>

  <main class="container">
    <section class="instructions">
      <h3>Instrucciones para Completar la Encuesta con la Escala Saaty</h3>
      <p>La siguiente encuesta tiene como objetivo comparar la importancia relativa de diferentes criterios o factores. Usamos una escala del 1 al 9 para evaluar estas comparaciones:</p>
      <ul class="scale-list">
        <li><strong>1:</strong> Ambos criterios son igualmente importantes.</li>
        <li><strong>3:</strong> El primer criterio es un poco más importante.</li>
        <li><strong>5:</strong> El primer criterio es claramente más importante.</li>
        <li><strong>7:</strong> El primer criterio es mucho más importante.</li>
        <li><strong>9:</strong> El primer criterio es extremadamente importante.</li>
        <li><strong>2, 4, 6, 8:</strong> Valores intermedios entre niveles adyacentes</li>
      </ul>

      <div class="example">
        <h4>Ejemplo</h4>
        <p>Al comparar "criterios políticos" con "criterios económicos":</p>
        <ul>
          <li>Seleccione "Criterios políticos" primero si es mucho más importante</li>
          <li>Seleccione "Criterios económicos" primero si es más importante</li>
        </ul>
      </div>
      <p class="note">Nota: Mantenga comparaciones consistentes que reflejen su criterio experto.</p>
    </section>


    <form class="evaluation-form" action="" method="post">
      <fieldset>
        <legend>Información del participante</legend>

        <div class="form-group">
          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha" name="fecha" required>
        </div>

        <div class="form-group">
          <label for="country">País:</label>
          <input type="text" id="country" name="country" placeholder="ingrese el país" required>
        </div>

        <div class="form-group">
          <label for="sector">Sector Económico:</label>
          <select id="sector" name="sector" required>
            <option value="">Seleccionar el Sector</option>
            <option value="commerce">Comercio</option>
            <option value="industry">Industria</option>
            <option value="services">Servicios</option>
            <option value="construction">Construcción</option>
            <option value="transportation">Transporte</option>
          </select>
        </div>

        <div class="form-group">
          <label for="company">Compañía:</label>
          <input type="text" id="company" name="company" placeholder="Ingrese el nombre de la compañía" required>
        </div>

        <div class="form-group">
          <label for="position">Cargo:</label>
          <select id="position" name="position" required>
            <option value="">Seleccione el cargo</option>
            <option value="director ejecutivo">director ejecutivo</option>
            <option value="director de Finanzas">director de Finanzas</option>
            <option value="Director de Sistemas de Información">Director de Sistemas de Información</option>
            <option value="Director de Tecnología">Director de Tecnología</option>
            <option value="Director de Marketing">Director de Marketing</option>
            <option value="other">Otro</option>
          </select>
        </div>

        <div class="form-group">
          <label for="gender">Género:</label>
          <select id="gender" name="gender" required>
            <option value="">Seleccione el Género</option>
            <option value="female">Femenino</option>
            <option value="male">Masculiono</option>
            <option value="other">Otro</option>
          </select>
        </div>

        <div class="form-group">
          <label for="education">Nivel Educativo:</label>
          <select id="education" name="education" required>
            <option value="">Seleccionar nivel educativo</option>
            <option value="technical">Técnico</option>
            <option value="technological">Tecnológico</option>
            <option value="professional">Profesional</option>
            <option value="master">Maestría</option>
            <option value="doctorate">Doctorado</option>
            <option value="other">Otro</option>
          </select>
        </div>

        <div class="form-group">
          <label for="age">Rango de edad:</label>
          <select id="age" name="age" required>
            <option value="">Seleccionar rango de edad</option>
            <option value="20-30">20 - 30</option>
            <option value="31-40">31 - 40</option>
            <option value="41-50">41 - 50</option>
            <option value="50+">Más de 50</option>
          </select>
        </div>
      </fieldset>

      <div class="form-actions">
        <button type="submit" class="submit-btn">Enviar evaluación</button>
      </div>
    </form>
  </main>
</body>

</html>
