<li class="item"><a class="nav-link" href="{{ route('homepage') }}">Články</a></li>
@foreach(
    \C18app\Cmsx\Models\Page::whereHas('tags', function ($query) {$query->where('title', 'leftmenu');}, '>', 0)
    ->orderBy('order', 'asc')
    ->orderby('id', 'desc')
    ->get() as $page
    )
    <li class="item"><a href="{{ $page->getUrl() }}">{{ $page->title }}</a></li>
@endforeach
