@extends('layouts.app')

@section('content')

<form action="{{ route('edit') }}" method="">
<table border="1" width="500" height="300">
	<input type="hidden" name="id" value="{{ $new['id'] }}">
	<tr>
		<td>Title:</td>
		<td><input name="title" type="text" value="{{ $new['title'] }}"></td>
	</tr>
	<tr>
		<td>Content</td>
		<td><textarea name="content" id="" cols="30" rows="10">{{ $new['content'] }}</textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Submit"></td>
	</tr>
</table>
</form>

@endsection