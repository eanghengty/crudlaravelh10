@extends('layouts.app')
@section('title','update - post')
@section('content')
<div class="create-1">
	<form method="POST" action="{{route('layouts.updated')}}">
	@csrf
	<input type="hidden" name="id" value="{{$data['id']}}">
	<div class="create-2">
		<label>Title</label>
		<input type="text" name="title"></input>
	</div>
	<div class="create-2">
		<label>Description</label>
		<input type="text" name="description"></input>
	</div>
	<div class="create-2">
		<button type="submit">update post</button>
	</div>


</form>
</div>
@endsection