
@if(session()->has('message'))
<h2 class="alert-success">{{session()->get('message')}}</h2>
@endif