@props(['errors'])

@if (count($errors) > 0)
<div class="alert alert-icon  text-danger alert-danger alert-dismissible fade show" style="font-size: 12px; font-weight:500; font-family: Montserrat" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <i class="mdi mdi-block-helper me-2"></i>
    <strong>Sorry!</strong> Correct these issues and  submit again.
    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

