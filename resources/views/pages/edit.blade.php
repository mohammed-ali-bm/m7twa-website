<x-splade-modal>
    <x-splade-form action="{{ route('pages.update', ['page' => $page]) }}" :default="$page" method="PUT">

        <h1>تعديل الصفحة التجاري {{ $page->name }}</h1>
        <div class="input-item">
            <x-splade-input name="name" label="الإسم" />
        </div>
        <div class="input-item">
            <x-splade-input name="phone" label="رقم جوال المشرف" type="number" />
        </div>

        <div class="input-item">
            <x-splade-textarea name="address" label="العنوان" autosize />
        </div>


        <div class="input-item">
            <x-splade-file name="logo" label="الشعار" preview filepond />
        </div>
        <div class="input-item">
            <x-splade-submit label="تعديل" :spinner="true" class="primary-button" />
        </div>
    </x-splade-form>


</x-splade-modal>
