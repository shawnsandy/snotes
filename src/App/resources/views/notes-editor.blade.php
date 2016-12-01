@php
//php here
@endphp
<div class="adv-notes">
    <div class="notes-toolbar">
        <div class="col notes-logo-text text-uppercase">Notes </div>
        <input type="title" class="col-fluid form-control" placeholder="Whats the title of your note?">
    </div>
    <textarea name="{{ $notes['selector'] or "adv-notes" }}" id="adv-notes" class="notes">
    </textarea>
    <div class="notes-toolbar">
        <button class="col">Image Library</button>
        <button class="col">Upsplash Photos</button>
        <div class="spacer col-fluid"></div>
        <button class="col">Save Note</button>
    </div>
</div>
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/notes/css/notes.css') }}">
@endpush
@push('scripts')

@endpush
