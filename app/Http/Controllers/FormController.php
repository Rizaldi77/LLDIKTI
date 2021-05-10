<?php

namespace App\Http\Controllers;
use Carbon;

use Illuminate\Http\Request;

use App\Models\Rekap;
use App\Models\Feedback;
use App\Models\Post;
use App\Models\Blog;
use DB;

class FormController extends Controller
{
    public function create()
    {
        $data = DB::table('blogs')->get();
        return view('pages.form', compact('data'));
    }

    public function proses(Request $request)
    {
        
        $rekap = Rekap::create([
                                'name' => request('name'),
                                'address' => request('address'),
                                'instansi' => request('instansi'),
                                'noktp' => request('noktp'),
                                'notelp' => request('notelp'),
                                'email' => request('email'),
                                'loket' => request('loket'),
                                'keperluan' => request('keperluan')
                                ]);
        if($rekap){
            // $mytime = Carbon\Carbon::now()->toDateTimeString();
            $mydate =  Carbon\Carbon::now()->toDateString();
            $blogs = Blog::all();
            $all = Feedback::all()
                            ->where('date', $mydate);
            $no_urut2 = 1;
            foreach($all as $key => $a)
            {
                foreach($blogs as $key2 => $b)
                {
                    if($blogs[$key2]->id == request('loket'))
                    {
                        $abj_loket = $blogs[$key2]->abjad;
                        $desc = $blogs[$key2]->description;
                        if($all[$key]->instansi == $desc){
                                $no_urut2 = $all[$key]->no_urut+1;
                        }
                    }
                }
            }
            $no_str = strval($no_urut2);
            $gab_nourut = $abj_loket . "-" . $no_str;
            $feedback = Feedback::create([
                'instansi' => $desc,
                'date' => $mydate,
                'no_urut' => $no_urut2,
                'gab_nourut' => $gab_nourut
            ]);
                           
            return view('pages.proses', compact('abj_loket','no_urut2'));
            
        }
    }
    
}

