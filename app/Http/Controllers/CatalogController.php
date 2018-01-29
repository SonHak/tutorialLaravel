<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class CatalogController extends Controller
{

	public function getIndex(){
		/*return view('catalog.index');*/
		$arrayPeliculas = Movie::all();
		return view('catalog.index')->with("arrayPeliculas",$arrayPeliculas);
	}

	public function getShow($id){
		return view('catalog.show')->with("peli",$this->arrayPeliculas[$id])->with("id",$id);
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		return view('catalog.edit',array('id'=>$id));
	}

}
