                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h1 class="h3 mb-2 text-gray-800">Profile</h1>
                            <p class="mb-4">Bootstrap's default utility classes can be found on the official <a target="_blank"
                                href="https://getbootstrap.com/docs">page. The custom utilities
                                below were created to extend this theme past the default utility classes built into Bootstrap's
                                framework</a>.</p>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-4">

                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Custom Text Color Utilities</h6>
                                </div>
                                <div class="card-body">
                                <div class="pt-5 pb-5 col mb-5 mb-5 mb-xl-0">
                                    <div class="text-center">
                                        <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/200x200/ced4da/6c757d"/>
                                        <h5 class="fw-bolder">Andi Rifqial Nur</h5>
                                        <div class="fst-italic text-muted pb-3">Founder &amp; CEO</div>
                                        <div class="fw-bolder text-muted pb-4">------------------------------------------------------------</div>
                                    </div>
                                    <div class="mb-2 text-success"><h6>Email Address :</h6></div>
                                    <div class="text-small mb-4">andirifqialnur276@gmail.com</div>

                                    <div class="mb-2 text-success"><h6>Phone Number :</h6></div>
                                    <div class="text-small mb-4">085263563381</div>

                                    <div class="mb-2 text-success"><h6>Address :</h6></div>
                                    <div class="text-small">Sinjai</div>
                                </div>
                                </div>
                            </div>

                            <!-- Custom Font Size Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Custom Font Size Utilities</h6>
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
                                    <h6 class="m-0 font-weight-bold text-success">Form Profile
                                    </h6>
                                </div>
                                <div class="card-body">
                                <form action="<?= base_url('Dashboard/formEdit/')?><?= $doctor['id'] ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $doctor['id']; ?>">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Your Nama..."  value="<?= $doctor['name'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Your Email..." value="<?= $doctor['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Your Phone Number..." >
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Your Password..." >
                                        </div>
                                        <div class="form-group">
                                            <label for="password2">New Password</label>
                                            <input type="text" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Your Password...">
                                        </div>

                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="text" class="form-control form-control-user" id="age" name="age" placeholder="Your Age...">
                                        </div>
                                        
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" name="address" id="address" style="height: 100px"></textarea>
                                            <label for="address">Address</label>
                                        </div>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->