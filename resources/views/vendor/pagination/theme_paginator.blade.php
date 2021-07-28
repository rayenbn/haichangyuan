@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <!-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true"><i class="flaticon-left-arrow-sign"></i> &lsaquo;</span>
            </li> -->
            <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" >
                <span aria-hidden="true"><i class="flaticon-left-arrow-sign"></i> &lsaquo;</span>
            </a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
            <i class="flaticon-left-arrow-sign"></i> &lsaquo;</a>
          
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active" aria-current="page">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo; <i class="flaticon-right-direction"></i></a>
        @else
            <!-- <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo; <i class="flaticon-right-direction"></i></span>
            </li> -->
            <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')" >
                <span aria-hidden="true">&rsaquo; <i class="flaticon-right-direction"></i></span>
            </a>
        @endif
        </div>
@endif