@extends('frontend.layouts.layout')
@section('content')
          <!-- Subnav -->
          <div>
            <h4 class="text-center text-white my-3">လျှို့ဝှတ်နံပါတ်ရှာရန်</h4>
            <div class="my-3">
              <form action="{{ route('user.forget.password.form.submit') }}" method="POST">
                @csrf
                <div class="my-2">
                  <input class="form-control" type="text" name="credential" placeholder="ဖုန်းနံပါတ် (သို့) အီးမေးလ်">
                </div>
                <div class="text-center my-2 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">အကောင့် ရှာမည်</button>
                  <div>
                    <a href="/login" class="btn btn-secondary text-white">အကောင့်ဝင်မည်</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="text-white my-3">
              <div class="">
                <ul class="list-group">
                  <li class="list-group-item bg-transparent border-0 text-white z-0">
                    လျှို့ဝှတ်နံပါတ်
                  </li>
                  <li class="list-group-item bg-transparent border-0 text-white z-0">
                    ၁။ အကောင့်ဝင်ရန် အသုံးပြုရမည်။
                  </li>
                  <li class="list-group-item bg-transparent border-0 text-white z-0">
                    ၂။ ငွေထုတ်ယူရန် အသုံးပြုရမည်။
                  </li>
                </ul>
              </div>
            </div>
            <span class="text-warning">* အကောင့်လုံခြုံမူရှိစေရန် သင်၏ လျှို့ဝှတ်နံပါတ်ကို မည်သူ့ကိုမျှမပြောပါနဲ့။
              *</span>
          </div>
@endsection