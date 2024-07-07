

<label class="custom-radio">
    <input v-model="form.{{ $name }}" type="radio" name="{{$name}}"
        value="{{ $value }}" />
    <span class="radio-btn"><i class="fi fi-rr-check"></i>
        <div class="hobbies-icon">
            {{ $slot }}
        </div>
    </span>
</label>