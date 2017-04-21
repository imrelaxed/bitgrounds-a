@extends('page')
@section('content')

    <div class="control-page">
        <div class="text-center">
    @if( !empty($plans) )

        <h2>Please choose a plan.</h2>

        <div class="row text-center">

            <div class="col-md-12">
                @include('modules.plans.all')
            </div>

        </div>
    @endif

        </div>
    </div>

@endsection