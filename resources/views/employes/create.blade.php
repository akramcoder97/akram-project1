@extends('adminlte::page')


@section('title')
   admin | créer 
@endsection


@section('content_header')
   <h3>créer un nouveau employeur</h3>
@endsection 


@section('content')
@include('layouts.alert')
   <div class="container">
       <div class="row my-5">
           <div class="col-md-8 mx-auto">
               <!-- config/fortify.php edit line 64 to 65 ----------->
               <div class="card my-3">
                   <div class="card-header">
                       <div class="text-center text-upercase">
                            créer un nouveau employeur
                       </div>
                   </div>
                   <div class="card-body">
                     <form action="{{ url('employes/store') }}" method="post" class="mt-3">
                     @csrf
                        <div class="form-group mb3">
                            <label for="registration_number">registration number</label>
                            <input type="text" class="form-control" name="registration_number" placeholder="registration number" value="{{old('registration_number')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="full_name">full name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="fullname" value="{{old('full_name')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="departement">departement</label>
                            <input type="text" class="form-control" name="depart" placeholder="departement" value="{{old('depart')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="hire_date">hire date</label>
                            <input type="date" class="form-control" name="hire_date" placeholder="hire date" value="{{old('hire_date')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="phone">phone</label>
                            <input type="tel" class="form-control" name="phone" placeholder="phone" value="{{old('phone')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" value="{{old('address')}}">
                        </div>
                        <div class="form-group mb3">
                            <label for="city">city</label>
                            <input type="text" class="form-control" name="city" placeholder="city" value="{{old('city')}}">
                        </div>
                        <div class="form-group mb3">
                            <button type="submit" class="btn btn-primary form-control">enregistrer</button>

                            <!-- Employe Model add new line  12 -->
                        </div>
                     </form>
                   </div>
               </div>

           </div>
       </div>
   </div>

@endsection
