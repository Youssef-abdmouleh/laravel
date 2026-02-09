@extends ('layouts.app')
@section ('title','Test Layout')
@section ('content')
    <h1>Welcome {{ $name }} to the Test Layout Page</h1>
    <p>This is the test layout page of the application.</p>
    <p>Today is {{ date('l, F dS, Y h:i A') }}</p>
<hr>
    <p>Today is {{ date('l, F dS, Y h:i A', strtotime('+1 hour')) }}</p>
    @endsection
    