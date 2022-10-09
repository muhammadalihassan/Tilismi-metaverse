
@if ($paginator->hasPages())
   
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>← Previous</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif

        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled"><span>Next →</span></li>
        @endif
  
@endif 
<style type="text/css">

 .card-body .pagination li a {
    margin: 0px 10px;
    padding: 7px  20px;
    background-color: #a0e131;
    border-radius: 10px;
    color: #363534;
    border: 1px solid #f29423;
}
.card-body .pagination li span {
   margin: 30px 10px;
    padding: 7px  20px;
    background-color: #a0e131;
    border-radius: 10px;
    color: #363534;
    border: 1px solid #f29423;
}
.pagination {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-left: 162px;
    list-style: none;
}
</style>