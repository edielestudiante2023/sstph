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
    width: 180px;
    height: 180px;
    /* border-radius: 50%; */
    margin: 20px;
}

.hero-principal h2 {
    font-size: 1rem;
    color: rgb(119, 70, 7);
}

.hero-principal {
    width: 100%; /* Ancho del div */
    200pxheight: 200px; /* Alto del div  quitando logo*/
    
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
  
  .styled-table th, .styled-table td {
    border: 1px solid #ddd;
    padding: 8px;
    word-wrap: break-word;
    max-width: 200px; /* Ancho máximo que puede tener cada celda */
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
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/f982d17a-ae1a-48dd-929f-2bbda1d5190d" target="blank">Indicadores SST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/b508a21a-fc30-41b3-8378-8b2163480e86" target="_blank">Curso de Brigada Básica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/f51b8624-e27c-4d1f-ac21-05ab4836d7f3" target="_blank">Evolución del Sistema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.appsheet.com/start/83d11c24-c6ed-40cf-a77d-8ceaafdd581a" target="_blank">CENSO 2024</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mailto:edison.cuervo@cycloidtalent.com" target="_blank">Escribenos Por Email</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('logout') ?>">Salir</a>
              </li>
            </ul>
            <a class="navbar-brand" href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
                <img src="imagenes/ENCANTO4.png" width="100" alt="Logo Cliente">
            </a>
          </div>
        </div>
    </nav>

    <!-- SECCION PRINCIPAL - HERO -->
    <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
            <!-- <img class="hero-logo-cliente" src="imagenes/LOGO_SST.png"  alt="Logo del cliente"> -->
            <h2>CYCLOID TALENT SAS</h2> <br> <br> <h1>ASESORIA EXPERTA EN PROPIEDAD HORIZONTAL</h1>
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
                            <a href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoría Depósito de Basuras</a>
                          </ol>

                    </div>
                
            </div>
        </div>
        
    </section>
    <!-- SECCIÓN DE IMAGEN A LOOKER STUDIO -->
    <section>
        <div class="hero-inferior">
          <a href="https://lookerstudio.google.com/reporting/f982d17a-ae1a-48dd-929f-2bbda1d5190d" target="_blank">
            <img class="hero-inferior-imagen img-fluid" src="imagenes/indicadores.PNG" alt="kpi">
          </a>

        </div>
    </section>

    <!-- SECCIÓN DE LAS TABLAS -->
    
    <section>
        <div class="table-responsive-sm table-responsive-md container">
            <table class="table caption-top table-striped table-bordered">
                <div class="flex-container">
                    <div id="planear"><h5>Planear (1)</h5></div>
                    <div><a href="#inicio">Ir al Inicio</a></div>

                </div>
                
                <thead >
                  <tr>
                    <th style="width: 9%;" scope="col">#</th>
                    <th style="width: 47%;" scope="col">NUMERAL</th>
                    <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                    <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><h6>1.1.1 Responsable del SG-SST</h6></td>
                    <td> 
                      
                      <a href="https://drive.google.com/file/d/1YR3zqzZbowVu2ao_RZnWFi9UnThZVwWo/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                    <td>18/07/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><h6>1.1.2 Responsabilidades</h6></td>
                    <td> 
                      <a href="https://docs.google.com/spreadsheets/d/1RqgKzftYYtdPKYIAaWnQt3cm_HlZnBWF/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"> </i></a></i><br>Asignación de Funciones <br> 
                      
                      <a href="https://docs.google.com/document/d/1vaDjsEWrH9RCpmHVJyLKoPQiICS68f1o/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento</td>

                    <td> 01/07/2024
                      <br><br> 01/07/2024
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><h6>1.1.3 Asignación de recursos - presupuesto</h6></td>
                    <td> 
                      
                      <a href="https://docs.google.com/spreadsheets/d/1clA0BiEhA511eRjxfmBqKrw02PaXRHzv/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                    
                    </td>
                    <td>01/07/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><h6>1.1.6 Elección de Vigía</h6></td>
                    <td> 

                      <a href="https://docs.google.com/document/d/1cKHEa7_Om2suiQfHAAH57mTDLFjKuRK5/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                    <td>01/07/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><h6>1.1.8 Comité de Convivencia Laboral</h6></td>
                    <td> 
                      
                      <a href="https://drive.google.com/file/d/1Qg6bGB7DuV9lNYKYuxQPgDUAq8oW7v3U/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                    <td>18/07/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td><h6>1.2.1 Programa de capacitación PYP</h6></td>
                    <td> 
                      
                      <a href="https://docs.google.com/document/d/1PKVRdDBIugnuCxfHTxsp4SL50YWT85hX/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                    <td>01/07/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td><h6>1.2.2 Inducción y Reinducción SST</h6></td>
                    <td> 
                      
                      <a href="https://docs.google.com/document/d/1NFFEFrCvR8dqEvhUPruqsLjwnL3qLBHV/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Programa de Inducción
                    
                    </td>
                    <td>01/07/2024</td>
                  </tr>
              </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="planear"><h5>Planear (2)</h5></div>
                  <div><a href="#inicio">Ir al Inicio</a></div>

              </div>
              
              <thead >
                <tr>
                  <th style="width: 9%;" scope="col">#</th>
                  <th style="width: 47%;" scope="col">NUMERAL</th>
                  <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                  <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><h6>2.1.1 Políticas de SST</h6></td>
                  <td> 
                    
                    <a href="https://drive.google.com/file/d/1C__ZiWrOixq_RI7Mlm4sd_C2dj0Djxbd/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política de SST<br>
                    <a href="https://drive.google.com/file/d/1bJ9W1-lvTd6_DPzbdomrNg50mhyVI9Vp/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política No Alcohol<br>
                    <a href="https://drive.google.com/file/d/1cDJBNCnsQo5GEiuJGPNcZNH_nip4bXmm/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política Emergencias<br>
                    <a href="https://drive.google.com/file/d/1zG2-DV8ikjcGUPAIHCU8j7LSkXUiHAh1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política EPP´S<br>
                  
                  </td>
                  <td> 18/07/2024
                      <br><br> 18/07/2024
                      <br><br> 18/07/2024
                      <br><br>18/07/2024
                    </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><h6>2.2.1 Objetivos</h6></td>
                  <td> 
                    
                    <a href="https://drive.google.com/file/d/1Z13URVwZRWw2BByshzn4ZUo90EHl0AWp/view?usp=sharing"target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento
                  
                  </td>
                  <td>18/07/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><h6>2.3.1 Evaluación Inicial SST</h6></td>
                  <td> 
                    
                    <a href="#" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                  <td>--</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><h6>2.4.1 Plan de trabajo anual</h6></td>
                  <td> 
                    
                    <a href="https://docs.google.com/spreadsheets/d/1oJRNpyRjWMZgtxPe4n2n8wcUYb6oGShQ/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                  <td>01/07/2024</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td><h6>2.5.1 Archivo y retención documental</h6></td>
                  <td> 
                    
                    <a href="https://docs.google.com/document/d/1ghLzw2L3w0h1fWN527LEM9gEsMvMuuud/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento <br> 
                    
                    <a href="https://docs.google.com/spreadsheets/d/1h1q6oYCGr8P93qk7aYWEI2Rrul7RFMi2/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                  
                  </td>
                  <td> 01/07/2024
                    <br><br> 01/07/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td><h6>2.10.1 Manual de Proveedores y Contratistas</h6></td>
                  <td> 
                    
                  <a href="https://docs.google.com/document/d/1ZVHybNYkCYDMb6AwszbGgIba4QYRvN5w/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Manual <br>

                  
                  </td>
                  <td>01/07/2024</td>
                </tr>
            </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="hacer"><h5>Hacer</h5></div>
                  <div><a href="#inicio">Ir al Inicio</a></div>

              </div>
              
              <thead >
                <tr>
                  <th style="width: 9%;" scope="col">#</th>
                  <th style="width: 47%;" scope="col">NUMERAL</th>
                  <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                  <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
                </tr>
              </thead>
              <tbody>
              
                <tr>
                  <th scope="row">1</th>
                  <td><h6>3.2.2 Investigación de incidentes y accidentes</h6></td>
                  <td> 
                    
                    <a href="https://docs.google.com/spreadsheets/d/1_CHdkvyG7OoJQfZ4nSBS4--RN593N2jj/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>
                    <a href="https://docs.google.com/document/d/1LtqdVzJUxizqXF0H3B8gJmvoyWgkDnZ9/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a><br>Procedimiento reporte de accidentes
                  </td>
                  <td> 01/07/2024
                    <br><br> 01/07/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td><h6>4.1.1 Metodología para la identificación de peligros</h6></td>
                  <td> 
                    
                  <a href="https://docs.google.com/document/d/1TzL08tXMqAT_9ukZZIFJQqtY6kgtFs9j/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a><br>Documento
                  
                  </td>
                  <td>01/07/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td><h6>4.1.2 Identificación de peligro y valoración de riesgos</h6></td>
                  <td> 
                    
                    <a href="https://drive.google.com/file/d/1ombY_-rKpf0MsCtOPYRxRyaehcTuew2y/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Reg. Higiene y Seg-Ind. 
                    
                    <br> 
                    
                    <a href="https://drive.google.com/file/d/1nWu-hopruouQgkgqlcWdtirYM4O5Tdv_/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Decreto 2090 de 2003 <br> 
                    
                    <a href="https://docs.google.com/spreadsheets/d/16bAbuvo8kWnLDa_ciOsFcyE1Bm3W2Vbv/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Matriz de Peligros</b>
                  
                  </td>
                  <td>18/07/2024
                    <br><br>18/07/2024
                    <br><br>18/07/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td><h6>4.2.5 Mantenimientos</h6></td>
                  <td> 
                    
                    <a href="https://docs.google.com/spreadsheets/d/1psPYGonweSpyuy4tPjSK8WbhYS8FfRqd/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                  <td>01/07/2024</td>
                </tr>
                
            </table>
        </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="verificar"><h5>Verificar</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead >
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>6.1.3 Revisión anual de la alta dirección, resultados de la auditoría (2024)</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>6.1.4 Planificación auditorias</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                <td>--</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="actuar"><h5>Actuar</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead >
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>7.1.1 Definición de acciones preventivas y correctivas con base en resultados del SG-SST (2025)</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>7.1.2 Acciones de mejora conforme a revisión de la alta dirección (2025)</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><a href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                <td>--</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="inspecciones"><h5>Inspecciones</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead >
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Inspección General</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1W5ebzKKbQj86AA-HIBMjj02FFF1Hq7Sj/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Inspección Extintores</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1GgT3FHhuHVpXzfisNN0M9blM5K7AKOhT/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Inspección Botiquines</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1FCQskxgUW1RpwMKCNuezAMDpY1gwuPTx/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Inspección Equipos de Comunicaciones</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1Ujds3N7FsE7h_l3PV4vkT6yGHJp-GIfU/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td><h6>Inspección Gabinetes Contra Incendio</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1yCg7HqRvzR1-Wfr5BHB0uu4vp-SS_g2g/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>29/10/2024</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td><h6>Inspección Recursos para la Seguridad</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1pV1AHhxw9JmcTiRlrgDRqDglkTeLMerg/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="reportes" ><h5>Reportes</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead>
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Acta de Visita</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1Hl9ZkIp4IN3bpmv4eWduFCzfS8EzJS3U/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="https://drive.google.com/file/d/1og_yoi77jqiJIB3nYGNdtO1QFnlzRL8H/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="https://drive.google.com/file/d/1kzb4sRJPY4UW1pt8OBO3wLZyy1kd2JQ8/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <!-- <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                </td> 
                <td> 18/07/2024
                  <br><br>10/09/2024
                  <br><br>25/10/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->
                  
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Capacitaciones</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1dde_b-cIpfLjPgjL_4fZbJbnyyUrKn_L/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="https://drive.google.com/file/d/1pxWwlyfZ-VUKT7nwRbJm2-MLqYQXjHN9/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Preparación De Brigada - Planeación De Simulacro <br>
                  <!-- <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                
                </td>
                <td>25/07/2024
                  <br><br>23/09/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->
                  
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Reporte Estándares Mínimos (Min. Trabajo)</h6></td>
                <td> 
                  
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Reporte Cierre de Mes</h6></td>
                <td> 
                  
                  
                  <a href="https://drive.google.com/file/d/16OjxeIfTA3NK23L6tzOUKg4mStYExduJ/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="https://drive.google.com/file/d/1D0qiom22mH6JBDMkiCGk56T3X3Pv64Et/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="https://drive.google.com/file/d/1o1OGE9VpivHYn41Gghl1H5cS4ytK5_yl/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <!-- <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                </td>
                <td>31/07/2024
                  <br><br>30/09/2024
                  <br><br>31/10/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>--
                  <br><br>-- -->
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td><h6>Simulacro de Evacuación</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Aseo</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead>
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Certificado Seguridad Social Año Anterior</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Dotaciones</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Auditoria del Proveedor</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Calificación ARL</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Vigilancia</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead>
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Certificado Seguridad Social Año Anterior</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Dotaciones</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Auditoria del Proveedor</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Calificación ARL</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="emergencia" ><h5>Plan de Emergencia</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead>
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Plan de Emergencia de la Copropiedad</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1_h71jMXxXFDI6paoYvNysofDci6_SQwL/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Plan de Emergencia Familiar
                </td>
                <td>01/11/2024
                  <br><br>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Matriz de Vulnerabilidad por Amenazas</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1XWLmNYmHaamaz1fe-WCOpAAXYERbzmqX/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Ocurrencia de Peligros</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1e6hNoAqSF3UIEzHlpLVfATYRCmb6iVYX/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>25/10/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Informe de Simulacro</h6></td>
                <td> 
                  
                  <a href="https://drive.google.com/file/d/1oZhNabvKP2yCyI9zkVbKT9plf7xJ4LQy/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>02/10/2024</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td><h6>Brigadistas de la Copropiedad</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>--</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="saneamiento" ><h5>Plan de Saneamiento</h5></div>
                <div><a href="#inicio">Ir al Inicio</a></div>

            </div>
            
            <thead>
              <tr>
                <th style="width: 9%;" scope="col">#</th>
                <th style="width: 47%;" scope="col">NUMERAL</th>
                <th style="width: 17%;" scope="col">CLIC PARA ACCEDER</th>
                <th style="width: 27%;"scope="col">FECHA DE CARGA</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><h6>Plan de Saneamiento</h6></td>
                <td> 
                  
                  <a href="https://docs.google.com/document/d/195LkIvoIa4kPA_rtCF6pp7VG8whMoDn0/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                <td>01/07/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><h6>Manejo de Residuos</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td><h6>Auditoría Depósito de Basuras</h6></td>
                <td> 
                  
                  <a href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  
                </td>
                <td>--</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td><h6>Manejo de Plagas</h6></td>
                <td> 
                  
                  <a href="https://docs.google.com/spreadsheets/d/1-wTKb68zHyqK7FLRSidsOAspw7EXBFk2/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>
                  
                  <a href="https://drive.google.com/file/d/1t4MSGZitDqFUv23pGCB1AeKntoVrXSmi/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>CERTIFICADO FUMIGACION EL ENCANTO 20240624
                </td>
                <td>01/07/2024
                  <br><br>21/08/2024
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td><h6>Agua Potable</h6></td>
                <td> 
                  
                  <a href="https://docs.google.com/spreadsheets/d/1shBPmWVcR8z9wPQ7uyUoVvHA9v5o_s81/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>
                  
                  <a href="https://drive.google.com/file/d/1nIttA3VvHWUXyVa5lIrsfYv1skAfbLkm/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>LAVADO DE TANQUES 20240222
                </td>
                <td>01/07/2024
                  <br><br>21/08/2024
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
            <h5 style="color: aquamarine;">Su contrato actual vence el (30/07/2025)</h5>
            <a href="https://drive.google.com/file/d/1FAb6_JChUqlp_fQrv_7J4wBVC3LixVqt/view?usp=sharing" target="_blank">
              <button type="button" class="btn btn-primary contrato">Acceder al contrato <i class="bi bi-arrow-right-circle-fill"></i></button>
            </a>
            <a href="https://drive.google.com/file/d/1lvN8T_XYTNjimL8mqTNFmBzlY2bosK3F/view?usp=sharing" target="_blank">
              <button type="button" class="btn btn-primary contrato">Acceder al acuerdo de confidencialidad <i class="bi bi-arrow-right-circle-fill"></i></button>
            </a>
          </div>

        </div>

      </div>
    </footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<?= $this->endSection() ?>