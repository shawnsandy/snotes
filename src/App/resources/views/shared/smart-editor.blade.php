@php
    //php here
@endphp

<div class="note">
    <div class="smart-editor" data-notes-editor="#adv-notes" data-notes-img-btn=".insert-img">
        <p>
            <input type="text" name="notes_title" class="col-fluid {{ $errors->first('notes_title', 'error') }}"
                   placeholder="* Whats the title of this note?"
                   value="{{ old('notes_title', (isset($note->notes_title) ? $note->notes_title : '')) }}">
        </p>

        <p class="smart-edit">
            <textarea name="{{ $notes['selector'] or "notes_content" }}" id="adv-notes"
                      class="notes">{!!  old('notes_content', (isset($note->notes_content) ? $note->notes_content : '')) !!}</textarea>
        </p>
        <div class="editor-toolbar">
            <p>
                <button id="insertImg" class="insert-img btn-icons" type="button" data-toggle="modal"
                        data-target="#img-modal">
                    <i class="fa fa-camera" aria-hidden="true"></i> Insert Photos
                </button>
            </p>
        </div>

        <div class="text-right">
            <button class="save-btn" type="submit">Save Note</button>
        </div>

    </div>
</div>

@include('notes::partials.image-manager')

@push('styles')
<link rel="stylesheet" href="/assets/notes/css/note-editor.css">
@endpush

@push('scripts')
{{--@include('notes::partials.smart-notes-js')--}}
<script src="/assets/notes/js/smart-notes.js"></script>
@endpush
