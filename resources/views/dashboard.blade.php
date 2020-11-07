<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!--<x-jet-welcome />-->
                <div class="flex flex-wrap">

                    <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                        <!--Metric Card-->
                        <div class="boxodsd custom-info-bg-2">
                        <section class="charts_orb red-c">
                        <article class="orb red-c">
                            <div class="orb_graphic">
                                <svg>
                                    <circle class="fill "></circle>
                                    <circle class="progress red-d"></circle>
                                </svg>
                            </div>
                            
                        </article>  
                        </section>
                        <div class="aligntet">
                            <p class="font-text-dash font-bold uppercase text-gray-400">Total Contratos Creados</p>
                    </div>
                    </div>

                  </div>
                        <!--/Metric Card-->
{{-- 
                    @foreach($contract_status_count as $contract_status)

                        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                            <!--Metric Card-->
                            <div class="boxodsd custom-info-bg-2">
                        <section class="charts_orb">
                        <article class="orb">
                            <div class="orb_graphic">
                                <svg>
                                    <circle class="fill"></circle>
                                    <circle class="progress"></circle>
                                </svg>
                                <div class="orb_value count">{{$contract_status->contracts_count}}</div>
                            </div>
                            
                        </article>  
                        </section>
                        <div class="aligntet">
                            <p class="font-text-dash font-bold uppercase text-gray-400">Total Contratos con Status:  {{$contract_status->name}}</p>
                    </div>
                    </div>
                            <!--/Metric Card--> 
                        </div>

                    @endforeach--}}
                
                </div>
                <br>

                <div class="flex flex-row flex-wrap flex-grow mt-2"></div>
                <br><br><br><br><br><br><br>

            </div>

        </div>

    </div>

</x-app-layout>
