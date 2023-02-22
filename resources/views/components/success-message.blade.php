

@if (session('success'))

<div class="alert alert-icon   text-success alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <i class="mdi mdi-check-all mr-2"></i>
    <strong>Success!</strong>   {{ session('success') }}
</div>
@endif
