@extends('dashboard.master')
@section('header')
<div class="breadcrumb">
    <h1>Biblioteca</h1>
    <ul>
        <li>Editar</li>
    </ul>
</div>
@stop
@section('content')
<form id="formBBedit" method="POST" action="{{ route('admin.biblioteca.update', $biblioteca) }}" enctype="multipart/form-data">
    @csrf {{method_field('PUT')}}
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="return">
                    <a href="{{route('admin.biblioteca.show', ['id' => $biblioteca->category_id])}}" class="btn btn-info">Regresar</a>
                </div>
                <div class="card-body">
                    <div class="card-title"></div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-3 {{ $errors->has('titulo') ? 'has-error' : ''}}" >
                                <label for="titulo">Titulo</label>
                                <input class="form-control form-control-rounded" id="titulo" name="titulo" type="text" value="{{ old('titulo', $biblioteca->titulo)}}" />
                                {!! $errors->first('titulo', '<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="col-md-12 form-group mb-3 {{ $errors->has('excerpt') ? 'has-error' : ''}}">
                                <label for="title">Contenido</label>
                                <div id="charNum">190 / 190</div>
                                <textarea id="field" class="form-control form-control" maxlength="192" rows="5" name="excerpt" aria-label="With textarea" >{{ old('excerpt', $biblioteca->excerpt)}}</textarea>
                                {!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title"></div>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="picker2">fecha de publicación </label>
                            <input class="form-control" id="picker2" placeholder="dd-mm-yyyy" name="published_at" data-value="{{ old('published_at', $biblioteca->published_at ? $biblioteca->published_at : null)}}" />
                        </div>
                        <!-- <div class="col-md-12 form-group mb-3 {{ $errors->has('urlvideo') ? 'has-error' : ''}}" >
                            <label for="urlvideo">Url de video de youtube</label>
                            <input class="form-control form-control-rounded" id="urlvideo" name="urlvideo" type="text" value="{{ old('urlvideo')}}" />
                            {!! $errors->first('urlvideo', '<span class="help-block">:message</span>') !!}
                        </div> -->
                        <div class="col-md-12 form-group mb-3 {{ $errors->has('archivo') ? 'has-error' : ''}}">
                            <label for="archivo">Archivo </label>
                            <input type="file" name="archivo" id="archivo" data-default-file="{{ old('archivo',$biblioteca->urlArchivo ? $biblioteca->urlArchivo : '' )}}" data-max-file-size-preview="2M" >
                            {!! $errors->first('archivo', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="category_id" value="{{$biblioteca->category_id}}">
                            <button type="submit" class="btn btn-primary ladda-button basic-ladda-buttonBB m-1" data-style="expand-left"><span class="ladda-label">Guardar</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@stop

@push('style')
    <link href="{{asset('dashboard/css/plugins/dropify.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('dashboard/css/plugins/pickadate/classic.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/css/plugins/pickadate/classic.date.css')}}" rel="stylesheet" />
    <style>
        #charNum {position: absolute;  right: 19px;  top: 0;}
    </style>
@endpush
@push('script')
    
    
    <script src="{{asset('dashboard/js/plugins/pickadate/picker.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/dropify.min.js')}}"></script>
    
    <script>
        $('#picker2, #picker3').pickadate({
            monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            weekdaysShort: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
            today: 'Hoy',
            clear: 'Limpiar',
            close: 'Cerrar',
            formatSubmit: 'yyyy/mm/dd'
        });
        $('#archivo').dropify({
            messages: {
                'default': 'Arrastra y suelta un archivo aquí o haz clic',
                'replace': 'Arrastra y suelta o haz clic para reemplazar',
                'remove':  'Remover',
                'error':   'Ooops, sucedió algo malo.'
            },
            error: {
                'fileSize': 'El tamaño del archivo es demasiado grande. (2M max).',
            }
        });

        $("#field").keyup(function(){
            el = $(this);
            if(el.val().length >= 190){
                el.val( el.val().substr(0, 190) );
            } else {
                $("#charNum").text(190-el.val().length + " / 190");
            }
        });

        $('.basic-ladda-buttonBB').on('click', function (e) {
            var laddaBtn = e.currentTarget;
            var l = Ladda.create(laddaBtn);
            l.start();
            $('#formBBedit').submit();
        });
    </script>
@endpush


    

    