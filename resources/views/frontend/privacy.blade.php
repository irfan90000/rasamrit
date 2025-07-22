@extends('frontend.layout.app')
@section('content')
@section('title', config('app.name') . ' | ' . $page_title)
<div class="breadchrumb">
    <div class="container-fluid">
        <h4 class="title">Privacy Policy</h4>
        <p class="sub-title">Transform Into the Best Version of Yourself!</p>
    </div>
</div>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h4 class="title mb-0">Privacy policy</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-12">
                <p>This Privacy Policy outlines how we collect, use, and share your personal information when you
                    use our app and website for account management and query resolution.
                </p>
                <h6 class="text-theme">1. Information Collection and Use</h6>
                <p class="mb-3"> <strong>Registration and Login : </strong> When you register and log in to our
                    app, we collect your phone number for OTP-based authentication. This ensures the security of
                    your account.</p>
                <p class="mb-3"> <strong>Profile Information : </strong>We may collect the following information
                    to create and manage your account:.</p>
                <p>- City name</p>
                <p>- Name</p>
                <p>- Phone number</p>
                <p>- Date of Birth (DOB)</p>
                <p>- Gender</p>
                <p class="mb-3"> <strong>Optional Profile Picture : </strong>You have the option to upload a
                    profile picture, which is not mandatory for using our services.</p>
                <h6 class="text-theme mt-3">2. Use of Information</h6>
                <ul class="list-unstyled mb-3 list-icon">
                    <li><i class="fa fa-angle-right"></i> <strong>Account Management : </strong>We use the collected
                        information to manage your account, provide access to our services, and assist with query
                        resolution. </li>
                    <li><i class="fa fa-angle-right"></i> <strong>Communication : </strong> We may use your contact
                        information to communicate with you regarding your account, queries, and updates related to
                        our services.</li>
                </ul>
                <h6 class="text-theme mt-3"> 3. Information Sharing</h6>
                <p><strong>Third-Party Sharing :</strong> We do not share your personal information with third
                    parties unless required by law or for the purpose of resolving queries related to our services.
                </p>
                <h6 class="text-theme mt-3">4. Security</h6>
                <p><strong>Data Security :</strong> We implement security measures to protect your personal
                    information from unauthorized access, alteration, disclosure, or destruction.
                </p>
                <h6 class="text-theme mt-3">5. Data Retention</h6>
                <p>We retain your personal information as long as it is necessary for the purposes outlined in this
                    Privacy Policy.
                </p>
                <h6 class="text-theme mt-3">6. User Rights</h6>
                <p class="mb-3"> You have the right to access, correct, or delete your personal information.
                    Please contact us if you wish to exercise any of these rights.</p>
                <h6 class="text-theme mt-3">7. Updates to Privacy Policy</h6>
                <p>We may update this Privacy Policy from time to time. Any changes will be effective immediately
                    upon posting.</p>
                <p>By using our app and website, you acknowledge that you have read and understood this Privacy
                    Policy and agree to the collection and use of your personal information as described herein.</p>
            </div>
        </div>
    </div>
</section>
@endsection
