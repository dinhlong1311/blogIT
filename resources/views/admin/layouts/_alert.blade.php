@if (session('success'))
  <div id="alert" class="alert alert-success">
    <i class="fa fa-check fa-lg" aria-hidden="true"></i>
    <span>{{session('success')}}</span>
  </div>
@endif
