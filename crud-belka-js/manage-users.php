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
        <div class="my-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-light btn-lg border" id="btn-reload-table-users">
                    <i class="bi bi-arrow-clockwise"></i>
                </button>

                <button type="button" class="btn btn-light btn-lg border" data-bs-toggle="modal" data-bs-target="#modal-create-users">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>

            <hr>

            <table class="table table-sm table-hover w-100" id="datatable-users">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Télefono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Pais</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            <?php include("./components/modal-action-users.php"); ?>
        </div>
    </div>

    <?php include("./components/modal-create-users.php"); ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- other scripts -->
    <script>
        const btn_modal_create_users = document.getElementById('modal-create-users').querySelector('button.btn-close');
        const btn_modal_action_users = document.getElementById('modal-action-users').querySelector('button.btn-close');
    </script>
    <script src="./assets/js/functions.js"></script>
    <script src="./assets/js/manage-users/poke-api.js"></script>
    <script src="./assets/js/manage-users/index.js"></script>
</body>
</html>