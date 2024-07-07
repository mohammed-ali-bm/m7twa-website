<x-splade-modal>
    <x-splade-form action="{{ route('products.update', ['product' => $product]) }}" :default="$product" method="PUT">
        <h1>تعديل المنتج : {{ $product->name }}</h1>
        <div class="input-item select-offers-dropdown-container">
            <x-splade-select name="offers_ids" :options="$offers" label="إختر  العروض الخاصة بالمنتج" choices multiple />
        </div>


        {{-- {{
            print_r($product->toArray())
        }}
         --}}
        <div class="offers-counts-container">

            @foreach ($offers as $id => $name)
                <div class='offer-count  {{ $product->productOffer->contains('offer_id', $id) ? 'inline-block' : '' }}'
                    data-offer-id="{{ $id }}">
                    <x-splade-input type="number" name="offer_count_{{ $id }}"
                        label="اكتب مرات الإستخدام للعرض {{ $name }} "
                        value="{{ $product->productOffer->contains('offer_id', $id) ? $product->productOffer->firstWhere('offer_id', $id)->count : '1' }}"
                        placeholder="العدد الافتراضي 1 " />
                </div>
            @endforeach

        </div>

        <div class="input-item">
            <x-splade-input name="store_p_id" label="معرف المنتج في  سلة"
                placeholder="المعرف الخاص بالمنتج  الذي يرسل من خلال ال webhook" />
        </div>

        <div class="input-item">
            <x-splade-input name="name" label="عنوان المنتج" placeholder="مثلاً جدول شهر نوفمبر " />
        </div>


        <div class="input-item">
            <x-splade-input name="max_usage" label="اقصى عدد للطلبات من العملاء"
                placeholder="اقصى مرات شراء ، للتذاكر  ، ابقه فارغاً لعدد غير محدود" />
        </div>


        <div class="input-item">
            <x-splade-input name="price" type="number" label="سعر المنتج" placeholder="سعر المنتج في سلة" />
        </div>


        <div class="input-item product-validity-type-container  ">
            <x-splade-select name="validity_type" id="product-validity-type-input" :options="[
                'duration' => ' ايام محددة بعد الشراء (إشتراكات)',
                'date' => 'تاريخ إنتهاء صلاحية  ( باقات شهرية)',
            ]"
                label="إختر نوع صلاحية المنتج" choices />

        </div>

        <div class="input-item vadidity-date-container"
            style="display: {{ $product->validity_type == 'date' ? 'block' : 'none' }} ">
            <x-splade-input name="expire_date" label="تاريخ إنتهاء  صلاحية المنتج" type="date"
                placeholder="التاريخ الذي ينتهي فيه المنتج  " />
        </div>

        <div class="input-item vadidity-duration-container"
            style="display: {{ $product->validity_type == 'duration' ? 'block' : 'none' }} ">
            <x-splade-input name="duration" label="عدد ايام الصلاحية بالايام" type="number"
                placeholder="مثلا 30 لتكون للمنتج  صلاحية شهر من تاريخ الشراء" />
        </div>

        <div class="input-item">
            <x-splade-submit label="تعديل" :spinner="true" class="primary-button" />
        </div>
    </x-splade-form>


</x-splade-modal>
