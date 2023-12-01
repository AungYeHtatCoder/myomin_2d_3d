@extends('frontend.layouts.layout')
@section('content')
          <!-- Subnav -->
          <div>
            <div class="text-white my-4">
              <h4 class="text-center">အနိုင်ရသူများ</h4>
            </div>
            <div class="d-flex justify-content-between align-items-center my-5">
              <div class="col-4 d-flex flex-column justify-content-between align-items-center text-white">
                <div class="w-50 mb-1">
                  <img src="{{ asset('./assets/profile.png') }}" class="img-fluid rounded-2" alt="">
                </div>
                <h5>Myat Su</h5>
              </div>
              <div class="col-4 d-flex flex-column justify-content-between align-items-center text-white">
                <div class="w-50 mb-1">
                  <img src="{{ asset('./assets/profile.png') }}" class="img-fluid rounded-2" alt="">
                </div>
                <h5>Aung Myint</h5>
              </div>
              <div class="col-4 d-flex flex-column justify-content-between align-items-center text-white">
                <div class="w-50 mb-1">
                  <img src="{{ asset('./assets/profile.png') }}" class="img-fluid rounded-2" alt="">
                </div>
                <h5>Khin Su Wai</h5>
              </div>
            </div>
            <div class="my-5">
              <table class="table table-warning table-striped-columns">
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Win</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Khine Maung</td>
                    <td>0968*******</td>
                    <td>20000ks</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Su Su</td>
                    <td>0968*******</td>
                    <td>18000ks</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Hla Aye</td>
                    <td>0968*******</td>
                    <td>18000ks</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Aung Thura Soe</td>
                    <td>0968*******</td>
                    <td>18000ks</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Aung Aung</td>
                    <td>0968*******</td>
                    <td>12000ks</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Thein Lwin</td>
                    <td>0968*******</td>
                    <td>8000ks</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Aung Aung</td>
                    <td>0968*******</td>
                    <td>18000ks</td>
                  </tr>
              </table>
            </div>
          </div>
@endsection