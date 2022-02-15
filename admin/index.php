<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/styles.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="d-flex">
    <div id="sidebar-container" class="bg-primary ms-3 my-4">
      <div class="logo text-light ">
        <h4>HP-admin</h4>
      </div>
      <hr class="text-light">
      <div class="menu d-flex flex-column pt-4 px-4 text-light">
        <a href="#" class="text-light">
          <ion-icon name="apps-outline"></ion-icon> Tablero
        </a>
        <a href="#" class="text-light">
          <ion-icon name="people-outline"></ion-icon> Usuarios
        </a>
        <a href="#" class="text-light">
          <ion-icon name="stats-chart-outline"></ion-icon> Estadisticas
        </a>
        <a href="#" class="text-light">
          <ion-icon name="person-outline"></ion-icon> Perfil
        </a>
        <a href="#" class="text-light">
          <ion-icon name="cog-outline"></ion-icon> Config
        </a>
      </div>
    </div>
    <div class="w-100">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="d-flex position-relative mt-2 d-inline-block">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-search position-absolute" type="submit">
                <ion-icon name="search-outline"></ion-icon>
              </button>
            </form>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="assets/img/nicolas.jpg" class="avatar profileimagenavbar">
                  Nicolas Picon
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">My profile</a></li>
                  <li><a class="dropdown-item" href="#">Subscription</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>
      <!-- Page Content -->
      <div id="content" class="bg-grey w-100">
        <section class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 col-md-8">
                <h1 class="font-weight-bold mb-0">Bienvenido Nicolas</h1>
                <p class="lead text-muted">Revisa la última información</p>
              </div>
              <div class="col-lg-3 col-md-4 d-flex">
                <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
              </div>
            </div>
          </div>
        </section>

        <section class="bg-mix py-3">
          <div class="container">
            <div class="card rounded-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Ingresos mensuales</h6>
                      <h3 class="font-weight-bold">$50000</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50.50%</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Productos activos</h6>
                      <h3 class="font-weight-bold">100</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 25.50%</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">No. de usuarios</h6>
                      <h3 class="font-weight-bold">2500</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 75.50%</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Usuarios nuevos</h6>
                      <h3 class="font-weight-bold">500</h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 15.50%</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                  </div>
                  <div class="card-body">
                    <canvas id="myChart" width="300" height="150"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Ventas recientes</h6>
                  </div>
                  <div class="card-body pt-2">
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-2 mb-3">
                      <div class="d-flex mr-3">
                        <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                      </div>
                      <div class="align-self-center">
                        <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10%
                          descuento</span>
                        <small class="d-block text-muted">Curso diseño web</small>
                      </div>
                    </div>
                    <button class="btn btn-primary w-100">Ver todas</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
        datasets: [{
          label: 'Nuevos usuarios',
          data: [50, 100, 150, 200],
          backgroundColor: [
            '#12C9E5',
            '#12C9E5',
            '#12C9E5',
            '#111B54'
          ],
          maxBarThickness: 30,
          maxBarLength: 2
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
</body>

</html>