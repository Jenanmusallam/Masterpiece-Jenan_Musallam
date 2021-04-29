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
          Edit Halls
        </h2>
      </div>
      <form action="{{ route('halls.update', $halls->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH') {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label>Halls Name</label>
              <input name="name" type="text" class="input w-full border mt-2" value="{{ $halls-> name }}">
              @if ($errors->has('name'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label>Description</label>
              <input name="description" type="text" class="input w-full border mt-2" value="{{ $halls-> description }}">
              @if ($errors->has('description'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('description') }}
              </div>
              @endif
            </div>

            <div class="mt-3">
              <label>Number Hulls</label>
              <input name="numHulls" type="text" class="input w-full border mt-2" value="{{ $halls-> numHulls }}">
              @if ($errors->has('numHulls'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('numHulls') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label>Location</label>
              <input name="location" type="text" class="input w-full border mt-2" value="{{ $halls-> location }}">
              @if ($errors->has('location'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('location') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="category">Category</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="category" id="category">
                <option disabled selected>Select Category</option>
                @foreach ($categories as $Category)
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
              <label for="image" class="control-label mb-1">Category image</label>
              <input name="image" type="file" class="form-control input w-full border mt-2">
              @if ($errors->has('image'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('image') }}
              </div>
              @endif
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