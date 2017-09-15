@extends('layout.tamp')

@section('title', 'Create Page')

@section('body')
	<center>
	<a href="/todo" class="btn btn-primary">Back</a>
	<h1>Create New Item!</h1><br>
	</center>
	<form class="form-horizontal" method="post" action="/todo">
    {{csrf_field()}}
  <fieldset>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="body"></textarea>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
  @if(count($errors)>0)
    @foreach($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
    @endforeach
  @endif
</form>
@endsection