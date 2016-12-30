<div class="col-md-6">
    <div class="a-note">
        <div class="h1 text-capitalize ">
            <a href="/snotes/{{ $notes->id }}" class="">
                {{ $notes->notes_title }}
            </a>
            <p class="lead text-capitalize">{{ $notes->user->name }}</p>
        </div>
    </div>

</div>
