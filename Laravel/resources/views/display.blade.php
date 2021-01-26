  
@extends('master.master')
@section('Title','Sign Up Form by Colorlib')
@section('section')
@if(empty($Name) || empty($Father_name) || empty($Address) || empty($Gender) || empty($State) || empty($City) || empty($Birth_date) || empty($Pincode) || empty($Course) || empty($Email))
    @else
        Name: {{ $Name }}
        Father Name: {{ $Father_name }}
        Address: {{ $Address }}
        Gender: {{ $Gender }}
        State: {{ $State }}
        City: {{ $City }}
        DOB: {{ $Birth_date }}
        Pincode: {{ $pincode }}
        Course: {{ $Course }}
        Email ID:{{ $Email }}
    @endif
@endsection
@section('footer')
	Laravel Blade Template
@endsection