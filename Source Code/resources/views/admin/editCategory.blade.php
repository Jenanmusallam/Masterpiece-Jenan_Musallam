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
                    Edit Category
                </h2>
            </div>
            <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @method('PATCH') {{ csrf_field() }}
                <div class="p-5" id="vertical-form">
                    <div class="preview">
                        <div>
                            <label>Category Name</label>
                            <input name="name" type="text" class="input w-full border mt-2"
                                value="{{ $category-> name }}">
                            @if ($errors->has('name'))
                            <div class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-31 text-theme-6"> <i
                                    data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>{{ $errors->first('name') }}
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
                            <button id="payment-button" type="submit"
                                class="button w-24 mr-1 mb-2 bg-theme-12 text-white" name="submit">Update
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection