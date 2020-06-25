@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Proyectos</h1>
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
    </script>
@endpush
