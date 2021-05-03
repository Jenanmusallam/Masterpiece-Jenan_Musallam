@extends('layouts.admenLayout')

@section('content')
<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Manage Halls
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12 lg:col-span-12">
    <!-- BEGIN: Vertical Form -->
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
          Create Halls
        </h2>
      </div>
      @if ($message = Session::get('success'))
      <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"
        style=" width: 35vw;margin: auto;"> <i data-feather="thumbs-up"></i>
        <p>{{ $message }}</p>
      </div>
      @endif
      <form action="halls" method="post" enctype="multipart/form-data">
        {{ csrf_field()}}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label for="category">Category</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="category" id="category">
                <option disabled selected>Select Category</option>
                @foreach ($Categories as $Category)
                <option value={{$Category->id}}>{{$Category->name}}</option>
                @endforeach
              </select>
              @if ($errors->has('category'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('category') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="name">Halls Name</label>
              <input name="name" type="text" class="input w-full border mt-2">
              @if ($errors->has('name'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="description" class="control-label mb-1">Halls Description</label>
              <input name="description" type="text" class="input w-full border mt-2">
              @if ($errors->has('description'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('description') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="image" class="control-label mb-1">Halls Image</label>
              <input name="image" type="file" class="input w-full border mt-2">
            </div>
            <div class="mt-3">
              <label for="numHulls" class="control-label mb-1">Number Hulls</label>
              <input type="number" class="input w-full border mt-2" name="numHulls" id="numHulls" step=0.01>
              @if ($errors->has('numHulls'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('numHulls') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="location" class="control-label mb-1">Halls location</label>
              <input type="text" class="input w-full border mt-2" name="location" id="location">
              @if ($errors->has('location'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('location') }}
              </div>
              @endif
            </div>


            <div class="mt-3">
              <button id="payment-button" type="submit" class="button bg-theme-1 text-white mt-5 w-full"
                name="submit">Add
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- END: Vertical Form -->
  <div class="intro-y col-span-12 lg:col-span-12">
    <div class="container-fluid">
      <div class="row m-t-30">
        <div class="col-md-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3 text-center">
              <thead style="background: rgba(2, 118, 170, 1);color: white;">
                <tr>
                  <th>City</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Description</th>
                  <th>Number Hulls</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($Halls as $halls)
                <tr>
                  <td>{{$halls->category_name}}</td>
                  <td>{{$halls->name}}</td>
                  <td>
                    <div class="image img-cir img-40">
                      <img src="{{asset("images/{$halls->image}")}}" style="height: 8vh;  margin: auto;">

                    </div>
                  </td>
                  <td>{{$halls->description }}</td>
                  <td>{{$halls->numHulls }}</td>
                  <td>
                    <a href="{{ route('admin.halls.edit', $halls->id)}}"
                      class="button mr-2 mb-2 flex items-center justify-center bg-theme-12 text-white"><i
                        data-feather="edit" class="w-4 h-4 mr-1"></i>Edit</a>
                  </td>
                  <td>
                    <form action="{{ route('admin.halls.destroy', $halls->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                        class="button mr-2 mb-2 flex items-center justify-center bg-theme-6 text-white"><i
                          data-feather="trash" class="w-4 h-4 mr-1"></i> Delete </button>
                    </form>
                  </td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- END DATA TABLE-->
        </div>
      </div>
    </div>
  </div>
  @endsection