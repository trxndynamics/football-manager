@extends('layouts/default/layout')

@section('additionalCSS')
    <link rel="stylesheet" type="text/css" media="all" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" media="all" href="//cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" media="all" href="/assets/vendor/angular-bootstrap-datetimepicker/src/css/datetimepicker.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@stop

@section('additionalJS')
    <script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="/assets/vendor/angular-bootstrap-datetimepicker/src/js/datetimepicker.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#selectLeagues').DataTable({
                bFilter: false,
                bInfo: false
            });

            $( "#datepicker" ).datepicker();
        } );
    </script>
@stop

@section('content')
    {{ Form::open(array('url' => 'game/register-manager')) }}
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Register Manager Details</h3>
          </div>
          <div class="panel-body">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    {{ Form::text('first_name', null, array('class'=>'form-control input-sm','placeholder'=>'First Name')) }}
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    {{ Form::text('last_name', null, array('class'=>'form-control input-sm','placeholder'=>'Last Name')) }}
                  </div>
                </div>
              </div>

              <div class="form-group">
                {{ Form::email('email', null, array('class'=>'form-control input-sm','placeholder'=>'Email Address')) }}
              </div>

              {{ Form::submit('Register', array('class'=>'btn btn-info btn-block')) }}
          </div>
        </div>
      </div>
    </div>
    {{ Form::close() }}
@stop
