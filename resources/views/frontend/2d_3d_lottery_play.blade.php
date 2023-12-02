@extends('frontend.layouts.layout')
@section('content')

          <!-- Subnav -->
          <div class="w-100 d-flex justify-content-around text-white shadow rounded-4 py-4 mb-4">
            <a href="/2d-history" class="text-center text-white text-decoration-none text-white">
              <img src="{{ asset('./assets/img/history.svg') }}" class="img-fluid" alt="">
              <p class="mb-0">မှတ်တမ်း</p>
            </a>
            <a href="/2d-result" class="text-center text-white text-decoration-none text-white">
              <img src="{{ asset('./assets/img/results.svg') }}" class="img-fluid" alt="">
              <p class="mb-0">ရလဒ်</p>
            </a>
            <a href="/2d-winner-page" class="text-center text-white text-decoration-none text-white">
              <img src="{{ asset('./assets/img/winners.svg') }}" class="img-fluid" alt="">
              <p class="mb-0">ကံထူးရှင်များ</p>
            </a>
          </div>
          <!-- Winner result -->
          <div class="row my-4">
            <div class="col-12 text-center text-white">
              <h1 class="text-warning" style=" font-size: 90px;" id="live_2d">00</h1>
              <p>Updated: <span id="live_updated_time">10-0-2023 4:30:00PM</span></p>
            </div>
            <div class="col-12 text-center">
              <a href="/2d-numbers" class="btn btn-secondary text-white">ထိုးမည်</a>
            </div>
          </div>
          <!-- 2D lists -->
          <div class="row" style="margin-bottom: 80px;" id="result"></div>
        </div>
@endsection