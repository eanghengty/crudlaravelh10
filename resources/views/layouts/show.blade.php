@extends('layouts.app')
@section('content')

@forelse($category->post as $p)
<div class="post-1">
<div class="post-5">
	<div class="post-9">
		<p class="post-2">{{$category->name}}</p>
	</div>
	<div class="post-10">
		<!-- <a href="{{route('layouts.update',$p->id)}}" class="post-6">edit</a> -->
	@unless(auth()->guest())
		<form action="{{route('layouts.update',$p->id)}}" method="GET">
		@csrf
		<button>update</button>
	</form>
	<div class="post-7"></div>
	<div class="post-7"></div>
	<form action="{{route('layouts.destroy',$p->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button>delete</button>
</form>	
@endunless</div>
	
</div>
<p class="post-3">title: {{$p['title']}}</p>
<p class="post-4">description: {{$p['description']}}</p>
</div>
@empty
<p>no post found</p>
@endforelse


@endsection
