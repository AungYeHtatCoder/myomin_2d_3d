@extends('frontend.layouts.layout')
@section('content')
          <!-- Subnav -->
          <div>
            <h4 class="text-center text-white my-3">လျှို့ဝှတ်နံပါတ် ပြောင်းရန်</h4>
            <div class="my-3">
              <form action="{{ route('user.password.change.form.submit') }}" method="POST">
                @csrf
                @method('POST')
                <div class="my-2">
                  <input class="form-control" type="password" name="old_password" placeholder="လျှို့ဝှတ်နံပါတ် အဟောင်း">
                </div>
                <div class="my-2">
                  <input class="form-control" type="password" name="new_password" placeholder="လျှို့ဝှတ်နံပါတ် အသစ်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="password" name="password_confirmation" placeholder="အတည်ပြု လျှို့ဝှတ်နံပါတ်">
                </div>
                <div class="text-center my-2 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">အကောင့်လျှောက်မည်</button>
                  <a href="/login" class="text-white">အကောင့် ဝင်ရန်</a>
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