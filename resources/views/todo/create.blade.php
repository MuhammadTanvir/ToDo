@extends('layout.app')
@section('body')
<br>
<a href="/todo" class="btn btn-info">Back</a>
<div class="col-lg-4 col-lg-offset-4">
   
    <h2>{{substr(Route::currentRouteName(),5) }}</h2>
    <form class="form-horizontal" action="/todo/@yield('editId')" method="post">
    {{csrf_field()}}
    @section('editMethod')
     @show
  <fieldset>
       <div class="form-group">
      <div class="col-lg-10">
       <input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="Title">
       <br>
        </div>
       <div class="col-lg-10">
        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Description">@yield('editBody')</textarea>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
       
      </div>
    </div>
  </fieldset>

</form>
@include('todo.partials.error')

</div>


@endsection    