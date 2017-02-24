@if(Session::has('error'))
    <p class="alert alert-error">{{ Session::get('error') }}</p>
@endif

@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

@if(Session::has('warning'))
    <p class="alert alert-warning">{{ Session::get('warning') }}</p>
@endif

@if(Session::has('info'))
    <p class="alert alert-info">{{ Session::get('info') }}</p>
@endif

@if($errors->has('notes_title'))
    <p class="alert alert-danger"><i class="fa fa-times-circle" aria-hidden="true"></i> {{ $errors->first('notes_title') }}</p>
@endif
