@extends('layouts.app')

@section('title', 'Test test')

@section('content')
    <!-- body-content -->
    <div class="body-content clearfix" >

        <!-- link top -->
        <div class="bg-color2 block-section-xs line-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <div>Job details :</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-right"><a href="{{url('joblist')}}">&laquo; Go back to job listings</a></div>
                    </div>
                </div>
            </div>
        </div><!-- end link top -->

        <div class="bg-color2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <!-- box item details -->
                        <div class="block-section box-item-details">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="company_page.html"><img src="./assets/theme/images/patner/4.png" alt=""></a>
                                </div>
                                <div class="col-md-4">
                                    <p class="text-right"><a href="#">Go to our website &raquo;</a></p>
                                </div>
                            </div>

                            <h2 class="title"><a href="#">{{$jobDetails->title}}</a></h2>
                            <div class="job-meta">
                                <ul class="list-inline">
                                    <li><i class="fa fa-briefcase"></i> Договор за {{$jobDetails->type->type}}</li>
                                    <li><i class="fa fa-map-marker"></i> България, {{$jobDetails->city}}</li>
                                    <li><i class="fa fa-money"></i> $50k - $140k</li>
                                </ul>
                            </div>
                            <p>{{$jobDetails->description}}</p>

                            <h4>Какво търсим:</h4>
                            <ul>
                                @foreach($requirements as  $requirement)
                                <li>{{$requirement}}</li>
                                @endforeach
                            </ul>
                        </div><!-- end box item details -->

                    </div>
                    <div class="col-md-3">

                        <!-- box affix right -->
                        <div class="block-section " id="affix-box">
                            <div class="text-right">
                                <p><a href="{{url($url)}}" class="btn btn-theme btn-line dark btn-block-xs">Aplly WIth Linkedin</a>
                                <form action="">
                                    <input type="submit" value="candidate" name="candidate">
                                </form>
                                </p>
                                <p><a href="#modal-apply"  data-toggle="modal" class="btn btn-theme btn-t-primary btn-block-xs">Apply This Job</a></p>
                                <p><a href="#" class="btn btn-theme btn-t-primary btn-block-xs">Login to Save This Job</a></p>
                                <p><a href="#map-toogle" id="btn-map-toogle" data-toggle="collapse" class="btn btn-theme btn-t-primary btn-block-xs">Ofice Location</a></p>
                                <p>Share This Job <span class="space-inline-10"></span> :</p>
                                <p class="share-btns">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="btn btn-warning"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                        </div><!-- box affix right -->

                    </div>
                </div>
            </div>
        </div>

        <!-- block map -->
        <div class="collapse" id="map-toogle">
            <div class=" bg-color2" id="map-area">
                <div class="container">
                    <div class="marker-description">
                        <div class="inner">
                            <h4 class="no-margin-top">Office Location</h4>
                            Central Jakarta No 1234, Jakarta, Indonesia
                        </div>
                    </div>
                </div>
                <div class="map-area-detail">
                    <!-- change data  lat abd lng here -->
                    <div class="box-map-detail" id="map-detail-job" data-lat="43.835571" data-lng="25.965655"></div>
                </div>
            </div>
        </div><!-- end block map -->





        <!-- modal apply -->
        <div class="modal fade" id="modal-apply">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <form>
                        <div class="modal-header ">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" >Apply</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="email" class="form-control "  placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control "  placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Tell us why you better?</label>
                                <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Your Resume</label>
                                <div class="input-group">
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-theme btn-file">
                          File  <input type="file" >
                        </span>
                      </span>
                                    <input type="text" class="form-control form-flat" readonly>
                                </div>
                                <small>Upload your CV/resume. Max. file size: 24 MB.</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success btn-theme">Send Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- end modal  apply -->
    </div><!--end body-content -->
@endsection
