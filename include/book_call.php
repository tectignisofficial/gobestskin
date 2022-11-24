<section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 padding-none">
                <div style="display:flex"><i class="fa fa-history"></i><h5>Talk To Our Experts</h5></div>
                
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 padding-none">
                <form action="api.php" method="post" >
                        <div class="contect_form1">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>

                        </div>
                        <div class="contect_form1">
                            <input type="tel" class="form-control" name="no" id="email"
                                placeholder="Your Mobile Number" required>
                        </div>
                        <div class="contect_form1">
                            <select name="select_city" class="form-control" required="">
                                <option value="">Select City</option>
                                <option value="AKURDI BRANCH">AKURDI BRANCH</option>
                                <option value="WAKAD BRANCH">WAKAD BRANCH</option>
                                <option value="BANER BRANCH">BANER BRANCH</option>
                                <option value="PIMPLE SAUDAGAR BRANCH">PIMPLE SAUDAGAR BRANCH</option>
                                <option value="HINJEWADI BRANCH">HINJEWADI BRANCH</option>
                            </select>
                        </div>
                        <div class="contect_form1">
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

                    <div class="text-center"><button type="submit" name="callback" class="requestbutton">Request A Call Back</button></div>
                </form>

            </div>
        </div>



    </div>
</section>