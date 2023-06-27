@extends('User.UserLayout') 
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Dashboard</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Material Disponivel</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Enviados</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Pendentes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Cancelados</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
              <h3 class="card-title"><b>Histórico das Requisições</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Descrição</th>
                    <th>Armazem</th>
                    <th>Projecto</th>
                    <th>(Qty) Disponivel</th>
                    <th>Area</th>
                    <th>Data</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>AGENDA PARA MARCAÇÃO CONSULTAS</td>
                    <td>Maputo Cidade 201
                    </td>
                    <td>CDC</td>
                    <td> 4</td>
                    <td>ATS</td>
                    <td>10/06/2023</td>
                  </tr>
                  <tr>
                    <td>ALGORITMO DE RASTREIO DE VIOLENCIA BASEADA NO GENERO</td>
                    <td>202 (Zimpeto)
                       5.0
                    </td>
                    <td>CDC</td>
                    <td>5</td>
                    <td>ATS</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>ALGORITMO DE RASTREIO DE VIOLENCIA BASEADA NO GENERO</td>
                    <td>202 (Zimpeto)
                       5.5
                    </td>
                    <td>CDC</td>
                    <td>5.5</td>
                    <td>APSS</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>ALGORITMO DE RASTREIO DE VIOLENCIA BASEADA NO GENERO</td>
                    <td>202 (Zimpeto)
                       6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>ALGORITMO DE RASTREIO DE VIOLENCIA BASEADA NO GENERO</td>
                    <td>202 (Zimpeto) 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>ALGORITMO DE RASTREIO DE VIOLENCIA BASEADA NO GENERO</td>
                    <td>202 (Zimpeto)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>AGULHA P/ SERINGA 5ML (23G)</td>
                    <td>202 (Zimpeto) 1.0</td>
                    <td>CDC</td>
                    <td>1.7</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>AGULHA P/ SERINGA 5ML (23G)</td>
                    <td>202 (Zimpeto) 1.5</td>
                    <td>CDC</td>
                    <td>1.8</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>AGULHA P/ SERINGA 5ML (23G)</td>
                    <td>202 (Zimpeto) 2.0</td>
                    <td>CDC</td>
                    <td>1.8</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                  <tr>
                    <td>AGULHA P/ SERINGA 5ML (23G)</td>
                    <td>202 (Zimpeto) 3.0</td>
                    <td>CDC</td>
                    <td>1.9</td>
                    <td>Laboratorio</td>
                    <td>10/06/2023</td>

                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Descrição</th>
                    <th>Armazem</th>
                    <th>Projecto</th>
                    <th>(Qty) Disponivel</th>
                    <th>Area</th>
                    <th>Data</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->
  @endsection