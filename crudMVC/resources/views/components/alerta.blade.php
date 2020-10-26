<div>
    @if (Session::has('correcto'))
    <div class="alert alert-success" role="alert">
        {{Session::get('correcto')}}
    </div>
    @elseif(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('error')}}
    </div>
    @endif
</div>