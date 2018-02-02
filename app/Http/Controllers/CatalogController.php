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
		$arrayPeliculas = Movie::findOrFail($id);
		return view('catalog.show')->with("peli",$arrayPeliculas);
	}

	public function getCreate(){
		return view('catalog.create');
	}

	public function getEdit($id){
		$arrayPeliculas = Movie::findOrFail($id);
		return view('catalog.edit')->with("peli",$arrayPeliculas);
	}

}
