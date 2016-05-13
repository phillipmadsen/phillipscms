<table class="table table-responsive" id="products-table">
    <thead>
        <th>Name</th>
        <th>Category Id</th>
        <th>Price</th>
        <th>Sale Price</th>
        <th>Sku</th>
        <th>Mpn</th>
        <th>Created At</th>
        <th>Is Active</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->sale_price !!}</td>
            <td>{!! $product->sku !!}</td>
            <td>{!! $product->mpn !!}</td>
            <td>{!! $product->created_at !!}</td>
            <td>{!! $product->is_active !!}</td>
            <td>{!! $product->status !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! langRoute('admin.products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! langRoute('admin.products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                    {!! Form::button('<i class="fa fa-times fa fa-white"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>