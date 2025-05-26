<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Create / Assign Assignment
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <form action="{{ route('assignments.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="assignment_title" class="ms-4">Assignment Title</x-input-label>
                            <x-text-input id="assignment_title" name="assign_title" class="m-4 w-[90%] "></x-text-input>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="assignment_desc" class="ms-4">Assignment Description</x-input-label>
                            <x-text-input id="assignment_desc" name="assign_desc" class="m-4 w-[90%] "></x-text-input>
                        </div>
                        <div class="mb-4">
                            <x-input-label for="assignment_starting_date" class="ms-4">Assignment Starting Date</x-input-label>
                            <input type="datetime-local" class="w-[90%] border-gray-300 m-4 " name="assign_starting_date" id="assignment_submission_date">
                            {{-- <x-text-input id="assignment_starting_date" class="m-4 w-[90%] "></x-text-input> --}}
                        </div>
                        <div class="mb-4">
                            <x-input-label for="assignment_submission_date" class="ms-4">Assignment Submission Date</x-input-label>
                            <input type="datetime-local" class="w-[90%] border-gray-300 m-4 " name="assign_submission_date" id="assignment_submission_date">
                            {{-- <x-text-input class="m-4 w-[90%] "></x-text-input> --}}
                        </div>


                        <div class="mb-4 pt-4">
                            <button type="submit" name="create_assignment" class="btn_outline_dark ms-4" >Create Assignment</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
