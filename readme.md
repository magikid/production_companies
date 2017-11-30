# Production Companies

This project is a CRUD website for movie production companies, their movies, and
the actors employed in those films.  It tracks various stats for the films such
as the income and expense, roles that actors played, salaries for the actors,
and stats about each movie's script.

## Part I
Design and code an application that can store the following information:

- At least three Hollywood movie production companies
- Each company produces 5-10 movies a year
- 10% of the movies fail financially
- Actors are paid a base amount for the movie plus rev share 
- Assume 4 core actors per movie. 

Make sure your UI displays the movie production companies, the actors, actor
base, actor revenue, movie production companies revenue, losses for each movie
and a form that allows a user to enter an actor and map to a movie, base pay for
the movie and rev share.

Part II: 
Assume a movie script starts of each speaking and/or moving event which we will
call a “line” with a reference to an Actor in the movie. The line can include
more than one sentence and/or paragraphs. The line ends when a next reference to
the same or different Actor’s speaking and/or moving event is made in the
script.  Create a file that has a sample movie script for the Actors in your
database based on this description.  Add to your webapp a display that also
shows the following calculations against that file:

1. the number of script “lines” and the number of spoken words in each movie
   script for each Actor
2. the number of times the Actor's character will be mentioned in each movie
   script by other Actors (for instance, Actor plays "Mad Max", b) will be a
   count of how many times a reference to "Max" or "Mad Max" by another
   character is made in the movie script

## Routes
Stored in `routes/web.php`.

## Models
Stored in `app/$model_name`.

## Controllers
Stored in `app/Http/Controllers/`.

## Views
Stored in `resources/views` and accessed using dot notation so `movie.index` is
stored in `resources/views/movie/index.blade.php`.
