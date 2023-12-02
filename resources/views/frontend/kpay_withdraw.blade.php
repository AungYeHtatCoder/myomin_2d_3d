@extends('frontend.layouts.layout')
@section('content')
          <!-- Subnav -->
          <div>
            <h4 class="text-center text-white my-3">ငွေထုတ်ရန် အချက်လက်များကို ဖြည့်ပါ။</h4>
            <div class="my-3">
              <form action="{{ route('user.register.form.submit') }}" method="POST">
                @csrf
                @method('POST')
                <div class="my-2">
                  <input class="form-control" type="number" name="" placeholder="ငွေလက်ခံ ဖုန်းနံပါတ်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="number" name="" placeholder="သင်၏ Kpay ဖုန်းနံပါတ်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="number" name="" placeholder="ငွေထုတ်ယူမည့် ပမာဏ">
                </div>
                <div class="d-flex justify-content-between align-items-center my-4">
                  <button type="" class="btn btn-secondary">1,000</button>
                  <button type="" class="btn btn-secondary">5,000</button>
                  <button type="" class="btn btn-secondary">10,000</button>
                  <button type="" class="btn btn-secondary">100,000</button>
                  <button type="" class="btn btn-secondary">200,000</button>
                  <button type="" class="btn btn-secondary">500,000</button>
                </div>
                <div class="text-center my-2 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">ငွေဖြည့်မည်</button>
                </div>
              </form>
            </div>
            <div class="text-white my-3">
              <div class="my-4">
                <div class="text-danger my-3">
                  ငွေသွင်း၊ ငွေထုတ်အဆင်မပြေပါက အောက်ပါ Platform များမှတစ်ဆင့် တိုက်ရိုက်ဆက်သွယ် စုံးစမ်းနိုင်ပါသည်။
                </div>
                <a class="btn btn-sm btn-secondary border-0 my-2 d-flex justify-content-center">
                  <div class="w-25 py-2">
                    <img src="{{ asset('./assets/viber.png') }}" class="img-fluid rounded-top w-25 border-0" alt="">&nbsp;
                    <span>092151151</span>
                  </div>
                </a>
                <a class="btn btn-sm btn-secondary border-0 my-2 d-flex justify-content-center">
                  <div class="w-25 py-2">
                    <img src="{{ asset('./assets/telegram.png') }}" class="img-fluid rounded-top w-25 border-0" alt="">&nbsp;
                    <span>092151151</span>
                  </div>
                </a>
              </div>
            </div>
            <span class="text-warning">* အကောင့်လုံခြုံမူရှိစေရန် သင်၏ လျှို့ဝှတ်နံပါတ်ကို မည်သူ့ကိုမျှမပြောပါနဲ့။
              *</span>
          </div>
@endsection