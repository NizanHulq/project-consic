<div class="container">
    <div class="vertical-center">
        <div class="title">
            Contact Us
        </div>
        <div class="subtitle">
            <p>Send your message to us</p>
        </div>
        <hr>
        <div class="text-center" style="padding-left: 2rem; padding-right: 2rem;">
            <form action="<?= BASEURL; ?>/contact/tambah" method="POST">
                <div class="row">
                    <div class="mb-3 col-6 text-start">
                        <label for="exampleFormControlInput1" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" id="fullname" name="fullname">
                    </div>
                    <div class="mb-3 col-6 text-start">
                        <label for="exampleFormControlInput1" class="form-label">Email <span class="text-danger">*</span></label>
                        <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" id="email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6 text-start">
                        <label for="exampleFormControlInput1" class="form-label">Phone <span class="text-danger">*</span></label>
                        <input class="form-control form-control-lg" type="number" placeholder="Username" aria-label=".form-control-lg example" id="phone" name="phone">
                    </div>
                    <div class="mb-3 col-6 text-start">
                        <label for="exampleFormControlInput1" class="form-label">Subject <span class="text-danger">*</span></label>
                        <input class="form-control form-control-lg" type="text" placeholder="Username" aria-label=".form-control-lg example" id="subject" name="subject">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 text-start">
                        <label for="exampleFormControlInput1" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message goes here..." id="message" name="message"></textarea>
                    </div>
                </div>
                <div class="row w-100 m-0">
                    <div class="col-12 d-flex justify-content-between">
                        <p class="my-auto"><span class="text-danger">*</span>required</p>
                        <button type="submit" class="btn btn-login my-3 w-50">
                            SEND MESSAGE
                        </button>
                        <p class="my-auto"><span class="text-danger">*</span>contix.rm</p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>