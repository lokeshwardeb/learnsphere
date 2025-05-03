<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            Welcome back, {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}

                    {{-- Hello safu diii !! --}}

                    <div class="grid grid-rows-2 gap-4 m-auto justify-center sm:grid-rows-none sm:grid-cols-2 ">
                        <div class="">
                            <a href="">
                                {{-- <button class="bg-green-600 text-white p-2 rounded-xl hover:bg-black transition ease-linear delay-75 ">Submit Assignment</button>
                                <button class="bg-green-600 text-white p-2 rounded-xl hover:bg-white hover:text-green-600 hover:border-1 hover:border-green-600 hover:border transition ease-linear delay-75 ">Submit Assignment</button>
                                <button class="bg-green-600 text-white p-2 rounded-xl hover:bg-green-700 transition ease-linear delay-75 ">Submit Assignment</button> --}}


                                <button class="bg-green-600 text-white p-2 rounded-xl hover:bg-white hover:text-green-600 hover:border-1 hover:border-green-600 hover:border transition ease-linear delay-75 ">Submit Assignment</button>

                                
                            </a>
                        </div>
                        
                        <div>
                            <a href="">
                                <button class="bg-white border border-1 border-black text-black p-2 rounded-xl hover:bg-black hover:text-white transition ease-linear delay-75 ">Class Schedule</button>
                            </a>
                        </div>
                    
                      </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
