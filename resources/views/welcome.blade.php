@extends('layouts.master')

@section('content')

<div class="container">
    <div class="content">
        <img src="http://ubernie.tavaresoft.com/images/ubernie.png">
        <h1>Ridesharing to Caucuses In Iowa...if a front end dev wants to help.</h1>
            <form action="{{route('help.store')}}" method="post">
            	<input type="hidden" name="_token" value="{{csrf_token()}}">
            	<div class="col-sm-12">
            		<label>Email</label>
            	</div>
            	<div class="col-sm-12">
            		<input name="email">
            	</div>
            	<div class="col-sm-12">
            		<label>Message</label><br>
            	</div>
            	<div class="col-sm-12">
            		<textarea name="message" style="width:300px;height:200px;" placeholder="Hello, I write lots of javascript and..."></textarea><br>
            		<button type="submit" class="btn btn-primary">I'll help!</button>
            	</div>
            </form>
    </div>
</div>


@stop