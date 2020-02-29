<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de icoco -->
    <link rel="icon" type="/image/png" href="/logo.ico" />
    <!-- link de hojas de estilos -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <!-- Link de el estilo de las fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Links de iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <title>Departementos-Municipalidad</title>

</head>

<body>

    <!-- Barra de navegacion -->
    <header class="header">
        <input type="checkbox" id="btn-menu" />
        <label for="btn-menu">
            <i class="fa fa-bars" id="btnMenu"></i>
        </label>

        <nav class="menu">

            <ul>
                <li>
                    <div class="buscarNav">
                        <input class="buscarNav" type="search" name="" id="" placeholder="Buscar">
                        <i class="fa fa-search"> </i>
                    </div>
                </li>

                <li><a href="/index.php">Inicio</a></li>
                <li><a href="">Noticias</a></li>
                <li><a href="">Gobierno</a>
                    <ul>
                        <li><a href="/view/Gobierno/alcaldeMunicipal.php">Alcalde Municipal</a></li>
                        <li><a href="/view/Gobierno/departamentosMunicipalidad.php">Departamentos </a></li>
                        <li><a href="">Regidores</a></li>
                    </ul>
                </li>
                <li><a href="">Portal de Transparencia</a></li>
                <li><a href="">Conoce a Siguatepeque</a>
                    <ul>
                        <li><a href="">Números Telefónicos</a></li>
                        <li><a href="">Lugares Populares</a></li>
                        <li><a href="">Educación Superior</a></li>
                    </ul>
                </li>
                <li><a href="">Login Linea Base</a></li>
            </ul>



        </nav>

        <img class="logo" src="/img/logoNuevo.png" alt="" srcset="">
        <p class="msg">Municipalidad de Siguatepeque</p>

    </header>
    <!-- Div final de la barra de navegación -->

    <!-- Input de buscar -->
    <div>
        <input class="buscar" type="search" name="" id="" placeholder="Buscar">
        <i class="fa fa-search"> </i>
    </div>

    <!-- Div final de la barra de navegación -->


    <!-- Div de departamentos -->
    <div class="departamentos">
        <p class="texto">DEPARTAMENTOS</p>
        <div class="deptos">
            <div class="contenedor">
                <img src="/img/Departamentos/alcaldia.jpg" class="imagen" alt="oficina-alcalde">
                <a href="/view/Departamentos/oficinaAlcalde.php">
                    <p>Oficina del Alcalde</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/oficinaAlcalde.php">Ver</a>
                </div>
            </div>

            <div class="contenedor">
                <img class="imagen" src="/img/Departamentos/mapa-siguatepeque.jpg" alt="catastro-municipal">
                <a href="/view/Departamentos/catastroMunicipal.php">
                    <p>Catastro Municipalipal</p>
                </a>
                <p>Servicios Prestados.</p>
                <div class="informacion">
                    <a href="/view/Departamentos/catastroMunicipal.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/47069145_949496568573081_4123151995521466368_o-740x460.jpg" alt="control-tributario">
                <a href="/view/Departamentos/controlTributario.php">
                    <p>Control Tributario</p>
                </a>
                <p>Servicios</p>
                <div class="informacion">
                    <a href="/view/Departamentos/controlTributario.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/tesoreria.jpg" alt="tesoria-municipal">
                <a href="/view/Departamentos/tesoreriaMunicipal.php">
                    <p>Tesoría Municipal</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/tesoreriaMunicipal.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/72485567_1115145785341491_8897221304252366848_n-e1573655647796-740x460.jpg" alt="obras-publicas">
                <a href="/view/Departamentos/obrasPublicas.php">
                    <p>Obras Públicas</p>
                </a>
                <p>Servicios Prestados</p>
                <div class="informacion">
                    <a href="/view/Departamentos/obrasPublicas.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/conyabilidad.jpg" alt="contabilidad-presupuesto">
                <a href="/view/Departamentos/contabilidadYPresupuesto.php">
                    <p>Contabilidad y Presupuesto</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/contabilidadYPresupuesto.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/justiciamunicipal-740x460.jpg" alt="medio-ambiente">

                <a href="/view/Departamentos/justiciaMunicipal.php">
                    <p>Justicia Municipal</p>
                </a>
                <p>Servicios</p>
                <div class="informacion">
                    <a href="/view/Departamentos/justiciaMunicipal.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/medioambiente-e1573656232511-740x460.jpg" alt="justicia-municipal">
                <a href="/view/Departamentos/medioAmbiente.php">
                    <p>Medio Ambiente (UMA)</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/medioAmbiente.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/desarrollo-comunitario.png" alt="desarrollo-comunitario">


                <a href="/view/Departamentos/desarrolloComunitario.php">
                    <p>Desarrollo Comunitario</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/desarrolloComunitario.php">Ver</a>
                </div>
            </div>

            <div class="contenedor">
                <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/10/secretaria-e1573655696973.jpg" alt="secretaria-municipal">
                <a href="/view/Departamentos/secretariaMunicipal.php">
                    <p>Secretaria Municipal</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/secretariaMunicipal.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="" alt="oficina-mujer-niñez">
                <a href="/view/Departamentos/oficinaMujer-Niñez.php">
                    <p>Oficina de la mujer y niñez</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/oficinaMujer-Niñez.php">Ver</a>
                </div>
            </div>
            <div class="contenedor">
                <img class="imagen" src="" alt="gerencia-general-municipal">
                <a href="/view/Departamentos/gerenciaGeneralMunicipal.php">
                    <p>Gerencia General Municipal</p>
                </a>
                <p>Atribuciones</p>
                <div class="informacion">
                    <a href="/view/Departamentos/gerenciaGeneralMunicipal.php">Ver</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Div final de departamentos -->


    <!-- Footer -->

    <footer class="footer">
        <div class="contenedor">
            <p>Links</p>
            <div class="links">
                <a href="https://www.presidencia.gob.hn/">Casa Presidencial</a>
                <a href="">Noticias</a>
                <a href="">Agenda</a>
                <a href="">Contacto</a>
            </div>
        </div>
        <div class="contenedor">
            <p>Facebook</p>
            <a href="https://www.facebook.com/siguatepequealcaldia/"><i class="fab fa-facebook"></i></a>


        </div>
        <div class="contenedor">
            <p>Noticias Recientes</p>
        </div>
        <p>Municipalidad de Siguatepeque &copy 2020. All rights reserved</p>

    </footer>


    <!-- Div final de footer -->
</body>

<!-- Scripts de JavaScrits -->
<script src="js/functions.js"></script>

</html>