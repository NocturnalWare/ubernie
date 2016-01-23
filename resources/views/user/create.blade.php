@extends('layouts.master')

@section('content')

<div class="row" style="@if(isset($redirected))background-color:#000;@endif color:#000">
    <center>
        {{$errors->first()}}
    	<div class="col-sm-12">
            <form method="POST" action="{{route('auth.register')}}">
                {!! csrf_field() !!}

                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <label class="en-label">First Name</label>
                    </div>
                    <div class="col-sm-12">
                        <input name="first_name" value="{{$account->first_name}}">
                    </div>
                    <div class="col-sm-12">
                        <label class="en-label">Last Name</label>
                    </div>
                    <div class="col-sm-12">
                        <input name="last_name" value="{{$account->last_name}}">
                    </div>
                    <div class="col-sm-12">
                        <label class="en-label">Bio/Interests</label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="bio" value="{{$account->bio}}"></textarea>
                    </div>
                    <div class="col-sm-12">
                        <label class="en-label">Password</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="col-sm-12">
                        <label class="en-label">Confirm Password</label>
                    </div>
                    <div class="col-sm-12">
                        <input type="password" name="password_confirmation">
                    </div>
                </div>

                <div style="margin-top:20px;">
                    <button class="btn btn-sm btn-primary" type="submit">Register</button>
                </div>
            </form>
    </center>
</div>
</div>
@stop