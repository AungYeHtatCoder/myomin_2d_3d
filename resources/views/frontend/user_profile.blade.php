@extends('frontend.layouts.layout')
@section('content')

          <!-- profile -->
          <div class="d-flex flex-column justify-content-center align-items-center text-white py-4 mb-5">
            <div class="w-25 h-25 rounded-circle overflow-hidden">
              @if (Auth::user()->profile)
              <img src="{{ Auth::user()->profile }}" class="img-fluid" alt="">
              @endif
              <img src="{{ asset('./assets/profile.png') }}" class="img-fluid" alt="">
            </div>
            <h4 class="mt-2">{{ Auth::user()->name }}</h4>
          </div>
          <!-- profile -->
          <div class="mb-5">
            <ul class="list-group z-1">
              <li
                class="list-group-item bg-transparent d-flex flex-row justify-content-start align-content-start text-white my-1">
                <img src="{{ asset('./assets/profile.svg') }}" class="img-fluid" alt="">
                <div class="d-flex flex-column ms-3 mt-2">
                  <span>Name</span>
                  <span>{{ Auth::user()->name }}</span>
                </div>
              </li>
              <li
                class="list-group-item bg-transparent d-flex flex-row justify-content-start align-content-start text-white my-1">
                <img src="{{ asset('./assets/mail.svg') }}" class="img-fluid" alt="">
                <div class="d-flex flex-column ms-3 mt-2">
                  <span>Email</span>
                  <span>{{ Auth::user()->email }}</span>
                </div>
              </li>
              <li
                class="list-group-item bg-transparent d-flex flex-row justify-content-start align-content-start text-white my-1">
                <img src="{{ asset('./assets/phone.svg') }}" class="img-fluid" alt="">
                <div class="d-flex flex-column ms-3 mt-2">
                  <span>Phone</span>
                  <span>{{ Auth::user()->phone }}</span>
                </div>
              </li>
            </ul>
          </div>
@endsection