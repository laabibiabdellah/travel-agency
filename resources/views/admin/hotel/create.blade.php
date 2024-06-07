<x-dashboard-scope title='Add hotel'>
  <div>
      <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" method="POST" action="{{route('admin-hotel.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="hotel_name">Hotel name</label>
                  <input type="text" name="hotel_name" value="{{old('hotel_name')}}" class="form-control" id="hotel_name" placeholder="Hotel name">
                  @error('hotel_name')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" name="city" value="{{old('city')}}" class="form-control" id="city" placeholder="City">
                  @error('city')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" value="{{old('address')}}" class="form-control" id="address" placeholder="Address">
                  @error('address')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="phone_number">Phone number</label>
                  <input type="text" name="phone_number" value="{{old('phone_number')}}" class="form-control" id="phone_number" placeholder="Phone number">
                  @error('phone_number')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Starts</label>
                    <select class="form-control" name="starts" id="exampleSelectGender">
                      <option selected disabled>---</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    @error('starts')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="room_count">Rooms count</label>
                  <input type="number" name="room_count" value="{{old('room_count')}}" class="form-control" id="room_count" placeholder="Rooms count">
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
                </div>
                <div class="form-group">
                  <label for="min_price">Price</label>
                  <input type="number" name="min_price" value="{{old('min_price')}}" class="form-control" id="min_price" placeholder="Price">
                  @error('min_price')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{old('description')}}</textarea>
                  @error('description')
                    <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Add Hotel</button>
                <a href="{{route('admin-hotel.index')}}" class="btn btn-light">Cancel</a>
              </form>
            </div>
          </div>
        </div>
  </div>
</x-dashboard-scope>