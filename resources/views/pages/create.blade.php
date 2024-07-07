<x-splade-modal>
    <x-splade-form>

        <h1>إضافة صفحة تجاري</h1>
        <div class="input-item">
            <x-splade-input name="title" label="عنوان الصفحة" />
        </div>

        <div class="input-item">
            <x-splade-input name="slung" label="رابط الصفحة" />
        </div>


        <div class="input-item">
            <x-splade-textarea name="content" label="محتوى الصفحة" autosize />
        </div>


        <div class="input-item">
            <x-splade-submit label="إضافة" :spinner="true" class="primary-button" />
        </div>
    </x-splade-form>


</x-splade-modal>
