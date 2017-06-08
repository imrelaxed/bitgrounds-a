@extends('page')

@section('content')
    <div class="row text-center">
        <h2>Pricing Options</h2>
        <div class="page-info">
            <p>Bitgrounds does not offer offer a budget "starter" option like many other web hosting companies. Instead we offer pure quality of service at a slightly higher price. If you've
                used a mainstream company's budget hosting in the past than it's very likely that you already know that it's a gimmick that's not worth the endless hassle that comes a long with it.
                </p>
                <p>

                Instead of that, we offer three solid hosting packages that are guaranteed to do what you need them to do, always. Each pricing tier comes with a guarantee that will be
            there for you if you ever need us to make sure that your web hosting experience simply incredible.</p>
        </div>
    </div>
    <hr class="invisible">


    @include('modules.plans.all')

@endsection