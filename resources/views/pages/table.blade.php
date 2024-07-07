<x-splade-table :for="$pages">
    <x-slot:empty-state>
        <p class="error-message"> لا توجد بيانات مضافة بعد</p>
    </x-slot>


    <x-splade-cell logo as="$page">
        <img src="{{ asset('images/' . $page->logo) }}" alt="{{ $page->name }}" class="table-thubmnail">
    </x-splade-cell>

    <x-splade-cell status as="$page">
        <span class="badge badge-{{ $page->status }}">{{ __('all.' . $page->status) }}</span>
    </x-splade-cell>
    <x-splade-cell actions as="$page">
        @include('pages.table-options')







    </x-splade-cell>
</x-splade-table>
