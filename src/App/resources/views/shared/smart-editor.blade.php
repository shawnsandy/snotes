@php
    //php here
@endphp
<div class="note">

    <div class="smart-editor">
        <p>
            <input name="notes_title" class="col-fluid {{ $errors->first('notes_title', 'error') }}"
                   placeholder="Add the title of the Note here.."
                   value="{{ old('notes_title', (isset($note->notes_title) ? $note->notes_title : '')) }}">
        </p>
        <p class="smart-edit">
     <textarea name="{{ $notes['selector'] or "notes_content" }}" id="adv-notes" class="notes">{{ old('notes_content', (isset($note->notes_content) ? $note->notes_content : '')) }}</textarea>
        </p>
        <button class="btn btn-lg btn-primary" type="submit">Save Note</button>
    </div>

</div>


@push('scripts')
@include('notes::partials.smart-notes-js')
@endpush
