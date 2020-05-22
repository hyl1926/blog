@extends('layouts.app')

@section('content')
<style>
#page li{
	float: left;
	list-style: none;
	margin-left: 15px; 
}
#add{
	float: left;
	font-weight: bold;
	margin: 15px 15px;
}
</style>
<a id="add" href="{{ route('add') }}">Add</a>
<div style="width: 800px;height: 500px;border: 1px solid black;text-align: center;">
	<table width="798" height="498" border="1">
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
			<td colspan="2" id="page">{!! $n->render() !!}</td>
		</tr>
	</table>
</div>
@endsection