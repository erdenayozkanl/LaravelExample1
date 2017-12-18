<?php

namespace App\Http\Controllers;

use App\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('urun.index', ['all_urun' => Urun::Paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'urun_adi'      => 'required|max:50',
            'urun_aciklama' => 'required|max:255',
            'urun_fiyat'    => 'required|numeric',
        ]);
        Urun::create($request->all());
        return redirect()->route('urun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function show(Urun $urun,Request $request)
    {
        $page = $request->page;
        return view('urun.show', compact('urun','page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function edit(Urun $urun,Request $request)
    {
        $page = $request->page;
        return view('urun.edit', compact('urun','page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Urun $urun)
    {
        $request->validate([
            'urun_adi'      => 'required|max:50',
            'urun_aciklama' => 'required|max:255',
            'urun_fiyat'    => 'required|numeric',
        ]);
        $urun->fill($request->all());
        $urun->save();
        return redirect()->back()->with(array('message' => 'Güncelleme Başarılı'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Urun  $urun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Urun $urun)
    {
        $urun->delete();
        return redirect()->route('urun.index');
    }
}
