@extends('User.UserLayout') 
@section('content')


              
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><b>Nova Requisição</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Nova Requisição</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
              <h3 class="card-title">Material Disponivel na logistica</h3>
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
                    <th>Operações</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>ATS</td>
                    <td> <a href="{{route('Home-junho-edit-request', ['id' => $cat->id])}}" class="btn btn-warning">Alocar</a></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>ATS</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>APSS</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>Laboratorio</td>
                    <td><a href="" class="btn btn-warning">Alocar</a></td>

                  </tr>
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Descrição</th>
                    <th>Armazem</th>
                    <th>Projecto</th>
                    <th>(Qty) Disponivel</th>
                    <th>Area</th>
                    <th>Operações</th>
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