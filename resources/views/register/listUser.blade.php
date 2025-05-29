@extends('layouts1.app')
@section('content1')
    <a href="{{route('trashedUser')}}">لیست کاربران حذف شده</a>
 <table style="width: 100%">
     <thead>
     <tr>
         <th style="width: 10%;text-align: center;justify-content: center;font-weight: bold;font-size: 2rem">نام</th>
         <th style="width: 20%;text-align: center;justify-content: center;font-weight: bold;font-size: 2rem">نام کاربری</th>
         <th style="width: 10%;text-align: center;justify-content: center;font-weight: bold;font-size: 2rem">ایمیل</th>

     </tr>
     </thead>
   @foreach($users as $user)
         <tbody >
         <tr style="direction: rtl;">
             <td style="width: 10%;text-align: center;justify-content: center;">{{$user->name}}</td>
             <td style="width: 20%;text-align: center;justify-content: center;">{{$user->userName}}</td>
             <td style="width: 10%;text-align: center;justify-content: center;">{{$user->email}}</td>
             <td>
                 <form action="{{route('delete',$user->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-warning">حذف کاربر</button>
                 </form>
             </td>
         </tr>
         </tbody>
   @endforeach
 </table>

@endsection
