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
          <div>
            <h4 class="text-center text-white my-3">အကောင့်ဖွင့်ရန်</h4>
            <div class="my-3">
              <form action="">
                <div class="my-2">
                  <input class="form-control" type="text" name="" placeholder="သင့်နာမည်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="text" name="" placeholder="အီးမေးလ် လိပ်စာ">
                </div>
                <div class="my-2">
                  <input class="form-control" type="text" name="" placeholder="ဖုန်းနံပါတ်">
                </div>
                <div class="my-2">
                  <input class="form-control" type="text" name="" placeholder="လျှို့ဝှတ်နံပါတ်">
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
        </div>
        <!-- footer  -->
        <x-footer />
        <!-- footer  -->
      </div>
    </div>
  </div>

</x-layout>