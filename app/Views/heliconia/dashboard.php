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
    <link rel="icon" type="image/x-icon"    href="imagenes/LOGO_SST.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet"    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- ICONS  -->
    <link    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    

    <!-- FUENTES DE GOOGLE -->
    <link rel="preconnect"    href="https://fonts.googleapis.com">
    <link rel="preconnect"    href="https://fonts.gstatic.com" crossorigin>
    <link    href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&display=swap" rel="stylesheet">

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
            <a class="navbar-brand"    href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
                <div>
                <img src="imagenes/LOGO_SST.png" width="100" alt="Logo Página">
                <img src="imagenes/CYCLOID_ TALENT_SIN_FONDO.png" width="100" alt="Logo Página">
                </div>
            </a>
            <ul class="navbar-nav d-flex justify-content-center align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"    href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">Cycloid Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"    href="https://lookerstudio.google.com/reporting/b8238dfe-5b2e-468c-a06c-cf53beeb5703" target="blank">Indicadores SST</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/b508a21a-fc30-41b3-8378-8b2163480e86" target="_blank">Curso de Brigada Básica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://lookerstudio.google.com/reporting/f51b8624-e27c-4d1f-ac21-05ab4836d7f3" target="_blank">Evolución del Sistema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"    href="mailto:edison.cuervo@cycloidtalent.com" target="_blank">Escribenos Por Email</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"    href="<?= site_url('logout') ?>" >Salir</a>
              </li>
            </ul>
            <a class="navbar-brand"    href="https://cycloidtalent.com/index.php/sg-sst-propiedad-horizontal" target="_blank">
                <img src="imagenes/HELICONIA.png" width="100" alt="Logo Página">
            </a>
          </div>
        </div>
    </nav>

    <!-- SECCION PRINCIPAL - HERO -->
    <section class="hero align-items-stretch">
        <div class="hero-principal d-flex flex-column justify-content-center align-items-center">
           <!--  <img class="hero-logo-cliente" src="imagenes/HELICONIA.png"  alt="Logo del cliente"> -->
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
                            <a    href="#planear" class="flotartextofila list-group-item list-group-item-action">Planear</a>
                            <a    href="#hacer" class="flotartextofila list-group-item list-group-item-action">Hacer</a>
                            <a    href="#verificar" class="flotartextofila list-group-item list-group-item-action">Verificar</a>
                            <a    href="#actuar" class="flotartextofila list-group-item list-group-item-action">Actuar</a>
                            <a href="https://safetya.co/normatividad/resolucion-0312-de-2019/#a9" target="_blank" class="flotartextofila list-group-item list-group-item-action">Marco Normativo</a>
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Inspecciones</h2>
                        <ol class="list-group list-group-numbered">
                            <a    href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección General</a>
                            <a    href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Extintores</a>
                            <a    href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Botiquines</a>
                            <a    href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Gabinetes Contra Incendio</a>
                            <a    href="#inspecciones" class="flotartextofila list-group-item list-group-item-action">Inspección Recursos para la Seguridad</a>
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Reportes</h2>
                        <ol class="list-group list-group-numbered">
                            <a    href="#reportes" class="flotartextofila list-group-item list-group-item-action">Acta de Visita</a>
                            <a    href="#reportes" class="flotartextofila list-group-item list-group-item-action">Capacitaciones</a>
                            <a    href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Estándares Mínimos (Min. Trabajo)</a>
                            <a    href="#reportes" class="flotartextofila list-group-item list-group-item-action">Reporte Cierre de Mes</a>
                            <a    href="#reportes" class="flotartextofila list-group-item list-group-item-action">Simulacro de Evacuación</a>
                        </ol>

                    </div>
                
            </div>
            <div class="row">
                
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Gestión de Proveedores</h2>
                        <ol class="list-group list-group-numbered">
                            <a    href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Seguridad Social</a>
                            <a    href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Dotaciones</a>
                            <a    href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Examenes médicos periódicos</a>
                            <a    href="#proveedores" class="flotartextofila list-group-item list-group-item-action">Calificación ARL</a>
                            <a href="https://drive.google.com/file/d/1k-aCoovHfyCkAt3k8EL7l8M4ezw4hlSW/view?usp=sharing" target="_blank" class="flotartextofila list-group-item list-group-item-action">Formato Autorización de Trabajo en Alturas</a>
                            
                        </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Plan de Emergencia</h2>
                        <ol class="list-group list-group-numbered">
                            <a    href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Plan de Emergencia de la Copropiedad</a>
                            <a    href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Matriz de Vulnerabilidad por Amenazas</a>
                            <a    href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Ocurrencia de Peligros</a>
                            <a    href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Evidencias de Simulacro</a>
                            <a    href="#emergencia" class="flotartextofila list-group-item list-group-item-action">Brigadistas de la Copropiedad</a>
                          </ol>

                    </div>
                    <div class=" col-sm-4 col-lg-4">
                        <h2>Saneamiento Básico</h2>
                        <ol class="list-group list-group-numbered">
                            <a    href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoria Items Secretaría</a>
                            <a    href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Plagas</a>
                            <a    href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Agua Potable</a>
                            <a    href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Manejo de Residuos</a>
                            <a    href="#saneamiento" class="flotartextofila list-group-item list-group-item-action">Auditoría Depósito de Basuras</a>
                          </ol>

                    </div>
                
            </div>
        </div>
        
    </section>
    <!-- SECCIÓN DE IMAGEN A LOOKER STUDIO -->
    <section>
        <div class="hero-inferior">
          <a    href="https://lookerstudio.google.com/reporting/b8238dfe-5b2e-468c-a06c-cf53beeb5703" target="_blank">
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
                    <div><a    href="#inicio">Ir al Inicio</a></div>

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
                      
                      <a    href="https://drive.google.com/file/d/1qotFXUYp0gQ_jcGCLJfaSgWKAqNOAac2/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                     <td> <h6>1.1.2 Responsabilidades</h6></td>
                     <td>  
                      <a    href="https://drive.google.com/file/d/1O_3zu44e6Osq02CtvfiUxtzD9RfKDv2u/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Asignación de Funciones <br> 
                      
                      <a    href="https://drive.google.com/file/d/1i0xr6032ax8LI1aXV4L5CpwLrH17dINg/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento</td>

                     <td>  01/01/2024 
                      <br><br> 01/01/2024
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                     <td> <h6>1.1.3 Asignación de recursos - presupuesto</h6></td>
                     <td>  
                      
                      <a    href="https://docs.google.com/spreadsheets/d/18e7sJqT480YvwL1wbuviMLhRdcOleNWF/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                     <td> <h6>1.1.6 Elección de Vigía</h6></td>
                     <td>  

                      <a    href="https://drive.google.com/file/d/11AEfS38oZE0yJjVzAI0BuM7Nj7-HRraP/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/05/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                     <td> <h6>1.1.8 Comité de Convivencia Laboral</h6></td>
                     <td>  
                      
                      <a    href="https://drive.google.com/file/d/19tvoMzlQFvvC7meTii4L1y7YNDrRoOY4/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                     <td> <h6>1.2.1 Programa de capacitación PYP</h6></td>
                     <td>  
                      
                      <a    href="https://drive.google.com/file/d/1c82raYyVVi_a09iqrDl0DPi4PCxMXSvv/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                     <td> <h6>1.2.2 Inducción y Reinducción SST</h6></td>
                     <td>  
                      
                      <a    href="https://drive.google.com/file/d/13fg-uZ990GQSLKVycS06fL31DaEhejyb/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                    
                    </td>
                     <td> 01/01/2024</td>
                  </tr>
              </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="planear"><h5>Planear (2)</h5></div>
                  <div><a    href="#inicio">Ir al Inicio</a></div>

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
                    
                    <a    href="https://drive.google.com/file/d/11vt6KuJFdjqnf1_Tl0cxRjABd24ZXTCU/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política de SST<br>
                    <a    href="https://drive.google.com/file/d/1JcZFve6NbnxCHQMvdnMw4nWU_uHRwKY_/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política No Alcohol<br>
                    <a    href="https://drive.google.com/file/d/1a2LfB1Q85zmxXkWet434UGtLus6vRTQo/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política Emergencias<br>
                    <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Política EPP´S<br>
                  
                  </td>
                   <td>  01/01/2024 
                      <br><br> 01/01/2024
                      <br><br> 01/01/2024
                      <br><br> --
                    </td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td> <h6>2.2.1 Objetivos</h6></td>
                   <td>  
                    
                    <a    href="https://drive.google.com/file/d/1Q850vtajvXu1ziziNXzhRrOMBIF3Fz-d/view?usp=sharing"target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                   <td> <h6>2.3.1 Evaluación Inicial SST</h6></td>
                   <td>  
                    
                    <a    href="https://docs.google.com/spreadsheets/d/1ceiPpTbU4z-xvwTGeqAO4HfAOpqDsq19/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                   <td> <h6>2.4.1 Plan de trabajo anual</h6></td>
                   <td>  
                    
                    <a    href="https://docs.google.com/spreadsheets/d/1su_CrQv57D9g-tY_hNzmxMpkmw5wT-9a/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                   <td> <h6>2.5.1 Archivo y retención documental</h6></td>
                   <td>  
                    
                    <a    href="https://drive.google.com/file/d/1qaJoP1cNIJ-RZCVwCGlJ8u0eumDKgrMG/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Procedimiento <br> 
                    
                    <a    href="https://docs.google.com/spreadsheets/d/1m6SJ2PdJm3E_De9n6_0iT6fuLP3OPXQL/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                  
                  </td>
                   <td>  01/01/2024
                    <br><br> 01/01/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                   <td> <h6>2.10.1 Manual de Proveedores y Contratistas</h6></td>
                   <td>  
                    
                   <a href="https://drive.google.com/file/d/1vEWGwT-BSFwBC469hrkfpfziiiPvG98E/view?usp=sharing"  target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Manual <br>
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
            </table>
        </div>

        <div class="table-responsive-sm table-responsive-md container">
          <table class="table caption-top table-striped table-bordered">
              <div class="flex-container">
                  <div id="hacer"><h5>Hacer</h5></div>
                  <div><a    href="#inicio">Ir al Inicio</a></div>

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
                    
                    <a    href="#" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> --</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td> <h6>4.1.1 Metodología para la identificación de peligros</h6></td>
                   <td>  
                    
                    <a    href="https://docs.google.com/spreadsheets/d/1bWL9nJFhIR9Z-8tUOFF2GSbtuzQVM71u/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true"target="_blank"> <i class="bi bi-file-earmark-bar-graph-fill"></i></a><br>Documento
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                   <td> <h6>4.1.2 Identificación de peligro y valoración de riesgos</h6></td>
                   <td>  
                    
                    <a    href="https://drive.google.com/file/d/1eV9WfKtZtnKGw2yRGWaL8hBm8-_xEvCa/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Reg. Higiene y Seg-Ind. 
                    
                    <br> 
                    
                    <a    href="https://drive.google.com/file/d/1bPOCQT5IYRo_GNwuciZ4PnMO2EWjFiMW/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-bar-graph-fill"></i></a></i><br>Decreto 2090 de 2003 <br> 
                    
                    <a    href="https://docs.google.com/spreadsheets/d/14mm69k2Vg5dPAWCsi1GlLF-bfrG58Y_m/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Matriz de Peligros</b>
                  
                  </td>
                   <td> 01/01/2024 
                    <br><br>01/05/2024
                    <br><br>18/07/2024
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                   <td> <h6>4.2.5 Mantenimientos</h6></td>
                   <td>  
                    
                    <a    href="https://docs.google.com/spreadsheets/d/1omDyAiBWcSGS8Em5JMJC5V802s1351in/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> 
                  
                  </td>
                   <td> 01/01/2024</td>
                </tr>
                
            </table>
        </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="verificar"><h5>Verificar</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="" target="_blank"><a    href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>6.1.4 Planificación auditorias</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><a    href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="actuar"><h5>Actuar</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="" target="_blank"><a    href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>7.1.2 Acciones de mejora conforme a revisión de la alta dirección (2025)</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><a    href="" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b>
                
                </td>
                 <td> --</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="inspecciones"><h5>Inspecciones</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/13v2JQXbYEvG0rEAA7_YA6IW1oLk-z2k6/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 08/02/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Inspección Extintores</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1ai34-tNwChrpXgcMhdpa-9i4Y73QoPPK/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 08/02/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Inspección Botiquines</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/12NYcvlrHHoNmJK3MLElGQeRDQ52oa538/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 08/02/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Inspección Equipos de Comunicaciones</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1OEA6APcd3rz6EvFAkArXn1SudyAjhpSv/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 21/03/2024</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Inspección Gabinetes Contra Incendio</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1vcmEodiENicB12Y5G2xAsC7QuO-LEgaa/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 21/03/2024</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                 <td> <h6>Inspección Recursos para la Seguridad</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1THHaaDZ4NAywbe54v3mtw1cIkPLY3FU7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 21/03/2024</td>
              </tr>
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="reportes" ><h5>Reportes</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/1cTakg6lcIMTo8Mt1DL7TdggIy4p5HDLD/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1YrVeGRKGpUAPOIdh5nExQCD1NGiI3Lwh/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1N89XaMSA7QqysNsB67o_YKcv1ei00AS_/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1S4Sd1yAQKGTGOUA6z-sjgXLwMHo7B6J7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1zOd50sT65bAtyurE7fh47TAdGTVGpwI1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1NpXSmzOeh9zxdbqqJ_R7Fe0x811w9nGC/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1msWlRLS2jpPvINr71mpZSkidkDQpX9q7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1o7SUzMBCZYU1vplgsy9xjG0wWcGuGW26/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1GdM_UUi6gdyx9LSZg7EIzP0OgU1NuAp7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1vYbF10nDE5f8aAqnXbBCObSF9BQJtdp6/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  
                
                </td> 
                 <td>  18/01/2024
                  <br><br>08/02/2024
                  <br><br>21/04/2024
                  <br><br>25/04/2024
                  <br><br>20/05/2024
                  <br><br>20/06/2024
                  <br><br>25/07/2024
                  <br><br>29/08/2024
                  <br><br>20/09/2024
                  <br><br>28/11/2024
                  <br><br>--
                  
                  
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Capacitaciones</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1hdkWeFrT6hNYXoij9VArvfR-2rWnp8iR/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1bnp1jU7D43Kgpx4EjEd47PDUInlsXoJx/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1te1HbRdzMLCog7owFZzz2iYbAyDEvhrD/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Peligro biomecánico - pausas activas, manejo de cargas, posturas, lesiones y enfermedades <br>
                  <a href="https://drive.google.com/file/d/1hQBXl3eQ892MQ73C7hUkc4xpgPqiEs_5/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Curso de 50 horas Esperanza Mesa - Administradora<br>
                  <a href="https://drive.google.com/file/d/1yoymsn5zKEDDeChlWBb7VCrtliEjXv9r/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Curso de 50 horas Angiie Roa - Vigia SST <br>
                  <a    href="https://drive.google.com/file/d/1CcByRJtPg_V2uS58pgx8nNYT9vcIkNdk/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Brigada de Emergencias y Primeros Auxilios <br>
                  <a    href="https://drive.google.com/file/d/1S81xvZogeUm5LWhfUyZLxo0OgwyBE6eb/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Manejo de Residuos <br>
                  <!-- <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br> -->
                
                
                </td>
                 <td> 01/01/2024
                  <br><br>29/02/2024
                  <br><br>04/07/2024
                  <br><br>31/07/2024
                  <br><br>31/07/2024
                  <br><br>20/09/2024
                  <br><br>09/12/2024
                  <!-- <br><br>--
                  <br><br>--
                  <br><br>-- -->
                  
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Reporte Estándares Mínimos (Min. Trabajo)</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1nx4XF11BOC4AqQjeZSeb3icZMutPeLBU/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/01/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Reporte Cierre de Mes</h6></td>
                 <td>  
                  
                  
                  <a    href="https://drive.google.com/file/d/13rBYDVAZafQmWxcDHb2m3tNfYVCvwIju/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1mSbL02EYkjiUobsZdDdvimXlYe1E9GNJ/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1FH46I1Y70JapZE_23fMKrev51iPo6Tnj/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1ldqNN8atVq5pwcV79XQhXJhIpe_95iI7/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/178TFK6wZRJ_3uPX0eRHawTvpZT9P7GGR/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1-tK7Vx5cDaOUukUl5asMd-AhO7RGT7Ul/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1xw1KmegYIHJlHstEJVsU7-0yrN8iQBOm/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1oUfXv5ARREdum5XqzO0EqbQtRGP3c0i8/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1cBLwQHhQCbYKKr6ge9SlUEGuQYADWKzL/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/1Ozxzhuv42ofmJ3FQGDSDxK1DBBpJLzUc/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="https://drive.google.com/file/d/16XxUuZAKpLvqowxD5GQ-o0JIPL75YuS6/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                  <a    href="#" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento <br>
                
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
                  <br><br>30/11/2024
                  <br><br>--
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Simulacro de Evacuación</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1f12dDK1h4OKnLTCvVgrvrmfgcN4ENVWx/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>02/10/2024</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Aseo</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/1kidN3WfJ5DpyERJxvX-ZVErHWM4joqtT/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/05/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Dotaciones</h6></td>
                 <td>  
                  
                 <a    href="https://drive.google.com/file/d/10ZAVWbmFnMRMQXTfZXAsXbEtPovsArmC/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Dotación Aseadoras <br>
                 <a    href="https://drive.google.com/file/d/1hI48z8e_cNAzzppbHOG_9pqzqLm2djnu/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Dotación Todero <br>
                
                </td>
                 <td>25/07/2024
                  <br><br>25/07/2024
                 </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Auditoria del Proveedor</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Calificación ARL</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1inu36l8iSd2_kVrwiCXLTSrjJ-fBhzKA/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 30/04/2024</td>
              </tr>
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="proveedores" ><h5>Proveedor de Vigilancia</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/1qjrOcnq8q0eVFeXgdnTK39BfwjIIib8P/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/05/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Dotaciones</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1FIDitv2xv67OBhtu2DHvzmvBRKTQKzVu/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Dotación Vigilante
                
                </td>
                 <td>25/07/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Auditoria del Proveedor</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1Uc2qHsvuH-yNBqaS3aQ-gm0KwBoJRGFn/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>16/11/2024</td>
              </tr>
              <!-- <tr>
                <th scope="row">4</th>
                 <td> <h6>Calificación ARL</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr> -->
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="emergencia" ><h5>Plan de Emergencia</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/1m1cMm5IX2sgdZs1BJ6AzmE9gybiJA1Is/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                  <br>
                  <a href="https://drive.google.com/file/d/1bTZSBVkq_bgQEWhzj7d5ZwoQH5F8KLIp/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Plan de Emergencia Familiar
                </td>
                 <td> 17/06/2024
                  <br><br>10/09/2024
                 </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Matriz de Vulnerabilidad por Amenazas</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1MnFdAfmn7TfBZud6cBEuI665cQ8dnSa9/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 25/04/2024</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Ocurrencia de Peligros</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1sMBzyCFBYaHjZNNAB2o5m8w6oo22hMd0/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/01/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Evidencias de Simulacro</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1uEpkXJB3k3xYGWfToS7V_57URV67JRh5/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>02/10/2024</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                 <td> <h6>Brigadistas de la Copropiedad</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>

              
              
              
              
          </table>
      </div>

      <div class="table-responsive-sm table-responsive-md container">
        <table class="table caption-top table-striped table-bordered">
            <div class="flex-container">
                <div id="saneamiento" ><h5>Plan de Saneamiento</h5></div>
                <div><a    href="#inicio">Ir al Inicio</a></div>

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
                  
                  <a    href="https://drive.google.com/file/d/1_NMACH3c3GZSEe7isvSl7RLjprKIBvO1/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> 01/01/2024</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                 <td> <h6>Manejo de Residuos</h6></td>
                 <td>  
                  
                  <a    href="" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td> --</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                 <td> <h6>Auditoría Depósito de Basuras</h6></td>
                 <td>  
                  
                  <a    href="https://drive.google.com/file/d/1nBHI_xNFAjpLYO6bGMfyH6WIdgAHn8AD/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Documento
                
                </td>
                 <td>29/08/2024</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                 <td> <h6>Manejo de Plagas</h6></td>
                 <td>  
                  
                  <a    href="https://docs.google.com/spreadsheets/d/1cWyYSG5xnRKmEjsKSElrHY9QMogVhhZj/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b><br>
                  <a href="https://drive.google.com/file/d/1_HDtx58VuNUevsUPgTOOEu0KPyb0fq9X/view?usp=drive_link" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Control de Plagas 20240221
                  <a href="https://drive.google.com/file/d/1alv6ykcXKxohrZZIOG20OZrxRBzAjagG/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Control de Plagas 30/08/2024
                  
                </td>
                <td> 01/01/2024
                  <br><br>21/02/2024
                  <br><br>30/08/2024
                </td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td> <h6>Agua Potable</h6></td>
                <td>  
                  
                  <a    href="https://docs.google.com/spreadsheets/d/1yPI3ozcpeFAuKENiB1KTtzhadWkG8rGb/edit?usp=sharing&ouid=115340831198935978161&rtpof=true&sd=true" target="_blank"><i class="bi bi-file-earmark-excel-fill"></i></a></i><br> <b style="color:green">Hoja de Cálculo Online</b> <br>
                  <a href="https://drive.google.com/file/d/1GtkbC8OiZ8loQqiTzVcws956J1eOb1-Z/view?usp=sharing" target="_blank"><i class="bi bi-file-earmark-arrow-down-fill"> </i></a></i><br>Control de Plagas 
                
                </td>
                 <td> 01/01/2024
                  <br><br>30/08/2024
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
            <h5 style="color: aquamarine;">Su contrato actual vence el (31/03/2025)</h5>
            <a    href="https://drive.google.com/file/d/1PClWvVHZXGNtmV0i_OoBmmfdegs42UHd/view?usp=sharing" target="_blank">
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