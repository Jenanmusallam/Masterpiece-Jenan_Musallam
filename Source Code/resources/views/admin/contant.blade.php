@extends('layouts.admenLayout')

@section('content')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        View Contant
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" style="text-align: center;">
                                <thead
                                    style="background:-webkit-linear-gradient(left, #ea236f8f, #20acd286);color: white;">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Masege</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Contact as $contact)
                                    <tr>
                                        <td>{{$contact->contact_name}}</td>
                                        <td>{{$contact->contact_email}}</td>
                                        <td>{{$contact->contact_message}}</td>
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

@endsection