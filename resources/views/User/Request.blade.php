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
                  @foreach ($apiArray_material as $list)
                  <tr>
                    <td>{{$list['descricao'] }}</td>
                    <td>{{$list->armazem['nome']}}</td>
                    <td>{{$list['projecto']}}</td>
                    <td>{{$list['qtd_stock']}}</td>
                    <td>{{$list['area']}}</td>
                    <td> <a href="" class="btn btn-success">Registar</a></td>
                  </tr>   
                  @endforeach              
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