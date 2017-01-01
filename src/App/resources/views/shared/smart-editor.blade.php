@php
    //php here
@endphp

<div class="note">
    <div class="smart-editor">
        <p>
            <input type="text" name="notes_title" class="col-fluid {{ $errors->first('notes_title', 'error') }}"
                   placeholder="* What the title of this note?"
                   value="{{ old('notes_title', (isset($note->notes_title) ? $note->notes_title : '')) }}">
        </p>
        <p>
            <button id="insertImg" class="insert-img btn" type="button">Images</button>
        </p>
        <p class="smart-edit">
     <textarea name="{{ $notes['selector'] or "notes_content" }}" id="adv-notes" class="notes">{!!  old('notes_content', (isset($note->notes_content) ? $note->notes_content : '')) !!}</textarea>
        </p>
        <button class="save-btn" type="submit">Save Note</button>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="/assets/notes/css/note-editor.css">
@endpush

@push('scripts')
@include('notes::partials.smart-notes-js')
@endpush
