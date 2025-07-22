@extends('frontend.layout.app')
@section('content')
@section('title', config('app.name') . ' | ' . $page_title)
<div class="breadchrumb">
    <div class="container-fluid">
        <h4 class="title">Terms & Conditions</h4>
        <p class="sub-title">Transform Into the Best Version of Yourself!</p>
    </div>
</div>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h4 class="title mb-0">Terms and conditions</span></h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-12">
                <h6 class="text-theme">1. Introduction</h6>
                <p class="mb-3"> Welcome to our app and website providing information about near by shops in various
                    cities. By using our services, you agree to comply with and be bound by the following terms and
                    conditions. Please read them carefully.</p>
                <h6 class="text-theme mt-3">2. Accuracy of Information</h6>
                <ul class="list-unstyled mb-3 list-icon">
                    <li><i class="fa fa-angle-right"></i> The information provided in this app and website is for
                        general informational purposes only.</li>
                    <li><i class="fa fa-angle-right"></i> While we strive to provide accurate and up-to-date
                        information, we cannot guarantee the accuracy, completeness, or reliability of the content.
                        Information may be subject to change without notice.</li>
                    <li><i class="fa fa-angle-right"></i> Users are advised to verify the information with the
                        respective near by shops or authorities for accuracy and any updates.</li>
                </ul>
                <h6 class="text-theme mt-3"> 3. Manual Verification</h6>
                <ul class="list-unstyled mb-3 list-icon">
                    <li><i class="fa fa-angle-right"></i> The data presented in this app and website is subject to
                        manual verification.</li>
                    <li><i class="fa fa-angle-right"></i> We rely on various sources to collect and update information,
                        but we cannot guarantee its authenticity or accuracy.</li>
                </ul>
                <h6 class="text-theme mt-3">5. Liability</h6>
                <ul class="list-unstyled mb-3 list-icon">
                    <li> <i class="fa fa-angle-right"></i>We shall not be held responsible for any loss, damage, or
                        inconvenience arising from the use of information provided on this platform.
                    </li>
                    <li> <i class="fa fa-angle-right"></i> Users are encouraged to use their discretion and consult
                        professionals for specific medical advice or services.</li>
                </ul>
                <h6 class="text-theme mt-3">6. Changes to Terms and Conditions</h6>
                <p class="mb-3"> We reserve the right to modify or replace these terms and conditions at any time. Any
                    changes will be effective immediately upon posting.</p>
                <p>By using this app and website, you acknowledge that you have read and understood these terms and
                    conditions and agree to be bound by them.</p>
            </div>
        </div>
    </div>
</section>
@endsection
