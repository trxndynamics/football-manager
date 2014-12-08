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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#selectLeagues').DataTable({
                bFilter: false,
                bInfo: false
            });

            var configuration = <?php echo json_encode($configuration); ?>;

            $('#nation').change(function(){
                var league  = $('#league');
                var club    = $('#club');

                var selectedNation = $('#nation').val();
                var defaultLeague = '';

                league.find('option').remove();
                club.find('option').remove();

                league.append('<option>Select League</option>');
                $.each(configuration['division'][selectedNation]['league'], function(key, elem){
                    league.append('<option value="'+key+'">'+key+'</option>');
                });

                club.append('<option>Select Club</option>');
            });

            $('#league').change(function(){
                var selectedNation  = $('#nation').val();
                var league          = $('#league');
                var club            = $('#club');

                club.find('option').remove();
                club.append('<option>Select Club</option>');
                $.each(configuration['division'][selectedNation]['league'][league.val()]['teams'], function(key, elem){
                    club.append('<option value="'+elem+'">'+elem.replace('_',' ')+'</option>');
                });
            });
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

              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    {{ Form::select('nation', array_merge(['Select Nation...'], array_combine(array_keys($configuration['division']), array_keys($configuration['division']))), null, array('class'=>'form-control','id'=>'nation')) }}
                    </div>
                </div>
              </div>

              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                      {{ Form::select('league', ['Select a League...'], null, array('class'=>'form-control','id'=>'league')) }}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                      {{ Form::select('club', ['Select a Club...'], null, array('class'=>'form-control','id'=>'club')) }}
                      </div>
                  </div>
              </div>

              {{ Form::submit('Confirm', array('class'=>'btn btn-info btn-block')) }}
          </div>
        </div>
      </div>
    </div>
    {{ Form::close() }}
@stop
