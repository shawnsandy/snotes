@extends('notes::shared.app')
@section('title', 'Create a new Note')
@section('content')
    <div id="notes" class="container">
        <div class="text-right nav">
            <p>
                <a href="/snotes" class="btn btn-default">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Notes
                </a>
            </p>
        </div>
        
        <form action="/snotes" method="POST">
            {{ csrf_field() }}

            <div class="errors">
                @include('notes::partials.errors')
            </div>

            @include('notes::shared.smart-editor')

        </form>
    </div>
@endsection

