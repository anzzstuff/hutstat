@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add match</div>

                <div class="panel-body">
                    Here we add result and goalie
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Forwards</div>
                <div class="row">

                    <div class="panel-body">
                        <div class="col-sm-4">
                            Here go forwards
                        </div>
                        <div class="col-sm-4">
                            Here go forwards
                        </div>
                        <div class="col-sm-4">
                            Here go forwards
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Defenders</div>

                <div class="panel-body">
                    Here go defenders
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn btn-primary">Add match</button>
        </div>
    </div>
</div>
@endsection
