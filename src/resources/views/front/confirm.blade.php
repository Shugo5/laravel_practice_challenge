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
                    どっち？
            @endswitch
        </p>
    </div>
    <div class="row">
        <label class="col-sm-3" for="">年代（編集中）<span>※</span></label>
        <p class="col-sm-3" name="age_id">
            @switch($age_id)
                @case(1)
                    10代以下
                    @break
                @case(2)
                    20代
                    @break
                @case(3)
                    30代
                    @break
                @case(4)
                    40代
                    @break
                @case(5)
                    50代
                    @break
                @case(6)
                    60代
                    @break
                @default
                    どれ？
            @endswitch
        </p>
    </div>
    <div class="row">
        <label class="col-sm-3">メールアドレス<span>※</span></label>
        <p class="col-sm-3" name="email">{{ $email }}</p>
    </div>
    <div class="row">
        <label class="col-sm-3">メール送信可否</label>
        <p class="col-sm-3" name="is_send_email">
            @switch($is_send_email)
                @case(0)
                    送信不可
                    @break
                @case(1)
                    送信可能
                    @break
                @default
                    どっち笑
            @endswitch
        </p>
    </div>
    <div class="row">
        <label class="col-sm-3">ご意見</label>
        <p class="col-sm-3" name="feedback">{!! nl2br(e( $feedback )) !!}</p>
    </div>
</form>
<form action="{{ url('front/index') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <h4>実際に保存するデータ</h4>
        <input class="col-sm-1" name="fullname" value="{{ $fullname }}">
        <input class="col-sm-1" name="gender" value="{{ $gender }}">
        <input class="col-sm-1" name="age_id" value="{{ $age_id }}">
        <input class="col-sm-2" name="email" value="{{ $email }}">
        <input class="col-sm-1" name="is_send_email" value="{{ $is_send_email }}">
        <textarea class="col-sm-2" name="feedback" value="">{{ $feedback }}</textarea>
    </div>

    <!-- 再入力 -->
    <div class="col-sm-3">
        <button type="button" class="btn bg-secondary" onclick=history.back()>再入力</button>
    </div>
    {{-- onclick=history.back()で、クリック後、前画面に戻る。入力内容は保持される。 --}}
    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="送信">
    </div>
</form>
</div>
@endsection
