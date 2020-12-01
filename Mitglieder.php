<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title> Meine Startseite</title>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          rel="stylesheet" />
    <script src="https://kit.fontawesome.com/d0a105d246.js" crossorigin="anonymous"></script>

</head>
<body>

<div class="container-fluid">
    <div  class="jumbotron text-center">
        <h1>Aufgabenplaner : Mitglieder </h1>
    </div>

    <div class="row" >
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link Log in" href="Übung2.php"> Login</a>
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
                <div class ="col">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">E-Mail</th>
                            <th scope="col">In Projekt</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Max Mustermann</td>
                            <td>mustermann@muster.de</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           value="" id="ch1">
                                    <label class="form-check-label" for="Ch1">
                                    </label>
                                </div>
                            </td>
                            <td></td>
                            <td class ="text-right">
                                <p class="text-primary">
                                    <i class="far fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>Petra Müller</td>
                            <td>petra@müller.de</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           value="" id="ch1">
                                    <label class="form-check-label" for="Ch1">
                                    </label>
                                </div>
                            </td>
                            <td></td>
                            <td class ="text-right">
                                <p class="text-primary">
                                    <i class="far fa-edit"></i>
                                    <i class="fas fa-trash-alt"></i>
                                </p>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <h5> Bearbeiten/Erstellen</h5>
                    <div class ="form-group">
                        <label  for ="Projektname"> Username: </label>
                        <input type="projektname" class="form-control" id="projektname">
                    </div>
                    <div class ="form-group">
                        <label  for ="Projektname"> E-Mail-Adresse: </label>
                        <input type="projektname" class="form-control" id="projektname">
                    </div>
                    <div class ="form-group">
                        <label  for ="Projektname"> Passwort: </label>
                        <input type="projektname" class="form-control" id="projektname">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                               value="" id="ch1">
                        Dem Projekt zugeordnet
                        <label class="form-check-label" for="Ch1">
                        </label>
                    </div>

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