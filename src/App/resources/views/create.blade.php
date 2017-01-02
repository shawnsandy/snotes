@extends('notes::shared.app')
@section('content')
    <form action="/snotes" method="POST">
        {{ csrf_field() }}
        <div id="notes" class="container">
            <div class="text-right nav">
                <p>
                    <a href="/snotes" class="btn btn-default">

                            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Notes

                </p>
            </div>
            <div class="errors">
                @include('notes::partials.errors')
            </div>
            @include('notes::shared.smart-editor')
        </div>
    </form>
@endsection

