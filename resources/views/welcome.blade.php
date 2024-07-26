@foreach ($categoriesView as $cat)
    số lượng sản phẩm của danh mục
    {{ $cat->name }}
    là: {{ $cat->products->count() }}
    @foreach ($cat->products as $product)
    @endforeach
@endforeach
@foreach ($products as $product)
    {{ $product->category->name }}
@endforeach
