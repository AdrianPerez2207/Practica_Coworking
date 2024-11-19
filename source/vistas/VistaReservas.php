<?php

namespace Coworking\vistas;

class VistaReservas  {

    public static function render($error) {

        include("cabecera.php");
?>
        <main class="p-3">
            <?php
            //Si algo falla, muestra un mensaje de error
            if (strlen($error) > 0) {
                echo "<p class='text-danger'>{$error}</p>";
            }
            ?>
            <form class="w-25 p-5 mb-5 bg-light rounded-3 m-auto d-grid gap-3" action="index.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Reservar sala <?=$_GET['nombre']; ?></h1>
                <div class="form-floating">
                    <input name="fecha_reserva" type="date" class="form-control" id="floatingInput">
                    <label for="floatingInput">Fecha de reserva</label>
                </div>
                <div class="form-floating">
                    <select name="hora_inicio" class="form-select" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="1">8:00</option>
                        <option value="2">12:00</option>
                        <option value="3">16:00</option>
                    </select>
                    <label for="floatingInput">Hora de inicio</label>
                </div>
                <div class="form-floating">
                    <select name="hora_fin" class="form-select" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="1">12:00</option>
                        <option value="2">16:00</option>
                        <option value="3">20:00</option>
                    </select>
                    <label for="floatingInput">Hora de fin</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit" name="reservar">Reservar</button>
            </form>
        </main>
<?php
        include('pie.php');
        }
    }
?>