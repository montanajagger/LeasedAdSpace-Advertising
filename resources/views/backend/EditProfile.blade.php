@extends('layouts.applayout')

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('header-section')
    <div class="page-header satellite dashboard">
        <div class="row">
            <div class="container transition-header satellite-header dashboard-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ad-word">Edit Profile</h1>
                        <div class="lead-in">Tell us about yourself!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 last-page-section">
                <div class="pull-right" style="padding-top:1.5em;"><a href="https://www.leasedadspace.com/members/SI">view my public profile</a></div>
                <h1>Edit Profile</h1>
                <hr>
                <div class="row">
                    <form action="https://www.leasedadspace.com/member/updatePhoto" method="post" class="form-horizontal" role="form" datatype="file" enctype="multipart/form-data">
                        <!-- left column -->
                        <div class="col-sm-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10 text-center">

                                <img src="{{asset('assets/100.png')}}" class="img-rounded img-responsive center-block" alt="avatar">

                                <div class="col-sm-12"><h5>Upload your profile image</h5></div>
                                <span class="file-input btn btn-primary btn-file">
                                    Browse… <input type="file" class="form-control" name="profilePhoto">
                                </span>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </form>
                    <form action="https://www.leasedadspace.com/member/save/1488031" method="post" class="form-horizontal" role="form">
                        <!-- edit form column -->
                        <div class="col-sm-9 personal-info">
                            <div class="profile-section">
                                <h2>Personal Information</h2>
                                <hr>
                                <div class="form-group">
                                    <label for="firstName" class="col-lg-3 control-label">First name</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="firstName" value="Serhii" id="firstName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastName" class="col-lg-3 control-label">Last name</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="lastName" value="Ilchuk" id="lastName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-lg-3 control-label">Account Email</label>
                                    <div class="col-lg-8 ">
                                        <input type="email" class="form-control" name="email" value="surgijilcuk@gmail.com" placeholder="me@gmail.com" id="email">


                                        <small class="text-muted">(This email will NOT be displayed publicly! It is for us to communicate with you only!)</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-lg-3 control-label">Public Profile Email</label>
                                    <div class="col-lg-8">
                                        <input type="profileEmail" class="form-control" name="profileEmail" value="" placeholder="PublicEmail@gmail.com" id="profileEmail">

                                        <small class="text-muted">(This email will be displayed publicly in your member profile page!)</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" name="password" value="$2a$10$Oovvv75UaGEm7uCcjzOJ/OwDYE5ISQoBxdB8wWXzC5lFKd2XzAtry" id="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword" class="col-lg-3 control-label">Confirm password</label>
                                    <div class="col-lg-8">
                                        <input type="password" class="form-control" name="confirmPassword" value="" id="confirmPassword">
                                        <small class="text-muted">passwords must be between 8 and 64 characters, and contain a letter, a number and a special character from the following list: !@#$%^&amp;</small>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-section">
                                <h2>Address</h2>
                                <hr>
                                <div class="form-group">
                                    <label for="street1" class="col-lg-3 control-label">Street Address 1</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="street1" value="" id="street1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="street2" class="col-lg-3 control-label">Street Address 2</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="street2" value="" id="street2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-lg-3 control-label">City</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="city" value="" id="city">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="col-lg-3 control-label">State</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="state" value="" id="state">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="postalCode" class="col-lg-3 control-label">Postal Code</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="postalCode" value="" id="postalCode">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-lg-3 control-label">Country</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" name="country" id="country">
                                            <option value="">Select One...</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Cote DIvoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curacao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="TP">East Timor</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji Islands</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern and Antarctic Lands</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambi</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong SAR</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KR">Korea</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Laos</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao SAR</option>
                                            <option value="MK">Macedonia</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn Islands</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="GS">S. Georgia &amp; S. Sandwich Isls.</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts &amp; Nevis Anguilla</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="PM">Saint Pierre &amp; Miquelon</option>
                                            <option value="ST">Saint Tome (Sao Tome) &amp; Principe</option>
                                            <option value="VC">Saint Vincent &amp; Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="CS">Serbia and Montenegro</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
                                            <option value="TW">Taiwan</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA" selected="selected">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican City</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VI">Virgin Islands</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="abn" class="col-lg-3 control-label">ABN</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="abn" value="" id="abn">
                                        <small class="text-muted">(Australian Business Number - Only required for Australian Residents)</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gst" class="col-lg-3 control-label">GST Registered?</label>
                                    <div class="col-lg-8">
                                        <input type="hidden" name="_gst"><input type="checkbox" name="gst" style="margin: 10px 0 0 0;" id="gst">
                                        <small class="text-muted">(Only required for Australian Residents)</small>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-section">
                                <h2 id="soloEnable">Solo Ad Service Settings</h2>
                                <hr>

                                <div id="soloWarning" class="alert alert-warning">
                                    <button type="button" id="enableSolo" class="btn btn-success pull-right" style="margin-top:-5px;">Enable Solo Ad Service</button>
                                    <p>You are not currently participating in the solo ad service.</p>
                                </div>
                                <div id="soloSetup" style="display:none;">
                                    <div class="form-group">
                                        <label for="soloAdReceiptEmail" class="col-lg-3 control-label">Preferred Receipt Email</label>
                                        <div class="col-lg-8">
                                            <input type="text" id="soloAdReceiptEmail" class="form-control" name="soloAdReceiptEmail" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-lg-offset-3">
                                            <p class="help-block">By giving us a preferred solo ad receipt email, you agree to receive email from all members of
                                                the LeasedAdSpace solo email service on a regular basis.  Be advised, this is going to be <em>a lot</em>
                                                of email, so you should use an account <strong>other than your primary email address.</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-section">
                                <h2>Public Profile</h2>
                                <hr>
                                <div class="form-group">
                                    <label for="skypeId" class="col-lg-3 control-label">Skype Username</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="skypeId" value="" id="skypeId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="facebookId" class="col-lg-3 control-label">Facebook Username</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="facebookId" value="" id="facebookId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="twitterId" class="col-lg-3 control-label">Twitter Username</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="twitterId" value="" id="twitterId">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="location" class="col-lg-3 control-label">Location</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="location" value="" id="location">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="aboutMe" class="col-lg-3 control-label">About Me</label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" name="aboutMe" rows="5" id="aboutMe"></textarea>
                                    </div>
                                </div>
                                <h3 id="my-videos">My Videos</h3>
                                <div class="form-group">
                                    <label for="favProg2CTA" class="col-lg-3 control-label">Current Videos</label>
                                    <div class="col-lg-8">

                                        <p>No videos specified at this time.</p>

                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#addVideoModal" data-adid="" data-action="add">Add New Video</button>
                                    </div>
                                </div>
                                <h3>Favorite Program 1</h3>
                                <div class="form-group">
                                    <label for="favProg1CTA" class="col-lg-3 control-label">Call to Action</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="favProg1CTA" value="" id="favProg1CTA">
                                        <small>(Not sure what a <a href="https://en.wikipedia.org/wiki/Call_to_action_(marketing)" target="_blank">Call to Action (CTA)</a> is?)</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="favProg1Link" class="col-lg-3 control-label">Link</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="favProg1Link" value="" id="favProg1Link">
                                    </div>
                                </div>
                                <h3>Favorite Program 2</h3>
                                <div class="form-group">
                                    <label for="favProg2CTA" class="col-lg-3 control-label">Call to Action</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="favProg2CTA" value="" id="favProg2CTA">
                                        <small>(Not sure what a <a href="https://en.wikipedia.org/wiki/Call_to_action_(marketing)" target="_blank">Call to Action (CTA)</a> is?)</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="favProg2Link" class="col-lg-3 control-label">Link</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" name="favProg2Link" value="" id="favProg2Link">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-8">
                                        <input type="submit" name="_action_update" value="Save Changes" class="btn btn-primary" id="theButton">
                                        <input type="submit" name="_action_Cancel" value="Cancel" class="btn btn-default">
                                        <input type="submit" name="_action_deactivate" value="Deactivate Account" class="btn btn-danger pull-right">
                                        <input type="hidden" name="version" value="5" id="version">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog" aria-labelledby="addVideoModalLabel">
        <div class="modal-dialog modal-small" role="document">
            <div class="modal-content">
                <form action="https://www.leasedadspace.com/member/addNewVideo/theForm" method="post" role="form"><input type="hidden" name="_method" value="PUT" id="_method">
                    <div class="modal-header">
                        <h4 class="modal-title" id="addVideoModalLabel">Add New Embedded Video</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="link" class="control-label">Embedded Video URL</label>
                            <input type="text" class="form-control" name="link" id="link" required="true" value="">
                            <input type="hidden" value="" name="id" id="adid">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteVideoModal" tabindex="-1" role="dialog" aria-labelledby="deleteVideoModalLabel">
        <div class="modal-dialog modal-small" role="document">
            <div class="modal-content">
                <form action="https://www.leasedadspace.com/member/index" method="post" role="form">
                    <div class="modal-header">
                        <h4 class="modal-title" id="deleteVideoModalLabel">Delete Embedded Video</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Are you sure you want to delete the video with url <span id="link"></span>?</p>
                            <input type="hidden" value="" name="id" id="adid">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
                        <input type="submit" name="_action_removeVideo" value="Delete" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    $("#enableSolo").click(function() {
        $("#soloWarning").fadeTo("slow", 0.00, function(){
            $(this).slideUp("slow", function() {
                $(this).hide();
                $("#soloSetup").css('opacity', '1.0').slideDown("slow");
            });
        });
    });

    $("#addVideoModal").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var action = button.data('action');

        var modal = $(this);
        if(action == 'edit'){
            modal.find('.modal-title').text('Edit Embedded Video Link');
            modal.find('form').attr("action", "updateVideo");
        } else if(action == 'add'){
            modal.find('.modal-title').text('Add Embedded Video Link');
            modal.find('form').attr("action", "addNewVideo");
        }
        var adid = button.data('adid');
        var link = button.data('link');

        modal.find('#adid').val(adid);
        modal.find('#link').val(link);
    });

    $("#deleteVideoModal").on("show.bs.modal", function (event) {
        var button = $(event.relatedTarget);
        var modal = $(this);

        var adid = button.data('adid');
        var link = button.data('link');

        modal.find('#adid').val(adid);
        modal.find('#link').text(link);
    });

    $('#addVideoModal').on('shown.bs.modal', function () { // note SHOWN, not SHOW
        $('#link').focus()
    });
@endsection
