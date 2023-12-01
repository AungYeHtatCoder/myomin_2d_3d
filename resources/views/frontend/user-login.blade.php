@extends('frontend.layouts.layout')
@section('content')
          <!-- Subnav -->
          <div class="d-flex flex-column justify-content-between">
            <h4 class="text-center text-white my-3">အကောင့်ဝင်ရန်</h4>
            <div class="my-3">
              <form action="{{ route('user.login.form.submit') }}" method="POST">
                @csrf
                <div class="my-2">
                  <input class="form-control" type="text" name="credential" placeholder="ဖုန်းနံပါတ် (သို့မဟုတ်) အီးမေးလ်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="password" name="password" placeholder="လျှို့ဝှတ်နံပါတ်">
                </div>
                <div class="text-center my-3 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">ပြောင်းမည်</button>
                  <a href="/register" class="btn btn-secondary text-white">အကောင့်ဖွင့်မည်</a>
                  <a href="/forget-password" class="text-white">လျှို့ဝှတ်နံပါတ် မေ့နေပါသလား?</a>
                </div>
              </form>
            </div>
            <div class="text-white my-3">
              <div class="">
                <div class="my-3">
                  <div class="bg-transparent border-0 text-white my-3">
                    လျှို့ဝှတ်နံပါတ်
                  </div>
                  <div class="bg-transparent border-0 text-white my-3">
                    ၁။ အကောင့်ဝင်ရန် အသုံးပြုရမည်။
                  </div>
                  <div class="bg-transparent border-0 text-white my-3">
                    ၂။ ငွေထုတ်ယူရန် အသုံးပြုရမည်။
                  </div>
                  </div>
              </div>
            </div>
            <span class="text-warning mb-5">* အကောင့်လုံခြုံမူရှိစေရန် သင်၏ လျှို့ဝှတ်နံပါတ်ကို မည်သူ့ကိုမျှမပြောပါနဲ့။
              *</span>
          </div>
   @endsection