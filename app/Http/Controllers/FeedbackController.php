<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Form;
use App\Models\Feedback;
use DB;

class FeedbackController extends Controller
{
    public function create()
    {
        $data = DB::table('blogs')->get();
    	return view('pages.input_nourut', compact('data'));
    }

    public function proses(Request $request)
    {
        $no_urut = $request->no_urut;
        $kepuasan = $request->kepuasan;
        $kritik = $request->kritik;

        // dd($request->kritik);
        $update = Feedback::where('gab_nourut', $no_urut)
                            ->update(
                                ['kepuasan' => $kepuasan,
                                'deskripsi' => $kritik]);

        return view('pages.feedback');
    }
}
