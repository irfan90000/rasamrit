@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center text-dark py-2">
                    <i class='bx bx-globe fs-4 me-1'></i>
                    <h6 class="mb-0 text-dark">
                        Wesbite Setup
                    </h6>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.website-setup.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 border-bottom">
                            <h6 class="text-primary fw400">Home Title, Subtitle & Description</h6>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="title">Title(Max length 40)*</label>
                            <input type="text" class="form-control" id="title" name="title" maxlength="40"
                                value="{{ websiteSetupValue('title') }}" placeholder="Enter Title">
                            <input type="hidden" name="type[]" value="title">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="subtitle">Sub Title(Max length 40)*</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" maxlength="40"
                                value="{{ websiteSetupValue('subtitle') }}" placeholder="Enter Sub Title">
                            <input type="hidden" name="type[]" value="subtitle">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="description">Description(Max length 120)*</label>
                            <input type="text" class="form-control" id="description" name="description" maxlength="120"
                                value="{{ websiteSetupValue('description') }}" placeholder="Enter description">
                            <input type="hidden" name="type[]" value="description">
                        </div>

                        <div class="col-lg-12 border-bottom">
                            <h6 class="text-primary fw400">Contact & Social Links</h6>
                        </div>

                        <div class="col-lg-3">
                            <label class="form-label" for="phone">Phone Number*</label>
                            <input type="number" class="form-control" id="phone" name="phone"
                                value="{{ websiteSetupValue('phone') }}" placeholder="Enter phone">
                            <input type="hidden" name="type[]" value="phone">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="whatsapp">Whatsapp Number*</label>
                            <input type="number" class="form-control" id="whatsapp" name="whatsapp"
                                value="{{ websiteSetupValue('whatsapp') }}" placeholder="Enter whatsapp">
                            <input type="hidden" name="type[]" value="whatsapp">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="email1">Email Address1*</label>
                            <input type="email" class="form-control" id="email1" name="email1"
                                value="{{ websiteSetupValue('email1') }}" placeholder="Enter email1">
                            <input type="hidden" name="type[]" value="email1">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="email2">Email Address2*</label>
                            <input type="email" class="form-control" id="email2" name="email2"
                                value="{{ websiteSetupValue('email2') }}" placeholder="Enter email2">
                            <input type="hidden" name="type[]" value="email2">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="facebook">Facebook Link*</label>
                            <input type="text" class="form-control" id="facebook" name="facebook"
                                value="{{ websiteSetupValue('facebook') }}" placeholder="Enter facebook">
                            <input type="hidden" name="type[]" value="facebook">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="instagram">Instagram Link*</label>
                            <input type="text" class="form-control" id="instagram" name="instagram"
                                value="{{ websiteSetupValue('instagram') }}" placeholder="Enter instagram">
                            <input type="hidden" name="type[]" value="instagram">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="youtube">Youtube Link*</label>
                            <input type="text" class="form-control" id="youtube" name="youtube"
                                value="{{ websiteSetupValue('youtube') }}" placeholder="Enter youtube">
                            <input type="hidden" name="type[]" value="youtube">
                        </div>
                        <div class="col-lg-3">
                            <label class="form-label" for="twitter">Twitter Link*</label>
                            <input type="text" class="form-control" id="twitter" name="twitter"
                                value="{{ websiteSetupValue('twitter') }}" placeholder="Enter twitter">
                            <input type="hidden" name="type[]" value="twitter">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="video">Video Link*</label>
                            <input type="text" class="form-control" id="video" name="video"
                                value="{{ websiteSetupValue('video') }}" placeholder="Enter video">
                            <input type="hidden" name="type[]" value="video">
                        </div>

                        <div class="col-lg-12 border-bottom">
                            <h6 class="text-primary fw400">Website logo, Favicon & Banner</h6>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input class="form-control" type="file" name="logo" id="logo">
                            <input type="hidden" name="type[]" value="logo">
                            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}" alt="Logo"
                                height="80" class="p-1 bg-light">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input class="form-control" type="file" name="favicon" id="favicon">
                            <input type="hidden" name="type[]" value="favicon">
                            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}"
                                alt="Logo" height="80" class="p-1 bg-light">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="banner" class="form-label">Banner</label>
                            <input class="form-control" type="file" name="banner" id="banner">
                            <input type="hidden" name="type[]" value="banner">
                            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('banner')) }}" alt="Logo"
                                height="80" width="100%" style="object-fit: cover" class="rounded rounded-1">
                        </div>
                        <div class="col-lg-12 text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
