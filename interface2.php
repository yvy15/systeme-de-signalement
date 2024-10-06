<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Formulaire de signalement</title>
    <style>
        body {
            background-image: url(photo17.jpg);
            background-size: 30%;
            padding: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        .titre-encadre {
            border: 2px solid rgb(8, 91, 124);
            padding: 10px;
            border-radius: 10px;
            background-color: skyblue;
        }
        .compartiment {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid black;
             max-width: 900px; /* Ajustez la largeur maximale */
            margin:auto; /* Centre le formulaire */
            border-radius:15px;
           background-color: whitesmoke;
        }
        .compartiment1 {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid green;
            border-radius: 15px;
            background-color: #ffffff;
        }
        .compartiment2 {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid red;
            border-radius: 15px;
            background-color: #ffffff;
        }  
        .compartiment3 {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid yellow;
            border-radius: 15px;
            background-color: #ffffff;
        }
        .compartiment4 {
            margin-bottom: 20px;
            padding: 15px;
            border: 2px solid yellowgreen;
            border-radius: 15px;
            background-color: #ffffff;
        }
        input[type="text"], input[type="email"], input[type="password"], input[type="date"], input[type="tel"]{
            width: 90%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .button{
            border-radius: 2px;
        }
    </style>
</head>

    <div class="compartiment">  
<h1 class="text-center mb-4">Formulaire de signalement</h1>

<!-- Compartiment des informations du signaleur -->
<div class="compartiment1">
    <h2 class="titre-encadre">Informations du signaleur</h2>

    <form method="POST" action="formulaire.php"> 
        <div class="form-group">
            <label for="nom-signaleur">Nom :</label>
            <input type="text" class="form-control"  id="nom-signaleur" name="nom-signaleur" required>
        </div>
        <div class="form-group">
            <label for="email-signaleur">Email :</label>
            <input type="email" class="form-control"  id="email-signaleur" name="email-signaleur" required>
        </div>
        <div class="form-group">
            <label for="telephone-signaleur">Téléphone :</label>
            <input type="text" class="form-control"  id="telephone-signaleur" name="telephone-signaleur" required>
        </div>
    
</div>

<!-- Compartiment des informations de la victime -->
<div class="compartiment2">
    <h2 class="titre-encadre">Informations de la victime</h2>
  
        <div class="form-group">
            <label for="nom-victime">Nom :</label>
            <input type="text"class="form-control"  id="nom-victime" name="nom-victime" required>
        </div>
        <div class="form-group">
            <label for="age-apparent">Âge apparent :</label>
            <input type="text" class="form-control" id="age-apparent" name="age-apparent" required>
        </div>
        <div class="form-group">
            <label for="date-heure">Date :</label>
            <input type="date"  class="form-control" id="date-heure" name="date-heure" required>
        </div>
        <div class="form-group">
            <label>Sexe :</label><br>
            <label class="mr-3"><input type="radio" name="sexe" value="masculin" required> M</label>
            <label><input type="radio" name="sexe" value="feminin" required> F</label>
        </div>
 
</div>

<!-- Types de sévices -->
<div class="compartiment3">
    <h2 class="titre-encadre">Types de sévices</h2>
 
        <div class="container">
            <!-- Ajouter une row pour aligner les catégories de sévices horizontalement -->
            <div class="row">
                <!-- Sévices physiques -->
                <div class="col-md-4">
                    <h3>Sévices physiques</h3>
                    <div class="form-check">
                        <label><input type="checkbox" class="form-check-input" name="psevices1" value="coups">coups</label><br>
                        <label><input type="checkbox" class="form-check-input" name="psevices2" value="blessures">violences-sexuelles</label><br>
                        <label><input type="checkbox" class="form-check-input" name="psevices3" value="violences-sexuelles">blessures</label><br>
                    </div>
                </div>

                <!-- Sévices verbaux -->
                <div class="col-md-4">
                    <h3>Sévices verbaux</h3>
                    <div class="form-check">
                        <label><input type="checkbox" class="form-check-input" name="vsevices1" value="insultes">insultes</label><br>
                        <label><input type="checkbox" class="form-check-input" name="vsevices2" value="menaces">menaces</label><br>
                        <label><input type="checkbox" class="form-check-input" name="vsevices3" value="humiliations">humiliations</label><br>
                    </div>
                </div>

                <!-- Sévices psychologiques -->
                <div class="col-md-4">
                    <h3>Sévices psychologiques</h3>
                    <div class="form-check">
                        <label><input type="checkbox" class="form-check-input" name="sevicesp1" value="manipulation">manipulation</label><br>
                        <label><input type="checkbox" class="form-check-input" name="sevicesp2" value="isolement">isolement</label><br>
                        <label><input type="checkbox" class="form-check-input" name="sevicesp2" value="pression">pression</label><br>
                    </div>
                </div>
            </div>

            <!-- Autres sévices alignés en dessous -->
            <div class="form-group mt-4">
                <h3>Autres sévices</h3>
                <label><input type="checkbox" class="form-check-input" value="autre"> Autre :</label>
                <input type="text" class="form-control mt-2" name="description-autre" placeholder="Décrivez ici les autres sévices">
            </div>
        </div>
    
</div>


<!-- Localisation -->
<div class="compartiment4">
    <h2 class="titre-encadre">Localisation</h2>
    
        <div class="form-group row">
            <label for="lieu" class="col-md-2 col-form-label">Lieu :</label>
            <div class="col-md-8">
                <select class="form-control" id="lieu" name="lieu">
                    <option value="">Sélectionnez un lieu</option>
                    <option value="Mvan">Mvan</option>
                    <option value="Bastos">Bastos</option>
                    <option value="Ekounou">Ekounou</option>
                    <option value="Cité CIC">Cité CIC</option>
                    <option value="Mboppi">Mboppi</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="lieu-dit" class="col-md-2 col-form-label">Lieu dit :</label>
            <div class="col-md-8">
                <input type="text" class="form-control" id="lieu-dit" name="lieu-dit" placeholder="Entrez le lieu dit">
            </div>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="ajouter-lieu">Ajouter un lieu</button>
        </div>
        <div class="lieux-liste">
            <!-- Liste des lieux créés -->
        </div>

</div>
<p class="text-center mt-10">
    <button class="btn btn-primary" type="submit">Signaler un cas</button>
</p>
</form>
</div>
<script>
    // Script pour ajouter des lieux à la liste déroulante
    document.getElementById('ajouter-lieu').addEventListener('click', function() {
        var lieu = prompt('Entrez le nom du lieu');
        if (lieu) {
            var option = document.createElement('option');
            option.value = lieu;
            option.text = lieu;
            document.getElementById('lieu').appendChild(option);
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
