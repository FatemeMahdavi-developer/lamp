@if ($paginator->hasPages())
   <ul class="pagination_site modal-2">
       @if ($paginator->onFirstPage())
           <li>
               <a href="javascript:void(0)" class="prev">
                   »
               </a>
           </li>
       @else
           <li>
               <a href="{{ $paginator->previousPageUrl() }}" class="prev">
                   »
               </a>
           </li>
       @endif
       @foreach ($elements as $element)
           @if (is_string($element))
               <li><span>...</span></li>
           @endif
           @if (is_array($element))
               @foreach ($element as $page => $url)
                   @if ($page == $paginator->currentPage())
                       <li><a href="javascript:void(0)" class="active">{{ $page }}</a></li>
                   @else
                       <li><a href="{{ $url }}">{{ $page }}</a></li>
                   @endif
               @endforeach
           @endif
       @endforeach
       @if ($paginator->hasMorePages())
           <li>
               <a href="{{ $paginator->nextPageUrl() }}" class="prev">
                   «
               </a>
           </li>
       @else
           <li>
               <a href="javascript:void(0)" class="prev">
                   «
               </a>
           </li>
       @endif
   </ul>
@endif
