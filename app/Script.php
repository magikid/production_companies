<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class Script extends Model
{
  public function movie()
  {
    return $this->belongsTo('App\Movie');
  }

  #
  # This function generates a complete script for the associated movie.
  #
  public function generateScript()
  {
    $faker = Faker::create();
    $actors = $this->movie->actors()->get();
    $script_text = '';
    for($i=0; $i<=100; $i++){
      $actor = $actors[$i%4];
      if($i%6==0){
        $script_text .= "$actor->name: moves " . $faker->word . "\n";
      }else{
        $script_text .= "$actor->name: " . $faker->paragraph . "\n";
      }
    }
    $this->script_text = $script_text;
    $this->save();
  }

  public function line_counts()
  {
    $actors = $this->movie->actors()->get();
    $counts = [];
    foreach($actors as $actor){
      $counts[$actor->name] = substr_count($this->script_text, $actor->name);
    }
    return $counts;
  }

  private function lines()
  {
    $actors = $this->movie->actors;
    $lines = [];

    # This regex looks for lines that match "Tom Hanks: You got a friend in me."
    preg_match_all('/(?<actor>[\w\. ]+): (?<line>[\w ]+)/', $this->script_text, $lines, PREG_SET_ORDER);
    return $lines;
  }

  public function spoken_word_count()
  {
    $counts = [];
    foreach($this->movie->actors as $actor){ $counts["$actor->name"] = 0; };
    foreach($this->lines() as $line){
      if(stripos($line["line"], "moves") > 0){
        continue;
      }else{
        $counts[$line['actor']] += str_word_count($line['line']);
      }
    }

    return $counts;
  }

  public function character_references()
  {
    $counts = [];
    foreach($this->movie->actors as $actor){
      $counts[$actor->name] = substr_count($this->only_lines(), $actor->name);
    }
    return $counts;
  }

  private function only_lines()
  {
    # This goes over the $this->lines() array and strips out the actors leaving 
    # only the lines.
    return implode(" ", array_map(function($line){ return $line["line"]; }, $this->lines()));
  }
}
