@extends('layout/base')

@section('title', 'Produkt hinzufügen')

@section('content')
    <form id="product-form" method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-header"><h6>Neues Produkt hinzufügen</h6></div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" class="form-control-label">Name</label>
                                <input required="required" type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image" class="form-control-label">Bild</label>
                                <div class="custom-file">
                                    <input type="file" required="required" id="image_product" name="image_product">
                                </div>
                            </div>
                            <div class="form-group col-12" id="variant-inputs">
                                <div class="row colors">
                                    <hr>
                                    <div class="col-md-4">
                                        <label class="form-control-label">Variante</label>
                                        <input required="required" id="variation" name="variation[]" class="form-control" type="text" placeholder="z.B Blau, XL oder Groß">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-control-label">Anzahl</label>
                                        <input required="required" id="quantity" name="quantity[]" class="form-control" type="number" placeholder="Anzahl">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-control-label">Bild</label>
                                        <div class="custom-file">
                                            <input required="required" type="file" id="image" name="_image[]">
                                        </div>
                                    </div>
                                </div>
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
                <img id="loader" style="display: none;" class="float-right" src="{{ asset('assets/img/loader.gif') }}" alt="Uploading data Please wait." />
                <input id="submit-button" type="submit" class="btn btn-primary float-right waves-effect waves-light float-right radius-10px" value="Speichern">
            </div>
        </div>
    </form>

@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).ready(function () {
            console.log("test");
            $('#product-form').submit(function(e){
                e.preventDefault();
                $('.btn-primary').hide();
                $('#loader').show();

                var fd = new FormData();
                fd.append('name', $('#name').val());
                fd.append('image_product', $( '#image_product' )[0].files[0]);

                console.log(fd);

                var variations = $('input[name*=variation]');

                for (var i = 0; i < variations.length; i++) {
                    fd.append('variation[]', variations[i].value);
                }

                var quantities = $('input[name*=quantity]');

                for (var i = 0; i < quantities.length; i++) {
                    fd.append('quantity[]', quantities[i].value);
                }

                var images = $('input[name*=_image]');
                let sz=$( '#image_product' )[0].files[0].size;

                for(var i = 0; i < images.length; i++) {
                    fd.append('image[]', images[i].files[0]);
                    sz+=images[i].files[0].size;
                }

                if(sz > 10485760)
                {
                    alert("Your total uploaded images size is very large. Please try again.");
                    $('.btn-primary').show();
                    $('#loader').hide();
                }
                else
                {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': CSRF_TOKEN,
                        },

                        url: $('#product-form').attr('action'),
                        processData: false,
                        contentType: false,
                        type: 'post',
                        data: fd,
                        dataType: 'json',

                        success: function(data, status) {
                            console.log(data);
                            window.location = $('#product-form').attr('action');
                        },
                        error : function(error) {
                            console.log(error);
                            alert("error occured try again later.")
                            $('.btn-primary').show();
                            $('#loader').hide();
                        }
                    });
                }
            });
        });
        function addExtraVariant()
        {
            var parent = document.getElementById('variant-inputs');
            var container = document.getElementById('extra-fields-variant');
            var conn = document.createElement('div');
            conn.classList.add("row");
            conn.classList.add("colors");
            conn.innerHTML = '<div class="col-md-4"><label class="form-control-label">Variante</label><input required="required" name="variation[]" class="form-control" type="text" placeholder="z.B Blau, XL oder Groß"></div><div class="col-md-4"><label class="form-control-label">Anzahl</label><input required="required" name="quantity[]" class="form-control" type="number" placeholder="Anzahl"></div><div class="col-md-4"><label class="form-control-label">Bild</label><div class="custom-file"><input required="required" type="file" name="_image[]"></div></div>';

            parent.insertBefore(conn, container);
        }
    </script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('js/scripts/pages/products.js')) }}"></script>
@endsection
