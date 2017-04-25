    @extends('layouts.default')
    @section('content')<br>
    <section id="blog-section" >
        <div class="container" style="padding:3px;">
        @if (Request::get('id') == null)
        <h1> ERROR NO VALID RESTAURANT ...</h1>
        @else
            <h2 class="title-widget-sidebar">// RESTAURANT NAME</h2>
            @if (session('status'))
    <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>  {{ session('status') }} </strong>
    </div>
@endif

            <ul class="nav nav-tabs">
                <li class="active"><a href="#Menu" aria-controls="Menu" role="tab" data-toggle="tab">Menu</a></li>
                <li><a href="#Reviews"  aria-controls="Reviews" role="tab" data-toggle="tab">Reviews</a></li>
                <li><a href="#Bookings" aria-controls="Bookings" role="tab" data-toggle="tab">Book a table</a></li>
            </ul>
            <div class="col-lg-12" style="background-color:white;">

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Menu">
                        <!-- Category header -->
                        <h2> Todays special </h2>
                        <hr>

                        <div class="col-sm-6">
                            <p>Dish</p>
                        </div>

                        <div class="col-sm-6">
                            <p>Price</p>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>


                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- Category header -->
                        <h2> Chicken </h2>
                        <hr>

                        <div class="col-sm-6">
                            <p>Dish</p>
                        </div>

                        <div class="col-sm-6">
                            <p>Price</p>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>


                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>




                        <!-- Category header -->
                        <h2> Beef </h2>
                        <hr>

                        <div class="col-sm-6">
                            <p>Dish</p>
                        </div>

                        <div class="col-sm-6">
                            <p>Price</p>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>


                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>



                        <!-- Category header -->
                        <h2> Drinks </h2>
                        <hr>

                        <div class="col-sm-6">
                            <p>Dish</p>
                        </div>

                        <div class="col-sm-6">
                            <p>Price</p>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>

                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>


                        <!-- DISH -->
                        <div class="row" style="padding-left:15px;">
                            <div class="col-sm-6">
                                <p>Risotto <br><i style="font-size:8px;">Slow cooked Arborio rice with diced asparagus topped with a salmon Filet.</i></p>
                            </div>

                            <div class="col-sm-6">
                                <p>25€</p>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Reviews">                
                    @if (Auth::guest())
                    You need to be logged in to submit a review. 
                    @else
                    <br>
                    <ul class="media-list"> 
                    <h1> Reviews </h1>
                      <li class="media">
                      @foreach($reviews as $review)
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews">{{$review->name}}</h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <p>{{$review->created_at}}</p>
                                <p> Rating: {{$review->rating}}/5</p>
                              </ul>
                              <p class="media-comment">
                                {{$review->comment}}
                              </p>
                          </div>  
                        @endforeach
                      </li>
                    </ul> 
                    
                    {{ Form::open(['url' => 'restaurant/submitreview', 'class' => 'form-horizontal']) }}
                    {{ Form::hidden('rid', Request::get('id')) }}
                    {{ Form::hidden('name', Auth::user()->name) }}
                    <div class="form-group">
                    {{Form::label('comment', 'Comment:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::textarea('comment', 'Food was great..', ['class' => '']) }}
                    
                                        </div>           
                    </div> 
                    <div class="form-group">
                    {{Form::label('rating', 'Rating:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    1 {{Form::radio('rating', '1', true)}}   2 {{Form::radio('rating', '2')}}    3 {{Form::radio('rating', '3')}}    4 {{Form::radio('rating', '4')}}   5 {{Form::radio('rating', '5')}}  
                    </div> 
                    </div>
                    <br>
                    {{Form::submit('Submit review', ['class' => 'btn btn-default'])}}
                    {{  Form::close() }}
                    <br> 
                    @endif
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Bookings"><br>
                    {{ Form::open(['url' => 'restaurant/submit', 'class' => 'form-horizontal']) }}
                    {{ Form::hidden('rid', Request::get('id')) }}
                    <div class="form-group">
                    {{Form::label('name', 'Fullname:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::text('name', 'John Doe', ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>
                    <div class="form-group">
                    {{Form::label('email', 'Email:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::email('email', 'John.Doe@gmail.com', ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>

                    <div class="form-group">
                    {{Form::label('phone', 'Phone number:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::text('phone', '08xxxxxxxx', ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>

                    <div class="form-group">
                    {{Form::label('amount', 'Attending:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::text('amount', '5', ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>

                    <div class="form-group">
                    {{Form::label('date', 'Date:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::date('date', Carbon\Carbon::now(), ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>

                    <div class="form-group">
                    {{Form::label('time', 'Time:', ['class' => 'col-md-4 control-label'])}}
                    <div class="col-md-4">
                    {{ Form::time('time', Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control input-md']) }}
                                        </div>
                    </div>
                    {{Form::submit('Submit booking!', ['class' => 'btn btn-default'])}}
                    {{  Form::close() }}
                    <br>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>




    @stop