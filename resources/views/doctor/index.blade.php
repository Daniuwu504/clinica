<x-doctor-layout>
    <div class="grid mb-4 pb-10 px-6 mx-4 ">

        <div class="grid grid-cols-12 gap-6">
            <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9 ">
                <div class="col-span-12 mt-8">
                    <div class="flex items-center h-10 intro-y justify-between">
                        <h2 class="mr-5 text-lg font-medium truncate capitalize ">
                            panel principal de:
                            <x-badge lg right-icon="information-circle" info label="  {{ auth()->user()->name }}" />

                        </h2>
                        <x-button href="#charts" icon="clipboard-list" primary label="ver graficos generales" />
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        @if ($latestInterview)
                            <a class="transform hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="{{ route('interviews.index', $latestInterview->user->id) }}">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-blue-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>


                                        <div
                                            class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">

                                            <span href="{{ route('statistics.total-suspicions') }}" class="flex items-center">TOTAL DE ENTREVISTAS:
                                                {{ $interviews->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-2xl font-bold leading-8">
                                                {{ $latestInterview->user->name }}</div>
                                            <div class="mt-1 text-base capitalize text-gray-600">
                                                {{ $latestInterview->date }}</div>
                                            <div class="mt-1 text-base capitalize text-gray-600">
                                                {{ __('last interview realized') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a class="transform hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-blue-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-xl text-center leading-8">
                                                {{ __('No has realizado entrevistas todavia.') }}</div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                            href="{{ route('statistics.total-suspicions') }}">
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    <div
                                        class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">TOTAL:
                                            {{ $mostCommonSuspicion['count'] }}</span>
                                    </div>
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-2xl font-bold leading-8">
                                            {{ $mostCommonSuspicion['suspicion'] }}</div>

                                        <div class="mt-1 text-base capitalize text-gray-600">
                                            {{ __('suspicions more suffered') }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="{{ route('statistics.total-pathologies') }}">
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                    </svg>
                                    <div
                                        class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">PADECEN: {{ $mostCommonDisase->count }}</span>
                                    </div>
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-2xl capitalize font-bold leading-8">
                                            {{ $mostCommonDisase->name }}
                                        </div>

                                        <div class="mt-1 text-base capitalize text-gray-600">
                                            {{ __('most suffered disease') }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                        href="{{ route('statistics.total-surgeries') }}">
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                    <div
                                        class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                        <span class="flex items-center">TOTAL: {{ $mostCommonSurgery->count }}</span>
                                    </div>
                                </div>
                                <div class="ml-2 w-full flex-1">
                                    <div>
                                        <div class="mt-3 text-2xl capitalize font-bold leading-8">
                                            {{ $mostCommonSurgery->name }}</div>

                                        <div class="mt-1 text-base capitalize text-gray-600">
                                            {{ __('most applied surgery') }}</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-span-12 mt-5">
                    <div class="grid gap-4 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
                        <div class="bg-white shadow-lg rounded-lg">
                            @livewire('patient.patient-list')
                        </div>
                        <div class="bg-white shadow-lg rounded-lg">
                            @livewire('appointment.appointment-list')
                        </div>
                    </div>
                </div>
                <div class="col-span-12 mt-5">
                    <div class="bg-white shadow-lg rounded-lg mt-5">
                        @livewire('schedulle.schedulle')
                    </div>
                </div>

                <div class="col-span-12 mt-5" id="charts">
                    <div class=" pt-6 2xl:container">
                        <div class="grid gap-6 md:grid-cols-1 lg:grid-cols-2">
                            <div class="md:col-span-2 lg:col-span-1 ">
                                <div class="h-75  rounded-xl border border-gray-200 bg-white shadow-lg">
                                    <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                        <h2 class="text-lg font-semibold text-gray-800">Usuarios Registrados
                                            Recientemente</h2>
                                    </div>
                                    <div class="p-6 ">
                                        {!! $recentP->container() !!}
                                        {!! $recentP->script() !!}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="h-75  rounded-xl border border-gray-200 bg-white shadow-lg">
                                    <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                        <h2 class="text-lg font-semibold text-gray-800">Citas del año por mes</h2>
                                    </div>
                                    <div class="p-6">
                                        {!! $appoinmentsPerMonth->container() !!}
                                        {!! $appoinmentsPerMonth->script() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 mt-5" id="charts">
                    <div class=" pt-6 2xl:container">
                        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                            <div class="md:col-span-2 lg:col-span-1">
                                <div class="h-75   rounded-xl border border-gray-200 bg-white shadow-lg">
                                    <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                        <h2 class="text-lg font-semibold text-gray-800">Ranking de Medicos
                                            Recientemente</h2>
                                    </div>
                                    <div class="p-6">
                                        {!! $ranking->container() !!}
                                        {!! $ranking->script() !!}
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="h-75  rounded-xl border border-gray-200 bg-white shadow-lg">
                                    <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                        <h2 class="text-lg font-semibold text-gray-800">Distribución de Citas por Día
                                            de la Semana</h2>
                                    </div>
                                    <div class="p-6">
                                        {!! $appDays->container() !!}
                                        {!! $appDays->script() !!}
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="h-75  rounded-xl border border-gray-200 bg-white shadow-lg">
                                    <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                        <h2 class="text-lg font-semibold text-gray-800">Especialidades mas cotizadas</h2>
                                    </div>
                                    <div class="p-6">
                                        {!! $specialtiesDemand->container() !!}
                                    {!! $specialtiesDemand->script() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12">
                    <div class="md:col-span-2 lg:col-span-1">
                        <div class="h-full   rounded-xl border border-gray-200 bg-white shadow-lg">
                            <div class="bg-gray-200 px-6 py-4 rounded-t-xl">
                                <h2 class="text-lg font-semibold text-gray-800">Pacientes por Edad General</h2>
                            </div>
                            <div class="p-6">
                                {!! $agesDemand->container() !!}
                                {!! $agesDemand->script() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    @endpush

</x-doctor-layout>
