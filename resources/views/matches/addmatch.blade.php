@extends('layouts.app')

@section('content')
<form class="form-inline">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Match details</div>

                <div class="panel-body">
                    <div class="row margin-bottom-05">
                        <div class="form-group form-group-sm col-md-2">
                            <input type="text" class="form-control" id="g_you" size="1" maxlength="2">
                            <label for="g_you">Your goals</label> 
                        </div>
                        <div class="form-group form-group-sm col-md-2 text-nowrap">
                            <input type="text" class="form-control" id="g_opp" size="1" maxlength="2">
                            <label for="g_opp">Opponent goals</label> 
                        </div>
                        <div class="form-group form-group-sm col-md-8">
                            <input type="text" class="form-control" id="div" size="1" maxlength="2">
                            <label for="div">Division</label> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group form-group-sm col-md-2">
                            <input type="text" class="form-control" id="sho_you" size="1" maxlength="2">
                            <label for="sho_you">Your shots</label> 
                        </div>
                        <div class="form-group form-group-sm col-md-2 text-nowrap">
                            <input type="text" class="form-control" id="sho_opp" size="1" maxlength="2">
                            <label for="sho_opp">Opponent shots</label> 
                        </div>
                        <div class="form-group form-group-sm col-md-8 checkbox">
                            <label>
                                <input type="checkbox" class="form-control" id="overtime" style="margin:0px !important;"> 
                                <strong>Match went to overtime</strong>
                            </label>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>        
    </div>

    @foreach( array( 'f'=>'Forwards', 'd'=>'Defenders' ) as $fd=>$fdFull)
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $fdFull }}</div>
                <div class="panel-body no-padding-tb">
                @for($line=1; $line<=4; $line++)
                    @if($fd=='d' && $line==4)
                        <?php break; ?>
                    @endif
                    <div class="row {{ Helper::getLineClass($line) }} top-padding">
                    @foreach (Helper::getPositions($fd) as $pos)
                        <div class="col-md-4
                        @if($pos=='ld')
                            col-md-offset-2
                        @endif
                        ">
                            <div class="row margin-bottom-05">
                                <div class="form-group form-group-sm col-md-12">
                                    <label for="name-{{ $fd }}-{{ $pos }}-{{ $line }}" class="sr-only" title="Player name ({{ strtoupper($pos) }})">Player name</label>
                                    <input type="text" class="form-control" id="name-{{ $fd }}-{{ $pos }}-{{ $line }}" placeholder="Player name ({{ strtoupper($pos) }})">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group form-group-sm col-md-12">
                                    <label for="goals-{{ $fd }}-{{ $pos }}-{{ $line }}" title="Goals">G:</label>
                                    <input type="text" class="form-control" id="goals-{{ $fd }}-{{ $pos }}-{{ $line }}" size="1" maxlength="1">
                                    <label for="assists-{{ $fd }}-{{ $pos }}-{{ $line }}" title="Assists">A:</label>
                                    <input type="text" class="form-control" id="assists-{{ $fd }}-{{ $pos }}-{{ $line }}" size="1" maxlength="1">
                                    <label for="shots-{{ $fd }}-{{ $pos }}-{{ $line }}" title="Shots">SHO:</label>
                                    <input type="text" class="form-control" id="shots-{{ $fd }}-{{ $pos }}-{{ $line }}" size="1" maxlength="2">
                                    <label for="tip-{{ $fd }}-{{ $pos }}-{{ $line }}" title="Time on ice (minutes)">TiP:</label>
                                    <input type="text" class="form-control" id="tip-{{ $fd }}-{{ $pos }}-{{ $line }}" size="1" maxlength="2">
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @endfor
                </div>
            </div>
        </div>        
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Goalie</div>
                
                <div class="panel-body">
                    <div class="form-group form-group-sm">
                        <label for="id-name-goalie" class="sr-only" title="Goalie name">Goalie name</label>
                        <input type="text" class="form-control" id="name-goalie" placeholder="Goalie name">
                    </div>
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
