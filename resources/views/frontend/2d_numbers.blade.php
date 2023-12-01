@extends('frontend.layouts.layout')
@section('content')
  <div class="container overflow-hidden">
    <div class="col-lg-6 col-md-10 mx-auto">
      <div class="row g-md-2">
        <!-- nav bar  -->
        <x-navbar />
        <!-- nav bar  -->
        <!-- content  -->
        <div class="main-content position-relative overflow-hidden z-3">
          <!-- side bar  -->
          <x-sidebar />
          <!-- side bar  -->

          <!-- Winner result -->
          <div class="row my-4" style="border: 1px solid gray;">
            <div class="col-12 text-center text-white">
              <h1 class="text-warning" style="font-size: 90px;" id="live_2d">07</h1>
              <p>Updated: <span id="live_updated_time">10-0-2023 4:30:00PM</span></p>
            </div>
          </div>
          <!-- 2D list  -->
          <!-- <div class="row" style="margin-bottom: 80px;" id="result"></div> -->
          <!-- 2D Numbers lists -->
          <x-2D_numbers />
          <!-- Quick pickup numbers  -->
          <div class="position-fixed mx-auto">
            <div class=" quick_numbers">
              <button type="button" class="btn bg-primary text-white border-0 z-0"
                onclick="quickPickupNumbers()">အမြန်ရွေးမည်</button>
            </div>
            <!-- <div class="selected_numbers">
                                                              <button type="button" class="btn bg-primary text-white border-0 z-0"
                                                                onclick="selectedNumbers()">ထိုးဂဏန်းများ</button>
                                    </div> -->
                                    <div class="selected_numbers">
                                      <a href="../pages/2d_selected_numbers.html" class="btn bg-primary text-white border-0 z-0">ထိုးဂဏန်းများ</a>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-md-8 m-auto quick_pickup_numbers p-3 rounded-3 mb-5 overflow-y-scroll">
            <button type="button" onclick="closeQuickPickupForm()" class="quick-nubers-pickup-form-close-btn">&times;</button>
            <div class="mt-2">
              <form class="p-3">
                <div class="mb-3">
                  <div>
                    <h6>ဘရိတ်</h6>
                  </div>
                  <div class="d-flex flex-row flex-wrap justify-content-center">
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">0/10</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">1/11</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">2/12</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">3/13</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">4/14</button>
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">5/15</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">6/16</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">7/17</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">8/18</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">9/19</button>
                  </div>
                </div>
                <div class="mb-3">
                  <div>
                    <h5>Single or Double Size</h5>
                  </div>
                  <div class="d-flex flex-row flex-wrap justify-content-center">
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">ညီအကို</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">ကြီး</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">ငယ်</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">မ</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">စုံ</button>
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">စုံစုံ</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">စုံမ</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">မစုံ</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">မမ</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">အပူး</button>
                  </div>
                </div>
                <div class="mb-3">
                  <div>
                    <h6>ပတ်တီး</h6>
                  </div>
                  <div class="d-flex flex-row flex-wrap justify-content-center">
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">1</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">2</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">3</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">4</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">5</button>
                    <button type="button" class="col-2 me-1 my-1 btn btn-secondary">6</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">7</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">8</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">9</button>
                    <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">10</button>
                  </div>
                  </div>
                  <div class="mb-3">
                    <div>
                      <h6>ထိပ်</h6>
                    </div>
                    <div class="d-flex flex-row flex-wrap justify-content-center">
                      <button type="button" class="col-2 me-1 my-1 btn btn-secondary">1</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">2</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">3</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">4</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">5</button>
                      <button type="button" class="col-2 me-1 my-1 btn btn-secondary">6</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">7</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">8</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">9</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">10</button>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div>
                      <h6>နောက်</h6>
                    </div>
                    <div class="d-flex flex-row flex-wrap justify-content-center">
                      <button type="button" class="col-2 me-1 my-1 btn btn-secondary">1</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">2</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">3</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">4</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">5</button>
                      <button type="button" class="col-2 me-1 my-1 btn btn-secondary">6</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">7</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">8</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">9</button>
                      <button type="button" class="col-2 mx-1 my-1 btn btn-secondary">10</button>
                    </div>
                  </div>
                  <div class="mb-3">
                    <div>
                      <h6>နက္ခတ်ပါဝါ</h6>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                      <button type="button" class="col-10 me-1 my-1 btn btn-secondary">မြန်မာနက္ခတ် 07, 18, 24, 35,
                        69</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">မြန်မာနက္ခတ် R 70, 81, 42, 53,
                        96</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ပါဝါ 05, 16, 27, 38, 49</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ပါဝါ R 50, 61, 72, 83, 94</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ထိုင်းနက္ခတ် 07, 19, 23, 48,
                        56</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ထိုင်းနက္ခတ် R 70, 19, 23, 48,
                        56</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ထိုင်းပါဝါ 09, 13, 23, 48,
                        56</button>
                      <button type="button" class="col-10 mx-1 my-1 btn btn-secondary">ထိုင်းပါဝါ R 90, 31, 23, 48,
                        56</button>
                    </div>
                  </div>
                  </form>
                  </div>
          </div>
          <!-- Quick pickup numbers  -->
          <!-- Selected Numbers  -->
          <div class="col-12 col-lg-6 col-md-8 m-auto form-container p-3 rounded-3">
            <button type="button" onclick="closeForm()" class="close-btn">&times;</button>
            <div class="mt-2">
              <form class="p-3">
                <div class="d-flex justify-content-between mt-3">
                  <div>
                    <label for="selected_numbers">ထိုးဂဏန်းများ</label>
                    <input type="text" class="form-control" name="" value="12,42,02,74" id="selected_numbers">
                  </div>
                  <div>
                    <label for="cash_amount">ထိုးငွေပမာဏ</label>
                    <input type="text" class="form-control" name="" value="400" id="cash_amount">
                  </div>
                  </div>
                <div class="my-2 d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary mx-3 my-4">ပယ်ဖျက်မည်</button>
                  <button type="submit" class="btn btn-danger mx-3 my-4">ငွေချေမည်</button>
                </div>
              </form>
            </div>
          </div>
          <!-- selected numbers  -->

        </div>
        <!-- content  -->
        <!-- footer  -->
        <x-footer />
        <!-- footer  -->
      </div>
      <!-- Modal with id="playtwod" -->
      <div class="modal fade" id="playtwod" tabindex="-1" aria-labelledby="playtwodLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-dark" id="playtwodLabel">ထိုးမည့်အချိန် (section) ကိုရွေးပါ</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="playTime ">
                <a href="#" class="btn btn-outline-danger w-100">09:30 AM</a>
              </div>
              <div class="playTime ">
                <a href="#" class="btn btn-outline-danger w-100">10:30 AM</a>
              </div>
              <div class="playTime ">
                <a href="#" class="btn btn-outline-danger w-100">12:30 AM</a>
              </div>
              <div class="playTime ">
                <a href="#" class="btn btn-outline-danger w-100">02:00 AM</a>
              </div>
              <div class="playTime ">
                <a href="#" class="btn btn-outline-danger w-100">04:30 PM</a>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-purple bg-purple text-white w-100">ထိုးမည်</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection