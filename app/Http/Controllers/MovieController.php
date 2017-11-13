<?php

namespace App\Http\Controllers;

use App\Movie;
use App\production_company;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('movie.index', ['movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $movie = new Movie;
      $production_companies = $this->movie_form_company_select();
      return view('movie.create', ['movie' => $movie, 'production_companies' => $production_companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $movie = new Movie;
      $company = production_company::find($request->input('production_company_id'));

      $movie->name = $request->input('name');
      $movie->release_date = $request->input('release_date');
      $movie->income = $request->input('income');
      $movie->expense = $request->input('expense');

      $company->movies()->save($movie);

      return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      $line_counts = $movie->script->line_counts();
      $spoken_word_count = $movie->script->spoken_word_count();
      $character_references = $movie->script->character_references();

      return view('movie.show', [
        'movie' => $movie,
        'line_counts' => $line_counts,
        'spoken_word_count' => $spoken_word_count,
        'character_references' => $character_references
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      $production_companies = $this->movie_form_company_select();
      return view('movie.edit', ['movie' => $movie, 'production_companies' => $production_companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
      $movie->name = $request->name;
      $movie->save();

      return redirect()->route('movies.show', $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
      $movie->destroy($movie->id);
      return redirect()->route('movies.index');
    }

    private function movie_form_company_select()
    {
      return production_company::select('id', 'name')
        ->get()
        ->reduce(function($final_array, $company){
          $final_array[$company->id] = $company->name;
          return $final_array;
        });
    }
}
