@extends('layouts.app')
@section('content')
@include('components.header-2')
<div class="full-row overlay-1 bg-img-5" id="page-banner">
    <div class="container">
        <div class="row py-80">
        </div>
    </div>
</div>
<section class="full-row about-us-2 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-title-area mb-4 mt-5">
                    <h2 class="title">Apa itu YourSpace?</h2>
                </div>
                <p>YourSpace adalah salah satu tempat terbaik bagi Anda untuk berkumpul dan 
                mengumpulkan teman-teman YourSpace sebagai layanan persewaan ruang rapat, 
                tempat acara, dan ruang kerja. Keuntungan pertama yang bisa Anda dapatkan 
                dengan menggunakan jasa sewa kamar adalah Anda bisa menemukan tempat pilihan
                 dengan lebih cepat. dan efektif. Kami juga menyediakan banyak sekali ruangan
                  seperti meeting room, event room dan private room lainnya dengan harga yang
                   cukup murah dan ekonomis. Kami akan selalu memastikan kamar atau tempat 
                   acara Anda bersih dan bebas kotoran selama kamar tersebut masih dalam sewa
                    Anda. Kami selalu berusaha memberikan pelayanan prima demi kenyamanan dan
                     kepuasan Anda. Layanan mulai dari pekerja yang ramah, website yang bisa 
                     Anda akses dengan mudah, hingga bisa memenuhi segala kebutuhan Anda.</p>
            </div>
            <div class="col-lg-4">
                <div class="bg-secondery px-4 py-5 text-block-2" style="background-color: #0943a0">
                    <h4 class="title-area-2 text-white mb-4"> <small class="text-primary">We are here</small>Start
                        Your Booking </h4>
                    <p>Kamu dapat langsung melakukan booking ruangan pada tombol di bawah ini! </p>
                    <a href="/" class="btn btn-default-bg w-100" style="">Booking Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection