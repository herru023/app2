<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Suratkeluar;
use App\Agendacamat;

class AdminController extends Controller
{
    public function suratmasuk()
    {
    	$datasurat = Suratmasuk::all();
    	return view('suratmasuk', compact('datasurat'));
    }
    public function suratkeluar()
    {
    	$suratk = Suratkeluar::all();
    	return view('suratkeluar', compact('suratk'));
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
    public function indexsm()
    {
    	$suratmasuk = Suratmasuk::all();
    	return view('suratmasuk.indexsm', compact('suratmasuk'));
    }
    public function indexsk(Request $req)
    {
        if(!empty($req->report)){
            $suratkeluar = Suratkeluar::where('dari', $req->report)->get();
        }else{
            $suratkeluar = Suratkeluar::all();
        }
    	;
    	return view('suratkeluar.indexsk', compact('suratkeluar'));
    }
    public function agendacamat()
    {
        $agenda1 = Agendacamat::all();
    	return view('camat.agendacamat', compact('agenda1'));
    }
    public function indexjcamat()
    {   
        $agenda2 = Agendacamat::all();
        return view('camat.jadwalcamat', compact('agenda2'));
    }

    public function simpanac(Request $request)
    {
        $agenda = new Agendacamat();
        $agenda->tglkegiatan = $request->tglkegiatan;
        $agenda->kegiatan = $request->kegiatan;
        $agenda->hari = $request->hari;
        $agenda->waktu = $request->waktu;
        $agenda->tempat = $request->tempat;
        $agenda->bertugas = $request->bertugas;
        $agenda->save();

        return redirect()->route('agendacamat')->with('succes');
    }

}
  