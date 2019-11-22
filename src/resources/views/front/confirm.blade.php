@extends('layouts.app')
@section('content')

<div class="container">
<div><h2>予約画面：内容確認</h2></div>
<form>
    <div class="row">
        <label class="col-sm-3" for="">氏名<span>※</span></label>
        <p class="col-sm-3" name="fullname">{{ $fullname }}</p>
    </div>
    <div class="row">
        <label class="col-sm-3" for="">性別<span>※</span></label>
        <p class="col-sm-3" name="gender">
            @switch($gender)
                @case(1)
                    男性
                    @break
                @case(2)
                    女性
                    @break
                @default
                    どっちやねん笑
            @endswitch
        </p>
    </div>
    <div class="row">
        <label class="col-sm-3" for="ages">年代（編集中）<span>※</span></label>
        <p class="col-sm-3" name="age_id">{{ $age_id }}</p>
    </div>
    <div class="row">
        <label class="col-sm-3">メールアドレス<span>※</span></label>
        <p class="col-sm-3" name="email">{{ $email }}</p>
    </div>
    <div class="row">
        <label class="col-sm-3">メール送信可否</label>
        <p class="col-sm-3" name="is_send_email">{{ $is_send_email }}</p>
    </div>
    <div class="row">
        <label class="col-sm-3">ご意見</label>
        <p class="col-sm-3" name="feedback">{!! nl2br(e( $feedback )) !!}</p>
    </div>
</form>

<div class="row">
    <input class="col-sm-3" name="fullname" value="{{ $fullname }}">
    <input class="col-sm-3" name="gender" value="{{ $gender }}">
    <input class="col-sm-3" name="age_id" value="{{ $age_id }}">
    <input class="col-sm-3" name="email" value="{{ $email }}">
    <input class="col-sm-3" name="is_send_email" value="{{ $is_send_email }}">
    <textarea class="col-sm-3" name="feedback" value="{!! nl2br(e( $feedback )) !!}"></textarea>
</div>

<form action="{{ url('front/index') }}" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="再入力">
    </div>
</form>
{{-- <form action="" method="POST">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="送信">
    </div>
</form> --}}
</div>
@endsection
