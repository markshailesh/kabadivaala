<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Image</th>
                <th class="text-center">Category</th>
                <th class="text-center">Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key=>$product)
                <tr>
                    <td class="text-center">{{ $key + 1 + ($products->currentPage() - 1) * $products->perPage() }}</td>
                    <td class="text-center"><img src="{{ asset('backend/images/product/' . $product->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('backend/images/no-image.png') }}'"
                            alt="" style="width:100px; height:100px;"></td>
                    <td class="text-center">{{ $product->category }}</td>
                    <td class="text-center">{{ $product->name }}</td>
                    <td class="text-center">{{ $product->price }}</td>
                    <td class="text-center">
                        <x-admin.edit-button route="{{ route('admin.product.edit', $product->id) }}" />
                        <x-admin.delete-button route="{{ route('admin.product.destroy', $product->id) }}"
                            id="{{ $product->id }}" />
                    </td>
                </tr>
            @empty
                <x-admin.empty-table />
            @endforelse
        </tbody>
    </table>
</div>
<hr>
<div class="row">
    <div class="col-md-4">
        <p>
            <b>Showing {{ ($products->currentpage() - 1) * $products->perpage() + 1 }} to
                {{ ($products->currentpage() - 1) * $products->perpage() + $products->count() }} of
                {{ $products->total() }} Products</b>
        </p>
    </div>
    <div class="col-md-8">
        <div class="float-right">
            {!! $products->links() !!}
        </div>
    </div>
</div>
<script>
    $(function() {
        $('a.page-link').on('click', function(event) {
            $('tbody').addClass('loading')
            event.preventDefault()
            var url = $(this).attr('href');
            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    window.history.pushState("", "", url);
                    $('tbody').removeClass('loading');
                    $('#table_div').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        });
    });
</script>
