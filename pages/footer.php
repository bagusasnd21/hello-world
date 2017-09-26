  <!-- REGISTER POPUP -->
  <!-- Update by Bagus 25/9/2017 -->
  <style>
      @media (min-width: 768px) and (max-width: 1199px) {
          .ac-modal-success .text-left-md{
              text-align: left !important;
          }
      }
      @media (max-width: 1199px) {
          .ac-modal-success .p-md-l15{
              padding-left: 15px;
          }
      }
  </style>
  <!-- End Update by Bagus 25/9/2017 -->

  <!-- Large Modal - Step 1 -->
  <div class="modal fade " id="registerStep1" role="dialog">
    <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-body ac-modal-success p-a0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                                <img src="images/form_registrasi-09.jpg" class="img img-responsive btn-block">
                            </div>
                            <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg1">
                              <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                              <h4 class="text-strong m-t5">General Info</h4>
                            </div>
                            <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                                <button type="button" class="close button-close-cust hidden-sm hidden-xs" data-dismiss="modal">X</button>
                                <div class="col-lg-12 mt-20">
                                    <div class="row form-group mt-20">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Name<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-4 m-b">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="first" type="text" placeholder=" ">
                                                <label class="text-small" for="first">First</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="last" type="text" placeholder=" ">
                                                <label class="text-small" for="last">Last</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Color Formal Foto<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <div class="box-upload">
                                                        <span class="btn btn-primary btn-pill">
                                                            <input type="file" id="file" class="hidden">
                                                            <label for="file" class="m-b0">Choose File</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle text-danger text-small text-strong">
                                                  <p class="m-b0">There was an error uploading images.</p>
                                                  <p class="m-b0">Please check and try again.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Gender<span class="text-danger">*</span> </label>
                                        </div>
                                        <div class="col-lg-9 m-t5">
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="gendermale" name="gender" checked="checked">
                                                <label for="gendermale">Male</label>
                                            </div>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" id="genderfemale" name="gender">
                                                <label for="genderfemale">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Birth Place<span class="text-danger">*</span> </label>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="birth" type="text" placeholder=" ">
                                                <label class="text-small" for="birth">Birth Place</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group lght-work">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Birth Date<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input id="birthDay" class="form-control form-flat" type="text" placeholder=" " data-date-format="mm/dd/yy">
                                                <label class="text-small" for="birthDay">dd mm yyyy</label>
                                            </span>
                                        </div>
                                        <label for="birthDay" class="col-lg-5 control-label hidden-md hidden-sm hidden-xs"><i class="fa fa-calendar"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Religion<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="religion">
                                                    <option>Islam</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="religion">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong pres-line">Identity Card Number<span class="text-danger">*</span></label>
                                          <label class="control-label text-normal text-small">(KTP)</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="card" type="text" placeholder=" ">
                                                <label class="text-small" for="card">Identity Card Number</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Scan of Identity Card<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <img src="" class="media-object">
                                                </div>
                                                <div class="media-body media-middle">
                                                    Photo.jpg
                                                </div>
                                                <div class="media-body media-middle cursor-pointer">
                                                    <i class="fa fa-trash"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <div class="box-upload">
                                                        <span class="btn btn-primary btn-pill">
                                                            <input type="file" id="file" class="hidden">
                                                            <label for="file" class="m-b0">Choose File</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle text-danger text-small text-strong">
                                                  <p class="m-b0">There was an error uploading images.</p>
                                                  <p class="m-b0">Please check and try again.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong pres-line">Address<span class="text-danger">*</span></label>
                                          <label class="control-label text-normal text-small">(based on Identity Card)</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="address" type="text" placeholder=" ">
                                                <label class="text-small" for="address">Address</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group mb--5">
                                        <div class="col-lg-4 col-lg-offset-3 m-b">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="city">
                                                    <option>Tangerang Selatan</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <label for="city">City</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="province">
                                                    <option>Banten</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <label for="province">Province</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-4 col-lg-offset-3 m-b">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="zip" type="text" placeholder=" ">
                                                <label class="text-small" for="zip">Zip / Postal Code</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 hm-address-wrapper">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong hm-address pres-line">Home Address</label>
                                          <label class="control-label text-normal hm-address text-small"><span class="text-normal">(If different with the address from Identity Card)</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="addresshome" type="text" placeholder=" ">
                                                <label class="text-small" for="addresshome">Address</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group mb--5">
                                        <div class="col-lg-4 col-lg-offset-3 m-b">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="cityhome">
                                                    <option>Tangerang Selatan</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <label for="cityhome">City</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="provincehome">
                                                    <option>Banten</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <label for="provincehome">Province</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-4 col-lg-offset-3 m-b">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="ziphome" type="text" placeholder=" ">
                                                <label class="text-small" for="ziphome">Zip / Postal Code</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-4 col-lg-offset-3 m-b">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="phone" type="text" placeholder=" ">
                                                <label class="text-small" for="phone">Phone Number</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="mobilephone" type="text" placeholder=" ">
                                                <label class="text-small" for="mobilephone">Mobile Number<span class="text-danger">*</span></label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong text-right">Marital Status</label>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="marriage">
                                                    <option>Menikah</option>
                                                    <option>Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Number of Children</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="children">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-2 col-lg-offset-3">
                                          <button type="button" class="btn btn-primary btn-pill btn-block btn-modal-width" data-dismiss="modal" data-toggle="modal" data-target="#registerStep2">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <!-- Large Modal - Step 2 -->
  <div class="modal fade " id="registerStep2" role="dialog">
      <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">

              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-10-10.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg2">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Interest in Work</h4>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong">Job Specialization<span class="text-danger">*</span> </label>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="form-group has-float-label">
                                              <select class="form-control form-flat minimal" id="specialization">
                                                  <option>Shareholder Management & Corporate Communication</option>
                                                  <option>Option 2</option>
                                                  <option>Option 3</option>
                                              </select>
                                              <!--<label for="specialization">Combo Box</label>-->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong mb-0">Company List<span class="text-danger">*</span> </label>
                                        <label class="control-label text-strong mt-0i">of PGN Group</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="form-group">
                                              <select multiple="multiple" class="form-control form-flat minimal" id="company">
                                                  <option>PT. Perusahaan Gas Negara (Persero) Tbk</option>
                                                  <option>PT. Saka Energi Indonesia</option>
                                                  <option>PT. PGN LNG Indonesia</option>
                                                  <option>PT. PGAS Solution</option>
                                                  <option>PT. Gagas Energi Indonesia</option>
                                                  <option>PT. PGAS Telekomunikasi Indonesia</option>
                                                  <option>PT. Permata Graha Nusantara</option>
                                                  <option>PT. Kalimantan Jawa Gas</option>
                                                  <option>PT. Solusi Energi Nusantara</option>
                                                  <option>PT. Permata Karya Jasa</option>
                                                  <option>PT. Widar Mandripa Nusantara</option>
                                                  <option>PT. Transgasindo</option>
                                                  <option>PT. Telemedia Dinamika Sarana</option>
                                                  <option>PT. Nusantara Regas</option>
                                              </select>
                                              <!--<label for="company">Combo Box</label>-->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong">Description</label>
                                      </div>
                                      <div class="col-lg-8">
                                          <div class="form-group input-group btn-block">
                                              <textarea rows="4" class="form-control">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                              </textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong mb-0">Willing to be place<span class="text-danger">*</span></label>
                                        <label class="control-label text-strong mt-0i">in all areas</label>
                                      </div>
                                      <div class="col-lg-8 pt-15">
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="place1" value="Yes" name="places" checked="">
                                              <label for="place1">Yes</label>
                                          </div>
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="place2" value="No" name="places">
                                              <label for="place2">No</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-8 col-lg-offset-3">
                                        <button type="button" class="btn btn-primary btn-pill btn-modal-width" data-toggle="modal" data-target="#registerStep1" data-dismiss="modal">Previous</button>
                                        <button type="button" class="btn btn-default btn-pill m-l20 btn-modal-width" data-toggle="modal" data-target="#registerStep3" data-dismiss="modal">Next</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

  <!-- Large Modal - Step 3 -->
  <div class="modal fade " id="registerStep3" role="dialog">

      <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-11.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg3">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Interest in Work</h4>
                            <ul>
                              <li>Lorem ipsum dolor sit amet, cosectetur</li>
                              <li>Latest education, sorted from the last</li>
                            </ul>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong">Degree<span class="text-danger">*</span> </label>
                                      </div>
                                      <div class="col-lg-3">
                                          <div class="form-group has-float-label">
                                              <select class="form-control form-flat minimal" id="degree" onchange="showDiv(this)">
                                                  <option value="1">S1</option>
                                                  <option value="2">SMA</option>
                                              </select>
                                              <!--<label for="degree">Combo Box</label>-->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- For option degree SMA -->
                              <div id="sma" class="col-lg-12 no-padding hide">
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">School Name<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="schoolname" type="text" placeholder=" ">
                                                <label class="text-small" for="schoolname">School Name</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Major<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="majorschool" type="text" placeholder=" ">
                                                <label class="text-small" for="majorschool">Major</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Year of Graduate<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="graduateschool">
                                                    <option>2005</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="graduateschool">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <!-- End - For option degree SMA -->

                              <div id="s1" class="col-lg-12 no-padding">
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Institute/University<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="institute" type="text" placeholder=" ">
                                                <label class="text-small" for="institute">Institute/University</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Faculty<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="faculty" type="text" placeholder=" ">
                                                <label class="text-small" for="faculty">Faculty</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">Major<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="major" type="text" placeholder=" ">
                                                <label class="text-small" for="major">Major</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-3 text-right text-left-md">
                                          <label class="control-label text-strong">GPA<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-2 m-b">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="gpa" type="text" placeholder=" ">
                                                <label class="text-small" for="gpa">GPA</label>
                                            </span>
                                        </div>
                                        <div class="col-lg-2 text-right text-left-md no-padding p-md-l15">
                                          <label class="control-label text-strong">Year of Graduate<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="graduate">
                                                    <option>2005</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="graduate">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong block">Location<span class="text-danger">*</span></label>
                                        <label class="control-label text-strong">(City)</label>
                                      </div>
                                      <div class="col-lg-3">
                                          <span class="has-float-label">
                                              <input class="form-control form-flat" id="citypass" type="text" placeholder=" ">
                                              <label class="text-small" for="citypass">City</label>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-3 text-right text-left-md">
                                        <label class="control-label text-strong">Upload Certificate & Transcript Score<span class="text-danger">*</span></label>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="media">
                                              <div class="media-left media-middle">
                                                  <img src="" class="media-object">
                                              </div>
                                              <div class="media-body media-middle">
                                                  Sertifikat Kelulusan.jpg
                                              </div>
                                              <div class="media-body media-middle text-right cursor-pointer">
                                                  <i class="fa fa-trash"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <div class="media">
                                              <div class="media-left media-middle">
                                                  <div class="box-upload">
                                                      <span class="btn btn-primary btn-pill">
                                                          <input type="file" id="file" class="hidden">
                                                          <label for="file" class="m-b0">Choose File</label>
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="media-body media-middle text-danger text-small text-strong">
                                                <p class="m-b0">There was an error uploading images.</p>
                                                <p class="m-b0">Please check and try again.</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <button class="btn btn-primary btn-pill btn-modal-width">Save</button>
                                          <button class="btn btn-primary btn-pill m-l20 btn-modal-width">Clear</button>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <table class="table table-responsive table-edu">
                                              <tbody>
                                              <tr>
                                                  <th>Degree</th>
                                                  <th>Institute/University</th>
                                                  <th>Action</th>
                                              </tr>
                                              <tr>
                                                  <td>S1</td>
                                                  <td>London School..</td>
                                                  <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                              </tr>
                                              <tr>
                                                  <td>S1</td>
                                                  <td>London School..</td>
                                                  <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                              </tr>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-lg-12 m-t20">
                                  <div class="row form-group">
                                    <div class="col-lg-8 col-lg-offset-3">
                                      <button type="button" class="btn btn-primary btn-pill btn-modal-width" data-toggle="modal" data-target="#registerStep2" data-dismiss="modal">Previous</button>
                                      <button type="button" class="btn btn-default btn-pill m-l20 btn-modal-width" data-toggle="modal" data-target="#registerStep4" data-dismiss="modal">Next</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

  <!-- Large Modal - Step 4 -->
  <div class="modal fade " id="registerStep4" role="dialog">

      <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">

              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-12.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg4">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Work Experience</h4>
                            <ul>
                              <li>Enter latest work experience which sorted from the last.</li>
                              <li>Required if already have work experiences.</li>
                            </ul>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-primary text-strong m-b0">Do you have Work Experience?</p>
                                          <span>(Internship or Final Paper isn't considered as work experience)</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="yesexperience" name="experience" onclick="showStep4();">
                                              <label for="yesexperience">Yes</label>
                                          </div>
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="noexperience" name="experience" onclick="hideStep4();">
                                              <label for="noexperience">No</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="step4Content" class="col-lg-12 no-padding hide">
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Company<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="company" type="text" placeholder=" ">
                                                <label class="text-small" for="company">Company</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Field Industry<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="industry">
                                                    <option>Agriculture / Forestry / Farm / Fisheries</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="industry">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Address</label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="compaddress" type="text" placeholder=" ">
                                                <label class="text-small" for="compaddress">Address</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Phone Number</label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="compphone" type="text" placeholder=" ">
                                                <label class="text-small" for="compphone">Phone Number</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Job Position<span class="text-danger">*</span></label>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="jobpos" type="text" placeholder=" ">
                                                <label class="text-small" for="jobpos">Job Position</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Job Level<span class="text-danger">*</span></label>
                                        <div class="col-lg-4">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="joblevel">
                                                    <option>Assistant Vice President</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="joblevel">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group lght-work">
                                        <label class="col-lg-3 control-label text-strong text-right">Length of Work<span class="text-danger">*</span></label>
                                        <label class="col-lg-2 col-xs-12 control-label text-normal">Start Date</label>
                                        <div class="col-lg-3 col-xs-10">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="startdate" type="text" placeholder=" " data-date-format="mm/dd/yy">
                                                <label class="text-small" for="startdate">dd mm yyyy</label>
                                            </span>
                                        </div>
                                        <label class="col-lg-4 col-xs-2 control-label" for="startdate"><i class="fa fa-calendar"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group lght-work">
                                        <label class="col-lg-2 col-xs-12 col-lg-offset-3 control-label text-normal">End Date</label>
                                        <div class="col-lg-3 col-xs-10">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="enddate" type="text" placeholder=" " data-date-format="mm/dd/yy">
                                                <label class="text-small" for="enddate">dd mm yyyy</label>
                                            </span>
                                        </div>
                                        <label class="col-lg-4 col-xs-2 control-label" for="enddate"><i class="fa fa-calendar"></i></label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Name of Reference</label>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="refname" type="text" placeholder=" ">
                                                <label class="text-small" for="refname">Reference Name</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Position of Reference</label>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="refpos" type="text" placeholder=" ">
                                                <label class="text-small" for="refpos">Reference Position</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Phone Number of Reference</label>
                                        <div class="col-lg-4">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="refnumb" type="text" placeholder=" ">
                                                <label class="text-small" for="refnumb">Reference Phone Number</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button class="btn btn-primary btn-pill btn-modal-width">Save</button>
                                            <button class="btn btn-primary btn-pill m-l20 btn-modal-width">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <table class="table table-responsive table-edu">
                                                <tbody>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Job Position</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>PT. PGAS..</td>
                                                    <td>Engineer Assistant</td>
                                                    <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>PT. Sejah..</td>
                                                    <td>Engineer Staff</td>
                                                    <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="row form-group">
                                    <div class="col-lg-8 col-lg-offset-3">
                                      <button type="button" class="btn btn-primary btn-pill btn-modal-width" data-toggle="modal" data-target="#registerStep3" data-dismiss="modal">Previous</button>
                                      <button type="button" class="btn btn-default btn-pill m-l20 btn-modal-width" data-toggle="modal" data-target="#registerStep5" data-dismiss="modal">Next</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

  <!-- Large Modal - Step 5 -->
  <div class="modal fade " id="registerStep5" role="dialog">

      <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">

              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-13.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg5">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Organizational Experience</h4>
                            <ul>
                              <li>Enter maximum 3 (three) latest organization experiences which sorted from the last.</li>
                              <li>Required if already have organization experiences - formal/informal</li>
                              <li>No including committee.</li>
                            </ul>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-primary text-strong m-b0">Do you have Organizational Experience?</p>
                                          <span>(Committee isn't considered as organizational experience)</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="yesorganization" name="organization" onclick="showStep5();">
                                              <label for="yesorganization">Yes</label>
                                          </div>
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="noorganization" name="organization" onclick="hideStep5();">
                                              <label for="noorganization">No</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="step5Content" class="col-lg-12 no-padding hide">
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Name of Organization<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="orgname" type="text" placeholder=" ">
                                                <label class="text-small" for="orgname">Organization Name</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">General Description of Organization<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <div class="form-group input-group btn-block">
                                                <textarea rows="4" class="form-control">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Position<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="orgpos" type="text" placeholder=" ">
                                                <label class="text-small" for="orgpos">Organization Position</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Year<span class="text-danger">*</span></label>
                                        <div class="col-lg-2">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="orgyear">
                                                    <option>2005</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="orgyear">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button class="btn btn-primary btn-pill btn-modal-width">Save</button>
                                            <button class="btn btn-primary btn-pill m-l20 btn-modal-width">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <table class="table table-responsive table-edu">
                                                <tbody>
                                                <tr>
                                                    <th>Organization</th>
                                                    <th>Position</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>Akuntan Public</td>
                                                    <td>Staff</td>
                                                    <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="row form-group">
                                    <div class="col-lg-8 col-lg-offset-3">
                                      <button type="button" class="btn btn-primary btn-pill btn-modal-width" data-toggle="modal" data-target="#registerStep4" data-dismiss="modal">Previous</button>
                                      <button type="button" class="btn btn-default btn-pill m-l20 btn-modal-width" data-toggle="modal" data-target="#registerStep6" data-dismiss="modal">Next</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

  <!-- Large Modal - Step 6 -->
  <div class="modal fade " id="registerStep6" role="dialog">

      <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">

              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-14-14.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg6">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Certification</h4>
                            <ul>
                              <li>Maximum 3 (three) latest certifications which sorted from the last, required if already have certifications</li>
                            </ul>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-primary text-strong m-b0">Do you have Certification?</p>
                                          <span>(Internship or Final Paper isn't considered as Certification)</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="yescertification" name="certification" onclick="showStep6();">
                                              <label for="yescertification">Yes</label>
                                          </div>
                                          <div class="radio radio-primary radio-inline">
                                              <input type="radio" id="nocertification" name="certification" onclick="hideStep6();">
                                              <label for="nocertification">No</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="step6Content" class="col-lg-12 no-padding hide">
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Name of Certification<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="certname" type="text" placeholder=" ">
                                                <label class="text-small" for="certname">Certification Name</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Institution/Company<span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <span class="has-float-label">
                                                <input class="form-control form-flat" id="instname" type="text" placeholder=" ">
                                                <label class="text-small" for="instname">Institution Name</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Year of Certification<span class="text-danger">*</span></label>
                                        <div class="col-lg-2">
                                            <div class="form-group has-float-label">
                                                <select class="form-control form-flat minimal" id="certyear">
                                                    <option>2005</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <!--<label for="certyear">Combo Box</label>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <label class="col-lg-3 control-label text-strong text-right">Upload Certificate</label>
                                        <div class="col-lg-9">
                                            <div class="media">
                                                <div class="media-left media-middle">
                                                    <div class="box-upload">
                                                        <span class="btn btn-primary btn-pill">
                                                            <input type="file" id="file" class="hidden">
                                                            <label for="file" class="m-b0">Choose File</label>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body media-middle text-danger text-small text-strong">
                                                  <p class="m-b0">There was an error uploading images.</p>
                                                  <p class="m-b0">Please check and try again.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <button class="btn btn-primary btn-pill btn-modal-width">Save</button>
                                            <button class="btn btn-primary btn-pill m-l20 btn-modal-width">Clear</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row form-group">
                                        <div class="col-lg-9 col-lg-offset-3">
                                            <table class="table table-responsive table-edu">
                                                <tbody>
                                                <tr>
                                                    <th>Certification</th>
                                                    <th>Year</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td>Sertifikat kelulusan.jpg</td>
                                                    <td>2005</td>
                                                    <td class="action-wrapper"><i class="fa fa-pencil-square-o m-r5 cursor-pointer"></i> <i class="fa fa-trash-o cursor-pointer"></i></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <div class="col-lg-12 m-t20">
                                  <div class="row form-group m-t20">
                                    <div class="col-lg-8 col-lg-offset-3">
                                      <button type="button" class="btn btn-primary btn-pill btn-modal-width" data-toggle="modal" data-target="#registerStep5" data-dismiss="modal">Previous</button>
                                      <button type="button" class="btn btn-default btn-pill m-l20 btn-modal-width" data-toggle="modal" data-target="#registerStep7" data-dismiss="modal">Next</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>

  <!-- Large Modal - Step 7 -->
  <div class="modal fade " id="registerStep7" role="dialog">

      <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content">

              <div class="modal-body ac-modal-success p-a0">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="col-lg-4 col-md-4 p-l0 hidden-sm hidden-xs img-content">
                              <img src="images/form_registrasi-15.jpg" class="img img-responsive btn-block">
                          </div>
                          <div class="col-xs-12 pt-15 pb-10 m-b20 hidden-lg hidden-md heading-reg7">
                            <button type="button" class="close button-close-cust" data-dismiss="modal">X</button>
                            <h4 class="text-strong m-t5">Account Settings</h4>
                          </div>
                          <div class="col-lg-8 col-md-8 col-lg-offset-4 col-md-offset-4 form-content">
                              <div class="col-lg-12 p-r m-b10"><button type="button" class="close button-close-cust" data-dismiss="modal">X</button></div>
                              <div class="col-lg-12 mt-20">
                                  <div class="row form-group">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-strong">Set Your Account in PGN Career</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <label class="col-lg-3 control-label text-strong text-right">Email<span class="text-danger">*</span></label>
                                      <div class="col-lg-5">
                                          <span class="has-float-label">
                                              <input class="form-control form-flat" id="emailaccount" type="text" placeholder=" ">
                                              <label class="text-small" for="emailaccount">Email Account</label>
                                          </span>
                                      </div>
                                      <div class="col-lg-9 col-lg-offset-3 m-t5"><p class="text-danger text-small">Please enter a valid email address.</p></div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <label class="col-lg-3 control-label text-strong text-right">Password<span class="text-danger">*</span></label>
                                      <div class="col-lg-5 inner-addon right-addon">
                                          <span class="has-float-label">
                                              <input class="form-control form-flat" id="pass" type="text" placeholder=" ">
                                              <label class="text-small" for="pass">Password</label>
                                              <i class="fa fa-eye"></i>
                                          </span>
                                      </div>
                                      <div class="col-lg-9 col-lg-offset-3 m-t5"><p class="text-danger text-small">The password should contain...</p></div>
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                  <div class="row form-group">
                                      <label class="col-lg-3 control-label text-strong text-right">Confirm Password<span class="text-danger">*</span></label>
                                      <div class="col-lg-5 inner-addon right-addon">
                                          <span class="has-float-label">
                                              <input class="form-control form-flat" id="confpass" type="text" placeholder=" ">
                                              <label class="text-small" for="confpass">Confirm Password</label>
                                              <i class="fa fa-eye"></i>
                                          </span>
                                      </div>
                                      <div class="col-lg-9 col-lg-offset-3 m-t5"><p class="text-danger text-small">Password not match</p></div>
                                  </div>
                              </div>
                              <div class="col-lg-12 m-t20">
                                  <div class="row form-group m-b0">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-strong text-primary">Subscription</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-9 col-lg-offset-3 m-b20">
                                  <div class="checkbox checkbox-primary">
                                      <input id="subscription" class="styled" type="checkbox">
                                      <label for="subscription">
                                          Please give the checklist if you want to get our latest news via e-mail.
                                      </label>
                                  </div>
                              </div>

                              <div class="col-lg-12">
                                  <div class="row form-group m-b0">
                                      <div class="col-lg-9 col-lg-offset-3">
                                          <p class="text-strong text-primary">Statement<span class="text-danger">*</span></p>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-9 col-lg-offset-3">
                                  <div class="checkbox checkbox-primary">
                                      <input id="state1" class="styled" type="checkbox">
                                      <label for="state1">
                                          I certify all the data i've filled in this form are true.
                                      </label>
                                  </div>
                              </div>
                              <div class="col-lg-9 col-lg-offset-3">
                                  <div class="checkbox checkbox-primary">
                                      <input id="state2" class="styled" type="checkbox">
                                      <label for="state2">
                                          By, signing up, I have read and agree to pgn career's <br><a href="#" class="text-primary">term of use</a> and <a href="#" class="text-primary">privacy policy</a>.
                                      </label>
                                  </div>
                              </div>

                              <div class="col-lg-12 m-t20">
                                  <div class="row form-group">
                                    <div class="col-lg-8 col-lg-offset-3">
                                      <button type="button" class="btn btn-primary btn-pill" data-toggle="modal" data-target="#registerStep6" data-dismiss="modal">Previous</button>
                                      <button type="button" class="btn btn-primary btn-pill m-l20">Submit</button>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>

      </div>

  </div>
  <!-- /REGISTER POPUP -->

  <div class="container-fluid pgn-career-footer no-padding">
    <div class="col-xs-12 footer-top">
      <span>Follow Our Social Media</span>
      <div class="row social-icon">
        <span>
          <a href="#"><img class="fb-icon" src="images/icon_fb.png" /></a>
          <a href="#"><img src="images/icon_ig.png"/></a>
        </span>
      </div>
      <a class="hide-sitemap" role="button" data-toggle="collapse" href="#hideSiteMap" aria-expanded="false" aria-controls="hideProduk">
        <span class="pr-5">SITE MAP</span><i class="fa fa-caret-down"></i>
      </a>
      <div class="collapse fade sitemap-wrapper container" id="hideSiteMap">
        <div class="col-xs-12 sitemap-padding">
          <hr/>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <ul class="no-padding">
              <li class="sitemap-title">Home</li>
              <li><a href="#">Corporate culture</a></li>
              <li><a href="#">Featured company</a></li>
              <li><a href="#">Corporate culture</a></li>
              <li><a href="#">Recruitment and selection process</a></li>
              <li><a href="#">Learning and knowledge management</a></li>
              <li><a href="#">Leadership</a></li>
              <li><a href="#">Testimony</a></li>
              <li><a href="#">Quotes</a></li>
              <li><a href="#">Video</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-1">
            <ul class="no-padding">
              <li class="sitemap-title">My PGN Karir</li>
              <li><a href="#">General Info</a></li>
              <li><a href="#">Intrest in work</a></li>
              <li><a href="#">Work Experience</a></li>
              <li><a href="#">Organizational Experience</a></li>
              <li><a href="#">Certification</a></li>
              <li><a href="#">Account Settings</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2">
            <ul class="no-padding">
              <li class="sitemap-title">Vacancy</li>
              <li><a href="#">Search job engine</a></li>
              <li><a href="#">Selection Process</a></li>
              <li><a href="#">How to apply</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <ul class="no-padding">
              <li class="sitemap-title">Our Program</li>
              <li><a href="#">Leadership</a></li>
              <li><a href="#">Learning and Knowledge Management</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 footer-btm">
      <div class="container">
        <span class="address text-center">PT. Perusahaan Gas Negara (Persero) Tbk - The Manhattan Square Mid Tower, 26th Floor Jl. T.B. Simatupang Kav. 1S Jakarta Selatan 12540</span>
        <span class="copyright text-center">Copyright &#9400 2017 PT. Perusahaan Gas Negara (Persero) Tbk. All Rights Reserved.</span>
      </div>
    </div>
  </div>
</div>
<!-- /#wrapper -->

<!-- Slick JS Init -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.home-main-sld').slick({
      infinite: true,
      speed: 500,
      fade: true,
      arrows: false,
      cssEase: 'linear'
    });

    /* Datepicker */
    $('#birthDay').datepicker({
      autoclose: true,
      todayBtn: true,
      todayHighlight: true
    }).on('changeDate', function(ev){
      $('#birthDay').addClass("blue-border");
    });
    $('#startdate').datepicker({
      autoclose: true,
      todayBtn: true,
      todayHighlight: true
    }).on('changeDate', function(ev){
      $('#startdate').addClass("blue-border");
    });
    $('#enddate').datepicker({
      autoclose: true,
      todayBtn: true,
      todayHighlight: true
    }).on('changeDate', function(ev){
      $('#enddate').addClass("blue-border");
    });
    /* /Datepicker */

    /* Multiple Select Checkbox */
    $('#company').multipleSelect();
    /* /Multiple Select Checkbox */
  });

  /* Degree */
  function showDiv(select){
   if (select.value == 1){
      document.getElementById('s1').classList.remove('hide');
      document.getElementById('sma').classList.add('hide');
    } else {
      document.getElementById('s1').classList.add('hide');
      document.getElementById('sma').classList.remove('hide');
    }
  }
  function showStep4(){
    document.getElementById('step4Content').classList.remove('hide');
  }
  function hideStep4(){
    document.getElementById('step4Content').classList.add('hide');
  }
  function showStep5(){
    document.getElementById('step5Content').classList.remove('hide');
  }
  function hideStep5(){
    document.getElementById('step5Content').classList.add('hide');
  }
  function showStep6(){
    document.getElementById('step6Content').classList.remove('hide');
  }
  function hideStep6(){
    document.getElementById('step6Content').classList.add('hide');
  }
  /* /Degree */

</script>
