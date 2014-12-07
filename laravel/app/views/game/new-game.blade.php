@extends('layouts/default/layout')

@section('additionalCSS')
    <link rel="stylesheet" type="text/css" media="all" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" media="all" href="//cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
@stop

@section('additionalJS')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#selectLeagues').DataTable({
                bFilter: false,
                bInfo: false
            });
        } );
    </script>
@stop

@section('content')

<section id="about" class="container">
    <div class="row centered-form">
        {{ Form::open(array('url' => 'game/create')) }}
        <div class="col-xs-12 col-sm-12 col-md-12">

            <table id="selectLeagues" class="display responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Selected Nations</th>
                        <th>Full Detail&#63;</th>
                        <th>Start Date</th>
                        <th>Active Divisions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach(Config::get('basegame') as $nation => $baseGameItem)
                    <tr>
                        <td>{{ Form::checkbox('selected['.$nation.']', $nation) }} {{ $baseGameItem['display_name'] }}</td>
                        <td>{{ Form::checkbox('full_detail['.$nation.']', 'true') }}</td>
                        <td>{{ \Carbon\Carbon::createFromFormat('m',$baseGameItem['start_month'])->format('M Y') }}</td>
                        <td>{{ Form::select('division['.$nation.'][depth]', $baseGameItem['divisions'], 0) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br />
            <br />
            <div class="form-group">
                {{ Form::submit('Create Game', array('class'=>'btn btn-info btn-block')) }}
            </div>
        {{ Form::close() }}
        </div>
    </div>
</section>

@stop
