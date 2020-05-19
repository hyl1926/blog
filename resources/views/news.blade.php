@extends('layouts.app')

@section('content')
<a href="{{ route('add') }}">Add</a>
<div style="width: 500px;height: 300px;border: 1px solid black;text-align: center;">
	<table width="498" height="298" border="1">
		<tr>
			<td>标题</td>
			<td>操作</td>
		</tr>
		@foreach($n as $v)
		<tr>
			<td>{{$v->title}}</td>
			<td><a href="{{ route('edit',array('id'=>$v['id'])) }}">Edit</a>&nbsp;&nbsp;<a href="{{ route('del',array('id'=>$v['id'])) }}">Del</a></td>
		</tr>
		@endforeach
		<tr>
			<td colspan="2">{!! $n->render() !!}</td>
		</tr>
	</table>
</div>
@endsection