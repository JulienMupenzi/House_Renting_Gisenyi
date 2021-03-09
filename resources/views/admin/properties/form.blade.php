    @if ($property->id)
        <form method="post" enctype="multipart/form-data" action="{{ route('properties.update', $property) }}">
        @method('PUT')
    @else
        <form method="post" enctype="multipart/form-data" action="{{ route('properties.store') }}">
    @endif
    @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="ground_size">Ground Size</label>
                    <input class="form-control @error('ground_size') is-invalid @enderror" value="{{ $property->ground_size ? $property->ground_size : old('ground_size') }}" type="text" name="ground_size" placeholder="Example: 1200 sq ft">
                    @error('ground_size')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="price">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror" value="{{ $property->price ? $property->price : old('price') }}" type="text" name="price" placeholder="Example: Frw4,300.000.00/month">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="bedrooms">Bedrooms</label>
                    <input class="form-control @error('bedrooms') is-invalid @enderror" value="{{ $property->bedrooms ? $property->bedrooms : old('bedrooms') }}" type="text" name="bedrooms" placeholder="Example: 4 bedrooms">
                    @error('bedrooms')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="bathrooms">Bathrooms</label>
                    <input class="form-control @error('bathrooms') is-invalid @enderror" value="{{ $property->bathrooms ? $property->bathrooms : old('bathrooms') }}" type="text" name="bathrooms" placeholder="Example: 2 bathrooms">
                    @error('bathrooms')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="garages">Garages</label>
                    <input class="form-control @error('garages') is-invalid @enderror" value="{{ $property->garages ? $property->garages : old('garages') }}" type="text" name="garages">
                    @error('garages')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label-control" for="image">Main image</label>
                    <input class="form-control" type="file" multiple="multiple" name="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label-control" for="address">Address</label>
                    <input class="form-control @error('address') is-invalid @enderror" value="{{ $property->address ? $property->address : old('address') }}" type="text" name="address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="label-control" for="quarter_id">Quarter</label>
                    <select class="form-control" name="quarter_id">
                        @foreach (\App\Quarter::all() as $quarter)
                            @if($property && ($property->quarter_id && $property->quarter_id == $quarter->id))
                            <option selected value="{{ $quarter->id }}">{{ $quarter->name }}</option>
                            @else
                            <option value="{{ $quarter->id }}">{{ $quarter->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if (count($property->getImages()) > 0)
                <div class="row">
                    @foreach ($property->getImages() as $relatedImage)
                    <div class="col-md-3">
                        <img class="img-thumbnail" src="{{ $relatedImage }}" alt="" style="max-width: 250px;">
                    </div>
                    @endforeach
                    <hr/>
                </div>
                @endif
                <input
                    type="file"
                    multiple="multiple"
                    multiple
                    name="files[]"
                    label="Drop other related images here"
                    help="Upload files here and they won't be sent immediately"
                    is="drop-files"
            />
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="label-control" for="description">Description</label>
                    <textarea rows="8" name="description" class="form-control" >
                        {{ $property->description ? $property->description : old('description') }}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="confirmed" id="confirmed" value="1">
                <label class="form-check-label" for="confirmed">Confirmed</label>
            </div>
        </div>
        <button class="pull-right btn btn-primary">Save</button>
    </form>
