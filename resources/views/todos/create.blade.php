@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Añadir evento
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('todos/create') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="date" name="date">
                        </div>

                        <div class="form-group">
                            <input type="boolean" name="isComplete">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Añadir evento
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


@stop
