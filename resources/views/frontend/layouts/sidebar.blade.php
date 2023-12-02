<div class="sidebar">
    <div class="p-2">
        <div class="list-group-item bg-transparent border-0 d-flex justify-content-center mb-2">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="w-25 rounded-circle">
                    <img src="{{ asset('./assets/img/profile.jpg') }}" class="img-fluid rounded-circle" alt="">
                </div>
                <span class="text-white">Aung Myint Thu</span>
            </div>
        </div>
        <ul class="list-group sidebar-list">
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/home.svg') }}" class="img-fluid" alt="">
                    ပင်မစာမျက်နှာ
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/winners" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/winners.svg') }}" class="img-fluid" alt="">
                    ကံထူးရှင်များ
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/2d-result" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/numbers.svg') }}" class="img-fluid" alt="">
                    ထီထွက်ဂဏန်းများ
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/2d-history" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/numbers.svg') }}" class="img-fluid" alt="">
                    ထီထိုးမှတ်တမ်း
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="#!" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/account_wallet.svg') }}" class="img-fluid" alt="">
                    ဘဏ်အကောင့်များ
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/welcome-code" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/coupon.svg') }}" class="img-fluid" alt="">
                    မိတ်ဆက်ကုဒ်
                </a>
            </li>
            @auth
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/change-password" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/key.svg') }}" class="img-fluid" alt="">
                    လျှို့ဝှတ်နံပါတ်ပြောင်းရန်
                </a>
            </li>
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/logout.svg') }}" class="img-fluid" alt="">
                    ထွက်မယ်
                </button>
                </form>
            </li>
            @else
            <li class="list-group-item mb-1 border-0 bg-transparent sidebar-list-item">
                <a href="/login" class="text-decoration-none text-white">
                    <img src="{{ asset('./assets/img/profile.svg') }}" class="img-fluid" alt="">
                    အကောင့်ဝင်ရန်
                </a>
            </li>
            @endif
        </ul>
    </div>
</div>
