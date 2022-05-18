<!DOCTYPE html>

<head>
    <title>formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <h1 style="text-align: center;">Enregistrer un étudiant</h1>


    <div class="container">
        <a href="liste">
            <button class="btn btn-danger mb-3">Liste des etudiants</button>
        </a>

        <form method="post" action="{{route('insertion')}}">
            @csrf
        <div class="row">
            <div class="form-group col-lg-12">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="nom">
            </div>

            <div class="form-group col-lg-12">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" name="prenom" placeholder="nom">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-lg-12">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" placeholder="age">
            </div>

            <div class="form-group col-lg-12">
                <label class="col-sm-6 control-label" style=" text-align: left;">Sexe</label>
                <select class="form-select"  aria-label="Default select example" name="genre" required>
                    <option selected > Sexe </option>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                    <option value="Autre">Autre</option>
                 </select>
            </div>
            <div class="form-group col-lg-12">
                <label for="genre" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="adresse">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-lg-12">
                <label for="nom" class="form-label">Telephone</label>
                <input type="numerique" class="form-control" name="telephone" placeholder="telephone">
            </div>

            <div class="form-group col-lg-12">
                <label for="prenom" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="mail" placeholder="email">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-1">
                <input type="submit" class="btn btn-primary" value="valider">
            </div>
            <div class="col-lg-1">
                <button type="submit" style="float:right;" class="btn btn-primary">annuler</button>
            </div>
        </div>



      </form>
    </div>


</body>

</html>
