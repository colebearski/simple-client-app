@extends('layout.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque vitae laborum fugit natus a amet eum repellendus sunt aperiam dolores?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection