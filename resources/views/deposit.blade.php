<x-layout>
          <!-- Subnav -->
          <div>
            <div class="text-white px-3 py-5 border-white border rounded-3">
              <h3>လက်ကျန်ငွေ:<sub class="ms-2">0.00 ကျပ်</sub></h3>
            </div>
            <div class="text-white my-4">
              <h4 class="text-center">ငွေဖြည့်မည်</h4>
            </div>
            <div class="">
              <ul class="list-group w-100">
                <li class="list-group-item bg-secondary">
                  <a href="/2d-result" class="text-center text-white text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/kpay.png') }}" class="img-fluid rounded-3" alt="" style="width: 60px;">
                    <span class="fs-4 ms-2 fw-bold">KBZ Pay</span>
                  </a>
                </li>
                <li class="list-group-item bg-secondary">
                  <a href="/2d-winner-page" class="text-center text-white text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/wpay.png') }}" class="img-fluid rounded-3" alt="" style="width: 60px;">
                    <span class="fs-4 ms-2 fw-bold">Wave Pay</span>
                  </a>
                </li>
                <li class="list-group-item bg-secondary">
                  <a href="" class="text-center text-white text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/cbpay.png') }}" class="img-fluid rounded-3" alt="" style="width: 60px;">
                    <span class="fs-4 ms-2 fw-bold">CB Pay</span>
                  </a>
                </li>
                <li class="list-group-item bg-secondary">
                  <a href="" class="text-center text-white text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/ayapay.png') }}" class="img-fluid rounded-3" alt="" style="width: 60px;">
                    <span class="fs-4 ms-2 fw-bold">AYA Pay</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
 </x-layout>