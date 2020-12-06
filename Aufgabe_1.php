<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title> Aufgabenplaner</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />

</head>
<body>

<div class="container-fluid">
    <?php $text = "Aktuelles Projekt";
    include ("Header.php"); ?>
</div>
    <div class="row" >
        <div class="col-2">
            <?php include ("Sidebar.php"); ?>

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