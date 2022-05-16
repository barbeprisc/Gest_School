<!DOCTYPE html>

<head>
    <title>formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <h1 style="text-align:center">Formulaire insertion</h1>

    <div class="container">
        <a href="liste">
            <button class="btn btn-danger">liste des etudiants</button>
        </a>
        <br><br>
        <form>

            <div class="row">
                <div class="form-group col-lg-6">
                  <label for="nom">nom</label>
                  <input type="texte" class="form-control" name="nom" placeholder="nom">
                </div>
                <div class="form-group col-lg-6">
                  <label for="prenom">prenom</label>
                  <input type="texte" class="form-control" name="prenom" placeholder="prenom">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                  <label for="Age">Age</label>
                  <input type="texte" class="form-control" name="nom" placeholder="Age">
                </div>
                <div class="form-group col-lg-6">
                  <label for="Genre">Genre</label>
                  <input type="texte" class="form-control" name="Genre" placeholder="Genre">
                </div>
            </div>

            <div class="row">

                <div class="form-group col-lg-6">
                    <label for="Adresse">Adresse</label>
                    <input type="number" class="form-control" id="Adresse" placeholder="Adresse">
                </div>
                <div class="form-group col-lg-6">
                    <label for="inputEmail4">Telephone</label>
                    <input type="Telephone" class="form-control" id="inputEmail4" placeholder="Telephone">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" class="btn btn-primary" value="valider">
                </div>
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary">annuler</button>
                </div>


            </div>

          </form>
    </div>


</body>

</html>
