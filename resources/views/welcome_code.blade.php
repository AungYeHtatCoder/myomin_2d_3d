<x-layout>
  <div class="container overflow-hidden">
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="row g-md-2">
        <x-navbar />
        <div class="main-content position-relative overflow-hidden z-3">
          <!-- side bar  -->
          <x-sidebar />
          <!-- side bar  -->

          <!-- Subnav -->
          <div class="my-5">
            <h4 class="text-center text-white my-3">မိတ်ဆက် ကုဒ်ကို ရယူရန် Agent ဖြင့်ဆက်သွယ်ပါ။</h4>
            <div class="mt-5">
              <form action="">
                <div class="my-2">
                  <input class="form-control" type="text" name="" placeholder="မိတ်ဆက်ကုဒ်">
                </div>
                <div class="text-center mb-5 d-flex justify-content-between">
                  <button type="submit" class="btn btn-primary">အသုံးပြုမည်။</button>
                  <a href="/register" class="text-white">အကောင့်ဖွင့်ရန်</a>
                </div>
              </form>
            </div>
            <div class="text-white my-5">
              <div>
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
            <span class="text-warning">* အကောင့်လုံခြုံမူရှိစေရန် သင်၏ လျှို့ဝှတ်နံပါတ်ကို မည်သူ့ကိုမျှမပြောပါနဲ့။
              *</span>
          </div>
        </div>
        <!-- footer  -->
        <x-footer />
        <!-- footer  -->
      </div>
    </div>
  </div>

  </x-layout>