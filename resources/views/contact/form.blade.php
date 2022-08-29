<div class="row g-5">
    <div class="col-lg-5">
        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
            <form method="post" action="{{route('email_contact')}}">
                @csrf

                <div class="row g-3">
                    <div class="col-xl-12">
                        <input type="text" class="form-control bg-light border-0" placeholder="Name" style="height: 55px;" name="name">
                    </div>


                    <div class="col-xl-12">
                        <input type="text" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;" name="email">
                    </div>


                    <div class="col-xl-12">
                        <input type="text" class="form-control bg-light border-0" placeholder="Phone" style="height: 55px;" name="phone_number">
                    </div>
                    <div class="col-12">
                         <select class="form-select bg-light border-0" style="height: 55px;" name = 'subject' id="pageSelector">
                            <option selected>Product Interest</option>
                            <option value="Strategy & Consulting">Strategy & Consulting</option>
                            <option value="Salesforce Platforms">Salesforce Platforms</option>
                            <option value="Rootstock ERP">Rootstock ERP</option>
                            <option value="Technology & Engineering">Technology & Engineering</option>
                            <option value="Customer Experience & Design">Customer Experience & Design</option>
                            <option value = "custom">Other</option>

                        </select>
                    </div>
                    <div class="col-xl-12" style="display: none" id="show-custom">
                        <input type="text" class="form-control bg-light border-0 hide" placeholder="Other Product Interest" name="custom" id="customInput" style="height: 55px;">
                    </div>

                    <div class="col-12">
                        <textarea class="form-control bg-light border-0" rows="3" placeholder="Question/Comments" name="message"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-dark w-100 py-3" type="submit">Contact Us</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


