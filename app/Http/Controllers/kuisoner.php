<?php

namespace App\Http\Controllers;

use View;
use DB;
use App\ModelKuisoner;
use App\ModelT_Kuisoner;
use Illuminate\Http\Request;

class kuisoner extends Controller
{
    public function home(){
        $kuisoner = ModelKuisoner::select('id_kuisoner')->distinct()->get();
        return View::make('myadmin.content.kuisoner')->with('data',$kuisoner);
    }

    public function add(Request $request){
        try{
            $id_kuisoner = ModelKuisoner::max('id_kuisoner');

            if(!$id_kuisoner)
                $id_kuisoner = 1;
            else
                $id_kuisoner = (int)$id_kuisoner+1;

            error_log(json_encode($request));
            $id_penunjang_fasilitas = $request->input['penunjang_fasilitas'];
            $id_penilaian           = $request->input['nilai'];
            $usia                   = $request->input['usia'];
            $id_jenjang             = $request->input['jenjang_pendidikan'];

            $t_kuisoner = new ModelT_Kuisoner;
            $t_kuisoner->id_kuisoner = $id_kuisoner;
            $t_kuisoner->usia = $usia;
            $t_kuisoner->id_jenjang = $id_jenjang;
            $t_kuisoner->save();

            foreach($id_penunjang_fasilitas as $key=>$value){
                
                $new_id_penunjang_fasilitas = $id_penunjang_fasilitas[$key];
                $new_id_penilaian = $id_penilaian[$key];

                $kuisoner = new ModelKuisoner;
                $kuisoner->id_penunjang_fasilitas = $new_id_penunjang_fasilitas;
                $kuisoner->id_penilaian = $new_id_penilaian;
                $kuisoner->id_kuisoner = $id_kuisoner;
                $kuisoner->save();
                
            }

        } catch (\Exception $e) {
            error_log($e);
            return redirect('/')->with('message-danger','Kuisoner gagal terkirim');
        }

        return redirect('/')->with('message-success','Kuisoner anda telah terkirim');
        
    }

    public function edit(Request $request){

        $this->validate($request, [
            'id_fasilitas' => 'required',
            'fasilitas_before' => 'required',
            'fasilitas' => 'required'
        ]);
        
        $id_fasilitas = $request->id_fasilitas;
        $fasilitas_before = $request->fasilitas_before;
        $fasilitas = $request->fasilitas;
        $data = $request->all();

        $fasility = ModelFasilitas::where('fasilitas',$fasilitas)
                        ->where('fasilitas','!=',$fasilitas_before)
                        ->first();

        if($fasility){
            return redirect('\fasilitas')->with('alert','Fasilitas sudah ada');
        }
        else{
            $fasility = ModelFasilitas::where('id_fasilitas',$id_fasilitas);
            $fasility->update(array('fasilitas' => $fasilitas));

            return redirect('\fasilitas')->with('alert-success','Berhasil ubah fasilitas');
        }
        
    }

    public function delete(Request $request){

        $this->validate($request, [
            'id_kuisoner' => 'required'
        ]);
        
        $id_kuisoner = $request->id_kuisoner;
        $kuisoner = DB::table('kuisoner')->where('id_kuisoner',$id_kuisoner);
        $kuisoner->delete();

        return 'succes';
    }

    public function user(Request $request){
  
        $id_kuisoner = $request->id_kuisoner;
        error_log($id_kuisoner);

        $data = DB::table('t_kuisoner')
                ->select('t_kuisoner.usia','jenjang_pendidikan.jenjang')
                ->join('jenjang_pendidikan','t_kuisoner.id_jenjang','=','jenjang_pendidikan.id_jenjang')
                ->where('t_kuisoner.id_kuisoner',$id_kuisoner)
                ->get();

        $json_resp = array(
            "data" => $data
        );

        return response()->json($json_resp, 200); 
    }

    public function kamar(Request $request){
  
        $id_kuisoner = $request->id_kuisoner;
        error_log($id_kuisoner);

        $data = DB::table('kuisoner')
                ->select('penunjang.penunjang','penilaian.keterangan')
                ->join('penunjang_fasilitas','penunjang_fasilitas.id_penunjang_fasilitas','=','kuisoner.id_penunjang_fasilitas')
                ->join('penunjang','penunjang.id_penunjang','=','penunjang_fasilitas.id_penunjang')
                ->join('fasilitas','fasilitas.id_fasilitas','=','penunjang_fasilitas.id_fasilitas')
                ->join('penilaian','penilaian.id_penilaian','=','kuisoner.id_penilaian')
                ->where('fasilitas.id_fasilitas','3')
                ->where('kuisoner.id_kuisoner',$id_kuisoner)
                ->get();

        $json_resp = array(
            "data" => $data
        );

        return response()->json($json_resp, 200); 
    }

    public function kamarmandi(Request $request){
       
        $id_kuisoner = $request->id_kuisoner;
        $data = DB::table('kuisoner')
                ->select('penunjang.penunjang','penilaian.keterangan')
                ->join('penunjang_fasilitas','penunjang_fasilitas.id_penunjang_fasilitas','=','kuisoner.id_penunjang_fasilitas')
                ->join('penunjang','penunjang.id_penunjang','=','penunjang_fasilitas.id_penunjang')
                ->join('fasilitas','fasilitas.id_fasilitas','=','penunjang_fasilitas.id_fasilitas')
                ->join('penilaian','penilaian.id_penilaian','=','kuisoner.id_penilaian')
                ->where('fasilitas.id_fasilitas','4')
                ->where('kuisoner.id_kuisoner',$id_kuisoner)
                ->get();

        $json_resp = array(
            "data" => $data
        );
        return response()->json($json_resp, 200); 
    }

    public function ruangtamu(Request $request){
        $id_kuisoner = $request->id_kuisoner;
        $data = DB::table('kuisoner')
                ->select('penunjang.penunjang','penilaian.keterangan')
                ->join('penunjang_fasilitas','penunjang_fasilitas.id_penunjang_fasilitas','=','kuisoner.id_penunjang_fasilitas')
                ->join('penunjang','penunjang.id_penunjang','=','penunjang_fasilitas.id_penunjang')
                ->join('fasilitas','fasilitas.id_fasilitas','=','penunjang_fasilitas.id_fasilitas')
                ->join('penilaian','penilaian.id_penilaian','=','kuisoner.id_penilaian')
                ->where('fasilitas.id_fasilitas','5')
                ->where('kuisoner.id_kuisoner',$id_kuisoner)
                ->get();
        
        $json_resp = array(
            "data" => $data
        );
        return response()->json($json_resp, 200); 
    }

    public function parkiran(Request $request){
        
        $id_kuisoner = $request->id_kuisoner;
        $data = DB::table('kuisoner')
                ->select('penunjang.penunjang','penilaian.keterangan')
                ->join('penunjang_fasilitas','penunjang_fasilitas.id_penunjang_fasilitas','=','kuisoner.id_penunjang_fasilitas')
                ->join('penunjang','penunjang.id_penunjang','=','penunjang_fasilitas.id_penunjang')
                ->join('fasilitas','fasilitas.id_fasilitas','=','penunjang_fasilitas.id_fasilitas')
                ->join('penilaian','penilaian.id_penilaian','=','kuisoner.id_penilaian')
                ->where('fasilitas.id_fasilitas','6')
                ->where('kuisoner.id_kuisoner',$id_kuisoner)
                ->get();
        
        $json_resp = array(
            "data" => $data
        );
        return response()->json($json_resp, 200); 
    }

    public function dapur(Request $request){
          
        $id_kuisoner = $request->id_kuisoner;
        $data = DB::table('kuisoner')
                ->select('penunjang.penunjang','penilaian.keterangan')
                ->join('penunjang_fasilitas','penunjang_fasilitas.id_penunjang_fasilitas','=','kuisoner.id_penunjang_fasilitas')
                ->join('penunjang','penunjang.id_penunjang','=','penunjang_fasilitas.id_penunjang')
                ->join('fasilitas','fasilitas.id_fasilitas','=','penunjang_fasilitas.id_fasilitas')
                ->join('penilaian','penilaian.id_penilaian','=','kuisoner.id_penilaian')
                ->where('fasilitas.id_fasilitas','7')
                ->where('kuisoner.id_kuisoner',$id_kuisoner)
                ->get();

        $json_resp = array(
                "data" => $data
        );
        return response()->json($json_resp, 200); 
    }


}
