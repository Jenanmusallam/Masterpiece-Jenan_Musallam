@extends('layouts.admenLayout')

@section('content')
<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Manage Category
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12 lg:col-span-12">
    <!-- BEGIN: Vertical Form -->
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
          Create Category
        </h2>
      </div>
      @if ($message = Session::get('success'))
      <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9" style=" width: 35vw;margin: auto;"> <i
          data-feather="thumbs-up"></i>
        <p>{{ $message }}</p>
      </div>
      @endif
      <form action="category" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label>Category Name</label>
              <input name="name" type="text" class="input w-full border mt-2">
              @if ($errors->has('name'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="image" class="control-label mb-1">Category image</label>
              <input name="image" type="file" class="form-control input w-full border mt-2">
              @if ($errors->has('image'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('image') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <button id="payment-button" type="submit" class="button w-full bg-theme-1 text-white mt-5"
                name="submit">Add
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>
  <!-- END: Vertical Form -->
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row m-t-30">
        <div class="col-md-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>

                  <td>{{$category->name}}</td>

                  <td>
                    <div class="image img-cir img-40">
                      <img src="{{asset("images/{$category->image}")}}">
                    </div>
                  </td>
                  <td>
                    {{-- <a href="{{ route('admin.category.edit', $category->id)}}" class="btn btn-warning">Edit</a>
                    --}}
                    <a href="{{ route('category.edit', $category->id)}}"
                      class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-12 text-white"><i
                        data-feather="edit" class="w-4 h-4 mr-2"></i> Edit </a>

                  </td>
                  <td>
                    <form action="{{ route('category.destroy', $category->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                        class="button w-32 mr-2 mb-2 flex items-center justify-center bg-theme-6 text-white"> <i
                          data-feather="trash" class="w-4 h-4 mr-2"></i> Delete </button>
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
</div>
</div>
</div>

@endsection