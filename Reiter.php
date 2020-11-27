<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title> Meine Startseite</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>

<div class="container-fluid">
    <div  class="jumbotron text-center">
        <h1>Aufgabenplaner : Reiter </h1>
    </div>

    <div class="row" >
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link Log in" href="#">Login</a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link Log in" href="Projekte.php">
                        Projekte </a>
                </li>
                <li class="list-group-item">   <a class="nav-link Log in" href="Aufgabe_1.php"> Aktuelles Projekt </a>

                </li>
                <li class="list-group-item ml-5">   <a class="nav-link Log in" href="Reiter.php"> Reiter </a>

                </li>
                <li class="list-group-item ml-5">   <a class="nav-link Log in" href="Aufgaben.php"> Aufgaben </a>
                </li>
                <li class="list-group-item ml-5">   <a class="nav-link Log in" href="Mitglieder.php"> Mitglieder </a>

                </li>
            </ul>

        </div>
        <div class="col">
            <div class="row">
                <div class="col" >
                    <div card="card">
                        <div class ="card-header"> To Do : </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                        <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                    </ul>
                </div>
                <div class="col" >
                    <div card="card">
                        <div class ="card-header"> Erledigt :</div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Pc einschalten (Petra Müller)</li>
                        <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                    </ul>
                </div>

                <div class="col" >
                    <div card="card">
                        <div class ="card-header"> Aufgeschoben :</div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Für die Uni lernen (Petra Müller)</li>
                    </ul>
                </div>
            </div>
        </div>


    </div>


</div>

</body>

</html>