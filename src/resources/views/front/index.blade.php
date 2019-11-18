@extends('layouts.app')
@section('content')

<div><h2>システムへのご意見をお聞かせください</h2></div>
<form action="{{ url('front/confirm') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="row">
        <label class="col-sm-3" for="">氏名<span>※</span></label>
        <input class="col-sm-3" type="text" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3" for="">性別<span>※</span></label>
        <div class="col-sm-1">
            <input class="" type="radio" name="radio2" id="radio2a" value="A" checked>
            <label class="" for="radio2a">男性</label>
        </div>
        <div class="col-sm-1">
            <input class="" type="radio" name="radio2" id="radio2b" value="B">
            <label class="" for="radio2b">女性</label>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3" for="ages">年代（編集中）<span>※</span></label>
        <select id="ages" class="">
            <option disabled selected>選択してください</option>
            @foreach ($ages as $age)
                <option>{{ $age->age }}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <label class="col-sm-3">メールアドレス<span>※</span></label>
        <input class="col-sm-3" type="email" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3">メール送信可否</label>
        <div class="col-sm-3">
            <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
            <input class="col-sm-1" type="checkbox" checked>
            <p>送信を許可します</p>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3">ご意見</label>
        <textarea name="" id="" cols="30" rows="5" placeholder="入力してください"></textarea>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="確認">
    </div>
</form>
@endsection
