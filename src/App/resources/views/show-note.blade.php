@extends('notes::shared.app')
@section('title', 'Reading - '.$note->notes_title )
@section('content')

    @include('notes::shared.show')

@endsection
