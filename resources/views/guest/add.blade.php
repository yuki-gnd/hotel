@extends('layouts.hotel')

@section('body')
    <div class="input_guest">
        <form action="/guest/add" method="post">
            @csrf
            お名前 <input type="text" name="name" >
            <br>
            ご住所 <input type="text" name="address">
            <br>
            電話番号 <input type="text" name="tel">
            <br>
            <input type="submit" value="登録">
        </form>
    </div>
    <div class="check_fillinfo">
        <form action="/guest/create" method="get"></form>
        <p>以下の内容で登録されました。</p>
        <table>
            @foreach($form as $item)
                <p>{{$item->name}}</p>
                <p>{{$item->address}}</p>
                <p>{{$item->tel}}</p>
            @endforeach
        </table>


    </div>
@endsection