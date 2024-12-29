@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center space-x-0.5">
        {{-- Prev --}}
        @if ($paginator->onFirstPage())
            <span class="px-1 py-0.5 text-xs text-gray-400 bg-gray-100 rounded cursor-default">
                &laquo; Prev
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-1 py-0.5 text-xs text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100">
                &laquo; Prev
            </a>
        @endif

        @php
            // Ambil halaman saat ini
            $currentPage = $paginator->currentPage();

            // Total halaman
            $lastPage = $paginator->lastPage();

            // maks 3 page
            $startPage = max($currentPage - 1, 1);
            $endPage = min($currentPage + 1, $lastPage);
        @endphp

        @if ($startPage > 1)
            <a href="{{ $paginator->url(1) }}" class="px-1 py-0.5 text-xs text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100">1</a>
            @if ($startPage > 2)
                <span class="px-1 py-0.5 text-xs text-gray-500">...</span>
            @endif
        @endif

        @for ($page = $startPage; $page <= $endPage; $page++)
            @if ($page == $currentPage)
                <span class="px-1 py-0.5 text-xs text-white bg-blue-500 border border-blue-500 rounded cursor-default">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $paginator->url($page) }}" class="px-1 py-0.5 text-xs text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100">
                    {{ $page }}
                </a>
            @endif
        @endfor

        @if ($endPage < $lastPage)
            @if ($endPage < $lastPage - 1)
                <span class="px-1 py-0.5 text-xs text-gray-500">...</span>
            @endif
            {{-- Halaman Terakhir --}}
            <a href="{{ $paginator->url($lastPage) }}" class="px-1 py-0.5 text-xs text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100">
                {{ $lastPage }}
            </a>
        @endif

        {{-- Tombol "Next" --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-1 py-0.5 text-xs text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100">
                Next &raquo;
            </a>
        @else
            <span class="px-1 py-0.5 text-xs text-gray-400 bg-gray-100 rounded cursor-default">
                Next &raquo;
            </span>
        @endif
    </nav>
@endif
