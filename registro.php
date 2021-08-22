<!doctype html>
<html>
    <head>
        <title>Formulario de registro </title>
    </head>
        <body>
            <h1>Registro de usuario</h1>
            <form action="guardar.php" method="POST">
                <label for="cui">CUI</label>
                    <input type="text" name="cui" required/>
                <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" required/>
                <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" required/>
                <label for="fecha">Fecha de nacimiento</label>
                    <input type="text" name="fecha" required/>
                <label for="grupo">Grupo de vacunacion</label>
                    <input type="text" name="grupo" required/>
                <label for="clave">Clave</label>
                    <input type="password" name="clave" required/>
                <input name="enviar" type="submit" value="registrar"/>
            </form>
        </body>
</html>
