@if (count($errors)>0)
<div class="alert-danger">
@foreach ($errors->all() as $error)
{{$error}}
@endforeach
@endif
</div>