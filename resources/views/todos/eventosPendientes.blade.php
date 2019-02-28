@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $eventosPendientes as $pendiente )
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$pendiente->title}}
                    </h4>

            </div>
        @endforeach

    </div>

@stop
