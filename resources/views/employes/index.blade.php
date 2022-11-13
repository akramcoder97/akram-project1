
@extends('adminlte::page')

 @section('plugins.Datatables', true)

@section('title')
    admin | List des employes
@endsection


@section('content_header')
    <h3>List des employes</h3>
@endsection 



<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">  

    @section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
@endsection



@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 mx-auto">
                <!-- config/fortify.php edit line 64 to 65 -->
                <div class="card my-3">
                    <div class="card-header">
                        <div class="text-center text-upercase">
                            employes
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-striped">
                            <tr>
                                <th>id</th>
                                <th>full name</th>
                                <th>departement</th>
                                <th>hirded</th>
                                <th>action</th>
                            </tr>
                            <tbody>
                                @foreach ($employes as $key => $employe)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$employe->full_name}}</td>
                                    <td>{{$employe->depart}}</td>
                                    <td>{{$employe->hire_date}}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{url('employes.show',$employe->registration_number)}}" 
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{url('employes.edit',$employe->registration_number)}}" 
                                            class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{url('employes.destroy',$employe->registration_number)}}" method="post" >
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


  @section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

@endsection 
<!-- script -->

 @section('js') 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  
   <script>
       /* $(document).ready(function() {
         $('#myTable').DataTable({
            dom : 'Bfrtip',
            buttons : [
                'copy','excel','pdf','csv','print','colvis'
                ]
        });
    } );  */


        $(document).ready(function() {
    $('#myTable').DataTable();
} ); 
   </script>

@endsection