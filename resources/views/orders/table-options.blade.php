<Link slideover class="action-icon  tooltip-trigger" data-tooltip-target="tooltip-view"
    href="{{ route('orders.show', ['order' => $order]) }}"><i class="fi fi-rr-globe"></i></Link>


    <a  class="action-icon copy-text-button" data-tooltip-target="tooltip-order-link" data-text="{{ route('orders.qr.view' , ['token' => $order->token]) }}"   href="{{ route('orders.qr.view', ['token' => $order->token]) }}"><i
        class="fi fi-rr-copy-alt"></i> {{ @$showLabel ? "نسخ رابط  كود الطلب" : ""  }}</a>

{{-- 
<Link slideover class="action-icon yellow" data-tooltip-target="tooltip-edit"
    href="{{ route('orders.edit', ['order' => $order]) }}"><i class="fi fi-rr-edit"></i></Link> --}}


<x-splade-form action="{{ route('orders.status', ['order' => $order]) }}" method="PUT">


    @if ($order->status != 'active')
        <button class="action-icon green " data-tooltip-target="tooltip-set-active" type="submit" name="status"
            value="active" title="{{ __('all.set_active') }}"><i class="fi fi-rr-eye"></i> {{ @$showLabel ? __("all.set_active") : ""  }}</button>
    @endif
    @if ($order->status != 'inactive')
        <button class="action-icon  " type="submit" data-tooltip-target="tooltip-set-inactive" name="status"
            value="inactive" title="{{ __('all.set_inactive') }} "><i class="fi  fi-rr-eye-crossed"></i>  {{ @$showLabel ? __("all.set_inactive") : ""  }}</button>
    @endif




</x-splade-form>

<x-splade-form action="{{ route('orders.destroy', ['order' => $order]) }}" method="DELETE">
    <button class="action-icon red " data-tooltip-target="tooltip-delete" type="submit"><i
            class="fi fi-rr-trash"></i>  {{ @$showLabel ? __("all.delete") : ""  }}</button>

</x-splade-form>
