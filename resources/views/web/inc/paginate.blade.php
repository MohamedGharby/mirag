



@if ($paginator->hasPages())
<div class="col-md-12 pagination-outer text-center">
    <div class="post-pagination styled-pagination d-flex justify-content-center align-items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="prev btn disabled pagination-back pull-left mx-3"><span class="fa fa-angle-double-left"></span>السابق</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="prev pagination-back pull-left mx-3"><span class="fa fa-angle-double-left"></span>السابق</a>
        @endif

        <ul class="pages">

            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active">{{ $page }}</li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>


        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="next pagination-next pull-right mx-3">التالى<span class="fa fa-angle-double-right"></span></a>
        @else
            <a href="#" class="next btn disabled pagination-next pull-right mx-3">التالى<span class="fa fa-angle-double-right"></span></a>
        @endif
    </div>
</div>
@endif