<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>

    <h2 style="text-align: center;">Listes des etudiants</h2>

    <a href="formulaire">
        <button class="btn btn-success" style="margin-left: 1000;">formulaire</button>
    </a>
    <br><br>

    <div class="container">
        <caption>Liste des etudiants</caption>
        <table class="table">

            <thead>
              <tr>
                <th scope="col">numero</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
                <th scope="col">adresse</th>
                <th scope="col">telephone</th>
                <th scope="col">email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nikiema</td>
                <td>Mariam</td>
                <td>feminin</td>
                <td>24</td>
                <td>75 45 02 22</td>
                <td>nikiema@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Konate</td>
                <td>Ulriche</td>
                <td>masculin</td>
                <td>30</td>
                <td>70 55 20 20</td>
                <td>konateu@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Ngoma</td>
                <td>Brice</td>
                <td>masculin</td>
                <td>32</td>
                <td>65 45 32 51</td>
                <td>ngomab@gmail.com</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mabiala</td>
                <td>Blandine</td>
                <td>feminin</td>
                <td>25</td>
                <td>76 02 00 51</td>
                <td>mabialab@gmail.com</td>
              </tr>
            </tbody>
          </table>
    </div>
</body>
</html>
