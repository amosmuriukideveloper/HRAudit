

@if (session('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Success!</strong>   {{ session('success') }}
</div>
@endif
