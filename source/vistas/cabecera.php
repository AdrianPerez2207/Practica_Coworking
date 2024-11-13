<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas coworking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b30965d9a.js" crossorigin="anonymous"></script>
    <style>
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <header class="d-flex justify-content-around">
        <h1>Coworking</h1>
        <div class="w-50">
            <ul class="d-flex justify-content-around">
                <li><a class="btn btn-secondary" href="">Salas</a></li>
                <li><a class="btn btn-secondary" href="">Mis Reservas</a></li>
                <li><div class="dropdown">
                        <?php
                        
                            if (isset($_SESSION["usuario"])){
                                $email = $_SESSION['usuario'];
                                echo ("
                                    <button class='btn btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        <strong>$email</strong>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><button class='dropdown-item p-2' type='button'><i class='fa-solid fa-user m-lg-1'></i>Cerrar sesion</button></li>
                                    </ul>");
                            }else{
                                echo ("<button class='btn btn-secondary dropdown-toggle' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                        <strong>Login</strong>
                                    </button>
                                    <ul class='dropdown-menu'>
                                        <li><button class='dropdown-item' type='button'><i class='fa-solid fa-right-to-bracket m-lg-1'></i>Registrarse</button></li>
                                        <li><button class='dropdown-item p-2' type='button'><i class='fa-solid fa-user m-lg-1'></i>Iniciar Sesión</button></li>
                                    </ul>");
                            }
                        ?>
                    </div>
                </li>
            </ul>
        </div>
    </header>


