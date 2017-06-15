
@if ($tickets->isEmpty())
    <p>There are currently no tickets.</p>
@else

        <caption>Total tickets: {{ $tickets->count() }}. Closed tickets: {{ $tickets->where('status', '=', 'closed')->count() }}.</caption>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Status</th>
                <th>Last Updated</th>
                <th style="text-align:center" colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>
                        @foreach ($categories as $category)
                            @if ($category->id === $ticket->category_id)
                                {{ $category->name }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ url('ticket/'. $ticket->ticket_id) }}">
                            #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                        </a>
                    </td>
                    <td>
                        @if ($ticket->status === 'Open')
                            <span class="label label-success">{{ $ticket->status }}</span>
                        @else
                            <span class="label label-danger">{{ $ticket->status }}</span>
                        @endif
                    </td>
                    <td>{{ $ticket->updated_at }}</td>
                    <td>
                        <a href="{{ url('ticket/' . $ticket->ticket_id) }}" class="btn btn-primary">Comment</a>
                    </td>
                    <td>
                        <form action="{{ url('admin/close/' . $ticket->ticket_id) }}" method="POST">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-danger">Close</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $tickets->render() }}
        @endif


        @if ($tickets->isEmpty())
      <p>You don't have any ticket categories.</p>
    @else
            <p>Category List:
                @foreach( $categories as $category )
                    {{ $category->name }},

                @endforeach
            </p>

            {!! Form::model($settings, ['url' => 'tickets', 'files' => false]) !!}

            {!! Html::accordionOpen('Add Category', false, 'wrench') !!}
            {!! Form::textField('category', 'Category Name', null, ['class' => 'form-control']) !!}
            <input class='btn btn-default btn-xs btn-success pull-right' type='submit' value='Save'>
            {!! Html::accordionClose() !!}

            {!! Form::close() !!}

@endif
