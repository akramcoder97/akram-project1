@extends('layouts.app')



@section('title')
    welcome | employes
@endsection


@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                    <h3>welcome back !</h3>
                    </div>
                    <div class="card-body">
                        <!-- hadi ida kan non connecté -->
                        @guest 
                            <a href="{{url('/login')}}" class="btn btn-outline-primary">Login</a>
                        @endguest
                        <!-- hadi ida kan connecté -->
                        @auth
                            <a href="{{url('admin/home')}}" class="btn btn-outline-primary">Home</a>
                        @endauth
                        <!--  added  fortifyServiceProvider line 49 -->
                        <!--  added  config/app line 164 -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection