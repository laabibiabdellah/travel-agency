<x-dashboard-scope title='Edit hotel'>
  <div>
      <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" method="POST" action="{{route('admin-hotel.update',$hotel)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                  <label for="hotel_name">Hotel name</label>
                  <input type="text" name="hotel_name" value="{{$hotel->hotel_name}}" class="form-control" id="hotel_name" placeholder="Hotel name">
                  @error('hotel_name')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" name="city" value="{{$hotel->city}}" class="form-control" id="city" placeholder="City">
                  @error('city')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" value="{{$hotel->address}}" class="form-control" id="address" placeholder="Address">
                  @error('address')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="phone_number">Phone number</label>
                  <input type="text" name="phone_number" value="{{$hotel->phone_number}}" class="form-control" id="phone_number" placeholder="Phone number">
                  @error('phone_number')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Starts</label>
                    <select class="form-control" name="starts" id="exampleSelectGender">
                      <option disabled>---</option>
                      <option value="1" @if ($hotel->starts == 1)
                        selected
                      @endif>1</option>
                      <option value="2" @if ($hotel->starts == 2)
                        selected
                      @endif>2</option>
                      <option value="3" @if ($hotel->starts == 3)
                        selected
                      @endif>3</option>
                      <option value="4" @if ($hotel->starts == 4)
                        selected
                      @endif>4</option>
                      <option value="5" @if ($hotel->starts == 5)
                        selected
                      @endif>5</option>
                    </select>
                    @error('starts')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="room_count">Rooms count</label>
                    <input type="number" name="room_count" value="{{$hotel->room_count}}" class="form-control" id="room_count" placeholder="Rooms count">
                    @error('room_count')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                <div class="form-group">
                  <label>Upload Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="hotel_img" class="form-control file-upload-info" placeholder="Upload Image">
                  </div>
                  @error('hotel_img')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                  <div class="mt-3 border w-25 rounded">
                    <img src="{{asset('storage/'.$hotel->hotel_img)}}" alt="image" width="100%">
                  </div>
                </div>
                <div class="form-group">
                  <label for="min_price">Price</label>
                  <input type="number" name="min_price" value="{{$hotel->min_price}}" class="form-control" id="min_price" placeholder="Price">
                  @error('min_price')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{$hotel->description}}</textarea>
                  @error('description')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Edit Hotel</button>
                <a href="{{route('admin-hotel.index')}}" class="btn btn-light">Cancel</a>
              </form>
            </div>
          </div>
        </div>
  </div>
</x-dashboard-scope>