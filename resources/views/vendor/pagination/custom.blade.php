@if ($paginator->hasPages())
  <div style="margin-Top:20px; text-align: center; justify-content: center;">
  <ul class="pager " style="display: flex;list-style-type: none; ; padding:0px; margin:0px; justify-content: center;">
       
       @if ($paginator->onFirstPage())
           <li class="disabled" style="list-style-type: none; margin-Right:20px; padding-Top:20px;"><i class="fas fa-angle-double-left"></i></li>
       @else
           <li style="list-style-type: none; margin-Right:20px; padding-Top:20px; "><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-angle-double-left"></i></a></li>
       @endif


     
       @foreach ($elements as $element)
          
           @if (is_string($element))
               <li class="disabled" ><span>{{ $element }}</span></li>
           @endif

           @if (is_array($element))
               @foreach ($element as $page => $url)
                   @if ($page == $paginator->currentPage())
                       <li class="active my-active" style="border:1px solid gray ; padding-Top :5px; margin-Top:15px; padding-Left:10px; padding-Right:10px; padding-Bottom:5px; background:#9df99d; margin-Left:20px;  border-radius: 25px; margin-Bottom:30px;">{{ $page }}</li>
                   @else
                       <li style="margin-Top:20px;"><a href="{{ $url }}" style="border:1px solid gray ; padding-Top :5px; padding-Left:10px;  padding-Right:10px; padding-Bottom:5px; margin-Left:20px; border-radius: 25px;">{{ $page }}</a></li>
                   @endif
               @endforeach
           @endif
       @endforeach
       @if ($paginator->hasMorePages())
           <li style="list-style-type: none; margin-Left:20px;margin-Top:20px;padding-Left:20px;"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-angle-double-right"></i></a></li>
       @else
           <li class="disabled" style="list-style-type: none; margin-Left:20px; margin-Top:20px;padding-Left:20px;"><i class="fas fa-angle-double-right"></i></li>
       @endif
   </ul>
  </div>
@endif 