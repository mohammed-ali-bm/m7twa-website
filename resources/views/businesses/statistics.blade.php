<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('مستحقات النشاط :' . $business->name) }}
        </h2>
    </x-slot>

    <div class="py-12 app-layout">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <div class="business-sta-form">
                        <x-splade-form action="{{ route('businesses.sta', ['business' => $business]) }}" :default="['from' => $from, 'to' => $to]"
                            method="GET">


                            <div class="input-item">
                                <x-splade-input type="date" name="from" label="الفترة من" />
                            </div>

                            <div class="input-item">
                                <x-splade-input type="date" name="to" label="الفترة إلى" />
                            </div>




                            <div class="input-item">
                                <x-splade-submit label="فلترة" :spinner="true" class="primary-button" />
                            </div>


                        </x-splade-form>
                    </div>


                    <div class="show-records-container">





                        @include('components.admin.show-record-item', [
                            'label' => 'معرف المتجر',
                            'content' => $business->id,
                        ])
                        @include('components.admin.show-record-item', [
                            'label' => 'إسم المتجر',
                            'content' => $business->name,
                        ])



                        @include('components.admin.show-record-item', [
                            'label' => 'إجمالي المستحقات',
                            'content' => $business->due_sum . '  ريال ',
                        ])






                    </div>

                    <!-- This is an example component -->
                    <div class=" mx-auto tab-container">

                        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent"
                                role="tablist">
                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2  dark:hover:text-gray-700"
                                        id="orders-tab" data-tabs-target="#orders" type="button" role="tab"
                                        aria-controls="orders" aria-selected="false">قائمة الطلبات</button>
                                </li>

                                <li class="mr-2" role="presentation">
                                    <button
                                        class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2  dark:hover:text-gray-700"
                                        id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">سجلات إستخدام الاكواد</button>
                                </li>


                            </ul>
                        </div>
                        <div id="myTabContent">


                            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 " id="orders" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <p class="text-gray-500 dark:text-gray-400 text-sm">
                                @include('items.table')
                            </p>
                        </div>


                            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 " id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <p class="text-gray-500 dark:text-gray-400 text-sm">
                                    @include('items.table')
                                </p>
                            </div>


                        </div>


                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
