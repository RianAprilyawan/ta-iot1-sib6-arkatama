@if ($errors->any())
<div class="alert text-white bg-danger" role="alert">
    <div class="i1-alert-icon">
        <i class="ri-information-line"></i>

    </div>
    <div class="iq-alert-text">
        <ul class="list-unstyled mb-0">
        @foreach ( $errors -> all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <i class="ri-close-line"></i>
    </button>
    </div>
        @endif
