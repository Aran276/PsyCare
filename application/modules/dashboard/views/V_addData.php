
<div class="container-fluid pt-5 px-4 px-lg-5 my-5">
    <!-- Content Row -->
    <div class="row">
        <!-- First Column -->
        <div class="col-lg-4">
            <!-- Custom Text Color Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Form Profile</h6>
                </div>
                <div class="card-body">
                <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <div data-bs-toogle="modal" data-bs-target="#imgProfileModal">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                        </div>
                        <h5 class="fw-bolder text-dark">siapa</h5>
                        <div class="fst-italic text-muted pb-3">Your job here</div>
                    </div>
                    <hr class="sidebar-divider">
                    <div class="mt-5 mb-2 text-success"><h6>Email Address </h6></div>
                    <div class="text-small mb-4 fst-italic text-muted">apa</div>

                    <div class="mb-2 text-success"><h6>Phone Number </h6></div>
                    <div class="text-small mb-4 fst-italic text-muted">+62xxxxxxxx</div>

                    <div class="mb-2 text-success"><h6>Address </h6></div>
                    <div class="text-small fst-italic text-muted">Address</div>
                </div>
                </div>
            </div>

            <!-- Custom Font Size Utilities -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">Custom Font Size Utilities</h6>
                </div>
                <div class="card-body">
                    <p class="text-xs">.text-xs</p>
                    <p class="text-lg mb-0">.text-lg</p>
                </div>
            </div>
        </div>

            <!-- Second Column -->
            <div class="col-lg-8">

                <!-- Background Gradient Utilities -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold ">Form Data
                        </h6>
                    </div>
                    <div class="card-body pt-3">
                    <form action="<?= base_url('Dashboard/addData/')?>" method="post">
                        <input type="hidden" name="id">
                            <div class="form-group pb-4">
                                <label for="name" class="text-dark">Nama</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="name" name="name" placeholder="Your Name...">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="email" class="text-dark">Email</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="email" name="email" placeholder="Your Email..." >
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="phonenumber" class="text-dark">Phone Number</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="phonenumber" name="phonenumber" placeholder="Your Phone Number..." >
                                <?= form_error('phonenumber', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="job" class="text-dark">Job</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="job" name="job" placeholder="Your Job...">
                                <?= form_error('job', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="password" class="text-dark">Password</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password" name="password" placeholder="Your Password...">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="password2" class="text-dark">Re-type Password</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="password2" name="password2" placeholder="Repeat Your Password...">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="keyy" class="text-dark">Key</label>
                                <input type="text" class="mt-2 form-control form-control-user fst-italic" id="keyy" name="keyy" placeholder="Key permission">
                                <?= form_error('keyy', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                            <div class="form-group pb-4">
                                <label for="address" class="text-dark">Address</label>
                                <div class="mt-2 form-floating pb-4" >
                                    <textarea class="form-control fst-italic" name="address" id="address" style="height: 200px" ></textarea>
                                </div>
                                <?= form_error('address', '<small class="text-danger pl-3">', '</small>');?>
                            </div>

                        <button type="submit" class="mt-5 rounded-3 btn btn-success mb-3">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            