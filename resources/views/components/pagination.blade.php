@if ($paginator->hasPages())
  <ul class="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li>
        <a class="page-link disabled"></a>
      </li>
    @else
      <li>
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}"></a>
      </li>
    @endif

    @if ($paginator->currentPage() > 3)
      <li>
        <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
      </li>
    @endif
    @if ($paginator->currentPage() > 4)
      <li class="pagination-dots">...</li>
    @endif
    @foreach (range(1, $paginator->lastPage()) as $i)
      @if ($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
        @if ($i == $paginator->currentPage())
          <li>
            <a class="page-link active">{{ $i }}</a>
          </li>
        @else
          <li>
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
          </li>
        @endif
      @endif
    @endforeach
    @if ($paginator->currentPage() < $paginator->lastPage() - 3)
      <li class="pagination-dots">...</li>
    @endif
    @if ($paginator->currentPage() < $paginator->lastPage() - 2)
      <li>
        <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
      </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li>
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}"></a>
      </li>
    @else
      <li>
        <a class="page-link disabled"></a>
      </li>
    @endif
  </ul>
@endif
