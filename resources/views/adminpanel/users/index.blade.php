<?php
$num=0;
?>
@extends('layouts.master')

@section('title','| ilyaweb.com ')


@section('content')

    <h1>کاربران</h1>
 
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام</th>
      <th scope="col">نام خانوادگی</th>
      <th scope="col">وضعیت</th>
      <th scope="col">سطح دسترسی</th>
      <th scope="col">شماره تلفن</th>

    </tr>
  </thead>
  <tbody>

  @if($users)
        @foreach($users as $user)
        
            <tr>
        <th scope="row">{{$num+=1}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->lastName}}</td>
        <td>{{$user->status ? 'فعال' : 'غیر فعال'}}</td>
        <td>ایده پرداز</td>
        <td>{{$user->phoneNumber}}</td>
        <td> <a href="/adminpanel/users/index" class="btn btn-primary">جزئیات</a></td>
        </tr>
      </tr>
        
        @endforeach
    @endif
  
  
  </tbody>
</table>

@endsection