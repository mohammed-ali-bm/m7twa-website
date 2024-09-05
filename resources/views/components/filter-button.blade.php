<Link class="btn-circle   {{ request()->get($name) == $value   ? "active" : "" }}   " href="{{ request()->fullUrlWithQuery([$name => $value]) }}">
    {{$slot }}
</Link>
