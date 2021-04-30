@extends('layouts.admenLayout')
@section('content')
<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Manage Customer
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12 lg:col-span-12">
    <!-- BEGIN: Vertical Form -->
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
          Edit Customer
        </h2>
      </div>
      <form action="{{ route('Customer.update', $Customer->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label for="fullName" class="control-label mb-1">Customer Full Name</label>
              <input name="fullName" type="text" class="form-control input w-full border mt-2"
                value="{{ $Customer-> fullName }}">
              @if ($errors->has('fullName'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('fullName') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="email" class="control-label mb-1">Customer Email</label>
              <input name="email" type="email" class="form-control input w-full border mt-2"
                value="{{ $Customer-> email }}">
              @if ($errors->has('email'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('email') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="password" class="control-label mb-1">Customer Password</label>
              <input name="password" type="password" class="form-control input w-full border mt-2">
              @if ($errors->has('password'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('password') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="phone" class="control-label mb-1">Customer Phone</label>
              <input name="phone" type="tel" class="form-control input w-full border mt-2" maxlength="15"
                value="{{ $Customer-> phone }}">
              @if ($errors->has('phone'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i data-feather="alert-octagon"
                  class="w-6 h-6 mr-2"></i>{{ $errors->first('phone') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="image" class="control-label mb-1">Customer Image</label>
              <input name="image" type="file" class="form-control input w-full border mt-2">
            </div>
            <div class="mt-3">
              <button id="payment-button" type="submit" class="button w-24 mr-1 mb-2 bg-theme-12 text-white"
                name="submit">Update
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection