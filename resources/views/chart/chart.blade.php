@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    {!! $chart1->html() !!}
                </div>
                <hr>
                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart1->script() !!}
{!! $chart->script() !!}
@endsection