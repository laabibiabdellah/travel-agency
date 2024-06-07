@php
  use Carbon\Carbon;
@endphp
<x-dashboard-scope title='Add hotel'>
  <div>
      <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" method="POST" action="{{route('admin-pack.update',$pack)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="pack_title">Pack title</label>
                  <input type="text" name="pack_title" value="{{$pack->pack_title}}" class="form-control" id="pack_title" placeholder="Pack title">
                  @error('pack_title')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" name="price" value="{{$pack->price}}" class="form-control" id="price" placeholder="Price">
                  @error('price')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="places_number">Places number</label>
                  <input type="text" name="places_number" value="{{$pack->places_number}}" class="form-control" id="places_number" placeholder="places_number">
                  @error('places_number')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="starting_date">Starting date</label>
                  <input type="date" name="starting_date" value="{{Carbon::parse($pack->starting_date)->format('Y-m-d')}}" class="form-control" id="starting_date" placeholder="Starting date">
                  @error('starting_date')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="end_date">End date</label>
                  <input type="date" name="end_date" value="{{Carbon::parse($pack->end_date)->format('Y-m-d')}}" class="form-control" id="end_date" placeholder="End date">
                  @error('end_date')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Upload Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="pack_img" class="form-control file-upload-info" placeholder="Upload Image">
                  </div>
                  @error('pack_img')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                  <div class="mt-3 border w-25 rounded">
                    <img src="{{asset('storage/'.$pack->pack_img)}}" alt="image" width="100%">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{$pack->description}}</textarea>
                  @error('description')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Edit Hotel</button>
                <a href="{{route('admin-pack.index')}}" class="btn btn-light">Cancel</a>
              </form>
            </div>
          </div>
        </div>
  </div>
</x-dashboard-scope>