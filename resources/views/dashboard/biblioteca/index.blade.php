@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Biblioteca</h1>
    <ul>
        <li>inicio</li>
    </ul>
</div>
@stop
@section('content')
    <!-- end of col-->
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <h4 class="card-title mb-3">Listado de la biblioteca</h4>
                    </div>
                    <div class="col-md-4 col-sm-12 text-right">
                        <a href="{{route('admin.biblioteca.create', $category_id)}}">
                            <button class="btn btn-primary ripple m-1" type="button">Crear</button>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="#post-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th style="width: 10%"></th>
                                <th style="width: 15%">titulo</th>
                                <th>cuerpo</th>
                                <th style="width: 10%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach ($Posts as $Post)
                                <tr>
                                    <td class="align-middle">{{ $loop->index + 1 }}</td>
                                    <th class="text-center">
                                        <div >
                                            <a  href="{{ $Post->urlArchivo}}" target="_self" download>
                                                Descargar
                                            </a>
                                        </div>
                                            
                                    </th>
                                    <td class="align-middle">{{ $Post->titulo }}</td>
                                    <td class="align-middle">{{ $Post->excerpt }}</td>
                                    <td class="align-middle">
                                        <a class="text-success mr-2" href="{{ route('admin.biblioteca.edit', $Post)}}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                        <form method="POST" class="formulario" id="bbDelete{{$Post->id}}"  action="{{ route('admin.biblioteca.destroy',$Post)}}" style="display: inline">
                                            @csrf {{method_field('DELETE')}}
                                            <button class="text-danger mr-2" style="border: none; background: transparent; cursor: pointer;"><i id="bbDeleted{{$Post->id}}" class="nav-icon i-Close-Window font-weight-bold delete-confirm-biblioteca"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/css/plugins/datatables.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <style>
        
    </style>

@endpush

@push('script')
    <script src="{{asset('dashboard/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

    <script>
        $('#post-table').DataTable({
        "order": [[3, "desc"]]
    }); // multi column ordering
    $('.delete-confirm-biblioteca').on('click', function (event) {
        event.preventDefault();
        const form = $(this).parents("form").attr("id");
        const url = $(this).attr('href');
        swal({
            title: 'Estas seguro?',
            text: 'Este registro y sus detalles se eliminarán de forma permanente!',
            icon: 'warning',
            buttons: ["Cancel", "Sí!"],
        }).then(function(value) {
            if (value) {
                $('#'+form).submit();
                // console.log($(this).parents("form").attr("id"));
            }
        });
    });
    
    </script>
@endpush