<div class="row">
  <div class="col-md-2">
    <strong>Actor name</strong>
    <p>{{$actor->name}}</p>
  </div>
  <div class="col-md-2">
    <strong>Base Pay</strong>
    <p>{{money_format('$%i', $actor->role->base_pay)}}</p>
  </div>
  <div class="col-md-2">
    <strong>Revenue Share</strong>
    <p>{{$actor->role->revenue_share}}%</p>
  </div>
  <div class="col-md-2">
    <strong>Salary</strong>
    <p>{{money_format('$%i', $actor->role->salary($actor->role->movie->income))}}</p>
  </div>
</div>
