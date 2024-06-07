@php
  use Carbon\Carbon;
@endphp
<x-dashboard-scope title='All packs'>
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
                            Pack title
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Price
                          </th>
                          <th>
                            Places number
                          </th>
                          <th>
                            Starting date
                          </th>
                          <th>
                            End date
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                          @if (count($packs) <= 0)
                          <tr>
                            <td colspan="8" class="text-center">No data</td>
                          </tr>
                          @else

                          @foreach ( $packs as $pack )
                          <tr>
                            <td class="py-1">
                              {{$loop->iteration}}
                              <img src="{{asset('storage/'. $pack->pack_img)}}" alt="image"/>
                            </td>
                            <td>
                              {{$pack->pack_title}}
                            </td>
                            <td>
                              {{Str::limit($pack->description, 20)}}
                            </td>
                            <td>
                              {{$pack->price}}
                            </td>
                            <td>
                              {{$pack->places_number}}
                            </td>
                            <td>
                              {{Carbon::parse($pack->starting_date)->format('Y-m-d')}}
                            </td>
                            <td>
                              {{Carbon::parse($pack->end_date)->format('Y-m-d')}}
                            </td>
                            <td>
                              <div class="dropdown">
                                <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{route('pack.edit',$pack)}}">Edit</a></li>
                                  <li>
                                    <form action="{{route('pack.destroy',$pack)}}" method="POST">
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