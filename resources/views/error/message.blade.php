@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('flash_message_error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="btn close" id="closePrescription" data-dismiss="alert">×</button>
    <strong>{{ session('flash_message_error') }}</strong>
</div>

@endif


@if(Session::has('flash_message_success'))
<div class="alert alert-success alert-block">
	<button type="button" class="btn close" data-dismiss="alert">×</button>
        <strong>{{ session('flash_message_success') }}</strong>
</div>

@endif
