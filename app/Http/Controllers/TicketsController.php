<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketCategory;
use App\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewTicket;
use App\Notifications\TicketStatus;


class TicketsController extends Controller
{

    public function index()
    {
        $title = 'Support Tickets';
        $settings = $this->app_settings;
        $tickets = Ticket::paginate(10);
        $categories = TicketCategory::all();

        return view('admin.tickets', compact('tickets', 'categories','settings','title'));
    }

    public function show($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $comments = $ticket->comments;

        $category = $ticket->category;

        return view('tickets.show', compact('ticket', 'category', 'comments'));
    }

    public function create()
    {
        $categories = TicketCategory::all();
        $tickets = Ticket::where('user_id', Auth::user()->id)->paginate(10);

        return view('tickets.create', compact('categories','tickets'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'category'  => 'required',
            'priority'  => 'required',
            'message'   => 'required'
        ]);

        $ticket = new Ticket([
            'title'     => $request->input('title'),
            'user_id'   => Auth::user()->id,
            'ticket_id' => strtoupper(str_random(10)),
            'category_id'  => $request->input('category'),
            'priority'  => $request->input('priority'),
            'message'   => $request->input('message'),
            'status'    => "Open",
        ]);

        $ticket->save();

        Notification::send(Auth::user(), new NewTicket($ticket));

        return redirect()->back()->with("notice", "A ticket with ID: #$ticket->ticket_id has been opened.");
    }

    public function close($ticket_id)
    {
        $ticket = Ticket::where('ticket_id', $ticket_id)->firstOrFail();

        $ticket->status = 'Closed';

        $ticket->save();

        $ticketOwner = $ticket->user;

        Notification::send($ticketOwner, new TicketStatus($ticket));

        return redirect()->back()->with("notice", "The ticket has been closed.");
    }
}
