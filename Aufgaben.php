<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title> Aufgabenplaner</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d0a105d246.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <?php $text = "Aufgaben";
    include ("Header.php"); ?>
    </div>

    <div class="row" >
        <div class="col-2">
            <?php include ("Sidebar.php"); ?>

        </div>
        <div class="col">
            <div class="row">
                <div class="col" >
                    <div class="col">
                        <div class="row">
                            <div class ="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Aufgabenbezeichnung:</th>
                                        <th scope="col">Beschreibung der Aufgabe:</th>
                                        <th scope="col">Reiter:</th>
                                        <th scope="col">Zuständig:</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> HTML Datei erstellen</td>
                                        <td>HTML Datei erstellen</td>
                                        <td>ToDo</td>
                                        <td>Max Mustermann</td>
                                        <td></td>
                                        <td class ="text-right">
                                            <p class="text-primary">
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CSS Datei erstellen</td>
                                        <td>Css Datei erstellen.</td>
                                        <td>ToDo</td>
                                        <td>Max Mustermann</td>
                                        <td></td>
                                        <td class ="text-right">
                                            <p class="text-primary">
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PC eingeschaltet</td>
                                        <td>PC einschalten</td>
                                        <td>Erledigt</td>
                                        <td>Max Mustermann</td>
                                        <td></td>
                                        <td class ="text-right">
                                            <p class="text-primary">
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </p></td>
                                    </tr>
                                    <tr>
                                        <td>Kaffee trinken</td>
                                        <td>Kaffee trinken</td>
                                        <td>Erledigt</td>
                                        <td>Petra Müller</td>
                                        <td></td>
                                        <td class ="text-right">
                                            <p class="text-primary">
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </p></td>
                                    </tr>
                                    <tr>
                                        <td>Für die Uni lernen</td>
                                        <td>Für die Uni lernen.</td>
                                        <td>Verschoben</td>
                                        <td>Max Mustermann</td>
                                        <td></td>
                                        <td class ="text-right">
                                            <p class="text-primary">
                                                <i class="far fa-edit"></i>
                                                <i class="fas fa-trash-alt"></i>
                                            </p></td>
                                    </tr>

                                    </tbody>
                                </table>

                                <h5> Bearbeiten/Erstellen</h5>
                                <div class ="form-group">
                                    <label  for ="Projektname"> Aufgabenbezeichnung: </label>
                                    <input type="projektname" class="form-control" id="projektname">
                                </div>
                                <div class ="form-group">
                                    <label  for ="Projektbeschreibung"> Beschreibung der Aufgabe: </label>
                                    <textarea class="form-control" id="beschreibung"></textarea>
                                </div>
                                <div class ="form-group">
                                    <label  for ="Projektname"> Erstellungsdatum: </label>
                                    <input type="projektname" class="form-control" id="projektname">
                                </div>
                                <div class ="form-group">
                                    <label  for ="Projektname"> fällig bis: </label>
                                    <input type="projektname" class="form-control" id="projektname">
                                </div>
                                Zugehörige Reiter:
                                <select class="custom-select">
                                    <option selected disabled >ToDo</option>
                                    <option value="1">Erledigt</option>
                                    <option value="2">Verschoben</option>
                                </select>
                                Zuständig
                                <select class="custom-select">
                                    <option selected disabled >Max Mustermann</option>
                                    <option value="1">Petra Müller</option>
                                </select>

                                <br>
                                <br>
                                <button type="button" class="btn btn-primary">
                                    Speichern
                                </button>
                                <button type="button" class="btn btn-info">
                                    Reset
                                </button>

                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                    </div>


                </div>



            </div>

</body>

</html>