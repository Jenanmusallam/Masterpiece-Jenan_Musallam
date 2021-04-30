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
          Edit Admin
        </h2>
      </div>
      <form action="{{ route('admin.update', $admin->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH') {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label>Admin Name</label>
              <input name="fullName" type="text" class="input w-full border mt-2" value="{{ $admin-> fullName }}">
              @if ($errors->has('name'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                    class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="email" class="control-label mb-1">Admin Email</label>
              <input name="email" type="email" class="form-control input w-full border mt-2"
                value="{{ $admin-> email }}">
              @if ($errors->has('email'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                    class="w-6 h-6 mr-2"></i>{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="password" class="control-label mb-1">Admin Password</label>
              <input name="password" type="password" class="form-control input w-full border mt-2"
                value="{{ $admin-> password }}">
              @if ($errors->has('password'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                    class="w-6 h-6 mr-2"></i>{{ $errors->first('password') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="role" class="control-label mb-1">Admin Role</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="role" id="category">
                <option disabled selected>Select Role</option>
                <option value='Admin'>Admin</option>
                <option value='Sub Admin'>Sub Admin</option>
              </select>
              @if ($errors->has('role'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                                class="w-6 h-6 mr-2"></i>{{ $errors->first('role') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="halls">Admin Halls</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="halls" id="halls">
                <option disabled selected>Select Halls</option>
                @foreach ($halls as $halls)
                <option value={{$halls->id}}>{{$halls->name}}</option>
                @endforeach
              </select>
              @if ($errors->has('halls'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                    class="w-6 h-6 mr-2"></i>{{ $errors->first('halls') }}</div>
              @endif
            </div>
            <div class="mt-3">
              <label for="image" class="control-label mb-1">Admin Image</label>
              <input name="image" type="file" class="form-control input w-full border mt-2">
            </div>
            <div class="mt-3">
              <button id="payment-button" type="submit" class="button w-24 mr-1 mb-2 bg-theme-12 text-white"
                name="submit">Update
              </button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection