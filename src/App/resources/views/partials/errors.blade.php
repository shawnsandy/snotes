@if(Session::has('error'))
    <p class="alert alert-error">{{ Session::get('error') }}</p>
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@if($errors->has('notes_title'))
    <p class="alert alert-danger"><i class="fa fa-times-circle" aria-hidden="true"></i> {{ $errors->first('notes_title') }}</p>
@endif
