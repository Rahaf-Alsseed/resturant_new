@foreach($products as $product)
<div class="col-md-6">
    <div class="blog-post">
        <img src="{{ $product->image }}" alt="">
       
        <div class="right-content">
            <h4>{{ $product->name }}</h4>
            @if (auth()->user()->isAdmin==1)
            <a href="update_product/{{$users->id}}">update</a>
                
            @endif
            <span>{{ $product->price }}</span>
            <p>{{ $product->description }} </p>
         

        </div>
    </div>
</div>
@endforeach   



</div>