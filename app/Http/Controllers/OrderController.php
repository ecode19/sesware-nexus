<?php

namespace App\Http\Controllers;
use App\Models\order;


use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function SendOrder(Request $request){
        $validate = $request ->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'string|max:255',
            'subject' => 'string|max:255',
            'budget' => 'string|max:255',
            'details' => 'string|max:255',
        ]);

        $order = new Order();
        $order->Name = $request->input('name');
        $order->Company = $request->input('company');
        $order->E_mail = $request->input('email');
        $order->Phone = $request->input('phone');
        $order->Subject = $request->input('subject');
        $order->Budget = $request->input('budget');
        $order->Details = $request->input('details');

        $order->save();
        return view('pages.contact');

    }

}
