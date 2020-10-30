@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Codesin con hechos</h1>
    <ul>
        <li><a href=""> </a></li>
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
                    <div class="col-md-12 col-sm-12 text-right">
                            <button class="btn btn-primary ripple m-1" data-toggle="modal" data-target="#codesinHechos" type="button">Nuevo</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="#post-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th style="width: 70%;">Extracto</th>
                                <th>Fecha</th>
                                <th style="width: 8%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->index +1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->excerpt }}</td>
                                    <td>{{ $post->published_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a class="text-success mr-2" href="{{ route('admin.codesinHechos.edit', $post)}}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                        <form method="POST" id="chDelete" action="{{ route('admin.codesinHechos.destroy',$post)}}" style="display: inline">
                                            @csrf {{method_field('DELETE')}}
                                            <button class="text-danger mr-2" style="border: none; background: transparent; cursor: pointer;"><i class="nav-icon i-Close-Window font-weight-bold delete-confirm"></i></button>
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
    <!-- Modal -->
    <div class="modal fade" id="codesinHechos" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Titulo de codesin con hechos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.codesinHechos.store', '#create-codesinHechos') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3 {{ $errors->has('titlecodesinHechos') ? 'has-error' : ''}}" >
                                <label for="titlecodesinHechos"></label>
                                <input class="form-control form-control-rounded" id="titlecodesinHechos" name="titlecodesinHechos" type="text" value="{{ old('titlecodesinHechos')}}" required/>
                                {!! $errors->first('titlecodesinHechos', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary ml-2" type="submit">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/css/plugins/datatables.min.css')}}" />
@endpush

@push('script')
    <script src="{{asset('dashboard/js/plugins/datatables.min.js')}}"></script>
    
    <script>
        $('#post-table').DataTable({
        "order": [[3, "desc"]]
    }); // multi column ordering

    $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Estas seguro?',
            text: 'Este registro y sus detalles se eliminarán de forma permanente!',
            icon: 'warning',
            buttons: ["Cancel", "Sí!"],
        }).then(function(value) {
            if (value) {
                $('#chDelete').submit();
            }
        });
    });
    
    if(window.location.hash == '#create-codesinHechos')
        {
            $('#codesinHechos').modal('show');
        }
        $('#codesinHechos').on('hide.bs.modal',function(){
            window.location.hash = '#';
        });
        $('#codesinHechos').on('shown.bs.modal',function(){
            $('#title').focus();
            window.location.hash = '#create-codesinHechos';
        });
    </script>
@endpush