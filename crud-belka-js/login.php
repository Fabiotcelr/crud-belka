<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belka</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- other links -->
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <?php include("./components/navbar.php"); ?>

    <div class="container">
        <div class="col-lg-5 mx-auto my-4 p-4 border rounded">
            <form id="form-login">
                <div class="mb-3">
                    <label for="users_email" class="form-label">Correo</label>
                    <input type="email" id="users_email" class="form-control" placeholder="Correo..." autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="users_password" class="form-label">Contraseña</label>
                    <input type="password" id="users_password" class="form-control" placeholder="Contraseña..." autocomplete="off" required>
                </div>


                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-orange">Ingresar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- other scripts -->
    <script src="./assets/js/functions.js"></script>
    <script src="./assets/js/login/index.js"></script>
</body>

</html>