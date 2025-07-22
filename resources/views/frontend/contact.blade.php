<div>
    @section('title', $page_title)
    <div class="breadchrumb">
        <div class="container-fluid">
            <h4 class="title">Connect With Us</h4>
            <p class="sub-title">Transform Into the Best Version of Yourself!</p>
        </div>
    </div>
    <div class="section-padding contact_area">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-7 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="title">
                                <i class="fas fa-users"></i>
                                Please fill the form
                            </h6>
                            <div class="contact_form">
                                @if ($formstep == 1)
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <select class="form-select" wire:model="type">
                                                <option value="" selected>Select Type</option>
                                                <option value="enquiry">Enquiry With Us</option>
                                                <option value="partner">Partner With Us</option>
                                            </select>
                                            @error('type')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" wire:model="name"
                                                placeholder="Your Name">
                                            @error('name')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" wire:model="phone"
                                                placeholder="Your Number">
                                            @error('phone')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" wire:model="email"
                                                placeholder="Your Email">
                                            @error('email')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="3" wire:model="message" placeholder="Your Message"></textarea>
                                            @error('message')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" wire:click="submitForm" wire:loading.attr="disabled"
                                                wire:target="submitForm" class="next-btn">
                                                <span wire:loading.remove="" wire:target="submitForm">
                                                    Submit
                                                    <i class="fas fa-arrow-right"></i>
                                                </span>
                                                <span wire:loading="" wire:target="submitForm">Loading...</span>
                                            </button>
                                        </div>
                                    </div>
                                @elseif ($formstep == 2)
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <img src="{{ asset('frontend/img/check.png') }}" class="img-fluid mb-2"
                                                    width="100" alt="">
                                                <h4 class="text-bold text-dark mb-1">Congratulations!</h4>
                                                <p>
                                                    Your message has been successfully submitted.
                                                </p>
                                                <a type="button" href="{{ route('front.index') }}"
                                                    class="next-btn text-white">
                                                    Go to home<i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
