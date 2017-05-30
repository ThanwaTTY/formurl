<?php

namespace App\Http\Controllers\Music;

use DB;
use App\Http\Controllers\Controller;
/**
 *
 */
class SongController extends Controller
{

  function __construct()
  {
    # code...
  }

  public function index()
  {
    //return 'Hello From Song Controller';
    return view('song.index');

  }

  public function play()
  {
      //การส่งค่าแบบแนบค่าไป
      //return view('song/player');
      /*
      return view('song/player')
      ->with('band', 'OASIS')
      ->with('album','Morning') ;
      */
      /*
      return view('song/player')->with([
        'band' => 'OASIS',
        'album' => 'Slide away'
      ]);
      */
      //return view('song/player')->withBand('OASIS')->withAlbum('Slide');
      $this->data = array(
          'band' => 'OASIS',
          'album' => 'Wonder Wall'
      );
      return view('song/player', $this->data);
  }

  public function band()
  {
    $aCss = array('css/song/style.css');
    $aScript = array('js/song/main.js');

    //$band = DB::table('post_tbl')->find('3');//แสดงข้อมูลที่ id = 3
    //$band = DB::select('select title,blog_th from post_tbl where deleted = ?', [0]); //แสดงข้อมูลใน column title, blog_th ของตาราง post_tbl ที่ deleted มีค่า = 0
    //$band = DB::insert('insert into post_tbl (title, blog_th) value (?,?)', ['green day', 'best of blog']);
    //$band_up = DB::update('update post_tbl set blog_th = "Best Of rock Band" where title = ?', ['green day']);
    $band_del = DB::delete('delete from post_tbl where title = ?', ['Thanwa']);
    $band = DB::table('post_tbl')->get();//แสดงข้อมูลในตารางทุก column

    dd($band);

    $this->data = array(
        'title' => 'Music Band',
        'band' => 'Metallica',
        'song' => '<u>Black</u>',
        'style' => $aCss,
        'script' => $aScript
    );
    return view('song/band', $this->data);

  }
}
