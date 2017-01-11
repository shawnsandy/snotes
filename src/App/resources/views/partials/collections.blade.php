<div class="col-md-12">
    <div class="a-note">
        <div class="layout">

            <div class="layout-center">
                <div class="text-capitalize text-left">
                    <a href="/notes/{{$notes->id}}" class="note-title">
                        {{ $notes->notes_title }}
                    </a>
                </div>
            </div>

            <div class="layout-center" style="width: 100px">
                <div class="text-capitalize text-right">
                    <a href="/notes/{{$notes->id}}" class="note-title direction">
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
