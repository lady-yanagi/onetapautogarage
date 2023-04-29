<form method="post">


<div class="modal fade" id="clientRegistration" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Join Now</h4>
                <button class="close" data-dismiss="modal" type="button">×</button> 
            </div>
            <div class="modal-body p-5">         
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active rounded-pill" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Client Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill " id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill " id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Payment Method</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-pill " id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Confirmation</button>
                    </li> -->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Client Details  -->
                    <div class="tab-pane fade show pt-5 active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="form-group mb-3">
                            <label for="">Firstname<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="fname" placeholder="First Name" type="text" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">LastName<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="lname" placeholder="Last Name" type="text" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="email" placeholder="Email Name" type="text" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mobile No<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="mobile_no" placeholder="Mobile Name" type="text" required>
                        </div>
                        <div class="form-group mb-3">
                            <div class="form-group mb-3">
                                <label for="">Date of Birth<span class="text-danger ms-3">*</span></label>
                                <input class="form-control input-lg" name="dob" placeholder="" type="date" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-primary" id="secondBtn">Next</button>
                        </div>
                    </div>
                    <!-- Client Details  -->

                    <!-- Service Offered  -->
                    <div class="tab-pane fade pt-5" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="form-group mb-3">
                            <label for="">Car Brand<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="car_brand" placeholder="Car Brand" type="text" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Branch<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="branch_address" placeholder="Please input address" type="text" required>
                        </div>
                        <div class="d-flex justify-content-between mt-5">
                            <label for="">Service Offered</label>
                            <label for="">Price</label>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="service_one" name="service_one" value="Aircon-Cleaning">
                                <label class="form-check-label" for="service_one">Aircon-Cleaning</label>
                            </div>
                            <div class="d-inline-block">
                                <input class="form-control input-lg" name="service_one_price" placeholder="Value" type="text" >
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="service_two" name="service_two" value="service_two">
                                <label class="form-check-label" for="service_two">ATF-Fluid Flashing</label>
                            </div>
                            <div class="d-inline-block">
                                <input class="form-control input-lg" name="service_two_price" placeholder="Value" type="text" >
                            </div>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="service_three" name="service_three" value="">
                                <label class="form-check-label" for="service_three">Battery Charging</label>
                            </div>
                            <div class="d-inline-block">
                                <input class="form-control input-lg" name="service_three_price" placeholder="Value" type="text">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary" id="firstBackBtn">Back</button>
                            <button class="btn btn-primary" id="thirdBtn">Next</button>
                        </div>                        
                    </div>
                    <!-- Service Offered  -->

                    <!-- Payments  -->
                    <div class="tab-pane fade pt-5" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="form-group mb-3">
                            <label for="">Select Mode of Payments<span class="text-danger ms-3">*</span></label>
                            <select class="form-control" name="payment_method" required>
                                <option value="gcash">Gcash</option>
                                <option value="paymaya">Paymaya</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mobile No<span class="text-danger ms-3">*</span></label>
                            <input class="form-control input-lg" name="payment_no" placeholder="Mobile No" type="text" required>
                        </div>
                        <div class="d-flex justify-content-end gap-2">
                            <button class="btn btn-secondary" id="secondBackBtn">Back</button>
                            <button class="btn btn-primary" type="submit" name="submitClientRegistration">Submit</button>
                        </div> 
                    </div>
                    <!-- Payments  -->

                </div>    
            </div>
            <!--  </form>-->
        </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog --> 
    </div>   
</form>

    <script>
        $(document).ready(function(){
            
            $("#firstBackBtn").click(function(){
                $("#pills-home-tab").click();
            });
            $("#secondBackBtn").click(function(){
                $("#pills-profile-tab").click();
            });
            $("#secondBtn").click(function(){
                $("#pills-profile-tab").click();
            });
            $("#thirdBtn").click(function(){
                $("#pills-contact-tab").click();
            });         
        });
    </script>


