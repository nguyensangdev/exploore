@if ($paginator->hasPages())
    <style>
        .pagination .page-link {
            width: 40px;
            height: 40px;
            background: rgba(0,0,0,0)!important;
            border: none;
            border-radius: 50%!important;
            color: #000;
            line-height: 25px;
            text-align: center;
            transition: all .15s;
        }

        .pagination .active .page-link {
            border: 1px solid #000;
            color: #000;
        }

        .pagination .page-link:hover {
            background: #000!important;
            border: 1px solid #000;
            color: #fff;
        }
    </style>
    <br/>
    <nav>
        <ul class="pagination d-flex justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item mr-3 disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item mr-3">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item mr-3 disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item mr-3 active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item mr-3"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item mr-3">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item mr-3 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
