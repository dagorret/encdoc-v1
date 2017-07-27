@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado de Usuarios - Orden Alfabético
            </div>
                <div class="panel-body">
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
                    @endif
                    <p>
                        @if(Auth::user()->admin)
                            <a class="btn btn-info glyphicon glyphicon-user"
                               href="{{ route('users.create') }}" role="button"> Nuevo Usuario </a>
                        @endif
                        <a class="btn btn-info glyphicon glyphicon-search" href="{{ route('searchusers') }}" role="button"> Buscar </a>
                    </p>

                    <table class="table">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            @if(Auth::user()->admin)<th>Email</th>@endif
                            @if(Auth::user()->admin)<th>Acciones</th>@endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr data-id="{{ $user->id }}">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->dni }}</td>
                            @if(Auth::user()->admin)<td>{{ $user->email }}</td>@endif
                            @if(Auth::user()->admin)<td>
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}"> Editar</a>
                                <a href="#!" class="btn-delete"> Borrar</a>
                                Informe
                            </td>@endif
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {!! $users->render() !!}
                </div>
        </div>
    </div>
    {!! Form::open(['route' => ['users.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.btn-delete').click(function(e){

            e.preventDefault();

            var row = $(this).parents('tr');
            var id = row.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':USER_ID', id);
            var data = form.serialize();



            $.post(url, data, function(result) {
                row.fadeOut();
                alert(result.message);
            }).fail(function () {
                alert('El usuario no fue eliminado');
                row.show();
            })
        });
    });
</script>
@endsection