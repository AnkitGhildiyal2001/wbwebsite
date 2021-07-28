@extends('layout/base')

@section('title', 'Produkte')

@section('content')
    <form method="post" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
    	@csrf
        @method('put')
        <div class="row">
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header"><h6 class="mb-0">Produkt bearbeiten</h6></div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="form-control-label">Name</label>
                                <input required="required" type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image_product" class="form-control-label">Bild</label>
                                <div class="custom-file">
                                    <input type="file" name="image_product">
                                </div>
                            </div>
                            <div class="form-group col-12" id="variant-inputs">
                            	@foreach ($product->variations as $variation)
	                                <div class="row colors">
	                                    <div class="col-md-4">
	                                        <label class="form-control-label">Variante</label>
	                                        <input required="required" name="variation[]" class="form-control" type="text" placeholder="Farbe" value="{{$variation->variation}}">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <label class="form-control-label">Anzahl</label>
	                                        <input required="required" name="quantity[]" class="form-control" type="number" placeholder="Anzahl" value="{{$variation->quantity}}">
	                                    </div>
	                                    <div class="col-md-4">
	                                        <label class="form-control-label">Bild</label>
	                                        <div class="custom-file">
	                                            <input type="file" name="image[]">
	                                        </div>
	                                    </div>
	                                </div>
                                @endforeach
                                <div id="extra-fields-variant">
                                    <br><a href="#" class="mt-4" onclick="addExtraVariant();">Weitere Variante hinzufügen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <input type="submit" class="btn btn-primary float-right waves-effect waves-light float-right radius-10px" value="Bearbeiten">
            </div>
        </div>
    </form>

@endsection
@section('page-script')
    <script type="text/javascript">
        function addExtraVariant()
        {
            var parent = document.getElementById('variant-inputs');
            var container = document.getElementById('extra-fields-variant');
            var conn = document.createElement('div');
            conn.classList.add("row");
            conn.classList.add("colors");
            conn.innerHTML = '<div class="col-md-4"><label class="form-control-label">Farbe</label><input required="required" name="variation[]" class="form-control" type="text" placeholder="Farbe"></div><div class="col-md-4"><label class="form-control-label">Anzahl</label><input required="required" name="quantity[]" class="form-control" type="number" placeholder="Anzahl"></div><div class="col-md-4"><label class="form-control-label">Bild</label><div class="custom-file"><input required="required" type="file" name="image[]"></div></div>';

            parent.insertBefore(conn, container);
        }
    </script>
@endsection