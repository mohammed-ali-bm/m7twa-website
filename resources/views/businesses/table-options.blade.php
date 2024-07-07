
<Link slideover class="action-icon  tooltip-trigger" data-tooltip-target="tooltip-view" data-tooltip="تعديل هتا"   href="{{ route('businesses.show', ['business' => $business]) }}"><i
    class="fi fi-rr-globe"></i> {{ @$showLabel ? "عرض النشاط" : ""  }}</Link>
<Link slideover class="action-icon  tooltip-trigger" data-tooltip-target="tooltip-view" data-tooltip="تعديل هتا"   href="{{ route('businesses.sta', ['business' => $business]) }}"><i
    class="fi fi-rr-settings-sliders"></i> {{ @$showLabel ? "مستحقات النشاط" : ""  }}</Link>

<a  class="action-icon copy-text-button" data-tooltip-target="tooltip-verify-link" data-text="{{ route('businesses.profile' , ['token' => $business->token]) }}"   href="{{ route('businesses.profile', ['token' => $business->token]) }}"><i
    class="fi fi-rr-copy-alt"></i> {{ @$showLabel ? "نسخ رابط المتجر" : ""  }}</a>

<Link slideover class="action-icon yellow"  data-tooltip-target="tooltip-edit" href="{{ route('businesses.edit', ['business' => $business]) }}"><i
    class="fi fi-rr-edit"></i>{{ @$showLabel ? "تعديل  النشاط" : ""  }}</Link>


<x-splade-form action="{{ route('businesses.status', ['business' => $business]) }}" method="PUT">


    @if ($business->status != 'active')
        <button class="action-icon green "  data-tooltip-target="tooltip-set-active" type="submit" name="status"  value="active" title="{{ __("all.set_active") }}"><i
                class="fi fi-rr-eye"></i>{{ @$showLabel ? "تفعيل" : ""  }}</button>
    @endif
    @if ($business->status != 'inactive')
        <button class="action-icon  " type="submit"  data-tooltip-target="tooltip-set-inactive" name="status"  value="inactive" title="{{ __("all.set_inactive") }} "><i
                class="fi  fi-rr-eye-crossed"></i> {{ @$showLabel ? "إلغا التفعيل" : ""  }}</button>
    @endif
    @if ($business->status != 'pending')
        <button class="action-icon " type="submit" name="status"  data-tooltip-target="tooltip-set-pending"  value="pending" title="{{ __("all.set_pending") }}"><i
                class="fi fi-rr-hourglass-end"></i>{{ @$showLabel ? "تعيين بإنتظار المراجعة" : ""  }}</button>
    @endif

    @if ($business->status != 'banned')
        <button class="action-icon  red " type="submit" name="status" data-tooltip-target="tooltip-set-banned"    value="banned" title="{{ __("all.set_banned") }}"><i
                class="fi fi-rr-ban"></i>{{ @$showLabel ? "حظر" : ""  }}</button>
    @endif

</x-splade-form>

<x-splade-form action="{{ route('businesses.destroy', ['business' => $business]) }}" method="DELETE">
    <button class="action-icon red " data-tooltip-target="tooltip-delete"  type="submit"><i class="fi fi-rr-trash"></i>{{ @$showLabel ? "حذف" : ""  }}</button>

</x-splade-form>