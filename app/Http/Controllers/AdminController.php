<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Suratkeluar;

class AdminController extends Controller
{
    public function suratmasuk()
    {
    	$datasurat = Suratmasuk::all();
    	return view('suratmasuk', compact('datasurat'));
    }
    public function suratkeluar()
    {
    	return view('suratkeluar');
    }
    public function rekap()
    {
    	return view('rekapitulasi');
    }
    public function simpansm(Request $request)
    {
    	$surat = new Suratmasuk();
    	$surat->suratdari = $request->suratdari;
    	$surat->tglsurat = $request->tglsurat;
    	$surat->nosurat = $request->nosurat;
    	$surat->tglditerima = $request->tglditerima;
    	$surat->untuk = $request->untuk;
    	$surat->prihal = $request->prihal;
    	$surat->save();

    	return redirect()->route('suratmasuk')->with('success');
    }
    public function simpansk(Request $request)
    {
    	$suratk = new Suratkeluar();
    	$suratk->noberkas = $request->noberkas;
    	$suratk->alamatpenerima = $request->alamatpenerima;
    	$suratk->tglsurat = $request->tglsurat;
    	$suratk->dari = $request->dari;
    	$suratk->prihal = $request->prihal;
    	$suratk->save();

    	return redirect()->route('suratkeluar')->with('succes');
    }
}
  