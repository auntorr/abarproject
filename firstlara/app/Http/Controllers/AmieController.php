<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmieController extends Controller
{
   public function index(){
   	return view('front-end.home.home');
   }
   public function about(){
   	return view('front-end.about.about');
   }
   public function e(){
   	return view('front-end.e.e');
   }
   public function m(){
   	return view('front-end.m.m');
   }
   public function ch(){
   	return view('front-end.ch.ch');
   }
   public function c(){
   	return view('front-end.c.c');
   }
   public function prosno(){
   	return view('front-end.prosno.question');
   }
   public function solution(){
   	return view('front-end.solution.solution');
   }
    public function classnote(){
   	return view('front-end.classnote.classnote');
   }
    public function videotut(){
   	return view('front-end.videotut.videotut');
   }
    public function science(){
   	return view('front-end.science.science');
   }
    public function career(){
   	return view('front-end.career.career');
   }
    public function alumni(){
   	return view('front-end.alumni.alumni');
   }
   public function acsu(){
   	return view('front-end.acsu.acsu');
   }
    public function cques(){
   	return view('front-end.cques.cques');
   }
    public function eques(){
   	return view('front-end.eques.eques');
   }
    public function mques(){
   	return view('front-end.mques.mques');
   }
    public function chques(){
   	return view('front-end.chques.chques');
   }
    public function chsol(){
   	return view('front-end.chsol.chsol');
   }
    public function csol(){
    return view('front-end.csol.csol');
   }
 public function msol(){
   	return view('front-end.msol.msol');
   }
 public function esol(){
   	return view('front-end.esol.esol');
   }
   public function cbook(){
   	return view('front-end.cbook.cbook');
   }
    public function mbook(){
   	return view('front-end.mbook.mbook');
   }
    public function chbook(){
   	return view('front-end.chbook.chbook');
   }

    public function ebook(){
   	return view('front-end.ebook.ebook');
   }
     public function cques2(){
    return view('front-end.cques2.cques2');
   }
    public function eques2(){
    return view('front-end.eques2.eques2');
   }
    public function mques2(){
    return view('front-end.mques2.mques2');
   }
    public function chques2(){
    return view('front-end.chques2.chques2');
   }
    public function chsol2(){
    return view('front-end.chsol2.chsol2');
   }
    public function csol2(){
    return view('front-end.csol2.csol2');
   }
 public function msol2(){
    return view('front-end.msol2.msol2');
   }
 public function esol2(){
    return view('front-end.esol2.esol2');
  }
  public function notice(){
    return view('front-end.notice.notice');
  }
  public function result(){
    return view('front-end.result.result');
  }
  public function routine(){
    return view('front-end.routine.routine');
  }
    public function dnews(){
    return view('front-end.dnews.dnews');
  }
    public function anews(){
    return view('front-end.anews.anews');
  }
    public function acnews(){
    return view('front-end.acnews.acnews');
  }
  public function break(){
    return view('front-end.break.break');
  }



}
