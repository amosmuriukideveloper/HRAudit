<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employment Term') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-lg font-semibold mb-2">Employment Term Details</h2>
    
                    <form method="POST" action="{{ route('employment.term.update', $employmentTerm->id) }}">
                        @csrf
                        @method('PUT')
    
                        <div class="mb-3">
                            <label for="name" class="block font-medium text-sm text-gray-700">Employment Term Name</label>
                            <input type="text" name="name" id="name" value="{{ $employmentTerm->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required />
                        </div>
    
                        <div class="mb-3">
                            <label class="block font-medium text-sm text-gray-700">Select Employment Type</label>
                            <table class="table table-striped">
                                <thead>
                                    <th scope="col" width="1%"><input type="checkbox" id="checkAll"></th>
                                    <th scope="col" width="20%">Name</th>
                                </thead>
    
                                @foreach($employmentTypes as $type)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="employmentType[]" value="{{ $type->id }}" {{ in_array($type->id, $selectedTypes) ? 'checked' : '' }}>
                                        </td>
                                        <td>{{ $type->name }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
    
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Update Employment Term') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        var checkAll = document.getElementById('checkAll');
        var checkboxes = document.getElementsByName('employmentType[]');
    
        checkAll.addEventListener('click', function() {
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = checkAll.checked;
            }
        });
    </script>
</x-app-layout>    