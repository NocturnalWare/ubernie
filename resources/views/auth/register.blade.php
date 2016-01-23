<div class="row" style="@if(isset($redirected))background-color:#000;@endif color:#000">
    <center>{{$errors->first()}}
    	<div class="col-sm-12">
        <form method="POST" action="{{route('auth.register')}}">
            {!! csrf_field() !!}

            <div class="col-sm-12">
                <div class="col-sm-12">
                    <label class="en-label">Username</label>
                </div>
                <div class="col-sm-12">
                    <input name="name" value="{{ old('name') }}">
                </div>
                <div class="col-sm-12">
                    <label class="en-label">Email</label>
                </div>
                <div class="col-sm-12">
                    <input type="email" name="email" value="{{ old('email') }}">
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
