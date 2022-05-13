<!DOCTYPE html>

<head>
    <title>formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <h1 class="text-center">Formulaire des étudiants</h1>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Entrez votre nom" name="name" autocomplete="off">
            </div>

            <form method="post">
                <div class="mb-3">
                    <label>Prénom</label>
                    <input type="text" class="form-control" placeholder="Entrez votre prénom" name="name">
                </div>
                <form method="post">
                    <div class="mb-3">
                        <label>Genre</label>
                        <input type="text" class="form-control" placeholder="Entrez votre genre" name="name">
                    </div>
                    <form method="post">
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="text" class="form-control" placeholder="Entrez votre âge" name="name">
                        </div>
                        <form method="post">
                            <div class="mb-3">
                                <label>Telephone</label>
                                <input type="text" class="form-control" placeholder="Entrez votre telephone"
                                    name="name">
                            </div>
                            <form method="post">
                                <div class="mb-3">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" placeholder="Entrez votre adresse"
                                        name="name">
                                </div>
                                <form method="post">
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" class="form-control" placeholder="Entrez votre email" name="name">
                                    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>


</body>

</html>
