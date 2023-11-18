@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>
			{!! session()->get('success') !!}
		</strong>
	</div>
@endif
