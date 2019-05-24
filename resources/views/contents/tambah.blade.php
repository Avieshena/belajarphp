<!DOCTYPE html>
<html>
<head>
	<title>Insert Tabel</title>
</head>
<body>
	<div class="container">
			<h2><a href="https://www.malasngoding.com">Inspired By</a></h2>
			<h3>Data List of Content</h3>

			<a href="{{URL('./contents')}}"> Back</a>
	
			<br/>
			<br/>

			<form action="{{URL('./contents/store')}}" method="post">
			{{ csrf_field() }}
			Title   : 	<input type="text" name="title" required="required"> <br/><br/>
			Excerpt : 	<input type="text" name="excerpt" required="required"> <br/><br/>
			Content :	<input type="text" name="content" required="required"> <br/><br/>
			<input type="submit" value="SAVE">
			</form>
	</div>
</body>
</html>