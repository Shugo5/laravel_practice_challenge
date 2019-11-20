@extends('layouts.app')
@section('content')

{{-- @include('common.errors') --}}

<div class="container">
<div><h2>システムへのご意見をお聞かせください</h2></div>
<form action="{{ url('front/confirm') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="row">
        <label class="col-sm-3" for="">氏名<span>※</span></label>
        <input class="col-sm-3" name="fullname" type="text" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3" for="">性別<span>※</span></label>
        <div class="col-sm-1">
            <label class="" for="radio2a">
                <input class="" type="radio" name="gender" id="radio2a" value="男性" checked> 男性
            </label>
        </div>
        <div class="col-sm-1">
            <label class="" for="radio2b">
                <input class="" type="radio" name="gender" id="radio2b" value="女性"> 女性
            </label>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3" for="ages">年代（編集中）<span>※</span></label>
        <select name="age_id" id="ages">
            <option disabled selected>選択してください</option>
            @foreach ($ages as $age)
                <option>{{ $age->age }}</option>
            @endforeach
        </select>
    </div>
    <div class="row">
        <label class="col-sm-3">メールアドレス<span>※</span></label>
        <input class="col-sm-3" name="email" type="email" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3">メール送信可否</label>
        <div class="col-sm-3">
            <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
            <input name="is_send_email" value="送信不可" type="hidden">
            <input class="col-sm-1" name="is_send_email" value="送信許可" type="checkbox" checked>
            <p>送信を許可します</p>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3">ご意見</label>
        <textarea name="feedback" id="" cols="30" rows="5" placeholder="入力してください"></textarea>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="確認">
    </div>
</form>
</div>
@endsection
