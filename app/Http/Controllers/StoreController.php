<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExample;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $stores = Store::paginate(3);

        return view('stores.list', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();

        return view('stores.create', compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stores = new Store();
        $stores->code = $request->input('code');
        $stores->name = $request->input('name');
        $stores->phone = $request->input('phone');
        $stores->email = $request->input('email');
        $stores->address = $request->input('address');
        $stores->manager = $request->input('manager');
        $stores->status = $request->input('status');
        $stores->save();

        return redirect()->route('stores.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store, $id)
    {
        $store = Store::findOrFail($id);
        return view('stores.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store, $id)
    {
        $store= Store::find($id);
        $store->fill($request->all());
        $store->code = $request->input('code');
        $store->name = $request->input('name');
        $store->phone = $request->input('phone');
        $store->email = $request->input('email');
        $store->address = $request->input('address');
        $store->manager = $request->input('manager');
        $store->status = $request->input('status');
        $store->save();
        return redirect()->route('stores.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function delete(Store $store, $id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->route('stores.list');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($request->has('name')){
            return redirect()->route('stores.list');
        }
        $stores = Store::where('name', 'LIKE', '%'  . $keyword . '%')->paginate(5);

        return view('stores.list', compact( 'stores'));
    }
}
