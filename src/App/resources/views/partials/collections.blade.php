<div class="col-md-12">
    <div class="a-note">
        <div class="layout">
            <div class="layout-center" style="width: 100px">
                <div>
                    <a href="/snotes/{{$notes->id}}" class="note-title">
                        <i class="fa fa-circle-o"></i>
                    </a>
                </div>
            </div>
            <div class="layout-center">
                <div class="text-capitalize text-left">
                    <a href="/snotes/{{$notes->id}}" class="note-title">
                      {{ $notes->notes_title }}
                    </a>
                </div>
            </div>
            <div class="layout-center" style="width: 100px">
                <div>
                   <span>{{ \Carbon\Carbon::parse($notes->created_at)->diffForHumans() }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
