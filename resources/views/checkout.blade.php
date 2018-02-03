@extends('layouts.master')
@section('title', 'this is dynamic title')


@section('fullWidth')
    @include('etc.breadcrumb')
    <div id="content" class="col-sm-12">
        <h1>Checkout</h1>
        <div class="checkout">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading active">
                        <h4 class="panel-title"><a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion">Step 1: Checkout Options</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-checkout-option">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6 left-content">
                                    <h3>New Customer</h3>
                                    <p><span>Checkout Options:<span></span></span>
                                    </p>
                                    <div class="radio">
                                        <label>
                                            <input name="account" value="register" checked="checked" type="radio"> Register Account</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input name="account" value="guest" type="radio"> Guest Checkout</label>
                                    </div>
                                    <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                                    <input value="Continue" id="button-account" data-loading-text="Loading..." class="btn btn-gray" type="button">
                                </div>
                                <div class="col-sm-6 right-content">
                                    <h3>Returning Customer</h3>
                                    <p>I am a returning customer</p>
                                    <div class="form-group">
                                        <label class="control-label" for="input-email">E-Mail</label>
                                        <input name="email" value="" placeholder="E-Mail" id="input-email" class="form-control" type="text"> </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-password">Password</label>
                                        <input name="password" value="" placeholder="Password" id="input-password" class="form-control" type="password">
                                    </div>
                                    <input value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-gray" type="button"> <a class="forgotten" href="forgotten.html">Forgotten Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion">Step 2: Billing Details</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-payment-address">
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="payment_address" value="existing" checked="checked" /> I want to use an existing address
                                    </label>
                                </div>
                                <div id="payment-existing">
                                    <select name="address_id" class="form-control">
                                        <option value="4" selected="selected">John Dow, Ung Van Khiem St., Binh Thanh Dist, Ceredigion, United Kingdom</option>
                                    </select>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="payment_address" value="new" /> I want to use a new address
                                    </label>
                                </div>
                                <br />
                                <div id="payment-new" style="display: none;">
                                    <div class="required">
                                        <label class="control-label" for="input-payment-firstname">First Name</label>
                                        <input type="text" name="firstname" value="" placeholder="First Name" id="input-payment-firstname" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-lastname">Last Name</label>
                                        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-payment-lastname" class="form-control" /> </div>
                                    <div class="">
                                        <label class="control-label" for="input-payment-company">Company</label>
                                        <input type="text" name="company" value="" placeholder="Company" id="input-payment-company" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-address-1">Address 1</label>
                                        <input type="text" name="address_1" value="" placeholder="Address 1" id="input-payment-address-1" class="form-control" /> </div>
                                    <div class="">
                                        <label class="control-label" for="input-payment-address-2">Address 2</label>
                                        <input type="text" name="address_2" value="" placeholder="Address 2" id="input-payment-address-2" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-city">City</label>
                                        <input type="text" name="city" value="" placeholder="City" id="input-payment-city" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-postcode">Post Code</label>
                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-payment-postcode" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-country">Country</label>
                                        <select name="country_id" id="input-payment-country" class="form-control">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Aaland Islands</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                            <option value="4">American Samoa</option>
                                            <option value="5">Andorra</option>
                                            <option value="6">Angola</option>
                                            <option value="7">Anguilla</option>
                                            <option value="8">Antarctica</option>
                                            <option value="9">Antigua and Barbuda</option>
                                            <option value="10">Argentina</option>
                                            <option value="11">Armenia</option>
                                            <option value="12">Aruba</option>
                                            <option value="252">Ascension Island (British)</option>
                                            <option value="13">Australia</option>
                                            <option value="14">Austria</option>
                                            <option value="15">Azerbaijan</option>
                                            <option value="16">Bahamas</option>
                                            <option value="17">Bahrain</option>
                                            <option value="18">Bangladesh</option>
                                            <option value="19">Barbados</option>
                                            <option value="20">Belarus</option>
                                            <option value="21">Belgium</option>
                                            <option value="22">Belize</option>
                                            <option value="23">Benin</option>
                                            <option value="24">Bermuda</option>
                                            <option value="25">Bhutan</option>
                                            <option value="26">Bolivia</option>
                                            <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="27">Bosnia and Herzegovina</option>
                                            <option value="28">Botswana</option>
                                            <option value="29">Bouvet Island</option>
                                            <option value="30">Brazil</option>
                                            <option value="31">British Indian Ocean Territory</option>
                                            <option value="32">Brunei Darussalam</option>
                                            <option value="33">Bulgaria</option>
                                            <option value="34">Burkina Faso</option>
                                            <option value="35">Burundi</option>
                                            <option value="36">Cambodia</option>
                                            <option value="37">Cameroon</option>
                                            <option value="38">Canada</option>
                                            <option value="251">Canary Islands</option>
                                            <option value="39">Cape Verde</option>
                                            <option value="40">Cayman Islands</option>
                                            <option value="41">Central African Republic</option>
                                            <option value="42">Chad</option>
                                            <option value="43">Chile</option>
                                            <option value="44">China</option>
                                            <option value="45">Christmas Island</option>
                                            <option value="46">Cocos (Keeling) Islands</option>
                                            <option value="47">Colombia</option>
                                            <option value="48">Comoros</option>
                                            <option value="49">Congo</option>
                                            <option value="50">Cook Islands</option>
                                            <option value="51">Costa Rica</option>
                                            <option value="52">Cote D'Ivoire</option>
                                            <option value="53">Croatia</option>
                                            <option value="54">Cuba</option>
                                            <option value="246">Curacao</option>
                                            <option value="55">Cyprus</option>
                                            <option value="56">Czech Republic</option>
                                            <option value="237">Democratic Republic of Congo</option>
                                            <option value="57">Denmark</option>
                                            <option value="58">Djibouti</option>
                                            <option value="59">Dominica</option>
                                            <option value="60">Dominican Republic</option>
                                            <option value="61">East Timor</option>
                                            <option value="62">Ecuador</option>
                                            <option value="63">Egypt</option>
                                            <option value="64">El Salvador</option>
                                            <option value="65">Equatorial Guinea</option>
                                            <option value="66">Eritrea</option>
                                            <option value="67">Estonia</option>
                                            <option value="68">Ethiopia</option>
                                            <option value="69">Falkland Islands (Malvinas)</option>
                                            <option value="70">Faroe Islands</option>
                                            <option value="71">Fiji</option>
                                            <option value="72">Finland</option>
                                            <option value="74">France, Metropolitan</option>
                                            <option value="75">French Guiana</option>
                                            <option value="76">French Polynesia</option>
                                            <option value="77">French Southern Territories</option>
                                            <option value="126">FYROM</option>
                                            <option value="78">Gabon</option>
                                            <option value="79">Gambia</option>
                                            <option value="80">Georgia</option>
                                            <option value="81">Germany</option>
                                            <option value="82">Ghana</option>
                                            <option value="83">Gibraltar</option>
                                            <option value="84">Greece</option>
                                            <option value="85">Greenland</option>
                                            <option value="86">Grenada</option>
                                            <option value="87">Guadeloupe</option>
                                            <option value="88">Guam</option>
                                            <option value="89">Guatemala</option>
                                            <option value="256">Guernsey</option>
                                            <option value="90">Guinea</option>
                                            <option value="91">Guinea-Bissau</option>
                                            <option value="92">Guyana</option>
                                            <option value="93">Haiti</option>
                                            <option value="94">Heard and Mc Donald Islands</option>
                                            <option value="95">Honduras</option>
                                            <option value="96">Hong Kong</option>
                                            <option value="97">Hungary</option>
                                            <option value="98">Iceland</option>
                                            <option value="99">India</option>
                                            <option value="100">Indonesia</option>
                                            <option value="101">Iran (Islamic Republic of)</option>
                                            <option value="102">Iraq</option>
                                            <option value="103">Ireland</option>
                                            <option value="254">Isle of Man</option>
                                            <option value="104">Israel</option>
                                            <option value="105">Italy</option>
                                            <option value="106">Jamaica</option>
                                            <option value="107">Japan</option>
                                            <option value="257">Jersey</option>
                                            <option value="108">Jordan</option>
                                            <option value="109">Kazakhstan</option>
                                            <option value="110">Kenya</option>
                                            <option value="111">Kiribati</option>
                                            <option value="113">Korea, Republic of</option>
                                            <option value="253">Kosovo, Republic of</option>
                                            <option value="114">Kuwait</option>
                                            <option value="115">Kyrgyzstan</option>
                                            <option value="116">Lao People's Democratic Republic</option>
                                            <option value="117">Latvia</option>
                                            <option value="118">Lebanon</option>
                                            <option value="119">Lesotho</option>
                                            <option value="120">Liberia</option>
                                            <option value="121">Libyan Arab Jamahiriya</option>
                                            <option value="122">Liechtenstein</option>
                                            <option value="123">Lithuania</option>
                                            <option value="124">Luxembourg</option>
                                            <option value="125">Macau</option>
                                            <option value="127">Madagascar</option>
                                            <option value="128">Malawi</option>
                                            <option value="129">Malaysia</option>
                                            <option value="130">Maldives</option>
                                            <option value="131">Mali</option>
                                            <option value="132">Malta</option>
                                            <option value="133">Marshall Islands</option>
                                            <option value="134">Martinique</option>
                                            <option value="135">Mauritania</option>
                                            <option value="136">Mauritius</option>
                                            <option value="137">Mayotte</option>
                                            <option value="138">Mexico</option>
                                            <option value="139">Micronesia, Federated States of</option>
                                            <option value="140">Moldova, Republic of</option>
                                            <option value="141">Monaco</option>
                                            <option value="142">Mongolia</option>
                                            <option value="242">Montenegro</option>
                                            <option value="143">Montserrat</option>
                                            <option value="144">Morocco</option>
                                            <option value="145">Mozambique</option>
                                            <option value="146">Myanmar</option>
                                            <option value="147">Namibia</option>
                                            <option value="148">Nauru</option>
                                            <option value="149">Nepal</option>
                                            <option value="150">Netherlands</option>
                                            <option value="151">Netherlands Antilles</option>
                                            <option value="152">New Caledonia</option>
                                            <option value="153">New Zealand</option>
                                            <option value="154">Nicaragua</option>
                                            <option value="155">Niger</option>
                                            <option value="156">Nigeria</option>
                                            <option value="157">Niue</option>
                                            <option value="158">Norfolk Island</option>
                                            <option value="112">North Korea</option>
                                            <option value="159">Northern Mariana Islands</option>
                                            <option value="160">Norway</option>
                                            <option value="161">Oman</option>
                                            <option value="162">Pakistan</option>
                                            <option value="163">Palau</option>
                                            <option value="247">Palestinian Territory, Occupied</option>
                                            <option value="164">Panama</option>
                                            <option value="165">Papua New Guinea</option>
                                            <option value="166">Paraguay</option>
                                            <option value="167">Peru</option>
                                            <option value="168">Philippines</option>
                                            <option value="169">Pitcairn</option>
                                            <option value="170">Poland</option>
                                            <option value="171">Portugal</option>
                                            <option value="172">Puerto Rico</option>
                                            <option value="173">Qatar</option>
                                            <option value="174">Reunion</option>
                                            <option value="175">Romania</option>
                                            <option value="176">Russian Federation</option>
                                            <option value="177">Rwanda</option>
                                            <option value="178">Saint Kitts and Nevis</option>
                                            <option value="179">Saint Lucia</option>
                                            <option value="180">Saint Vincent and the Grenadines</option>
                                            <option value="181">Samoa</option>
                                            <option value="182">San Marino</option>
                                            <option value="183">Sao Tome and Principe</option>
                                            <option value="184">Saudi Arabia</option>
                                            <option value="185">Senegal</option>
                                            <option value="243">Serbia</option>
                                            <option value="186">Seychelles</option>
                                            <option value="187">Sierra Leone</option>
                                            <option value="188">Singapore</option>
                                            <option value="189">Slovak Republic</option>
                                            <option value="190">Slovenia</option>
                                            <option value="191">Solomon Islands</option>
                                            <option value="192">Somalia</option>
                                            <option value="193">South Africa</option>
                                            <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                            <option value="248">South Sudan</option>
                                            <option value="195">Spain</option>
                                            <option value="196">Sri Lanka</option>
                                            <option value="249">St. Barthelemy</option>
                                            <option value="197">St. Helena</option>
                                            <option value="250">St. Martin (French part)</option>
                                            <option value="198">St. Pierre and Miquelon</option>
                                            <option value="199">Sudan</option>
                                            <option value="200">Suriname</option>
                                            <option value="201">Svalbard and Jan Mayen Islands</option>
                                            <option value="202">Swaziland</option>
                                            <option value="203">Sweden</option>
                                            <option value="204">Switzerland</option>
                                            <option value="205">Syrian Arab Republic</option>
                                            <option value="206">Taiwan</option>
                                            <option value="207">Tajikistan</option>
                                            <option value="208">Tanzania, United Republic of</option>
                                            <option value="209">Thailand</option>
                                            <option value="210">Togo</option>
                                            <option value="211">Tokelau</option>
                                            <option value="212">Tonga</option>
                                            <option value="213">Trinidad and Tobago</option>
                                            <option value="255">Tristan da Cunha</option>
                                            <option value="214">Tunisia</option>
                                            <option value="215">Turkey</option>
                                            <option value="216">Turkmenistan</option>
                                            <option value="217">Turks and Caicos Islands</option>
                                            <option value="218">Tuvalu</option>
                                            <option value="219">Uganda</option>
                                            <option value="220">Ukraine</option>
                                            <option value="221">United Arab Emirates</option>
                                            <option value="222" selected="selected">United Kingdom</option>
                                            <option value="223">United States</option>
                                            <option value="224">United States Minor Outlying Islands</option>
                                            <option value="225">Uruguay</option>
                                            <option value="226">Uzbekistan</option>
                                            <option value="227">Vanuatu</option>
                                            <option value="228">Vatican City State (Holy See)</option>
                                            <option value="229">Venezuela</option>
                                            <option value="230">Viet Nam</option>
                                            <option value="231">Virgin Islands (British)</option>
                                            <option value="232">Virgin Islands (U.S.)</option>
                                            <option value="233">Wallis and Futuna Islands</option>
                                            <option value="234">Western Sahara</option>
                                            <option value="235">Yemen</option>
                                            <option value="238">Zambia</option>
                                            <option value="239">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="required">
                                        <label class="control-label" for="input-payment-zone">Region / State</label>
                                        <select name="zone_id" id="input-payment-zone" class="form-control"> </select>
                                    </div>
                                </div>
                                <div class="buttons clearfix">
                                    <div class="pull-left">
                                        <input type="button" value="Continue" id="button-payment-address" data-loading-text="Loading..." class="btn btn-gray" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion">Step 3: Delivery Details</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-shipping-address">
                        <div class="panel-body">
                            <form class="form-horizontal">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shipping_address" value="existing" checked="checked" /> I want to use an existing address</label>
                                </div>
                                <div id="shipping-existing">
                                    <select name="address_id" class="form-control">
                                        <option value="4" selected="selected">Agus Budi, dsadsa, asdas, Ceredigion, United Kingdom</option>
                                    </select>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="shipping_address" value="new" /> I want to use a new address</label>
                                </div>
                                <br />
                                <div id="shipping-new" style="display: none;">
                                    <div class="required">
                                        <label class="control-label" for="input-shipping-firstname">First Name</label>
                                        <input type="text" name="firstname" value="" placeholder="First Name" id="input-shipping-firstname" class="form-control" /> </div>
                                    <div class="required">
                                        <label class="control-label" for="input-shipping-lastname">Last Name</label>
                                        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-shipping-lastname" class="form-control" />
                                        <div class="">
                                            <label class="control-label" for="input-shipping-company">Company</label>
                                            <input type="text" name="company" value="" placeholder="Company" id="input-shipping-company" class="form-control" /> </div>
                                        <div class="required">
                                            <label class="control-label" for="input-shipping-address-1">Address 1</label>
                                            <input type="text" name="address_1" value="" placeholder="Address 1" id="input-shipping-address-1" class="form-control" /> </div>
                                        <div class="">
                                            <label class="control-label" for="input-shipping-address-2">Address 2</label>
                                            <input type="text" name="address_2" value="" placeholder="Address 2" id="input-shipping-address-2" class="form-control" /> </div>
                                        <div class="required">
                                            <label class="control-label" for="input-shipping-city">City</label>
                                            <input type="text" name="city" value="" placeholder="City" id="input-shipping-city" class="form-control" /> </div>
                                        <div class="required">
                                            <label class="control-label" for="input-shipping-postcode">Post Code</label>
                                            <input type="text" name="postcode" value="242355" placeholder="Post Code" id="input-shipping-postcode" class="form-control" /> </div>
                                        <div class="required">
                                            <label class="control-label" for="input-shipping-country">Country</label>
                                            <select name="country_id" id="input-shipping-country" class="form-control">
                                                <option value=""> --- Please Select --- </option>
                                                <option value="244">Aaland Islands</option>
                                                <option value="1">Afghanistan</option>
                                                <option value="2">Albania</option>
                                                <option value="3">Algeria</option>
                                                <option value="4">American Samoa</option>
                                                <option value="5">Andorra</option>
                                                <option value="6">Angola</option>
                                                <option value="7">Anguilla</option>
                                                <option value="8">Antarctica</option>
                                                <option value="9">Antigua and Barbuda</option>
                                                <option value="10">Argentina</option>
                                                <option value="11">Armenia</option>
                                                <option value="12">Aruba</option>
                                                <option value="252">Ascension Island (British)</option>
                                                <option value="13">Australia</option>
                                                <option value="14">Austria</option>
                                                <option value="15">Azerbaijan</option>
                                                <option value="16">Bahamas</option>
                                                <option value="17">Bahrain</option>
                                                <option value="18">Bangladesh</option>
                                                <option value="19">Barbados</option>
                                                <option value="20">Belarus</option>
                                                <option value="21">Belgium</option>
                                                <option value="22">Belize</option>
                                                <option value="23">Benin</option>
                                                <option value="24">Bermuda</option>
                                                <option value="25">Bhutan</option>
                                                <option value="26">Bolivia</option>
                                                <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="27">Bosnia and Herzegovina</option>
                                                <option value="28">Botswana</option>
                                                <option value="29">Bouvet Island</option>
                                                <option value="30">Brazil</option>
                                                <option value="31">British Indian Ocean Territory</option>
                                                <option value="32">Brunei Darussalam</option>
                                                <option value="33">Bulgaria</option>
                                                <option value="34">Burkina Faso</option>
                                                <option value="35">Burundi</option>
                                                <option value="36">Cambodia</option>
                                                <option value="37">Cameroon</option>
                                                <option value="38">Canada</option>
                                                <option value="251">Canary Islands</option>
                                                <option value="39">Cape Verde</option>
                                                <option value="40">Cayman Islands</option>
                                                <option value="41">Central African Republic</option>
                                                <option value="42">Chad</option>
                                                <option value="43">Chile</option>
                                                <option value="44">China</option>
                                                <option value="45">Christmas Island</option>
                                                <option value="46">Cocos (Keeling) Islands</option>
                                                <option value="47">Colombia</option>
                                                <option value="48">Comoros</option>
                                                <option value="49">Congo</option>
                                                <option value="50">Cook Islands</option>
                                                <option value="51">Costa Rica</option>
                                                <option value="52">Cote D'Ivoire</option>
                                                <option value="53">Croatia</option>
                                                <option value="54">Cuba</option>
                                                <option value="246">Curacao</option>
                                                <option value="55">Cyprus</option>
                                                <option value="56">Czech Republic</option>
                                                <option value="237">Democratic Republic of Congo</option>
                                                <option value="57">Denmark</option>
                                                <option value="58">Djibouti</option>
                                                <option value="59">Dominica</option>
                                                <option value="60">Dominican Republic</option>
                                                <option value="61">East Timor</option>
                                                <option value="62">Ecuador</option>
                                                <option value="63">Egypt</option>
                                                <option value="64">El Salvador</option>
                                                <option value="65">Equatorial Guinea</option>
                                                <option value="66">Eritrea</option>
                                                <option value="67">Estonia</option>
                                                <option value="68">Ethiopia</option>
                                                <option value="69">Falkland Islands (Malvinas)</option>
                                                <option value="70">Faroe Islands</option>
                                                <option value="71">Fiji</option>
                                                <option value="72">Finland</option>
                                                <option value="74">France, Metropolitan</option>
                                                <option value="75">French Guiana</option>
                                                <option value="76">French Polynesia</option>
                                                <option value="77">French Southern Territories</option>
                                                <option value="126">FYROM</option>
                                                <option value="78">Gabon</option>
                                                <option value="79">Gambia</option>
                                                <option value="80">Georgia</option>
                                                <option value="81">Germany</option>
                                                <option value="82">Ghana</option>
                                                <option value="83">Gibraltar</option>
                                                <option value="84">Greece</option>
                                                <option value="85">Greenland</option>
                                                <option value="86">Grenada</option>
                                                <option value="87">Guadeloupe</option>
                                                <option value="88">Guam</option>
                                                <option value="89">Guatemala</option>
                                                <option value="256">Guernsey</option>
                                                <option value="90">Guinea</option>
                                                <option value="91">Guinea-Bissau</option>
                                                <option value="92">Guyana</option>
                                                <option value="93">Haiti</option>
                                                <option value="94">Heard and Mc Donald Islands</option>
                                                <option value="95">Honduras</option>
                                                <option value="96">Hong Kong</option>
                                                <option value="97">Hungary</option>
                                                <option value="98">Iceland</option>
                                                <option value="99">India</option>
                                                <option value="100">Indonesia</option>
                                                <option value="101">Iran (Islamic Republic of)</option>
                                                <option value="102">Iraq</option>
                                                <option value="103">Ireland</option>
                                                <option value="254">Isle of Man</option>
                                                <option value="104">Israel</option>
                                                <option value="105">Italy</option>
                                                <option value="106">Jamaica</option>
                                                <option value="107">Japan</option>
                                                <option value="257">Jersey</option>
                                                <option value="108">Jordan</option>
                                                <option value="109">Kazakhstan</option>
                                                <option value="110">Kenya</option>
                                                <option value="111">Kiribati</option>
                                                <option value="113">Korea, Republic of</option>
                                                <option value="253">Kosovo, Republic of</option>
                                                <option value="114">Kuwait</option>
                                                <option value="115">Kyrgyzstan</option>
                                                <option value="116">Lao People's Democratic Republic</option>
                                                <option value="117">Latvia</option>
                                                <option value="118">Lebanon</option>
                                                <option value="119">Lesotho</option>
                                                <option value="120">Liberia</option>
                                                <option value="121">Libyan Arab Jamahiriya</option>
                                                <option value="122">Liechtenstein</option>
                                                <option value="123">Lithuania</option>
                                                <option value="124">Luxembourg</option>
                                                <option value="125">Macau</option>
                                                <option value="127">Madagascar</option>
                                                <option value="128">Malawi</option>
                                                <option value="129">Malaysia</option>
                                                <option value="130">Maldives</option>
                                                <option value="131">Mali</option>
                                                <option value="132">Malta</option>
                                                <option value="133">Marshall Islands</option>
                                                <option value="134">Martinique</option>
                                                <option value="135">Mauritania</option>
                                                <option value="136">Mauritius</option>
                                                <option value="137">Mayotte</option>
                                                <option value="138">Mexico</option>
                                                <option value="139">Micronesia, Federated States of</option>
                                                <option value="140">Moldova, Republic of</option>
                                                <option value="141">Monaco</option>
                                                <option value="142">Mongolia</option>
                                                <option value="242">Montenegro</option>
                                                <option value="143">Montserrat</option>
                                                <option value="144">Morocco</option>
                                                <option value="145">Mozambique</option>
                                                <option value="146">Myanmar</option>
                                                <option value="147">Namibia</option>
                                                <option value="148">Nauru</option>
                                                <option value="149">Nepal</option>
                                                <option value="150">Netherlands</option>
                                                <option value="151">Netherlands Antilles</option>
                                                <option value="152">New Caledonia</option>
                                                <option value="153">New Zealand</option>
                                                <option value="154">Nicaragua</option>
                                                <option value="155">Niger</option>
                                                <option value="156">Nigeria</option>
                                                <option value="157">Niue</option>
                                                <option value="158">Norfolk Island</option>
                                                <option value="112">North Korea</option>
                                                <option value="159">Northern Mariana Islands</option>
                                                <option value="160">Norway</option>
                                                <option value="161">Oman</option>
                                                <option value="162">Pakistan</option>
                                                <option value="163">Palau</option>
                                                <option value="247">Palestinian Territory, Occupied</option>
                                                <option value="164">Panama</option>
                                                <option value="165">Papua New Guinea</option>
                                                <option value="166">Paraguay</option>
                                                <option value="167">Peru</option>
                                                <option value="168">Philippines</option>
                                                <option value="169">Pitcairn</option>
                                                <option value="170">Poland</option>
                                                <option value="171">Portugal</option>
                                                <option value="172">Puerto Rico</option>
                                                <option value="173">Qatar</option>
                                                <option value="174">Reunion</option>
                                                <option value="175">Romania</option>
                                                <option value="176">Russian Federation</option>
                                                <option value="177">Rwanda</option>
                                                <option value="178">Saint Kitts and Nevis</option>
                                                <option value="179">Saint Lucia</option>
                                                <option value="180">Saint Vincent and the Grenadines</option>
                                                <option value="181">Samoa</option>
                                                <option value="182">San Marino</option>
                                                <option value="183">Sao Tome and Principe</option>
                                                <option value="184">Saudi Arabia</option>
                                                <option value="185">Senegal</option>
                                                <option value="243">Serbia</option>
                                                <option value="186">Seychelles</option>
                                                <option value="187">Sierra Leone</option>
                                                <option value="188">Singapore</option>
                                                <option value="189">Slovak Republic</option>
                                                <option value="190">Slovenia</option>
                                                <option value="191">Solomon Islands</option>
                                                <option value="192">Somalia</option>
                                                <option value="193">South Africa</option>
                                                <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                                <option value="248">South Sudan</option>
                                                <option value="195">Spain</option>
                                                <option value="196">Sri Lanka</option>
                                                <option value="249">St. Barthelemy</option>
                                                <option value="197">St. Helena</option>
                                                <option value="250">St. Martin (French part)</option>
                                                <option value="198">St. Pierre and Miquelon</option>
                                                <option value="199">Sudan</option>
                                                <option value="200">Suriname</option>
                                                <option value="201">Svalbard and Jan Mayen Islands</option>
                                                <option value="202">Swaziland</option>
                                                <option value="203">Sweden</option>
                                                <option value="204">Switzerland</option>
                                                <option value="205">Syrian Arab Republic</option>
                                                <option value="206">Taiwan</option>
                                                <option value="207">Tajikistan</option>
                                                <option value="208">Tanzania, United Republic of</option>
                                                <option value="209">Thailand</option>
                                                <option value="210">Togo</option>
                                                <option value="211">Tokelau</option>
                                                <option value="212">Tonga</option>
                                                <option value="213">Trinidad and Tobago</option>
                                                <option value="255">Tristan da Cunha</option>
                                                <option value="214">Tunisia</option>
                                                <option value="215">Turkey</option>
                                                <option value="216">Turkmenistan</option>
                                                <option value="217">Turks and Caicos Islands</option>
                                                <option value="218">Tuvalu</option>
                                                <option value="219">Uganda</option>
                                                <option value="220">Ukraine</option>
                                                <option value="221">United Arab Emirates</option>
                                                <option value="222" selected="selected">United Kingdom</option>
                                                <option value="223">United States</option>
                                                <option value="224">United States Minor Outlying Islands</option>
                                                <option value="225">Uruguay</option>
                                                <option value="226">Uzbekistan</option>
                                                <option value="227">Vanuatu</option>
                                                <option value="228">Vatican City State (Holy See)</option>
                                                <option value="229">Venezuela</option>
                                                <option value="230">Viet Nam</option>
                                                <option value="231">Virgin Islands (British)</option>
                                                <option value="232">Virgin Islands (U.S.)</option>
                                                <option value="233">Wallis and Futuna Islands</option>
                                                <option value="234">Western Sahara</option>
                                                <option value="235">Yemen</option>
                                                <option value="238">Zambia</option>
                                                <option value="239">Zimbabwe</option>
                                            </select>
                                        </div>
                                        <div class="required">
                                            <label class="control-label" for="input-shipping-zone">Region / State</label>
                                            <select name="zone_id" id="input-shipping-zone" class="form-control"> </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons clearfix">
                                    <div class="pull-left">
                                        <input type="button" value="Continue" id="button-shipping-address" data-loading-text="Loading..." class="btn btn-gray" /> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion">Step 4: Delivery Method</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-shipping-method">
                        <div class="panel-body">
                            <p>Please select the preferred shipping method to use on this order.</p>
                            <p><strong>Flat Rate</strong></p>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="shipping_method" value="flat.flat" checked="checked" /> Flat Shipping Rate - $8.00
                                </label>
                            </div>
                            <p><strong>Add Comments About Your Order</strong></p>
                            <p><textarea name="comment" rows="8" class="form-control"></textarea></p>
                            <div class="buttons">
                                <div class="pull-left">
                                    <input type="button" value="Continue" id="button-shipping-method" data-loading-text="Loading..." class="btn btn-gray" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion">Step 5: Payment Method</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-payment-method">
                        <div class="panel-body">
                            <p>Please select the preferred payment method to use on this order.</p>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="payment_method" value="cod" checked="checked" />Cash On Delivery
                                </label>
                            </div>
                            <p><strong>Add Comments About Your Order</strong></p>
                            <p><textarea name="comment" rows="8" class="form-control"></textarea></p>
                            <div class="buttons">
                                <div class="pull-left">
                                    <input type="checkbox" name="agree" value="1" />
                                    &nbsp;I have read and agree to the <a href="http://webstrot.com/html/tm/healthshop/01_Drug_Store/terms.html" class="agree"><b>Terms &amp; Conditions</b></a>  <br/>
                                    <input type="button" value="Continue" id="button-payment-method" data-loading-text="Loading..." class="btn btn-gray" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion">Step 6: Confirm Order</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-checkout-confirm">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td class="name">Product Name</td>
                                            <td class="model">Model</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="product-price">Unit Price</td>
                                            <td class="total">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="name">
                                                <a href="product-detail.html">Cashmere cuff vintage Levi maxi</a>
                                                <br /> &nbsp;<small> - Color: Pink</small>
                                            </td>
                                            <td class="model">Product 5</td>
                                            <td class="quantity">3</td>
                                            <td class="product-price">$158.00</td>
                                            <td class="total">$474.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">Sub-Total:</td>
                                            <td class="text-right">$390.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Flat Shipping Rate:</td>
                                            <td class="text-right">$5.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Eco Tax (-2.00):</td>
                                            <td class="text-right">$8.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">VAT (20%):</td>
                                            <td class="text-right">$79.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total:</td>
                                            <td class="text-right">$482.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="buttons">
                                <div class="pull-right">
                                    <input type="button" value="Confirm Order" id="button-confirm" class="btn btn-primary" data-loading-text="Loading..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel -->
            </div>
        </div><!-- /.checkout -->
    </div><!-- /#content -->
@endsection


@push('scripts')
    <script>
        jQuery(document).ready(function() {
            $('[data-toggle="collapse"]').click(function(){
                $('.panel-heading').removeClass('active')
                $(this).parents('.panel-heading').addClass('active');
            })

            /* Billing Option */
            $('input[name=\'payment_address\']').on('change', function(){
                if (this.value == 'new'){
                    $('#payment-existing').hide();
                    $('#payment-new').show();
                }else{
                    $('#payment-existing').show();
                    $('#payment-new').hide();
                }
            });

            /* Shipping Option */
            $('input[name=\'shipping_address\']').on('change', function(){
                if (this.value == 'new'){
                    $('#shipping-existing').hide();
                    $('#shipping-new').show();
                }else{
                    $('#shipping-existing').show();
                    $('#shipping-new').hide();
                }
            });

            $('#button-confirm').on('click', function(){
                location = 'checkout-success.html';
            });
        });
    </script>
@endpush
