{!!Form::open(['method'=>'DELETE','route'=>['productos.destroy',$product->id]]) !!}
<input type="submit" value="Eliminar Producto" class="btn btn-danger">
{!! Form::close() !!}