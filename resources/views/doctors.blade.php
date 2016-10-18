@extends('layout.main')
@section('doctor')



<div class="main-banner six">
    <div class="container">
        <h2><span>Doctor's</span></h2>
    </div>
</div>
<!-- Main Banner Ends -->
<!-- Breadcrumb Starts -->
<div class="breadcrumb">
    <div class="container">
        <ul class="list-unstyled list-inline">
            <li><a href="index.html">Home</a></li>
            <li class="active">Doctors</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
<div class="container main-container">
    <!-- Doctors Desigination Filters Starts -->
    <ul id="doctors-filter" class="list-unstyled list-inline">
        <li><a href="#" class="active" data-group="all">All Departments</a></li>
        <li><a href="#" data-group="healthcare">Health Care</a></li>
        <li><a href="#" data-group="pediatrics">Pediatrics Clinic</a></li>
        <li><a href="#" data-group="cardiac">Cardiac Clinic</a></li>kk
        <li><a href="#" data-group="gynaecological">Gynaecological</a></li>
    </ul>
    <!-- Doctors Desigination Filters Ends -->
    <!-- Doctors Bio List Starts -->
    <ul id="doctors-grid" class="row grid">
        <!-- Doctor Bio #1 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img5.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #1 Ends -->
        <!-- Doctor Bio #2 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img14.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #2 Ends -->
        <!-- Doctor Bio #3 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img17.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #3 Ends -->
        <!-- Doctor Bio #4 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img7.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #4 Ends -->
        <!-- Doctor Bio #5 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img8.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #5 Ends -->
        <!-- Doctor Bio #6 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img9.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #6 Ends -->
        <!-- Doctor Bio #7 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img10.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #7 Ends -->
        <!-- Doctor Bio #8 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img11.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #8 Ends -->
        <!-- Doctor Bio #9 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "healthcare"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img12.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #9 Ends -->
        <!-- Doctor Bio #10 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "pediatrics"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img13.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #10 Ends -->
        <!-- Doctor Bio #11 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "cardiac"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img15.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #11 Ends -->
        <!-- Doctor Bio #12 Starts -->
        <li class="col-md-4 col-sm-6 col-xs-12 doctors-grid" data-groups='["all", "gynaecological"]'>
            <div class="bio-box">
                <div class="profile-img">
                    <img src="images/doctors/doctor-bio-img16.jpg" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
                    <div class="overlay">
                        <ul class="list-unstyled list-inline sm-links">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="inner">
                    <h4>Dr. Tom Smith Bert</h4>
                    <p class="designation">Cardiac Clinic, Health Care</p>
                    <p class="divider"><i class="fa fa-plus-square"></i></p>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the with the release of Letraset sheets Lorem Ipsum passages.
                    </p>
                </div>
                <a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
            </div>
        </li>
        <!-- Doctor Bio #12 Ends -->
    </ul>
    <!-- Doctors List Ends -->
</div>
<!-- Main Container Ends -->
@endsection


