@extends('notes::shared.app')
@section('content')
    <div id="notes" class="container">
        <h1 class="lead">Notes</h1>
        {{ dump($notes) }}
    </div>
@endsection
