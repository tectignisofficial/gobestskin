<?php include('include/book_call_mobile.php') ?>
<section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-6 col-xs-2 col-sm-2 col-md-2 padding-none">
                <div style="display:flex" class="titleexpert"><i class="fa fa-history"></i>
                    <h5>Talk To Our Experts</h5>
                </div>

            </div>
            <div class="col-6 col-xs-10 col-sm-10 col-md-10 click_display_mobile">
                <div class="buttreq"><button type="button" name="callback" class="clickbutton toggle1 display">Click Here</button>
                </div>
            </div>
            <div class="col-12 col-xs-10 col-sm-10 col-md-10 padding-none formbook">
                <form action="api.php" method="post">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>

                        </div>
                        <div class="col-3 col-md-2">
                            <input type="tel" class="form-control" name="no" id="email" placeholder="Your Mobile Number"
                                required>
                        </div>
                        <div class="col-3 col-md-2">
                            <select name="select_city" class="form-control" required="">
                                <option value="" disabled selected>Select City</option>
                                <?php 
                                $branchsql=mysqli_query($conn,"select * from branch");
                                 while($brancharr=mysqli_fetch_array($branchsql)){
                                ?>
                                <option value="<?= $brancharr['branch_name']; ?>"><?= $brancharr['branch_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-3 col-md-2">
                            <select name="select_service" class="form-control" required="">
                                <option value="">Select Service</option>
                                <optgroup label="Unwanted Hair">
                                    <option value="Unwanted Hair">Permanent Laser Hair Removal</option>
                                </optgroup>
                                <optgroup label="Skin">
                                    <option value="Pimple Treatment">Pimple Treatment</option>
                                    <option value="Acne Scar Treatment">Acne Scar Treatment</option>
                                    <option value="Skin Whitening">Skin Whitening</option>
                                    <option value="Stretch marks treatment">Stretch marks treatment</option>
                                    <option value="Tattoo">Tattoo Removal Treatment</option>
                                    <option value="Pigmentation">Pigmentation Treatment</option>
                                    <option value="Dull Skin">Dull Skin Treatment</option>
                                    <option value="AntiAgeing">Anti Aging</option>
                                    <option value="Botox">Botox Treatment</option>
                                    <option value="Fillers">Fillers Treatment</option>
                                    <option value="Moles">Moles Removal</option>
                                    <option value="Warts">Warts Removal</option>
                                </optgroup>
                                <optgroup label="Hair">
                                    <option value="Hair Loss Treatment">Hair Loss Treatment</option>
                                    <option value="Hair Transplantation">Hair Transplantation</option>
                                </optgroup>
                                <optgroup label="Weight Loss">
                                    <option value="Inch Loss Treatment">Fat Loss/Inch Loss</option>
                                    <option value="Body Contouring">Body Contouring</option>
                                    <option value="Weight Loss">Weight Loss Treatment</option>
                                    <option value="Weight Management">Weight Management Program</option>
                                </optgroup>
                                <option value="Other">Others</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="buttreq"><button type="submit" name="callback" class="requestbutton">Request A
                                    Call Back</button></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>



    </div>
</section>