@extends('notes::shared.app')
@section('title', 'Create a new Note')
@section('content')
    <div id="notes" class="container">

        @include("notes::partials.nav")

        <form action="/snotes" method="POST">
            {{ csrf_field() }}

            <div class="errors">
                @include('notes::partials.errors')
            </div>

            @include('notes::shared.smart-editor')

        </form>
    </div>
@endsection

