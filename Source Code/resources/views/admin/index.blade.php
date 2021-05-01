@extends('layouts.admenLayout')

@section('content')
<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Manage Admin
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12 lg:col-span-12">
    <!-- BEGIN: Vertical Form -->
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
          Create Admin
        </h2>
      </div>

      @if ($message = Session::get('success'))
      <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-18 text-theme-9"
        style=" width: 35vw;margin: auto;"> <i data-feather="thumbs-up"></i>
        <p>{{ $message }}</p>
      </div>
      @endif
      <form action="admin" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label> Full Name Admin</label>
              <input name="fullName" type="text" class="form-control input w-full border mt-2"
                value="{{ old('fullName') }}">
              @if ($errors->has('fullName'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('fullName') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="email" class="control-label mb-1">Admin Email</label>
              <input name="email" type="email" class="form-control input w-full border mt-2" value="{{ old('email') }}">
              @if ($errors->has('email'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('email') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="password" class="control-label mb-1">Admin Password</label>
              <input name="password" type="password" class="form-control input w-full border mt-2"
                value="{{ old('password') }}">
              @if ($errors->has('password'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('password') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="role" class="control-label mb-1">Admin Role</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="role" id="role">
                <option disabled selected>Select Role</option>
                <option value='admin'>Admin</option>
                <option value='sub admin'>Sub Admin</option>
              </select>
              @if ($errors->has('role'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('role') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="halls" class="control-label mb-1">Admin Halls</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="halls" id="halls">
                <option disabled selected>Select Halls</option>
                @foreach ($halls as $halls)
                <option value={{$halls->id}}>{{$halls->name}}</option>
                @endforeach
              </select>
              @if ($errors->has('halls'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('halls') }}
              </div>
              @endif
            </div>

            <div class="mt-3">
              <label for="image" class="control-label mb-1">Admin Image</label>
              <input name="image" type="file" class="form-control input w-full border mt-2">
            </div>
            <div class="mt-3">
              <button id="payment-button" type="submit" class="button w-full bg-theme-1 text-white mt-5"
                name="submit">Add
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="row m-t-30">
  <div class="col-md-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
      <table class="table table-borderless table-data3 text-center">
        <thead style="background: rgb(13, 142, 202);color: white;">
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Role</th>
            <th>Admin Halls</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($admins as $admin)
          <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->fullName}}</td>
            <td>{{$admin->email}}</td>
            <td>
              <div class="image img-cir img-40 ">
                <img src="{{asset("images/{$admin->image}")}}" style="height: 15vh; margin: auto;">
              </div>
            </td>
            <td>{{$admin->role}}</td>
            <td>{{$admin->halls_name}}</td>
            <td>
              <a href="{{ route('admin.admin.edit', $admin->id)}}"
                class="button mr-2 mb-2 flex items-center justify-center bg-theme-12 text-white"><i data-feather="edit"
                  class="w-4 h-4 mr-1"></i>Edit</a>
            </td>
            <td>
              <form action="{{ route('admin.admin.destroy', $admin->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="button mr-2 mb-2 flex items-center justify-center bg-theme-6 text-white"><i
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
@endsection