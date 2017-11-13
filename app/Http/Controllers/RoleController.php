<?php

namespace App\Http\Controllers;

use App\Role;
use App\Actor;
use App\Movie;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $actor = Actor::find($request->query('actor_id'));
      $actors = $this->role_form_actor_select();
      $movies = $this->role_form_movie_select();

      return view('role.create', [
        'actor' => $actor,
        'actors' => $actors,
        'movies' => $movies
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $role = new Role;
      $actor = Actor::find($request->input('actor_id'));
      $movie = Movie::find($request->input('movie_id'));

      if($actor->movies->contains($movie)){
        return redirect()->route('actors.show', $actor->id)
          ->with('message', 'Duplicate role!');
      }else{
        $role->base_pay = $request->input('base_pay');
        $role->revenue_share = $request->input('revenue_share');
        $role->character_name = $request->input('character_name');
        $role->actor_id = $request->input('actor_id');
        $role->movie_id = $request->input('movie_id');

        $role->save();

        return redirect()->route('actors.show', $actor->id);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
      $actor_id = $role->actor->id;

      $role->destroy($role->id);

      return redirect()->route('actors.show', $actor_id);
    }

    private function role_form_actor_select()
    {
      return Actor::select('id', 'name')
        ->get()
        ->reduce(function($final_array, $company){
          $final_array[$company->id] = $company->name;
          return $final_array;
        });
    }

    private function role_form_movie_select()
    {
      return Movie::select('id', 'name')
        ->get()
        ->reduce(function($final_array, $company){
          $final_array[$company->id] = $company->name;
          return $final_array;
        });
    }
}
