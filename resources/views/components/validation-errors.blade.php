@props(['errors'])

@if (count($errors) > 0)

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Sorry!</strong> Correct these issues and  submit again.
    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

