<!DOCTYPE html>
<!-- ICS2O-Unit1-08-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Converting fahrenheit to celsius, With PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Converting fahrenheit to celsius, With PHP</title>

</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Converting fahrenheit to celsius, With PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./temperature.png" alt="temperature" />
      </div>
      <div class="page-content">
        <p>Fill in the blanks with the appropriate information!</p>
        <p>Formula</p>
        <p>(32°F − 32) × 5/9 = 0°C</p>
      </div>
      <br />
      <!-- Simple Textfield for integers-->
      <form method="get" action="answer.php">
        <div class="page-content">
          <div class="mdl-textfield mdl-js-textfield">
            <!-- input pattern attribute -->
            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="fahrenheit-input" name="T"/>
            <!-- mdl-textfield__label -->
            <label class="mdl-textfield__label" for="demo-input">Temperature in fahrenheit</label>
            <!-- class "mdl-textfield__error" -->
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          <br />

          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            onclick="myButtonClicked()" type="submit">
            Convert to celcius
          </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="answer"></div>
      </div>
    </main>
  </div>
</body>

</html>