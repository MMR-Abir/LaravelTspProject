@extends('frontend.layouts.app')

@section('content')
<!-- contact area start -->
<section class="rr-contact-area p-relative black-bg fix">
         <div class="rr-contact-shap">
            <img src="assets/img/contact/shap01.png" alt="img">
         </div>
         <div class="rr-contact-img">
            <img src="assets/img/contact/contact-img.jpg" alt="img">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-3 col-md-1"></div>
               <div class="col-xl-4 col-lg-9 col-md-10">

                  <div class="rr-form-box text-center">
                  @if('msg')
               <div class="alert alert-success">
               {{session('msg')}}
               </div>
                @endif
                     <b>OUR Booking Now</b>
                     <h4 class="rr-section-title pb-60">Appoinment</h4>
                     <form method="post" action="{{route('appoinment.store')}}">
                        @csrf
                        <div class="row">
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" name="name" value="{{old('name')}}" placeholder="Name">
                              </div>
                                                                  @error('name')
																	<div class="alert alert-danger">{{$message}}</div>
																	@enderror
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
                              </div>
                                                                   @error('email')
																	<div class="alert alert-danger">{{$message}}</div>
																	@enderror
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="text" name="phone" value="{{old('phone')}}"   placeholder="phone">
                              </div>
                           </div>
                           <div class=" col-md-12 col-12">
                              <div class="rr-form-input-box pb-30">
                                 <select name="doctor" style="display: none;">
                                    <option value="">Choose Doctor</option>
                                    @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}" @selected(old('doctor') ==$doctor->id)>{{$doctor->name}} || {{$doctor->specialist->name}}</option>
                                    @endforeach
                                 </select>

                              </div>
                                                                  @error('doctor')
																	<div class="alert alert-danger">{{$message}}</div>
																	@enderror
                           </div>

                           <div class="col-xl-12 col-lg-12 col-md-12 mb-20">
                              <div class="rr-form-input-box rr-form-input-main">
                                 <input type="date" name="date" value="{{old('date')}}"  class="form-control">
                              </div>
                                                                   @error('date')
																	<div class="alert alert-danger">{{$message}}</div>
																	@enderror
                           </div>

                           <div class="col-12 mb-20">
                              <div class="rr-form-textarea-box">
                                 <textarea name="remarks" placeholder="Your meassage">{{old('remarks')}}</textarea>
                              </div>
                                                                   @error('remarks')
																	<div class="alert alert-danger">{{$message}}</div>
																	@enderror
                           </div>

                        </div>
                        <button class="rr-btn-1 rr-form-theme-bg" type="submit"><span>Make an appoinment</span></button>
                     </form>

                  </div>
               </div>
               <div class="col-xl-2 col-lg-10 col-md-1"></div>
            </div>
         </div>

      </section>
      <!-- contact area end -->
@endsection