<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Suratkeluar;
use App\Agendacamat;
use App\Cutitahunan;
use App\Suratimb;

class AdminController extends Controller
{

    // --- Controller surat masuk +++
    public function suratmasuk()
    {
    	$datasurat = Suratmasuk::all();
    	return view('suratmasuk.suratmasuk', compact('datasurat'));
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
    public function indexsm()
    {
        $suratmasuk = Suratmasuk::all();
        return view('suratmasuk.indexsm', compact('suratmasuk'));
    }
    public function deletesm($id)
    {
        $deletesm = Suratmasuk::where('id',$id)->delete();
        return redirect()->route('indexsm')->with('info','Data berhasil dihapus!');
    }
     public function editsm($id)
    {
        $surat = Suratmasuk::find($id);
        return view('suratmasuk.editsm', compact('surat'));
    }
    public function simpaneditsm(Request $request, $id)
    {   

        $update = Suratmasuk::find($id);
        $update->update([
            'suratdari' => $request->suratdari,
            'tglsurat' => $request->tglsurat,
            'nosurat' => $request->nosurat,
            'tglditerima' => $request->tglditerima,
            'untuk' => $request->untuk,
            'prihal' => $request->prihal,
        ]);
        return redirect(route('indexsm'))->with('info', 'data berhasil diubah');
    }
    public function printsm()
    {
        $surat = Suratmasuk::all();
        return view('suratmasuk.printsm', compact('surat'));
    }

    // --- Controller surat keluar +++
    public function suratkeluar()
    {
    	$suratk = Suratkeluar::all();
    	return view('suratkeluar.suratkeluar', compact('suratk'));
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
    public function indexsk(Request $req)
    {
        if(!empty($req->report)){
            $suratkeluar = Suratkeluar::where('dari', $req->report)->get();
        }else{
            $suratkeluar = Suratkeluar::all();
        }
        return view('suratkeluar.indexsk', compact('suratkeluar'));
    }
    public function deletesk($id)
    {
        $deletesk = Suratkeluar::where('id',$id)->delete();
        return redirect()->route('indexsk')->with('info','Data berhasil dihapus!');
    }
     public function editsk($id)
    {
        $surat = Suratkeluar::find($id);
        return view('suratkeluar.editsk', compact('surat'));
    }
    public function simpaneditsk(Request $request, $id)
    {
        $update = Suratkeluar::find($id);
        $update->update([
            'noberkas' => $request->noberkas,
            'alamatpenerima' => $request->alamatpenerima,
            'tglsurat' => $request->tglsurat,
            'dari' => $request->dari,
            'prihal' => $request->prihal,
        ]);
        return redirect(route('indexsk'))->with('info', 'data berhasil diubah');
    }
    public function printsk()
    {   
        $surat = Suratkeluar::all();
        return view('suratkeluar.printsk', compact('surat'));
    }

    // --- Controller agenda camat +++
    public function agendacamat()
    {
        $agenda1 = Agendacamat::all();
    	return view('camat.agendacamat', compact('agenda1'));
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
    public function indexjcamat()
    {   
        $agenda2 = Agendacamat::all();
        return view('camat.jadwalcamat', compact('agenda2'));
    }
    public function deletecamat($id)
    {
        $deletec = Agendacamat::where('id',$id)->delete();
        return redirect()->route('indexjcamat')->with('info','Data berhasil dihapus!');
    }
     public function editcamat($id)
    {
        $surat = Agendacamat::find($id);
        return view('camat.editcamat', compact('surat'));
    }
    public function simpaneditcamat(Request $request, $id)
    {
        $update = Agendacamat::find($id);
        $update->update([
            'tglkegiatan' => $request->tglkegiatan,
            'kegiatan' => $request->kegiatan,
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'bertugas' => $request->bertugas,
        ]);
        return redirect(route('indexjcamat'))->with('info', 'data berhasil diubah');
    }
    public function printcamat()
    {
        $surat = Agendacamat::all();
        return view('camat.printcamat', compact('surat'));
    }

    // --- Controller cuti tahunan +++
    public function cutitahunan()
    {
        return view('cutitahunan.cuti');
    }
    public function simpanc(Request $request)
    {
        $suratc = new Cutitahunan();
        $suratc->nama = $request->nama;
        $suratc->nip = $request->nip;
        $suratc->pangkat = $request->pangkat;
        $suratc->jabatan = $request->jabatan;
        $suratc->unit = $request->unit;
        $suratc->lamanya = $request->lamanya;
        $suratc->jalankan = $request->jalankan;
        $suratc->tgl_mulai = $request->tgl_mulai;
        $suratc->sampai_tgl = $request->sampai_tgl;
        $suratc->masuk_tgl = $request->masuk_tgl;

        $suratc->save();

        return redirect()->route('cutitahunan')->with('succes');
    }
    public function indexc()
    {
        $cuti = Cutitahunan::all();
        return view('cutitahunan.indexc', compact('cuti'));
    }
    public function deletec($id)
    {
        $deletec = Cutitahunan::where('id',$id)->delete();
        return redirect()->route('indexc')->with('info','Data berhasil dihapus!');
    }
     public function editc($id)
    {
        $surat = Cutitahunan::find($id);
        return view('cutitahunan.editc', compact('surat'));
    }
    public function simpaneditc(Request $request, $id)
    {
        $update = Cutitahunan::find($id);
        $update->update([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit' => $request->unit,
            'lamanya' => $request->lamanya,
            'jalankan' => $request->jalankan,
            'tgl_mulai' => $request->tgl_mulai,
            'sampai_tgl' => $request->sampai_tgl,
            'masuk_tgl' => $request->masuk_tgl
        ]);
        return redirect(route('indexc'))->with('info', 'data berhasil diubah');
    }
    public function printc()
    {
        $surat = Cutitahunan::all();
        return view('cutitahunan.printc', compact('surat'));
    }

    // --- Controller surat IMB +++
    public function suratimb()
    {   
        $surat = Suratimb::all();
        return view('suratimb.suratimb', compact('surat'));
    }
    public function simpani(Request $request)
    {
        $surati = new Suratimb();
        $surati->nosurat = $request->nosurat;
        $surati->tglsurat = $request->tglsurat;
        $surati->nama = $request->nama;
        $surati->alamat = $request->alamat;
        $surati->jenis = $request->jenis;
        $surati->luas = $request->luas;
        $surati->lokasi = $request->lokasi;

        $surati->save();
        return redirect()->route('suratimb')->with('succes');
    }
    public function indexi()
    {
        $surat = Suratimb::all();
        return view('suratimb.indexi', compact('surat'));
    }
    public function deletei($id)
    {
        $deletec = Suratimb::where('id',$id)->delete();
        return redirect()->route('indexi')->with('info','Data berhasil dihapus!');
    }
     public function editi($id)
    {
        $surat = Suratimb::find($id);
        return view('suratimb.editi', compact('surat'));
    }
    public function simpanediti(Request $request, $id)
    {
        $update = Suratimb::find($id);
        $update->update([
            'nosurat' => $request->nama,
            'tglsurat' => $request->tglsurat,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis' => $request->jenis,
            'luas' => $request->luas,
            'lokasi' => $request->lokasi,
        ]);
        return redirect(route('indexi'))->with('info', 'data berhasil diubah');
    }
    public function printi()
    {
        $surat = Suratimb::all();
        return view('suratimb.printi', compact('surat'));
    }



    public function rekap()
    {
        return view('rekapitulasi');
    }

    public function laporankasi()
    {
        return view('laporankasi');
    }
    

}
  