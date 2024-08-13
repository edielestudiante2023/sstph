<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>


<!DOCTYPE html>
<html lang="es">

<head>
  <!-- METADATOS -->
  <meta charset="UTF-8">
  <meta name="author" content="Edi">
  <meta name="description" content="Clientes SST">
  <meta name="keywords" content="sg-SST, propiedad horizontal, plan de emergencias">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- TITULO -->
  <title>Cliente</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/x-icon" href="imagenes/LOGO_SST.png">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- ICONS  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS -->


  <!-- FUENTES DE GOOGLE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">

  <style>
    .navbar {
      padding: 1rem;
      background-color: #f5f6f7;

    }


    .navbar-collapse {
      align-items: center;
      justify-content: space-between;
    }

    /* ESTILOS GENERALES */

    section {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    h1 {
      font-size: 2rem;
      font-family: "Arima", system-ui;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
    }

    /* SECCION HERO */
    .hero {

      background-color: #f5f5f5;
      min-height: auto;
      text-align: center;

    }

    .hero-principal {
      padding: 3rem;
    }

    .hero-logo-cliente {
      width: 100px;
      height: 100px;
      /* border-radius: 50%; */
      margin: 20px;
    }

    .hero-principal h2 {
      font-size: 1rem;
      color: rgb(119, 70, 7);
    }

    .hero-principal {
      width: 100%;
      /* Ancho del div */
      200pxheight: 200px;
      /* Alto del div  quitando logo*/

    }

    .hero-inferior-imagen {
      margin-top: 30px;
    }

    .seis_ejes {
      margin-top: 20px;
      padding-top: 20px;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }

    .kpi {
      width: 100px;
      height: 100px;
    }

    .span_tabla {
      display: flex;
      text-align: center;
      align-items: center;
      width: 100%;
      border: 1px solid black;
    }

    .span_tabla_item {
      text-align: center;
      width: 100%;
      border: 1px solid black;
    }

    .span_tabla_inicio {
      text-align: center;
      width: 100%;
    }

    .caja_negra {
      margin-top: 20px;
      background-color: black;
      padding: 20 px;
      height: 60px;
      color: white;
      text-align: center;
      line-height: 60px;
      justify-content: center;
      align-items: center;
      display: flex;
    }

    .caja_negra h1 {
      font-size: 1.5rem;
      text-align: center;
      justify-content: center;
    }

    #formato_s_tabla {
      padding-left: 20px;
      padding-top: 30px;
    }

    .styled-table {
      width: 95%;
      border-collapse: collapse;
      border: 1px solid #ddd;
    }

    .styled-table th,
    .styled-table td {
      border: 1px solid #ddd;
      padding: 8px;
      word-wrap: break-word;
      max-width: 200px;
      /* Ancho máximo que puede tener cada celda */
    }

    .styled-table th {
      text-align: center;

    }

    .flex-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .flex-container div {
      width: 200px;
      height: 30px;
      margin: 5px;
      font-size: 1.5rem;

    }

    tr {
      text-align: center;
    }

    .:hover {
      color: white;
      background-color: black;
      padding: 5px 3px 5px 3px;
    }

    .flotartextofila:hover {
      color: white;
      background-color: rgb(3, 2, 65);
      padding: 5px 3px 5px 3px;
    }

    footer {
      background-color: black;
      height: 200px;
      text-align: center;
      color: #ddd;
      align-items: center;
      padding: 20px 0 20px 0;


    }

    .contrato {
      font-size: 20px;
    }

    /* ADAPTABLE RESPONSIVO */

    @media screen and (max-width: 767px) {
      .navbar-brand {
        display: none;
      }
    }

    @media screen and (min-width: 700px) {
      .seis_ejes {
        max-width: 1200px;

      }
    }

    @media screen and (min-width: 700px) {
      .hero-inferior-imagen {
        max-width: 800px;

      }

      .margencero {
        margin: 0;
      }


    }
  </style>

</head>

<body>

  <!-- BARRA DE NAVEGACION -->
  <nav id="inicio" class="navbar navbar-expand-md navbar-light margencero">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
          <div>
            <img src="imagenes/LOGO_SST.png" width="100" alt="Logo Página">
            <img src="imagenes/CYCLOID_ TALENT_SIN_FONDO.png" width="100" alt="Logo Página">
          </div>
        </a>
        <ul class="navbar-nav d-flex justify-content-center align-items-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">Cycloid Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://lookerstudio.google.com/reporting/77074918-ab00-4170-b4f1-cc4285e539c3" target="blank">Indicadores SST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://wa.me/573132123799" target="_blank">Escríbenos por WhatsApp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:edison.cuervo@cycloidtalent.com" target="_blank">Escribenos Por Email</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('logout') ?>">Salir</a>
          </li>
        </ul>
        <a class="navbar-brand" href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
          <img src="imagenes/CAOBO.jpg" width="100" alt="Logo Página">
        </a>
      </div>
    </div>
  </nav>

  <!-- SECCION PRINCIPAL - HERO -->
  <section class="hero align-items-stretch">
    <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
      <!-- <img class="hero-logo-cliente" src="imagenes/CAOBO.jpg"  alt="Logo del cliente"> -->
      <h2>CYCLOID TALENT SAS</h2> <br> <br>
      <h1>ASESORIA EXPERTA EN PROPIEDAD HORIZONTAL</h1>
      <h2>Sistema Digital de Gestión en Seguridad y Salud en el Trabajo</h2>
      <h2><?= session()->get('name') ?></h2>
    </div>
  </section>
  <!-- SEIS EJES -->
  <section>

    <div class="container seis_ejes align-items-stretch">
      <div class="row">

        <div class=" col-sm-4 col-lg-4">
          <h2>Ciclo del SG-SST</h2>
          <ol class="list-group list-group-numbered">
            <a href="#planear" class="flotartextofila list-group-item list-group-item-action">Planear</a>
            <a href="#hacer" class="flotartextofila list-group-item list-group-item-action">Hacer</a>
            <a href="#verificar" class="flotartextofila list-group-item list-group-item-action">Verificar</a>
            <a href="#actuar" class="flotartextofila list-group-item list-group-item-action">Actuar</a>
            <a href="https://safetya.co/normatividad/resolucion-0312-de-2019/#a9" target="_blank" class="flotartextofila list-group-item list-group-item-action">Marco Normativo</a>
          </ol>

        </div>
        <div class=" col-sm-4 col-lg-4">
          <h2>Inspecciones</h2>
          <ol class="list-group list-group-numbered">
            <a href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección General</a>
            <a href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Extintores</a>
            <a href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Botiquines</a>
            <a href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Gabinetes Contra Incendio</a>
            <a href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Recursos para la Seguridad</a>
          </ol>

        </div>
        <div class=" col-sm-4 col-lg-4">
          <h2>Reportes</h2>
          <ol class="list-group list-group-numbered">
            <a href="#reportes" class="flotartextofila list-group-item list-group-item-action">Acta de Visita</a>
            <a href="#reportes" class="flotartextofila list-group-item list-group-item-action">Capacitaciones</a>
            <a href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Estándares Mínimos (Min. Trabajo)</a>
            <a href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Cierre de Mes</a>
            <a href="#reportes" class="flotartextofila list-group-item list-group-item-action">Simulacro de Evacuación</a>
          </ol>

        </div>

      </div>
      <div class="row">

        <div class=" col-sm-4 col-lg-4">
          <h2>Gestión de Proveedores</h2>
          <ol class="list-group list-group-numbered">
            <a href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Seguridad Social</a>
            <a href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Dotaciones</a>
            <a href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Examenes médicos periódicos</a>
            <a href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Calificación ARL</a>
            <a href="https://drive.google.com/file/d/1k-aCoovHfyCkAt3k8EL7l8M4ezw4hlSW/view?usp=sharing" target="_blank" class="flotartextofila list-group-item list-group-item-action">Formato Autorización de Trabajo en Alturas</a>

          </ol>

        </div>
        <div class=" col-sm-4 col-lg-4">
          <h2>Plan de Emergencia</h2>
          <ol class="list-group list-group-numbered">
            <a href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Plan de Emergencia de la Copropiedad</a>
            <a href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Matriz de Vulnerabilidad por Amenazas</a>
            <a href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Ocurrencia de Peligros</a>
            <a href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Evidencias de Simulacro</a>
            <a href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Brigadistas de la Copropiedad</a>
          </ol>

        </div>
        <div class=" col-sm-4 col-lg-4">
          <h2>Saneamiento Básico</h2>
          <ol class="list-group list-group-numbered">
            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoria Items Secretaría</a>
            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Plagas</a>
            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Agua Potable</a>
            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Residuos</a>
            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Shuts de Basuras</a>
          </ol>

        </div>

      </div>
    </div>

  </section>
  <!-- SECCIÓN DE IMAGEN A LOOKER STUDIO -->
  <section>
    <div class="hero-inferior">
      <a href="https://lookerstudio.google.com/reporting/77074918-ab00-4170-b4f1-cc4285e539c3" target="_blank">
        <img class="hero-inferior-imagen img-fluid" src="imagenes/indicadores.PNG" alt="kpi">
      </a>

    </div>
  </section>

  <!-- SECCIÓN DE LAS TABLAS -->

  <section>
    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="planear">
            <h5>Planear (1)</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>1.1.1 Responsable del SG-SST</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1gbmZFx7RLLpZRMaqNLKPyYtpcz20gMo8/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>1.1.2 Responsabilidades</h6>
            </td>
            <td>
              <a href="https://docs.google.com/spreadsheets/d/1bJauxYnr9eJq_Qc0P2zEML-ToWdIaxDn/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Asignación de Funciones <br>

              <a href="https://docs.google.com/document/d/1MYZnk0UoSrgowMzFjLEJSWGctXISIaqe/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento
            </td>

            <td> 01/01/2024
              <br><br> 01/01/2024
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>1.1.3 Asignación de recursos - presupuesto</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1_U9r2UFlQ_392gmNUSiPyYbnpEalaCfS/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>1.1.6 Elección de Vigía</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/16l2Bgir29OANHPrgR-f0iw1OCSupcPy7/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>1.1.8 Comité de Convivencia Laboral</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1jbzhDdxhHTFzYCBGv5xVfNtCYg0i2EkQ/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>
              <h6>1.2.1 Programa de capacitación PYP</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1Ou0cpu5-1Qfp2xycee2SpAHc--Qyn3fC/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>
              <h6>1.2.2 Inducción y Reinducción SST</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1pvXuN7ipbVKTE02EeuXtkMAHakhlaJFJ/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="planear">
            <h5>Planear (2)</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>2.1.1 Políticas de SST</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1vVPls_Wcf6orVbsQTJj04hlQMTPhy5aS/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política de SST <br>
              <a href="https://docs.google.com/document/d/1D08eEswb5FJR8BxWHr3s-cvXeefil0QB/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política No Alcohol <br>
              <a href="https://docs.google.com/document/d/1gPFCt8tFu28Sw3eNqyAVYl5ardAdmNDm/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política Emergencias <br>
              <a href="https://docs.google.com/document/d/1gAwDC0nF3I29HZdeSqKWrtIAhwOoNSjh/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política EPP´S <br>

            </td>
            <td> 01/01/2024
              <br><br> 01/01/2024
              <br><br> 01/01/2024
              <br><br> 01/01/2024
            </td>

          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>2.2.1 Objetivo</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1ejMPounO28cnRNJJloWgEZqGH5Jnz8qA/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i> </a> <br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>2.3.1 Evaluación Inicial SST</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1rXpCZVITyvASybvtAf04bjFG6rDLEBdD/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>2.4.1 Plan de trabajo anual</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1Oppb1-1YB53OzVmTJS6HqwZSl3kIacg6/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>2.5.1 Archivo y retención documental</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1X7FoxGa55LWjBojkFcsdVJD9EtTvnI3j/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento <br>

              <a href="https://docs.google.com/spreadsheets/d/1GBKbCGYfh74OGio77CS5zOntyx3ZUYRt/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> 01/01/2024
              <br><br> 01/01/2024
            </td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>
              <h6>2.10.1 Manual de Proveedores y Contratistas</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1vP5fAsGEVAIFpWb8Ow8ui57ylLNMaqEW/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Manual <br>

            </td>
            <td> 01/01/2024</td>
          </tr>
      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="hacer">
            <h5>Hacer</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row">1</th>
            <td>
              <h6>3.2.2 Investigación de incidentes y accidentes</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1tkm2427xJtj5nIWKIhW0a4TDOifxZIYU/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>

              <a href="https://docs.google.com/document/d/1y_qlsO7BF0_hafzpNblM76azdsXiM7dC/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Procedimiento Para Reporte de Accidentes

            </td>
            <td> 01/01/2024
              <br><br>01/01/2024
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>4.1.1 Metodología para la identificación de peligros</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1pg1KEtyxHnBC__YdfNst0YsNyk0cwNxC/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>4.1.2 Identificación de peligro y valoración de riesgos</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/1EjPxpaAc6bk9M6xbBqlGu6bzmjhu84T8/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Reg. Higiene y Seg-Ind.

              <br>

              <a href="https://docs.google.com/document/d/1VKq4qUHGYXZNbVIsPhqh7YSzaNjlCiho/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Decreto 2090 de 2003 <br>

              <a href="https://docs.google.com/spreadsheets/d/1eHhiF7hBt1VbpEuiD1eQqOsixhbWb7R6/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true">Hoja de Cálculo Matriz de Peligros</b>

            </td>
            <td> 01/01/2024
              <br><br>01/01/2024
              <br><br>18/07/2024
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>4.2.5 Mantenimientos</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1kc87FRUc_Tm3TMicWKYt61lNrhc20JsZ/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> 01/01/2024</td>
          </tr>

      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="verificar">
            <h5>Verificar</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>6.1.3 Revisión anual de la alta dirección, resultados de la auditoría (2024)</h6>
            </td>
            <td>

              <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>6.1.4 Planificación auditorias</h6>
            </td>
            <td>

              <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> --</td>
          </tr>


      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="actuar">
            <h5>Actuar</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>7.1.1 Definición de acciones preventivas y correctivas con base en resultados del SG-SST (2025)</h6>
            </td>
            <td>

              <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>7.1.2 Acciones de mejora conforme a revisión de la alta dirección (2025)</h6>
            </td>
            <td>

              <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>

            </td>
            <td> --</td>
          </tr>


      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="inspecciones">
            <h5>Inspecciones</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Inspección General</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1NVUpDV27EIzz4yhbh5ICmlIAwpQaU5IU/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td>17/06/2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Inspección Extintores</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1vZwG8pkR-O2vZN11mXB8pbBNsscQNuMI/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 17/06/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Inspección Botiquines</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1b6H7yp2viwrNlIl9OHY8EFBQYD43Q4o1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br><br>
              <a href="https://drive.google.com/file/d/1xN4yu1o8cED-xQJ_IrH7t4UX05j8TDGc/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br><br>


            </td>
            <td>17/06/2024
              <br><br>12/08/2024
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Inspección Equipos de Comunicaciones</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1BRTwJ3QF09VjQj_nVqxldIzCGVa50lrq/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td>17/06/2024</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>Inspección Gabinetes Contra Incendio</h6>
            </td>
            <td>

              <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>
              <h6>Inspección Recursos para la Seguridad</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1bdWUEWhi9yTkJlqVf874QJ9cc_6dgasB/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td>17/06/2024</td>
          </tr>


      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="reportes">
            <h5>Reportes</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Acta de Visita</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1qq4FRFlohPyvoQRZi9BrD-MLk8rH-681/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1ipd-tGsQFxeZP3rs30Y-YNzYoESB8U47/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1RymDT6JBQqUev-RPe8DYPdG6vHiC3Foc/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1kZW6SPYqsjkbDrHyFmDX_y1e9mEoTUmS/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1B-vnKcSLZEmZ6IFbmSwDSakKUMXGgzUG/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1hi2XOdEJfgZNjWZfODc6g12mhXtKWhd0/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1cNkTCR942r5lrcp1pJxK9hHdg_4TnGCu/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1IETjTmaREaQ7irzl119aEh_OBeT7Lqp0/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1pDDVMPMsGdi9y4D_cX_kqZAe4qUhJbWD/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->

            </td>
            <td> 01/01/2024
              <br><br>08/02/2024
              <br><br>04/03/2024
              <br><br>08/04/2024
              <br><br>31/05/2024
              <br><br>17/06/2024
              <br><br>08/07/2024
              <br><br>23/07/2024
              <br><br>12/08/2024
              <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->

            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Capacitaciones</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1rxTbjNkKJemKpZjGnaTbCEHqz-5zxxAO/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1zN-5jlBYd-7O-sMXSNGwj-L_d9Igd2cM/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Peligro Biomecánico - Pausas Activas, Manejo De Cargas, Posturas, Movimiento Repetitivo, Lesiones, Enfermedades <br>
              <a href="https://drive.google.com/file/d/1Kqx0YkIHNg2dDZP2ckQ0Y7Bo3LwtehJg/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Certificado Curso 50 Horas - Edita Sanbria <br>
              <a href="https://drive.google.com/file/d/1EkjfruJxyNonfwlNUtf_mIWdpXcEcLq_/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Certificado 50 Horas ASTRID LILIANA AREVALO CORTES<br>
              <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->


            </td>
            <td> 08/02/2024
              <br><br>26/06/2024
              <br><br><br>13/08/2024
              <br><br><br>13/08/2024
              <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->

            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Reporte Estándares Mínimos (Min. Trabajo)</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/18cFAqS6OJH7NNJNmMLpdfGohqQ_jpo_U/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Reporte Cierre de Mes</h6>
            </td>
            <td>


              <a href="https://drive.google.com/file/d/13Q1e8wxoBgguKjDL5imPTZ0Od4xUnfI9/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1P1voURpiooTFPa1Vk8He72gPalpX_b9G/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/18WHA6zccMq4AS0K-5BRD55P42R3oIPV-/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1nPERkwJSZJMVk_mT_NYaDwe1XH_tlfXz/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1ZyIHCQ4f6F80qis2hfIYyyE3Rkit6wJK/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1YgcHDHpE2rlv-w99P2bqMpYixokJ-i-P/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1jF8q3HoC3jpB9s4G9GUdLNiaR-o1JlIz/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->

            </td>
            <td> 31/01/2024
              <br><br>28/02/2024
              <br><br>31/03/2024
              <br><br>30/04/2024
              <br><br>31/05/2024
              <br><br>30/06/2024
              <br><br>31/07/2024
              <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>Simulacro de Evacuación</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>





      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="proveedores">
            <h5>Proveedor de Aseo</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Certificado Seguridad Social Año Anterior</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1zDb7StrhpGLuIPVE_cZBbEvEold5lcxm/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 31/03/2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Dotaciones</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1qwCk3XtOUWgHqBRl5JP3VhvtdBqr_QaV/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Limpieza y desinfección de torres


            </td>
            <td>08/07/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Exámenes médicos periódicos</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Calificación ARL</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1MErnv4FlFv0pxFuaNAymPJ39RqQF1CZy/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 31/03/2024</td>
          </tr>
      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="proveedores">
            <h5>Proveedor de Vigilancia</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Certificado Seguridad Social Año Anterior</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Dotaciones</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1Y_iy9fgmvb5uQZCIJtStJDfOaAtiaJal/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td>08/07/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Exámenes médicos periódicos</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Calificación ARL</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="emergencia">
            <h5>Plan de Emergencia</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Plan de Emergencia de la Copropiedad</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1FESFg2V6U1xwRg1HNH3LnNwdOHuDW_aY/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Matriz de Vulnerabilidad por Amenazas</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1y3K7aC61v3WztMUx_GEQWnMqxKdD-Zoh/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td>17/06/2024</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Ocurrencia de Peligros</h6>
            </td>
            <td>

              <a href="https://drive.google.com/file/d/1ORuX2mpk7cPHRjAqlS9dycVACGUDGg6T/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
              <a href="https://drive.google.com/file/d/1vN0pipFVnPYVLe2sR8-x7PhUrpSIQXjs/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 11/04/2024
              <br><br>17/06/2024
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Evidencias de Simulacro</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>Brigadistas de la Copropiedad</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>





      </table>
    </div>

    <div class="table-responsive-sm table-responsive-md container">
      <table class="table caption-top table-striped table-bordered">
        <div class="flex-container">
          <div id="saneamiento">
            <h5>Plan de Saneamiento</h5>
          </div>
          <div><a href="#inicio">Ir al Inicio</a></div>

        </div>

        <thead>
          <tr>
            <th style="width: 9%;" scope="col">#</th>
            <th style="width: 47%;" scope="col">NUMERAL</th>
            <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
            <th style="width: 27%;" scope="col">FECHA DE CARGA</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <h6>Plan de Saneamiento</h6>
            </td>
            <td>

              <a href="https://docs.google.com/document/d/11PZE2zxAWhHQ-9dxFEPDcgS1T6T2ohaS/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> 01/01/2024</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <h6>Manejo de Residuos</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <h6>Shuts de Basuras</h6>
            </td>
            <td>

              <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>

            </td>
            <td> --</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>
              <h6>Manejo de Plagas</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1n4W1ByU_bF_ZnuFnONhBjg8XZJOqwMfK/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
              <br>
              <a href="https://drive.google.com/file/d/1fMUAwZtfrSMp4GV2oLT-dRoyUeUXTou1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>CERTIFICADO CONTROL DE PLAGAS 20240724<br>
            </td>
            <td> 01/01/2024
              <br><br>13/08/2024
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>
              <h6>Agua Potable</h6>
            </td>
            <td>

              <a href="https://docs.google.com/spreadsheets/d/1naIc5LED6lsID3UFylOsnoSlYv3QDobZ/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>

              <a href="https://drive.google.com/file/d/1kB48JJpHTU9FaftPTR3-Q9IE1DUcMtcT/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>CERTIFICADO LAVADO DE TANQUES 2024072024 <br>
            </td>
            <td> 01/01/2024
              <br><br>13/08/2024

            </td>
          </tr>


      </table>
    </div>
  </section>

  <footer>
    <div class="container">

      <div class="row text-align-center">

        <div class="col-sm-6 col-lg-6">
          <h5>
            Todos los derechos reservados Cycloid Talent SAS® &#169 (2024)
          </h5>
        </div>
        <div class="col-sm-6 col-lg-6">
          <h5 style="color: aquamarine;">Su contrato actual vence el (31/12/2025)</h5>
          <a href="#" target="_blank">
            <button type="button" class="btn btn-primary contrato">Acceder al contrato <i class="bi bi-arrow-right-circle-fill"></i></button>
          </a>
        </div>

      </div>

    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


<?= $this->endSection() ?>