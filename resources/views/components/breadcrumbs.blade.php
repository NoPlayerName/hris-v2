@props(['data'])

<ol class="breadcrumb m-0">
    @forelse ($data as $k => $v)
        <li @class(['breadcrumb-item', 'active' => $loop->last])><a
                @if (!$loop->last) href="{{ $v ?? '#' }}" @endif>{{ $k }}</a></li>
    @empty
        <li class="breadcrumb-item"><a href="#">Home</a></li>
    @endforelse
</ol>
