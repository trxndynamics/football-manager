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
                    <td>{{ Form::checkbox($nation.'_selected', 'value') }} {{ $baseGameItem['display_name'] }}</td>
                    <td>{{ Form::checkbox($nation.'_full_detail', 'value') }}</td>
                    <td>{{ \Carbon\Carbon::createFromFormat('m',$baseGameItem['start_month'])->format('M Y') }}</td>
                    <td>{{
                    Form::select('leagues', $baseGameItem['divisions'], 0) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@stop