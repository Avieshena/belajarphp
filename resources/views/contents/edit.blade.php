<!DOCTYPE html>
<html>
<head>
	<title>Edit Laravel</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">Inspired By</a></h2>
	<h3>Edit Content</h3>

	<a href="{{URL('./contents')}}"> Back</a>
	
	<br/>
	<br/>

	 @foreach($data as $d)
	<form action="{{URL('./contents/update')}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $d->id }}"> <br/>
		Title <input type="text" required="required" name="title" value="{{ $d->title }}"> <br/>
		Excerpt <input type="text" required="required" name="excerpt" value="{{ $d->excerpt }}"> <br/>
		Content <input type="text" required="required" name="content" value="{{ $d->content }}"> <br/>
		<input type="submit" value="Update">
		</form>
	@endforeach
		

</body>
</html>