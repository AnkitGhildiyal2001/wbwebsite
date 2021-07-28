@extends('layout/base')

@section('title', 'Kampagne bearbeiten')

@section('page-style') {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/pages/campaigns.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/file-uploaders/dropzone.css')) }}">
@endsection

@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form method="POST" id="campaign-edit" action="{{ route('campaign.update', $campaign->slug) }}">
                @method('patch')
                @csrf
                <div class="form-label-group">
                    <input id="title" type="text" class="form-control " name="title" placeholder="Titel" value="{{ old('title', $campaign->title) }}" required="" autofocus="">
                    <label for="title">Titel</label>
                    @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-label-group">
                    <textarea class="form-control" name="description" id="description">{{ old('description', $campaign->description) }}</textarea>
                    <label for="description">Beschreibung</label>
                    @error('description')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>                
            </form>
            <form action="{{ route('upload.images', $campaign->id) }}" class="dropzone dropzone-area" id="my-awesome-dropzone" enctype="multipart/form-data">
                @csrf
                <div class="dz-message">Drag & Drop oder klicken zum Hochladen
                </div>
                
            </form>
            <button type="submit" form="campaign-edit" class="my-2 btn btn-primary float-right btn-inline waves-effect waves-light">Speichern</button>
        </div>
    </div>
</div>

@endsection

@section('page-script') {{-- Page js files --}}
    <script src="{{ asset(mix('vendors/js/extensions/dropzone.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/dropzone.js')) }}"></script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true, 
            dictRemoveFile: "Entfernen",
            dictCancelUpload: "Abbrechen",
            success: function(file, response) {
              //alert(response);
              console.log(response);
            },
            error: function(file, response) {
                  console.log(response);
            },
            removedfile: function(file){
                var name = file.name;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete.images') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        "image": "blaaa",
                    },
                    dataType: 'html'
                });
                var _ref;
                return(_ref = file.previewElement) != null
                    ? _ref.parentNode.removeChild(file.previewElement)
                    : void 0;
            }
        }
    </script>
@endsection