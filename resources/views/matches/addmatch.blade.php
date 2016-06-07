@extends('layouts.app')

@section('content')
<form class="form-inline">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Add match</div>

                <div class="panel-body">
                <div class="row margin-bottom-05">
                    <div class="form-group form-group-sm col-md-2 text-right">
                        <label for="div">Your goals:</label> 
                        <input type="text" class="form-control" id="div" size="1" maxlength="2"><br />
                    </div>
                    <div class="form-group form-group-sm col-md-2 text-right">
                        <label for="div">Opponent goals:</label> 
                        <input type="text" class="form-control" id="div" size="1" maxlength="2">
                    </div>
                    <div class="form-group form-group-sm col-md-2">
                        <label for="div">Division:</label> 
                        <input type="text" class="form-control" id="div" size="1" maxlength="2">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group form-group-sm col-md-2 text-right">
                        <label for="div">Your shots:</label> 
                        <input type="text" class="form-control" id="div" size="1" maxlength="2">
                    </div>
                    <div class="form-group form-group-sm col-md-2 text-right">
                        <label for="div">Opponent shots:</label> 
                        <input type="text" class="form-control" id="div" size="1" maxlength="2">
                    </div>
                </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Forwards</div>
                <div class="row">

                    <div class="panel-body">
                        <div class="col-md-4">
                            Here go forwards
                        </div>
                        <div class="col-md-4">
                            Here go forwards
                        </div>
                        <div class="col-md-4">
                            Here go forwards
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Defenders</div>

                <div class="panel-body">
                    Here go defenders
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Goalie</div>
                
                <div class="panel-body">
                    Here go the goalie
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <button type="button" class="btn btn-primary">Add match</button>
        </div>
    </div>
</div>
</form>
@endsection
