@extends('layouts.app')

@section('title', 'Test test')

@section('content')
 <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">

                <!-- box listing  -->
                <div class="block-section-sm box-list-area">

                  <!-- top desc -->
                  <div class="row hidden-xs">
                    <div class="col-sm-6 ">
                      <p><strong class="color-black">Списък с кандидати за работа</strong></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                        {{--Jobs 1 to 10 of 578--}}
                      </p>
                    </div>
                  </div><!-- end top desc -->

                  <!-- listing -->
                  <div class="box-list">
                      @foreach($usersCv as $cv)
                          <h1></h1>

                    <!-- item listing  -->
                    <div class="item">
                      <div class="row">
                        <div class="col-md-1 hidden-sm hidden-xs"><div class="img-item"><img src="./assets/theme/images/people/1.jpg" alt=""></div></div>
                        <div class="col-md-11">
                          <h3 class="no-margin-top"><a href="resume_details.html" class="">{{$cv->user->name}}  <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black">България, Русе</span></h5>
                          <p>Образование - <span class="color-white-mute">{{$cv->education}}</span> <br/>
                            Стаж -  <span class="color-white-mute">{{$cv->probation}}</span><br/>
                              Телефон -  <span class="color-white-mute">{{$cv->phone}}</span><br/>
                          </p>
                          <div>
                            <span class="color-white-mute">Updated: {{$cv->updated_at}}</span>
                            <a href="#" class="btn btn-xs btn-theme btn-default">save resume</a>
                          </div>
                        </div>
                      </div>
                    </div><!-- end item listing  -->
                  @endforeach

                  </div><!-- end  listing -->


                  <!-- form get alert  -->
                  <div class="get_alert">
                    <h4>Get new resumes for this search by email</h4>
                    <form>
                      <div class="row">
                        <div class="col-md-9">
                          <div class="form-group">
                            <label>My Email</label>
                            <input class="form-control" placeholder="Enter Email">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label class="hidden-sm hidden-xs ">&nbsp;</label>
                            <button class="btn btn-theme btn-success btn-block">Activate</button>
                          </div>
                        </div>
                      </div>
                      <small>You can cancel email alerts at any time.</small>
                    </form>
                  </div><!-- end form get alert  -->

                  <!-- pagination -->
                  <nav >
                    <ul class="pagination pagination-theme  no-margin">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&larr;</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><span>...</span></li>
                      <li><a href="#">50</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&rarr;</span>
                        </a>
                      </li>
                    </ul>
                  </nav><!-- pagination -->

                </div><!-- end  box listing  -->


              </div>
              <div class="col-md-3">
                <div class="block-section-sm side-right">

                  <!-- filter   -->
                  <div class="row">
                    <div class="col-xs-6">
                      <p><strong>Филтрирай </strong></p>
                    </div>
                    <div class="col-xs-6">
                      <p class="text-right">
                        {{--<strong>Relevance</strong> - <a href="#" class="link-black"><strong>Date</strong></a>--}}
                      </p>
                    </div>
                  </div>

                  @hasrole('company')
                  <!-- filter   -->
                  <div class="result-filter">
                    <h5 class="no-margin-top font-bold margin-b-20 " ><a href="#s_collapse_1" data-toggle="collapse" >Образование <i class="fa ic-arrow-toogle fa-angle-right pull-right"></i></a> </h5>
                    <div class="collapse in" id="s_collapse_1">
                      <div class="list-area">
                        <ul class="list-unstyled">
                          <li>
                            <a  href="#" >Докторанти</a> (16947)
                          </li>
                          <li>
                            <a  href="#" >Магистри</a> (13915)
                          </li>
                          <li>
                            <a  href="#" >Бакалаври</a> (9398)
                          </li>
                          <li>
                            <a  href="#" >Служители</a> (4112)
                          </li>
                          <li>
                            <a  href="#" >Средно образование</a> (1864)
                          </li>
                        </ul>
                      </div>
                    </div>

                    <h5 class="font-bold  margin-b-20"  ><a href="#s_collapse_5" data-toggle="collapse" >Стаж <i class="fa ic-arrow-toogle fa-angle-right pull-right"></i></a> </h5>
                    <div class="collapse in" id='s_collapse_5'>
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li>
                            <a  href="#" >По-малко от 1 година</a> (558)
                          </li>
                          <li>
                            <a  href="#" >1-2 години </a> (438)
                          </li>
                          <li>
                            <a  href="#" >3-5 години </a> (313)
                          </li>
                          <li>
                            <a  href="#" >6-10 години</a> (169)
                          </li>
                          <li>
                            <a  href="#" >Повече от 10 години </a> (156)
                          </li>
                        </ul>

                      </div>
                    </div>


                    <h5 class="font-bold  margin-b-20 hidden" ><a href="#s_collapse_2" data-toggle="collapse">Job Titles <i class="fa ic-arrow-toogle fa-angle-right pull-right"></i> </a></h5>
                    <div class="collapse in hidden" id="s_collapse_2">
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li>
                            <a  href="#" >Софтуерен инженер</a> (558)
                          </li>
                          <li>
                            <a  href="#" >PHP разработчик</a> (438)
                          </li>
                          <li>
                            <a  href="#" >Софтуерен инженер </a> (313)
                          </li>
                          <li>
                            <a  href="#" >Старши софтуерен инженер </a> (169)
                          </li>
                          <li>
                            <a  href="#" >Front End Разработчик </a> (156)
                          </li>
                        </ul>

                      </div>
                    </div>


                    <h5 class="font-bold  margin-b-20 hidden" ><a href="#s_collapse_3" data-toggle="collapse" >Companies <i class="fa ic-arrow-toogle fa-angle-right pull-right"></i> </a> </h5>
                    <div class="collapse in hidden" id="s_collapse_3">
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li>
                            <a  href="#" >Самоосигуряващ се</a> (558)
                          </li>
                          <li>
                            <a  href="#" >Свободна практика</a> (438)
                          </li>
                          <li>
                            <a  href="#" >IBM </a> (313)
                          </li>
                          <li>
                            <a  href="#" >Банка на Америка</a> (169)
                          </li>
                          <li>
                            <a  href="#" >Русенски университет "Ангел Кънчев" </a> (156)
                          </li>
                        </ul>

                      </div>
                    </div>


                    <h5 class="font-bold  margin-b-20 hidden" ><a href="#s_collapse_4" class="collapsed" data-toggle="collapse" >Location <i class="fa ic-arrow-toogle fa-angle-right pull-right"></i></a> </h5>
                    <div class="collapse hidden" id='s_collapse_4'>
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li>
                            <a  href="#" >New York, NY </a> (558)
                          </li>
                          <li>
                            <a  href="#" >San Francisco, CA </a> (438)
                          </li>
                          <li>
                            <a  href="#" >Washington, DC </a> (313)
                          </li>
                          <li>
                            <a  href="#" >Chicago, IL</a> (169)
                          </li>
                          <li>
                            <a  href="#" >Austin, TX  </a> (156)
                          </li>
                        </ul>

                      </div>
                    </div>

                  </div><!-- end filter   -->
                  @endhasrole
                </div>


              </div>
            </div>
          </div>
        </div>



        <!-- modal need login -->
        <div class="modal fade" id="need-login">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >You must login to save jobs</h4>
              </div>
              <div class="modal-footer text-center">
                <a href="#" class="btn btn-default btn-theme" >Login</a>
                <a href="#"  class="btn btn-success btn-theme">Create account (it's free)</a>
              </div>

            </div>
          </div>
        </div><!-- end modal  need login -->


        <!-- modal need login -->
        <div class="modal fade" id="modal-email">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <form>
                <div class="modal-header ">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" >Send this job to yourself or a friend:</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>From my email address</label>
                    <input type="email" class="form-control "  placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>To email address</label>
                    <input type="email" class="form-control "  placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label>Comment (optional)</label>
                    <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
                  </div>
                  <div class="checkbox flat-checkbox">
                    <label>
                      <input type="checkbox">
                      <span class="fa fa-check"></span>
                      Send a copy to my email address?
                    </label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-theme">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end modal  need login -->
      </div><!--end body-content -->
@endsection
