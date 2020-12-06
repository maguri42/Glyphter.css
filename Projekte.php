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
    <?php $text = "Projekte";
    include ("Header.php"); ?>
</div>
    <div class="row" >
        <div class="col-2">
            <?php include ("Sidebar.php"); ?>
        </div>
        <div class="col">
            <div class="row">
                <div class="col" >
                    <form>
                        <h4>Projekt Auswählen:</h4>
                        <select class="custom-select">
                         <option selected disabled >-bitte auswählen-</option>
                            <option value="1">Projekt_1</option>
                            <option value="2">Projekt_2</option>
                            <option value="3">Projekt_3</option>
                        </select>
                        <br>
                        <br>
                        <button type="button" class="btn btn-primary">
                            Auswählen
                        </button>
                        <button type="button" class="btn btn-primary">
                            Bearbeiten
                        </button>
                        <button type="button" class="btn btn-danger">
                            Löschen
                        </button>
                        <h4> Projekte bearbeiten/erstellen: </h4>

                        <div class ="form-group">
                            <label  for ="Projektname"> Projektname: </label>
                            <input type="projektname" class="form-control" id="projektname">
                        </div>
                        <div class ="form-group">
                            <label  for ="Projektbeschreibung"> Projektbeschreibung: </label>
                            <textarea class="form-control" id="beschreibung"></textarea>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary">
                            Speichern
                        </button>
                        <button type="button" class="btn btn-info">
                            Reset
                        </button>
                    </form>
                </div>
                    <div class="col-2">
                    </div>



                </div>


</div>
</body>

</html>