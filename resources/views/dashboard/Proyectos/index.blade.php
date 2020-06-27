@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Proyectos @if (isset($tag)) {{$tag->name }}@endif</h1>
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
                    <div class="col-md-12 col-sm-12 text-right">
                            <button class="btn btn-primary ripple m-1" data-toggle="modal" data-target="#proyectos" type="button">Crear proyecto</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="#post-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Extracto</th>
                                <th>Zona</th>
                                <th style="width: 8%;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->excerpt }}</td>
                                    <td>@foreach ($post->tags as $tag)
                                        <div class="tag text-center {{$tag->id == 1 ? 'verde': ''}}{{$tag->id == 2 ? 'amarillo': ''}}{{$tag->id == 3 ? 'rojo': ''}}{{$tag->id == 4 ? 'azul': ''}}" style="margin: 0">{{$tag->name}} </div>
                                    @endforeach</td>
                                    <td>
                                        <a class="text-success mr-2" href="{{ route('admin.proyectos.edit', $post)}}"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                        <form method="POST" action="{{ route('admin.proyectos.destroy',$post)}}" style="display: inline">
                                            @csrf {{method_field('DELETE')}}
                                            <button class="text-danger mr-2" style="border: none; background: transparent; cursor: pointer;"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>
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
    {{-- modal --}}
    <div class="modal fade" id="proyectos" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Titulo del proyecto</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.proyectos.store', '#create-proyectos') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mb-3 {{ $errors->has('titleProjectModal') ? 'has-error' : ''}}" >
                                <label for="titleProjectModal"></label>
                                <input class="form-control form-control-rounded" id="title" name="titleProjectModal" type="text" value="{{ old('titleProjectModal')}}" required/>
                                {!! $errors->first('titleProjectModal', '<span class="help-block">:message</span>') !!}
                            </div>
                            @if (isset($tag))
                                <input type="hidden" name="tags" value="{{$tag->id}}">
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary ml-2" type="submit">Crear publicacion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@push('style')
    <link rel="stylesheet" href="{{asset('dashboard/css/plugins/datatables.min.css')}}" />
    <style>
        .verde { background-color: #DAE8D0; color: #73AD49; font-weight: 700}
        .amarillo { background-color: #F5EAD6; color: #D89000; font-weight: 700}
        .rojo { background-color: #FBE4DD; color: #C5340B; font-weight: 700}
        .azul { background-color: #E6F0FE; color: #2567BF; font-weight: 700}
    </style>
@endpush

@push('script')
    <script src="{{asset('dashboard/js/plugins/datatables.min.js')}}"></script>
    <script>
        $('#post-table').DataTable({
        "order": [[3, "desc"]]
    }); // multi column ordering
    if(window.location.hash == '#create-proyectos')
        {
            $('#proyectos').modal('show');
        }
        $('#proyectos').on('hide.bs.modal',function(){
            window.location.hash = '#';
        });
        $('#proyectos').on('shown.bs.modal',function(){
            $('#title').focus();
            window.location.hash = '#create-proyectos';
        });
    </script>
@endpush

{{-- if (isset($tag)) { --}}
