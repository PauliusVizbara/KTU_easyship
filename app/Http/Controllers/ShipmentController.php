<?php

namespace App\Http\Controllers;

use App\ShipmentStatus;
use App\User;
use Illuminate\Http\Request;
use App\Shipment;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = Shipment::orderBy('name','desc')->get();

        return view('shipments.index', compact(array('shipments')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $shipment = new Shipment([
            'name' => $request->get('name'),
            'weight' => $request->get('weight'),
            'address' => $request->get('address'),
            'lat' => $request->get('lat'),
            'long' => $request->get('long'),
            'city' => $request->get('city'),
            'status_id' => $request->get('status'),
            'user_id' => $request->get('user_id'),
            'courier_id' => $request->get('courier_id'),
        ]);
        $shipment->save();
        return redirect('/shipments')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
