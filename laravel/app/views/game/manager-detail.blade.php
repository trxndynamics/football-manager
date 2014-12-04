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
    {{ Form::open(array('url' => 'game/register-manager')) }}
    <section id="manager-detail" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Add New Manager</h2>
                <h3>Enter The New Manager&apos;s Details</h3>
                <br />
                <div>
                    {{ Form::label('name[forename]', 'First Name') }}
                    {{ Form::text('name[forename]', '', array('class'=>'form-control')) }}
                </div>

                <div>
                    {{ Form::label('name[surname]', 'Last Name') }}
                    {{ Form::text('name[surname]', '', array('class'=>'form-control')) }}
                </div>

                <div>
                    {{ Form::label('nationality', 'Nationality') }}
                    {{ Form::select(
                        'nationality',
                        array('Afghan','Albanian','Algerian','American','American Samoan','Andorran','Angolan','Anguillan','Antigua &amp; Barbudan','Argentinian','Armenian','Aruban','Australian','Azeri','Bahaman')
                        ) }}
                </div>

                <div>
                    {{ Form::label('date_of_birth', 'Date Of Birth') }}
                    {{ Form::text('date_of_birth', '', array('class' => 'form-control','placeholder' => 'select a date','data-datepicker' => 'datepicker')) }}
                </div>

                <div>
                    {{ Form::label('favourite_club', 'Favourite Club') }}
                    {{ Form::select(
                        'favourite_club',
                        array('Arsenal','Aston Villa')
                        ) }}
                </div>

                <div>
                    {{ Form::label('manage_club', 'Choose Team To Manager') }}
                    {{ Form::select(
                        'manage_club',
                        array('Arsenal','Aston Villa')
                        ) }}
                </div>

                <div>
                    {{ Form::submit('Login') }}
                </div>
            </div>
        </div>
    </section>
    {{ Form::submit('Create Game') }}
    {{ Form::close() }}
@stop
