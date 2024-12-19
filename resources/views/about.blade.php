@extends('layouts.main')

@section('body')

<link rel="stylesheet" href="css/about.css">

<section class="banner">
    <h2>#KnowUs</h2>
</section>

<div class="tabs-background">
    <div class="container"> 
        <div class="tabs-content">
            <div class="tabs-title text-center">
                <h4>About <b>Galka</b><span>Rent</span></h4>
            </div>
            <div class="tabs-about">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Galkarent Adalah sebuah website peminjaman motor secara online terbaik di Bali, yang didirikan pada tahun 2022 dan memeliki banyak post motor di seputar bali. Galkarent sendiri merupakan instansi atau perusahaan penyewaan motor yang terjamin aman dan terpercaya 
                            karena telah mendapat ijin perusahaan(IMB) dan juga Tanda Daftar Perushaan (TDP) sesuai Pasal 1 huruf a Undang-Undang Nomor 3 Tahun 1982 tentang Wajib Daftar Perusahaan (“UU 3/1982”).
                            Galkarent memiliki visi dan misi untuk sentiasa melayani setiap pelanggan dengan senyuman dan memberikan servis terbaik kepada setiap pelanggan dan memberikan penggalaman yang mengesankan bersama Galkarent
                        </p>
                        <p style="margin-left: 100px">GALKARENT NYAMAN MOTORNYA, NYAMAN DOMPETNYA</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Galkarent is the best online motorbike loan site in Bali, which was founded in 2022 and has many motorbike posts around Bali. Galkarent itself is an agency or motorbike rental company that is guaranteed to be safe and reliable
                            because it has obtained a company license (IMB) and also a Company Registration Certificate (TDP) in accordance with Article 1 letter a of Law Number 3 of 1982 concerning Mandatory Company Registration ("Law 3/1982").
                            Galkarent has a vision and mission to always serve every customer with a smile and provide the best service to every customer and provide an impressive experience with Galkarent
                        </p>
                        <br>
                        <p style="margin-left: 70px">GALKARENT COMFORTABLE MOTORBIKE, COMFORTABLE IN YOUR WALLET</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


{{-- Admin::create([
    'information_id' => 2,
    'skill_id' => 2,
    'education_id' => 2,
    'name' => 'Rama Putra',
    'username' => 'ramaputra',
    'password' => 'wintarap2003',
    'status' => 'Programmer',
    'country' => 'Indonesia',
    'image' => 'RamaPutra.png',
]);

Skill::create([
    'admin_id' => 2,
    'skill' => 'Laravel',
]);

Skill::create([
    'admin_id' => 2,
    'skill' => 'PHP',
]);

Skill::create([
    'admin_id' => 2,
    'skill' => 'Angular JS',
]);

Education::create([
    'admin_id' => 1,
    'education' => 'SMK N 1 Denpasar'
]); --}}

{{-- Information::create([
    'address' => 'Jl. kerobokan',
    'telpon' => '085829158194',
    'email' => 'ramaputra@gmail.com',
    'instagram' => '_ramap',
    'birthday' => '00 Desember 2003',
    'gender' => 'Male'
]); --}}