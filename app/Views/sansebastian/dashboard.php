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
    <link rel="icon" type="image/x-icon"  href="imagenes/LOGO_SST.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- ICONS  -->
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    

    <!-- FUENTES DE GOOGLE -->
    <link rel="preconnect"  href="https://fonts.googleapis.com">
    <link rel="preconnect"  href="https://fonts.gstatic.com" crossorigin>
    <link  href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">

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
    height: 60px;
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
            <a class="navbar-brand"  href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
                <div>
                <img src="imagenes/LOGO_SST.png" width="100" alt="Logo Página">
                <img src="imagenes/CYCLOID_ TALENT_SIN_FONDO.png" width="100" alt="Logo Página">
                </div>
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">Cycloid Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="https://lookerstudio.google.com/reporting/2966838e-c4b1-4db6-9145-faee4a39492f" target="blank">Indicadores SST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/b508a21a-fc30-41b3-8378-8b2163480e86" target="_blank">Curso de Brigada Básica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/f51b8624-e27c-4d1f-ac21-05ab4836d7f3" target="_blank">Evolución del Sistema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="mailto:edison.cuervo@cycloidtalent.com" target="_blank">Escribenos Por Email</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="<?= site_url('logout') ?>">Salir</a>
              </li>
            </ul>
            <a class="navbar-brand"  href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
                <img src="imagenes/SAN_SEBASTIAN.png" width="100" alt="Logo Página">
            </a>
          </div>
        </div>
    </nav>

    <!-- SECCION PRINCIPAL - HERO -->
    <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
            <!-- <img class="hero-logo-cliente" src="imagenes/SAN_SEBASTIAN.png"  alt="Logo del cliente"> -->
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
                            <a  href="#planear" class="flotartextofila list-group-item list-group-item-action">Planear</a>
                            <a  href="#hacer" class="flotartextofila list-group-item list-group-item-action">Hacer</a>
                            <a  href="#verificar" class="flotartextofila list-group-item list-group-item-action">Verificar</a>
                            <a  href="#actuar" class="flotartextofila list-group-item list-group-item-action">Actuar</a>
                            <a href="https://safetya.co/normatividad/resolucion-0312-de-2019/#a9" target="_blank" class="flotartextofila list-group-item list-group-item-action">Marco Normativo</a>
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Inspecciones</h2>
                        <ol class="list-group list-group-numbered">
                            <a  href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección General</a>
                            <a  href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Extintores</a>
                            <a  href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Botiquines</a>
                            <a  href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Gabinetes Contra Incendio</a>
                            <a  href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Recursos para la Seguridad</a>
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Reportes</h2>
                        <ol class="list-group list-group-numbered">
                            <a  href="#reportes" class="flotartextofila list-group-item list-group-item-action">Acta de Visita</a>
                            <a  href="#reportes" class="flotartextofila list-group-item list-group-item-action">Capacitaciones</a>
                            <a  href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Estándares Mínimos (Min. Trabajo)</a>
                            <a  href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Cierre de Mes</a>
                            <a  href="#reportes" class="flotartextofila list-group-item list-group-item-action">Simulacro de Evacuación</a>
                        </ol>

                    </div>
                
            </div>
            <div class="row">
                
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Gestión de Proveedores</h2>
                        <ol class="list-group list-group-numbered">
                            <a  href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Seguridad Social</a>
                            <a  href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Dotaciones</a>
                            <a  href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Examenes médicos periódicos</a>
                            <a  href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Calificación ARL</a>
                            <a href="https://drive.google.com/file/d/1k-aCoovHfyCkAt3k8EL7l8M4ezw4hlSW/view?usp=sharing" target="_blank" class="flotartextofila list-group-item list-group-item-action">Formato Autorización de Trabajo en Alturas</a>
                            
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Plan de Emergencia</h2>
                        <ol class="list-group list-group-numbered">
                            <a  href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Plan de Emergencia de la Copropiedad</a>
                            <a  href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Matriz de Vulnerabilidad por Amenazas</a>
                            <a  href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Ocurrencia de Peligros</a>
                            <a  href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Evidencias de Simulacro</a>
                            <a  href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Brigadistas de la Copropiedad</a>
                          </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Saneamiento Básico</h2>
                        <ol class="list-group list-group-numbered">
                            <a  href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoria Items Secretaría</a>
                            <a  href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Plagas</a>
                            <a  href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Agua Potable</a>
                            <a  href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Residuos</a>
                            <a  href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoría Depósito de Basuras</a>
                          </ol>

                    </div>
                
            </div>
        </div>
        
    </section>
    <!-- SECCIÓN DE IMAGEN A LOOKER STUDIO -->
    <section>
        <div class="hero-inferior">
          <a  href="https://lookerstudio.google.com/reporting/2966838e-c4b1-4db6-9145-faee4a39492f" target="_blank">
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
                    <div><a  href="#inicio">Ir al Inicio</a></div>

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
                     <td> <h6>1.1.1 Responsable del SG-SST</h6></td>
                     <td>  
                      
                      <a  href="https://docs.google.com/document/d/15TMD8Je6x20Hqr6nSZaLqM1wvYXqTh2E/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                     <td> <h6>1.1.2 Responsabilidades</h6></td>
                     <td>  
                      <a  href="https://docs.google.com/spreadsheets/d/1dDiBDCM7PlCTk5OgNMUa4x6nDz8iUSFi/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Asignación de Funciones <br> 
                      
                      <a  href="https://docs.google.com/document/d/1EkopU581xk3Tt8Yn8E30o_388sHtDntd/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento</td>

                     <td>  01/05/2024
                      <br><br>01/01/2024
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                     <td> <h6>1.1.3 Asignación de recursos - presupuesto</h6></td>
                     <td>  
                      
                      <a  href="https://docs.google.com/spreadsheets/d/1FpVIaBAmiillbzCYfbh6z92WQH4CARcF/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                     <td> <h6>1.1.6 Elección de Vigía</h6></td>
                     <td>  

                      <a  href="https://docs.google.com/document/d/19x35bjrstbXrnfwTG9X-mI_JbYDBfmRs/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> --</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                     <td> <h6>1.1.8 Comité de Convivencia Laboral</h6></td>
                     <td>  
                      
                      <a  href="https://docs.google.com/document/d/1hurk7qimYyU2gBEtQw39ydO76-gLgIKM/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                     <td> <h6>1.2.1 Programa de capacitación PYP</h6></td>
                     <td>  
                      
                      <a  href="https://docs.google.com/document/d/1ScNMu-qfTXZx7iXak8bGAa7t3LVdoxBo/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                     <td> <h6>1.2.2 Inducción y Reinducción SST</h6></td>
                     <td>  
                      
                      <a  href="https://docs.google.com/document/d/19ovI1aoqcLVFkO70VH6k3zCd64o4TWU3/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
              </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="planear"><h5>Planear (2)</h5></div>
                  <div><a  href="#inicio">Ir al Inicio</a></div>

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
                   <td> <h6>2.1.1 Políticas de SST</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/document/d/1YAfXFy8DMqVW0SZzN8S84wfP1EVsNeVM/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política de SST<br>
                    <a  href="https://docs.google.com/document/d/1U86GCTxIeSkN6nYoo_RoiYfNzxv7qN6c/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política No Alcohol<br>
                    <a  href="https://docs.google.com/document/d/1_laeC2YQHzib-X8UME8bt3fEU0tAzGp5/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política Emergencias<br>
                    <a  href="https://docs.google.com/document/d/1eMU7CwWfqARED7jbzWMyzhzymUCB8a7q/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política EPP´S<br>
                  
                  </td>
                   <td>  01/01/2024 
                      <br><br> 01/01/2024
                      <br><br> 01/01/2024
                      <br><br> 01/01/2024
                    </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td> <h6>2.2.1 Objetivos</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/document/d/1rt-MDEMarwMcF92oSFWJ-SgDVrYoP0Cx/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true"target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                   <td> <h6>2.3.1 Evaluación Inicial SST</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/spreadsheets/d/1vham0VAzKGaONw4NXsPFlKeWXceUFmTS/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                   <td> <h6>2.4.1 Plan de trabajo anual</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/spreadsheets/d/1KCKJSUpuJiDEI39BqjpWyaCX-mxO2zxM/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                   <td> <h6>2.5.1 Archivo y retención documental</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/document/d/1RjWzqT6FrfXmYGB70b9NjE9R_zx96lp3/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento <br> 
                    
                    <a  href="https://docs.google.com/spreadsheets/d/1FAQ6HxVdPp4mwQLETp-IxMg6gry0fmLz/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                  
                  </td>
                   <td>  01/01/2024
                    <br><br> 01/01/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                   <td> <h6>2.10.1 Manual de Proveedores y Contratistas</h6></td>
                   <td>  
                    
                   <a href= "https://docs.google.com/document/d/1Fj0F41tNwRfNcQDJArmhqxaJ5pTcDeGc/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Manual <br>
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
            </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="hacer"><h5>Hacer</h5></div>
                  <div><a  href="#inicio">Ir al Inicio</a></div>

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
                   <td> <h6>3.2.2 Investigación de incidentes y accidentes</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/spreadsheets/d/1LWkPySgBOtSkMh4yUpNrwL1S9whZx3PA/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td> <h6>4.1.1 Metodología para la identificación de peligros</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/document/d/1NWPXwaU4suQOVyPMxxQvJdyFdt6mHjVS/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true"target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                   <td> <h6>4.1.2 Identificación de peligro y valoración de riesgos</h6></td>
                   <td>  
                    
                    <a  href="https://docs.google.com/document/d/1SgJuao1RdTBgZAloHzwrJNul3fOT9oir/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Reg. Higiene y Seg-Ind. 
                    
                    <br> 
                    
                    <a  href="https://docs.google.com/document/d/1y7--AUfsUsHybzOdMpCFkMxzvTbjECxT/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Decreto 2090 de 2003 <br> 
                    
                    <a  href="https://docs.google.com/spreadsheets/d/1bvbFOC4nNhuYj3smQPaw3uCXVnhCPHLt/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Matriz de Peligros</b>
                  
                  </td>
                   <td> 01/01/2024
                    <br><br>01/01/2024
                    <br><br>18/07/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                   <td> <h6>4.2.5 Mantenimientos</h6></td>
                   <td>  
                    
                    <a  href="#" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> --</td>
                </tr>
                
            </table>
        </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="verificar"><h5>Verificar</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>6.1.3 Revisión anual de la alta dirección, resultados de la auditoría (2024)</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><a  href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>6.1.4 Planificación auditorias</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><a  href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="actuar"><h5>Actuar</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>7.1.1 Definición de acciones preventivas y correctivas con base en resultados del SG-SST (2025)</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><a  href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>7.1.2 Acciones de mejora conforme a revisión de la alta dirección (2025)</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><a  href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="inspecciones"><h5>Inspecciones</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Inspección General</h6></td>
                 <td>  
                  
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Inspección Extintores</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1Lwiwgu1_CTLRSGc4Vm7SH11aySkaYL4t/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 10/04/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Inspección Botiquines</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1rPwX_LbasguwEuv97uDHe96dh0kPL15K/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1ZG4jg1UKc_lzm5OZpuojjUo6kqrkforL/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                
                </td>
                 <td> 10/04/2024
                  <br><br>14/08/2024
                 </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Inspección Equipos de Comunicaciones</h6></td>
                 <td>  
                  
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Inspección Gabinetes Contra Incendio</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1MK8rmGPLSVcZzBGgNHRXl_mvosIQAERP/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 10/04/2024</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                 <td> <h6>Inspección Recursos para la Seguridad</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/15g2mO25atLDmaJLVMOcN0FL91GlSoFxI/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 10/04/2024</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="reportes" ><h5>Reportes</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Acta de Visita</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1IXXQg6ny6N70kGuLvUNN-eTA5VTAXcLW/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1hsWpWZiuQFJPxJhvYFmaHX76rZoIhvKb/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1mt7SRRxyqRTVm6feCWOjV7JxXRbzbHt6/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/18d_OTiKEjo8mR1T7VEXh8ZAs0pymUeJ7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1ix0B2c8frAjzJApgoWAEup4gpRojBaMN/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1JgR0lQ6n0x8MLCdJY2EbU_wHDY47Xkym/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1s8veBrkVJxiGyAVLh_gqup2wl3ofOaec/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1cuNA2R9va9rNNnSpp4Ao7Tc_EwGbcDzO/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1Gf87z6Mxt3arFgj-PoSOh__Cu0d9qDKZ/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                </td> 
                 <td>  24/01/2024
                  <br><br>28/02/2024
                  <br><br>23/03/2024
                  <br><br>10/04/2024
                  <br><br>17/05/2024
                  <br><br>17/07/2024
                  <br><br>14/08/2024
                  <br><br>25/09/2024
                  <br><br>23/10/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>-- -->
                  
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Capacitaciones</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1B0M3oDtpAuZvJZ-qsrMLrVn8aqK0X8Us/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1obP1vW97MmjZb7_SEdKoqj2w0zh8-oBR/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Certificado Curso 50 Horas - Laura Valentina Caseres Castro <br>
                  <a  href="https://drive.google.com/file/d/1RRBt-2cNd4C-hIaJyiBiTdoGv3_SAeL6/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Peligro biomecánico - pausas activas - posturas - manejo de cargas - movimientos repetitivos - lesiones y enfermedades <br>
                  <a  href="https://drive.google.com/file/d/1CYYeEttUn_82XYOuwRUJnf5EBMbUy5rB/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Peligro químico - almacenamiento - manipulación - etiquetas - hoja de seguridad - EPPs -<br>
                  <a  href="https://drive.google.com/file/d/14rNKii0E1Xr9YwLLRub5RBnI0S7faO_C/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>CURSO 50 HORAS SONIA YANIRA CASTRO SUAREZ <br>
                  <a  href="https://drive.google.com/file/d/1KdlpW33nAM6S54IgKEBYPaonIy_rFm9W/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Preparación De Brigada - Planeación De Simulacro <br>
                  <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                
                </td>
                 <td> 06/03/2024
                  <br><br>05/07/2024
                  <br><br>11/07/2024
                  <br><br>11/07/2024
                  <br><br>30/08/2024
                  <br><br>25/09/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>-- -->
                  
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Reporte Estándares Mínimos (Min. Trabajo)</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1BmIJ5-VZLzErn7W3oUx8Ul3x5WZvAuEJ/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/01/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Reporte Cierre de Mes</h6></td>
                 <td>  
                  
                  
                  <a  href="https://drive.google.com/file/d/1eZRxePRNQ1JeUgzgmPJ5zu17NpdbIlNH/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1qUH1TKi9EdJzZBbTK_C8v3VYpGU3l5EU/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1rfE4NTLPV3PVVQyrwNK0mlASq7Ccq69u/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1xnv0iwJ2c2pDdH2ZKBXMXF673Or0ko_1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1PdJrs5FZZjDd0k-KjHmlLJfA_tHj94Dq/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1187gZAB25C-3WeMRjVeNpEMd3HjNXBYd/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/15HGACL1Pq4kSZ7vFa-YPT0e4an1YJzl_/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/15_LeUbEDqBS3NFLCkl5HQxXuXb3Xx7aE/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/15cM-I0_axTIQ9gMDL-snlQp86ahDnYgD/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1s3kBBmwvIV02NJ3C1MZrcxCZxwAtRS6P/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <!-- <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                </td>
                 <td> 31/01/2024
                  <br><br>28/02/2024
                  <br><br>31/03/2024
                  <br><br>30/04/2024
                  <br><br>31/05/2024
                  <br><br>30/06/2024
                  <br><br>31/07/2024
                  <br><br>31/08/2024
                  <br><br>30/09/2024
                  <br><br>31/10/2024
                  <!-- <br><br>--
                  <br><br>-- -->
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Simulacro de Evacuación</h6></td>
                 <td>  
                  
                  <a  href="https://docs.google.com/spreadsheets/d/1ctsaFoWXzYsCnVe5dP8bPH5T0oXaZxEL/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>04/10/2024</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Aseo</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Certificado Seguridad Social Año Anterior</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Dotaciones</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1GhXmilbX_5QNr3H87L-jinbUGUiIh9fd/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>17/07/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Auditoria del Proveedor</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Calificación ARL</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Vigilancia</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Certificado Seguridad Social Año Anterior</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Dotaciones</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Auditoria del Proveedor</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Calificación ARL</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="emergencia" ><h5>Plan de Emergencia</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Plan de Emergencia de la Copropiedad</h6></td>
                 <td>  
                  
                  <a  href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  <br>
                  <a href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Plan de Emergencia Familiar
                </td>
                 <td> --
                  <br><br>
                 </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Matriz de Vulnerabilidad por Amenazas</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1AAkJ4uu7-hIPizzGthxCeCqPTH5_IHBt/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 10/04/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Ocurrencia de Peligros</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1BST7gTJONeo97xei0QNSPZaZ5O6BPXmx/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 10/04/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Informe de Simulacro</h6></td>
                 <td>  
                  
                  <a  href="https://drive.google.com/file/d/1qKy4gz9WIODNseGbTryo6uZkM3KNMqhA/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>02/10/2024</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Brigadistas de la Copropiedad</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="saneamiento" ><h5>Plan de Saneamiento</h5></div>
                <div><a  href="#inicio">Ir al Inicio</a></div>

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
                 <td> <h6>Plan de Saneamiento</h6></td>
                 <td>  
                  
                  <a  href="https://docs.google.com/document/d/1HnGmwozPC5E90BFOqy1ifFaDjZh-3NaL/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/01/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Manejo de Residuos</h6></td>
                 <td>  
                  
                  <a  href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  
                </td>
                <td> --</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td> <h6>Auditoría Depósito de Basuras</h6></td>
                <td>  
                  
                  <a  href="https://drive.google.com/file/d/1ZRDBMOgOO329lifxu_eF89kroE8A-lnA/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a  href="https://drive.google.com/file/d/1lKnRJNcdLbju57YQpz2NcQ56OUiEI82-/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  
                </td>
                <td>20/08/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td> <h6>Manejo de Plagas</h6></td>
                <td>  
                  
                  <a  href="https://docs.google.com/spreadsheets/d/1OA9WMOySvvxBvj0b9tjPaYf8l6MDV6wF/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                  <br>
                  <a  href="https://drive.google.com/file/d/1YO0vFOyXLs2i4yUnuMaRbniWAz6I82mH/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Desinsectacion areas en general 3 de abril de 2024
                  
                </td>
                <td> 01/01/2024
                  <br><br>18/07/2024
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td> <h6>Agua Potable</h6></td>
                <td>  
                  
                  <a  href="https://docs.google.com/spreadsheets/d/1zmldc0oOzZSwOOb7tfFO88XOU_xYQ5tw/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>
                  
                  <a  href="https://drive.google.com/file/d/1RzjfkqhpBfGueFl-EjOVBv8X1TmZ_3SC/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>LIMPIEZA, LAVADO Y DESINFECCIÓN DE TANQUES
                </td>
                <td> 01/01/2024
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
            <h5 style="color: aquamarine;">Su contrato actual vence el (31/12/2024)</h5>
            <a  href="https://docs.google.com/document/d/1JfoRArwV1BhWDCT-EaL3NyLuNNikXhI9/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank">
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