<x-dashboard-scope title='All hotels'>
  <style>

.dropdown-menu {
    width: fit-content !important;
    height: fit-content!important;
    margin-left: -10px !important;
}
  </style>
  
                <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @if (session()->has('success'))
                    <div class="alert alert-success text-center">{{session()->get('success')}}</div>
                  @endif
                  <div class="table-responsive">
                    <table class="table table-striped p-2">
                      <thead>
                        <tr>
                          <th>
                            Id
                          </th>
                          <th>
                            Hotel name
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Starts
                          </th>
                          <th>
                            Rooms count
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Number phone
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                          @if (count($hotels) <= 0)
                          <tr>
                            <td colspan="10" class="text-center">No data</td>
                          </tr>
                          @else

                          @foreach ( $hotels as $hotel )
                          {{-- {{dd($hotel)}} --}}
                          <tr>
                            <td class="py-1">
                              {{$loop->iteration}}
                              <img src="{{asset('storage/'. $hotel->hotel_img)}}" alt="image"/>
                            </td>
                            <td>
                              {{$hotel->hotel_name}}
                            </td>
                            <td>
                              {{Str::limit($hotel->description, 20)}}
                            </td>
                            <td>
                              {{$hotel->starts}}
                            </td>
                            <td>
                              {{$hotel->room_count}}
                            </td>
                            <td>
                              {{$hotel->min_price}} MAD
                            </td>
                            <td>
                              {{Str::limit($hotel->city, 10)}}
                            </td>
                            <td>
                              {{Str::limit($hotel->address, 15)}}
                            </td>
                            <td>
                              {{$hotel->phone_number}}
                            </td>
                            <td>
                              <div class="dropdown">
                                <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{route('admin-hotel.edit',$hotel)}}">Edit</a></li>
                                  <li>

                                    <form action="{{route('admin-hotel.destroy',$hotel)}}" method="POST">
                                      @csrf
                                      @method('delete')
                                      <button class="dropdown-item delete-btn">Delete</button>
                                    </form>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          <tr>
                          @endforeach
                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</x-dashboard-scope>