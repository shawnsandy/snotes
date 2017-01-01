<div class="col-md-12">
    <div class="a-note">
        <div class="layout">
            <div class="layout-center" style="width: 100px">
                <div class="text-capitalize">
                    <a href="/snotes/{{ $notes->id }}}" class="note-title">
                        <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="layout-center">
                <div class="text-capitalize text-left">
                    <a href="/snotes/{{ $notes->id }}}" class="note-title">
                        {{ $notes->notes_title }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
