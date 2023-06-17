@extends('User.UserLayout') 
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Material Enviado</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enviado</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
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
              <h3 class="card-title"><b>Enviado</b></h3>
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