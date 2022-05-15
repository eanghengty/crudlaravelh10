@extends('layouts.app')
@section('title','create - post')
@section('content')
<div class="create-1">
	<form method="POST" action="{{route('layouts.store')}}">
	@csrf
	<div class="create-2">
		<label>Title</label>
		<input type="text" name="title"></input>
	</div>
	<div class="create-2">
		<label>Description</label>
		<input type="text" name="description"></input>
	</div>
	<div class="create-2">
	<label>Categories</label>
	<select id="type" name="category_id">
    <option value="1">places</option>
    <option value="2">Memes</option>
	</select>
	</div>
	<div class="create-2">
		<button type="submit">create post</button>
	</div>


</form>
</div>
@endsection