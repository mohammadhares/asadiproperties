@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>
			{!! session()->get('error') !!}
		</strong>
	</div>
@endif
