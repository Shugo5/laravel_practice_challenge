@extends('layouts.app')
@section('content')

@include('common.errors')

<div class="container">
<div><h2>システムへのご意見をお聞かせください</h2></div>
<form action="{{ url('front/confirm') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="row">
        <label class="col-sm-3" for="">氏名<span>※</span></label>
        <input class="col-sm-3" name="fullname" type="text" value="{{ old('fullname') }}" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3" for="">性別<span>※</span></label>
        <div class="col-sm-1">
            <label class="" for="radio2a">
                <input class="" type="radio" name="gender" value="1" @if(old('gender')) checked @endif checked> 男性
            </label>
        </div>
        <div class="col-sm-1">
            <label class="" for="radio2b">
                <input class="" type="radio" name="gender" value="2" @if(old('gender')) checked @endif> 女性
            </label>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3" for="ages">年代（編集中）<span>※</span></label>
        <select name="age_id" id="ages">
            <option selected disabled>選択してください</option>
            @foreach ($ages as $age)
                {{-- <option value="{{ $age->id }}">{{ $age->age }}</option> --}}
                <option value="{{ $age->id }}" @if(old('age_id')==$age->id) selected @endif>{{ $age->age }}</option>

                {{-- valueで送る内容を指定、option内に表示する内容を指定した。 --}}
            @endforeach
        </select>
    </div>
    <div class="row">
        <label class="col-sm-3">メールアドレス<span>※</span></label>
        <input class="col-sm-3" name="email" type="email" value="{{ old('email') }}" placeholder="入力してください">
    </div>
    <div class="row">
        <label class="col-sm-3">メール送信可否</label>
        <div class="col-sm-3">
            <p>登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
            {{-- <input name="is_send_email" value="0" type="hidden">
            <input name="is_send_email" value="1" type="checkbox" class="col-sm-1" checked> --}}
            <input name="is_send_email" value="1" type="checkbox" class="col-sm-1" {!! empty(old()) || old('is_send_email') == 1 ? 'checked="checked"' : '' !!}>
            <p>送信を許可します</p>
        </div>
    </div>
    <div class="row">
        <label class="col-sm-3">ご意見</label>
        <textarea name="feedback" id="" value="" cols="30" rows="5" placeholder="入力してください">{{ old('feedback') }}</textarea>
    </div>

    <div class="row">
        <div class="col-sm-3"></div>
        <input class="col-sm-2" type="submit" value="確認">
    </div>
</form>
</div>
@endsection
