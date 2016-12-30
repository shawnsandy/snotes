@extends('notes::shared.app')
@section('content')
    <div id="notes" class="container">
        <div class="text-right">
            <p>
                <a href="/snotes/new" class="btn btn-link">
                    <span class="h1">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </span>
            </p>
        </div>

        <div class="collections row">
            @each('notes::partials.collections', $notes, 'notes')
        </div>
    </div>
@endsection
