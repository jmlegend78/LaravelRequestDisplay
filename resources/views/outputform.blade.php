@extends('layout.masterdata')
@section('Title','Data')
@section('main')
	Name: {{ $name }}<br>
	Father's name: {{ $father_name }}<br>
	Address: {{ $address}}<br>
	Gender: {{ $gender}}<br>
	State: {{ $state}}<br>
	City: {{ $city}}<br>
	Birtdate: {{ $birth_date}}<br>
	Pincode: {{ $pincode}}<br>
	Course: {{ $course}}<br>
	Email: {{ $email}}
@endsection