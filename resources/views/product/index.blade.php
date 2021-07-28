@extends('layout/base')

@section('title', 'Produkte')

@section('content')
    <div class="all-button-box row d-flex justify-content-end">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
            <a href="{{ route('product.create') }}" class="btn btn-primary round">
                <i class="fa fa-plus"></i> Produkt hinzufügen
            </a>
        </div>
    </div>
    <br>

    <section id="products">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h4>Produkte</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive mt-1">
                    <table class="table table-hover-animation">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Bild</th>
                            <th>Variationen</th>
                            <th>Aktion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($products as $product)
                            <tr>
                            <td>{{ $product->name }}</td>
                            <td><img src="https://wbwebsite.sgp1.digitaloceanspaces.com/upload_images/{{ $product->image_product }}" width="100px;" height="80px;"></td>
                                <td>
                                    <table class="table">
                                    @foreach ($product->variations as $var_key => $variation)
                                        <tr>
                                            <td>{{ $variation->variation }}</td>
                                            <td>{{ $variation->quantity }}</td>
                                            <td><img width="100px" height="80px;" src="https://wbwebsite.sgp1.digitaloceanspaces.com/upload_images/{{ $variation->image }}"></td>
                                            <td>
                                                @if(count($product->variations) > 1 )
                                                <a href="#" onclick="deleteProductVariant({{$product->id}},{{$var_key}}) ">Entfernen</a>
                                                <form method="get" action="{{url('/product/deletevariant')}}" id="delete-form-var-{{$product->id}}-{{$var_key}}">@csrf
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <input type="hidden" name="id_var" value="{{$var_key}}">
                                                </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </table>
                                </td>
                                <td>
                                    <a href="{{route('product.edit',\Illuminate\Support\Facades\Crypt::encrypt($product->id))}}" class="edit-icon">Bearbeiten</a>
                                    <br>
                                    <a href="#" onclick="deleteProduct({{$product->id}});">Entfernen</a>
                                    <form method="post" action="{{route('product.destroy', $product->id) }}" id="delete-form-{{$product->id}}">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2">Du hast noch keine Produkte!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ecommerce-pagination">
        <div class="row">
            <div class="col-sm-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-2">
                {{ $products->links() }}
                </ul>
            </nav>
            </div>
        </div>
    </section>

@endsection

@section('page-script')
    <script type="text/javascript">
        function deleteProduct(id)
        {   
            if (confirm("Bist du sicher, dass du löschen möchten?")) {
                document.getElementById('delete-form-'+id).submit();
            }
        }

        function deleteProductVariant(id, id_var)
        {   
            if (confirm("Möchtest du die Variante wirklich löschen?")) {
                document.getElementById('delete-form-var-'+id+'-'+id_var).submit();
            }
        }

    </script>
@endsection