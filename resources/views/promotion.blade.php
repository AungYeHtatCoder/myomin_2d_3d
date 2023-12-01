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
          <!-- content  -->
          <div>
            <div class="d-flex flex-column mt-4">
              <div class="d-flex align-items-center w-100 px-1 py-2 my-2 border">
                <div class="w-75">
                  <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-23.jpg') }}" class="img-fluid rounded-2" alt="">
                </div>
                <div class="ms-2 text-white">
                  <h5>
                    This is the promotion title
                  </h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus perferendis illum in facilis
                    possimus harum veritatis libero fugiat, commodi soluta!</p>
                </div>
              </div>
              <div class="d-flex align-items-center w-100 px-1 py-2 my-2 border">
                <div class="w-75">
                  <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-20.jpg') }}" class="img-fluid rounded-2" alt="">
                </div>
                <div class="ms-2 text-white">
                  <h5>
                    This is the promotion title
                  </h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus perferendis illum in facilis
                    possimus harum veritatis libero fugiat, commodi soluta!</p>
                </div>
              </div>
              <div class="d-flex align-items-center w-100 px-1 py-2 my-2 border">
                <div class="w-75">
                  <img src="{{ asset('./assets/img/photo_2023-11-24_09-45-14.jpg') }}" class="img-fluid rounded-2" alt="">
                </div>
                <div class="ms-2 text-white">
                  <h5>
                    This is the promotion title
                  </h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus perferendis illum in facilis
                    possimus harum veritatis libero fugiat, commodi soluta!</p>
                </div>
              </div>
              <div class="d-flex align-items-center w-100 px-1 py-2 my-2 border">
                <div class="w-75">
                  <img src="{{ asset('./assets/img/photo_2023-11-24_09-44-54.jpg') }}" class="img-fluid rounded-2" alt="">
                </div>
                <div class="ms-2 text-white">
                  <h5>
                    This is the promotion title
                  </h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus perferendis illum in facilis
                    possimus harum veritatis libero fugiat, commodi soluta!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- footer  -->
        <x-footer />
        <!-- footer  -->
      </div>
    </div>
  </div>

</x-layout>