<div class="row">
    <div class="mbp_pagination text-center">
        <ul class="page_navigation">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"><i class="fas fa-angle-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a>
                </li>
            @endif

            @php
                $pageNumbers = range(1, $paginator->lastPage());
            @endphp

            @foreach ($pageNumbers as $page)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $page }} <span class="sr-only">(current)</span></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->url($page) }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"><i class="fas fa-angle-right"></i></span>
                </li>
            @endif
        </ul>
        <p class="mt10 pagination_page_count text-center">
            {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} of {{ $paginator->total() }}+ item available
        </p>
    </div>
</div>
