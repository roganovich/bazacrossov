<div class="navbar-item has-dropdown is-hoverable">
    <div class="navbar-link">
        <span class="icon">{!! icon($icon) !!}</span>
        <span>{{ empty($resource) && !empty($text) ? $text : __('admin.' . $resource . '.index') }}</span>
    </div>
    <div class="navbar-dropdown">
            <a class="navbar-item" href="{{ route('admin.' . $resource . '.create') }}">
                <span class="icon">{!! icon('plus') !!}</span>
                <span>{{ __('admin.' . $resource . '.create') }}</span>
            </a>
            <a class="navbar-item" href="{{ route('admin.' . $resource . '.index') }}">
                <span class="icon">{!! icon('list') !!}</span>
                <span>{{ __('admin.' . $resource . '.index') }}</span>
            </a>
        <a class="navbar-item" href="{{ route('admin.download.index') }}">
                <span class="icon">{!! icon('list') !!}</span>
                <span>{{ __('admin.download.index') }}</span>
            </a>
    </div>
</div>
