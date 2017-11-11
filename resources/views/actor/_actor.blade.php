<div class="row">
  <div class="col-md-2">
    <p><a href="{{route('actors.show', $actor->id)}}">{{$actor->name}}</a></p>
  </div>
  <div class="col-md-2">
    <p>{{money_format('$%i', $actor->role->base_pay)}}</p>
  </div>
  <div class="col-md-2">
    <p>{{$actor->role->revenue_share}}%</p>
  </div>
  <div class="col-md-2">
    <p>{{money_format('$%i', $actor->role->salary($actor->role->movie->income))}}</p>
  </div>
</div>
