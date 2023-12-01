@extends('frontend.layouts.layout')
@section('content')
         <!-- Subnav -->
          <div class="w-100 shadow rounded-4">
            <div class="d-flex align-items-center my-3 p-3">
              <div>
                <img src="{{ asset('./assets/img/profile.svg') }}" class="img-fluid" alt="" style="width: 50px;">
              </div>
              <div class="d-flex flex-column text-white ms-3">
                <h5>{{ Auth::user()->name }}</h5>
                <span>လက်ကျန်ငွေ: &nbsp; <strong class="fs-3 text-warning">{{ Auth::user()->balance }}</strong> ကျပ်</span>
              </div>
            </div>
            <div class="d-flex justify-content-around py-4 mb-4">
              <a href="/deposit" class="text-center text-white text-decoration-none">
                <img src="{{ asset('./assets/img/arrow_down.svg') }}" class="img-fluid" alt="">
                <p class="mb-0">ငွေဖြည့်</p>
              </a>
              <a href="/deposite" class="text-center text-white text-decoration-none">
                <img src="{{ asset('./assets/img/arrow_up.svg') }}" class="img-fluid" alt="">
                <p class="mb-0">ငွေထုတ်</p>
              </a>
              <a href="" class="text-center text-white text-decoration-none">
                <img src="{{ asset('./assets/img/history.svg') }}" class="img-fluid" alt="">
                <p class="mb-0">မှတ်တမ်း</p>
              </a>
            </div>
          </div>
          <div class="text-white my-5">
            <h4 class="text-center">ငွေဖြည့်လိုပါက</h4>
            <div class="">
              <div class="list-group">
                <div class="bg-transparent border-0 text-white">
                  ၁။ "ငွေဖြည့်" ကိုနှိပ်ပါ။
                </div>
                <div class="bg-transparent border-0 text-white">
                  ၂။ KBZ Pay, Wave Pay, CB Pay နှင့် AYA Pay တို့မှ မိမိငွေဖြည့်မည့် ဘဏ်ကို ရွေးပါ။
                </div>
                <div class="bg-transparent border-0 text-white">
                  ၃။ သက်ဆိုင်ရာ Pay ဖြင့် ငွေသွင်းနိုင်သော အကောင့်များ ပေါ်လာပါလိမ့်မည်။
                </div>
                </div>
            </div>
          </div>
          <!-- Subnav  -->
          <div>
            <h5 class="text-white">ငွေဖြည့်သွင်းနိုင်သော ဘဏ်အကောင့်များ</h5>
            <div class="d-flex flex-column mt-4">
              <div class="w-100 border">
                <div class="d-flex align-items-center text-white w-50 p-1">
                  <img src="{{ asset('./assets/img/kpay.png') }}" class="img-fluid w-25 rounded-2" alt="">
                  <h4 class="ms-3">
                    K-pay
                  </h4>
                </div>
              </div>
              <div class="w-100 my-2 border">
                <div class="d-flex align-items-center text-white w-50 p-1">
                  <img src="{{ asset('./assets/img/wpay.png') }}" class="img-fluid w-25 rounded-2" alt="">
                  <h4 class="ms-3">
                    Wave Pay
                  </h4>
                </div>
              </div>
              <div class="w-100 my-2 border">
                <div class="d-flex align-items-center text-white w-50 p-1">
                  <img src="{{ asset('./assets/img/ayapay.png') }}" class="img-fluid w-25 rounded-2" alt="">
                  <h4 class="ms-3">
                    AYA Pay
                  </h4>
                </div>
              </div>
              <div class="w-100 my-2 border">
                <div class="d-flex align-items-center text-white w-50 p-1">
                  <img src="{{ asset('./assets/img/cbpay.png') }}" class="img-fluid w-25 rounded-2" alt="">
                  <h4 class="ms-3">
                    K-pay
                  </h4>
                </div>
              </div>
            </div>
          </div>
  </div>
@endsection