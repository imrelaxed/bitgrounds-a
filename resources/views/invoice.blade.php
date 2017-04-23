@extends('page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">

                <div class="panel panel-default">
                    <div class="panel-body text-center">

                        <h3>Here are all of your invoices.</h3>

                        <table class="table table-bordered table-hover table-striped support-panel">
                            <tr>
                                <th>Dated</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>

                            @if( count($invoices) )
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                                        <td>{{ $invoice->total() }}</td>
                                        <td><a href="{{ route('downloadInvoice', $invoice->id) }}">Download</a></td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <td colspan="3">No Invoice currently.</td>
                                </tr>
                            @endif
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection