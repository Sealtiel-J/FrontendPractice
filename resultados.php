<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>¡Resultados de datos!</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="pic2.jpg" />
  </head>

  <body>
    <div class="dive2">
      <h1>Resultados</h1>
      <img src="pic1.png" />
      <?php
          echo $_POST["fullName"];
      ?>
      <h2>¡Bien Hecho!</h2>
      <button onclick="Alert.render()" class="btn">Volver a ingresar</button>
    </div>
    <div id="customPopupOverlay" class="popup-overlay">
      <div id="customPopupContent" class="popup-content">
        <div id="box">
          <i class="fas fa-question-circle fa-5x"></i>
          <h1>Volver a ingresar datos?</h1>
          <div id="closeModal"></div>
        </div>
      </div>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
