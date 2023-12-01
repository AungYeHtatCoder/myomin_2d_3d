<x-layout>
  <div class="container overflow-hidden">
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="row g-md-2">
        {{-- nav bar  --}}
        <x-navbar />
        {{-- nav bar  --}}
        <div class="main-content position-relative overflow-hidden z-3">
          <!-- side bar  -->
          <x-sidebar />
          <!-- side bar  -->

          <!-- profile -->
          <div class="d-flex flex-column justify-content-center align-items-center text-white py-4 mb-5">
            <div class="w-25 h-25 rounded-circle overflow-hidden">
              <img src="{{ asset('./assets/img/profile.jpg') }}" class="img-fluid" alt="">
            </div>
            <h4 class="mt-2">Aung Myint Thu</h4>
          </div>
          <!-- profile -->
          <div class="mb-5">
            <ul class="list-group z-1">
              <li
                class="list-group-item bg-transparent d-flex flex-row justify-content-start align-content-start text-white my-1">
                <img src="{{ asset('./assets/img/profile.svg') }}" class="img-fluid" alt="">
                <div class="d-flex flex-column ms-3 mt-2">
                  <span>Name</span>
                  <span>Aung Myint Thu</span>
                </div>
              </li>
              <li
                class="list-group-item bg-transparent d-flex flex-row justify-content-start align-content-start text-white my-1">
                <img src="{{ asset('./assets/img/phone.svg') }}" class="img-fluid" alt="">
                <div class="d-flex flex-column ms-3 mt-2">
                  <span>Phone</span>
                  <span>+09 79121120</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- footer  -->
        <x-footer />
        <!-- footer  -->
      </div>
    </div>
  </div>

  </x-layout>