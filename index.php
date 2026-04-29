<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <title>Calculadora</title>
</head>

<body class="center">
  <div id="containerCalculadora" class="center">
    <form method="POST" class="center">
      <input type="text" name="calculation" id="input-operacion" />
      <div id="botones">
        <div id="numeros">
          <button class="btnNumero" id="btn-1" value="1">1</button>
          <button class="btnNumero" id="btn-2" value="2">2</button>
          <button class="btnNumero" id="btn-3" value="3">3</button>
          <button class="btnNumero" id="btn-4" value="4">4</button>
          <button class="btnNumero" id="btn-5" value="5">5</button>
          <button class="btnNumero" id="btn-6" value="6">6</button>
          <button class="btnNumero" id="btn-7" value="7">7</button>
          <button class="btnNumero" id="btn-8" value="8">8</button>
          <button class="btnNumero" id="btn-9" value="9">9</button>
          <button class="btnNumero" id="btn-0" value="0">0</button>
          <button class="btnNumero" id="btn-dot" value=""></button>
          <button class="btnNumero" id="btn-clear">C</button>
        </div>
        <div id="operaciones">
          <button class="btnOperacion" id="btnSumar" value="+">+</button>
          <button class="btnOperacion" id="btnRestar" value="-">-</button>
          <button class="btnOperacion" id="btnMultiplicar" value="*">*</button>
          <button class="btnOperacion" id="btnDividir" value="/">/</button>
        </div>
      </div>
      <button id="btnCalculate" name="calculate">=</button>
    </form>
    <p id="resultado" class="">
     <?php

      // Mostrando errores en PHP
      ini_set('display_errors', '1');
      ini_set('display_startup_errors', '1');
      error_reporting(E_ALL);

      // Realizando calculo
      if (isset($_POST['calculate'])) {
        $calculo = $_POST['calculation'];
        $resultado = eval("return $calculo;");

        echo "Resultado: ".$resultado;
      }
      ?>
    </p>
  </div>
</body>
<script type="module" src="./main.js"></script>

</html>