@extends('layouts.app')

@section('content')
<form action="{{ route('add') }}" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table border="1" width="500" height="300">
	<tr>
		<td>Title:</td>
		<td><input name="title" type="text"></td>
	</tr>
	<tr>
		<td>图片:</td>
		<td><input type="file" name="photo"></td>
	</tr>
	<tr>
		<td>Content</td>
		<td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Submit"></td>
	</tr>
</table>
</form>
@endsection