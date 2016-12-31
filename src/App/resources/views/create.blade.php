@extends('notes::shared.app')
@section('content')
    <form action="/snotes" method="POST">
        {{ csrf_field() }}
        <div id="notes" class="container">
            <div class="text-right">
                <p>
                    <a href="/snotes" class="btn btn-link btn-lg">
                        <span class="h1">
                            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                        </span></a>
                </p>
            </div>
            @include('notes::shared.smart-editor')
        </div>
    </form>
@endsection

