<Link slideover class="action-icon  tooltip-trigger" data-tooltip-target="tooltip-view" data-tooltip="تعديل هتا"
    href="{{ route('pages.view', ['slung' => $page->slung]) }}"><i class="fi fi-rr-globe"></i>
{{ @$showLabel ? 'عرض الصفحة' : '' }}</Link>


<Link slideover class="action-icon yellow" data-tooltip-target="tooltip-edit"
    href="{{ route('pages.edit', ['page' => $page]) }}"><i
    class="fi fi-rr-edit"></i>{{ @$showLabel ? 'تعديل  الصفحة' : '' }}</Link>


<x-splade-form action="{{ route('pages.status', ['page' => $page]) }}" method="PUT">


    @if ($page->status != 'active')
        <button class="action-icon green " data-tooltip-target="tooltip-set-active" type="submit" name="status"
            value="active" title="{{ __('all.set_active') }}"><i
                class="fi fi-rr-eye"></i>{{ @$showLabel ? 'تفعيل' : '' }}</button>
    @endif
    @if ($page->status != 'inactive')
        <button class="action-icon  " type="submit" data-tooltip-target="tooltip-set-inactive" name="status"
            value="inactive" title="{{ __('all.set_inactive') }} "><i class="fi  fi-rr-eye-crossed"></i>
            {{ @$showLabel ? 'إلغا التفعيل' : '' }}</button>
    @endif




</x-splade-form>

<x-splade-form action="{{ route('pages.destroy', ['page' => $page]) }}" method="DELETE">
    <button class="action-icon red " data-tooltip-target="tooltip-delete" type="submit"><i
            class="fi fi-rr-trash"></i>{{ @$showLabel ? 'حذف' : '' }}</button>

</x-splade-form>
