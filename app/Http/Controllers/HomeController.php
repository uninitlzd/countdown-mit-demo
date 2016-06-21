<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);

        if($user->expired_date > Carbon::now()) {
          return redirect()->route('start-exam');
        }

        return view('home')->with('user', $user);
    }

    public function startExam()
    {
      $id = Auth::guard('web')->user()->id;
      $now = Carbon::now();

      if (User::find($id)->exam_status == 0) {
        $update = User::where('id', $id)->update([
          'exam_status' => 1,
          'started_date' => $now,
          'expired_date' => $now->copy()->addDay()
        ]);
      }

      return view('exam.exam');
    }

    public function userInfo()
    {
      $data = Auth::guard('web')->user();
      return $data;
    }
}
