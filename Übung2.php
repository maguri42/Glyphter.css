<!Doctype html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title> Log in</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>
<div class="container-fluid">
    <div  class="jumbotron text-center">
        <h1>Aufgabenplaner : Login </h1>
    </div>
  <div class ="row">
      <div class ="col-2">
      </div>
    <div class = "col">
        <form>
            <div class ="form-group">
                <label  for ="Email-Adresse"> Email-Adresse </label>
                <input type="email-adresse" class="form-control" id="Email-Adresse">
            </div>

            <div class ="form-group">
                <label  for ="Passwort"> Passwort </label>
                <input type="passwort" class="form-control" id="Passwort">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox"
                       value="" id="ch1">
                <label class="form-check-label" for="Ch1">
                    AGBs und Datenschutzbedingung akzeptieren
                </label>

            </div>
            <br>
            <button type="button" class="btn btn-primary">
                Einloggen
            </button>
            <br>

            Noch nicht registriert?  <a  href="#"> Registrierung </a>
            <br>
            <br>
            Da der Login Vorgang technich noch nicht realisiert wurde <a href="Aufgabe_1.php">
                Überspringen
            </a>
        </form>
    </div>
      <div class ="col-2">
        </div>

</body>
</html>