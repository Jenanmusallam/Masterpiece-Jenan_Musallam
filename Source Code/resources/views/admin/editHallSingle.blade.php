@extends('layouts.admenLayout')
@section('content')
<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Manage Hall
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12 lg:col-span-12">
    <!-- BEGIN: Vertical Form -->
    <div class="intro-y box">
      <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
        <h2 class="font-medium text-base mr-auto">
          Edit Hall
        </h2>
      </div>
      <form action="{{ route('admin.hall.update', $hall->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH') {{ csrf_field() }}
        <div class="p-5" id="vertical-form">
          <div class="preview">
            <div>
              <label for="name">Halls Name</label>
              <input name="name" type="text" class="input w-full border mt-2" value="{{ $hall-> name }}">
              @if ($errors->has('name'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="description" class="control-label mb-1">Halls Description</label>
              <input name="description" type="text" class="input w-full border mt-2" value="{{ $hall-> description }}">
              @if ($errors->has('description'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('description') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="image" class="control-label mb-1">Halls Image</label>
              <input name="image" type="file" class="input w-full border mt-2" value="{{ $hall-> image }}">
            </div>
            <div class="mt-3">
              <label for="price" class="control-label mb-1">Number Hulls</label>
              <input type="price" class="input w-full border mt-2" name="price" id="price" step=0.01
                value="{{ $hall-> price }}">
              @if ($errors->has('price'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('price') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="discount" class="control-label mb-1">discount Hulls</label>
              <input type="number" class="input w-full border mt-2" name="discount" id="discount" step=0.01
                value="{{ $hall-> discount }}">
              @if ($errors->has('discount'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('discount') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="video" class="control-label mb-1">video Hulls</label>
              <input type="text" class="input w-full border mt-2" name="video" id="video" value="{{ $hall-> video }}">
              @if ($errors->has('video'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('numHulls') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="style" class="control-label mb-1">Halls style</label>
              <input type="text" class="input w-full border mt-2" name="style" id="style" value="{{ $hall-> style }}">
              @if ($errors->has('style'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('style') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="is_available" class="control-label mb-1">Halls is_available</label>
              <input type="text" class="input w-full border mt-2" name="is_available" value="{{ $hall-> is_available }}"
                id="is_available">
              @if ($errors->has('is_available'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('is_available') }}
              </div>
              @endif
            </div>
            <div class="mt-3">
              <label for="halls_id">Halls</label>
              <select class="input w-full border mt-2 select2" data-hide-search="true" name="halls_id" id="halls_id">
                <option disabled selected>Select Halls</option>
                @foreach ($Halls as $Halls)
                <option value="{{ $Halls->id }}">{{$Halls->name}}</option>
                @endforeach
              </select>
              @if ($errors->has('halls_id'))
              <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                  data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('halls_id') }}
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
</div>
@endsection