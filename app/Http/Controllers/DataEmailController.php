<?php

namespace App\Http\Controllers;

use App\Models\DataEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->query('cari');
        $item = DataEmail::query();

        $item->when($cari, function ($query) use ($cari) {
            return $query->whereRaw("ni LIKE '%" . $cari . "%'");
        });

        return view('pages.DataEmail.index')->with([
            'items' => $item->latest()->simplePaginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.DataEmail.create');
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
            'ni' => 'required|integer',
            'nama_p' => 'required|string',
            'Kd_dinas' => 'required|exists:tb_dinas,Kd_dinas',
            'gd' => 'required',
            'gb' => 'required',
            'hp' => 'required|integer',
            'nama_e' => 'required|email',
            'jabatan' => 'required',
            // 'tanggal' => 'required|date',
            'jenis' => 'required',
            'gol' => 'required',
            // 'status' => 'required',
        ]);
        $data = $request->all();
        $data['tanggal'] = Carbon::now();
        DataEmail::create($data);
        return redirect()->route('data-email.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DataEmail::findOrFail($id);
        return view('pages.DataEmail.update')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ni' => 'required|integer',
            'nama_p' => 'required|string',
            'Kd_dinas' => 'required|exists:tb_dinas,Kd_dinas',
            'gd' => 'required',
            'gb' => 'required',
            'hp' => 'required|integer',
            'nama_e' => 'required|email',
            'jabatan' => 'required',
            // 'tanggal' => 'required|date',
            'jenis' => 'required',
            'gol' => 'required',
            // 'status' => 'required',
        ]);

        $data = $request->all();
        $data['tanggal'] = Carbon::now();
        $DataEmail = DataEmail::findOrFail($id);

        $DataEmail->update($data);
        return redirect()->route('data-email.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DataEmail = DataEmail::findOrFail($id);
        $DataEmail->delete();
        return redirect()->route('data-email.index');
    }
}
