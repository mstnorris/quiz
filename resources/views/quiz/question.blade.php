@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                    </div>
                </div>
            </div>
            <div class="col-md-1">
                <i class="fa fa-heart"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1>A Question</h1>
            </div>
        </div>
    </div>

    @stop