@extends('layouts.app')

@section('content')
    <div class="ui container">
        <div class="ui segment">

            <form class="ui form" method="POST" action={{ url('/post/email') }}>
                @csrf
                <div class="ui field">
                    <label>email</label>
                    <input type="text" name="email" autocomplete="off">
                    @if ($errors->has('email'))
                        <p style="color: red;">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </form>

            <form class="ui form" method="POST" action={{ url('/post/password') }}>
                @csrf
                <div class="ui field">
                    <label>password</label>
                    <input placeholder="半角英数字" type="text" name="password">
                    @if ($errors->has('password'))
                        <p style="color: red;">{{ $errors->first('password') }}</p>
                    @endif
                </div>
            </form>
        
            <form class="ui form" method="POST" action={{ url('/post/date') }}>
                @csrf
                <div class="ui field">
                    <label>date</label>
                    <input placeholder="Y-m-d" type="text" name="date">
                    @if ($errors->has('date'))
                        <p style="color: red;">{{ $errors->first('date') }}</p>
                    @endif
                </div>
            </form>

            {{-- <form class="ui form" method="POST" action={{ url('/post/url') }}>
                @csrf
                <div class="ui field">
                    <label>url</label>
                    <input type="text" name="url">
                    @if ($errors->has('url'))
                        <p style="color: red;">{{ $errors->first('url') }}</p>
                    @endif
                </div>
            </form> --}}

        </div>

        <div class="ui segment">

            <form style="height: 200px; position:relative" class="ui form" method="POST" action={{ url('/post/check') }}>
                @csrf
                <div class="ui field">
                    <label>gender</label>
                    <input type="radio" name="gender" value="man"><span style="margin-left: 10px;">男</span>
                    <input style="margin-left: 10px;" type="radio" name="gender" value="woman"><span style="margin-left: 10px;">女</span>
                    @if ($errors->has('gender'))
                        <p style="color: red;">{{ $errors->first('gender') }}</p>
                    @endif
                </div>

                <div class="ui field">
                    <label>select</label>
                    <select name="select">
                        <option value="">選択して下さい</option>
                        <option value="option1">オプション１</option>
                        <option value="option2">オプション２</option>
                    </select>
                    @if ($errors->has('select'))
                        <p style="color: red;">{{ $errors->first('select') }}</p>
                    @endif
                </div>

                <button style="position:absolute; bottom:10px; left: 10px;" class="ui primary button" type="submit">登録</button>
            </form>

        </div>
    </div>
@endsection