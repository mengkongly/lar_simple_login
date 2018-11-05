@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.                    
                </div>
                <div class="panel-body">
                    @if ($isLogin)
                        <h2>User is logined.</h2>
                    @else
                        <h2>User is not login yet.</h2>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
