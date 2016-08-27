<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Mawla</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>
      <nav role="navigation" id="top">
    <div class="nav-wrapper container" id ="navContainer" style="width=100%">
        <a id="logo-container" href="index.html" class="brand-logo center" > <img src="img/mawlasheildwithwhite.png" class="navLogo" /> </a>
      <ul class="left hide-on-med-and-down" id="navListLeft" >
        <li class="navButton"><a href="#" class=" navLink">About Us</a></li>
        <li class="navButton"><a href="infohub.html" class=" navLink">Info Hub</a></li>
        <li class="navButton"><a href="#" class=" navLink">Contact</a></li>
        </ul>
          <ul class="right hide-on-med-and-down" id="navListRight">
        <li class="navButton"><a href="#" class=" navLink">Resources</a></li>
        <li class="navButton"><a href="#" class=" navLink">News</a></li>
        <li class="navButton"><a href="#" class=" navLink">Disclaimers</a></li>  
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">About Us</a></li>
        <li><a href="infohub.html">Info Hub</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Disclaimers</a></li>  
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="container" id="form">
        <form id="multipage" method="post" action="submit.php">
            <fieldset id="page_one">
                <div class="section" style="margin-bottom:0;">
                    <h2>TESTIMONY</h2></div>
                <div class="section" id="scrollable">
                    <h5>Scene</h5>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s13 m4">
                            Time Of Incident:
                            <input type="time" name="time_of_incident">
                        </div>
                        <div class="input-field col s12 m3">
                            Date Of Incident:
                              <input type="date" class="datepicker" name="date_of_incident">
                        </div>
                        <div class="input-field col s12 m4">
                            <br>
                            <select id="select" name="weather">
      <option value="">Weather</option>
      <option value="clear">Clear</option>
      <option value="cloudy">Cloudy</option>
      <option value="sunny">Sunny</option>
      <option value="precipitating">Precipitating</option>
    </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m4">
                            <select id="select" name="medium">
      <option value="">Medium</option>
      <option value="inperson">In Person</option>
      <option value="internet">Internet</option>
      <option value="other">Other</option>
    </select>
                        </div>
                        <div class="input-field col s12 m6">
                            <input placeholder="Address" id="address" type="text" class="validate" name="address">
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m4">
                            <input placeholder="Nearby Landmarks" id="nearbylandmarks" type="text" class="validate" name="landmark">
                        </div>
                        <div class="input-field col s12 m7">
                            <input placeholder="Describtion of area where incident occured" id="areaoccured" type="text" class="validate" name="describtion_of_area">
                        </div>
                    </div>
                    <h5> SUSPECT(S)</h5>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s13 m4">
                            <input id="suspect_name" type="text" class="validate" name="suspect">
                            <label for="suspect_name">Name</label>
                        </div>
                        <div class="input-field col s12 m4">

                            <select id="select" name="sus_race">
      <option value="">Race</option>
      <option value="black">White</option>
      <option value="white">Black</option>
      <option value="poc">POC</option>
    </select>
                        </div>
                        <div class="input-field col s12 m3">
                            <select id="select" name="sus_gender">
      <option value="">Gender Presentaion</option>
      <option value="m">masculine</option>
      <option value="f">faminine</option>
    </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s9 m3">
                            <select id="select" name="relation_to">
      <option value="">Relation to You</option>
      <option value="1">co-worker</option>
      <option value="2">employer</option>
      <option value="3">family</option>
      <option value="1">instructor</option>
      <option value="2">neighbor</option>
      <option value="3">spouse</option>
    </select>
                        </div>
                        <div class="input-field col s9 m3">
                            <select id="select" name="sus_language">
      <option value="">Language</option>
      <option value="E">English</option>
      <option value="A">Arabic</option>
      <option value="S">Spanish</option>
      <option value="U">Urdu</option>
      <option value="O">Other</option>
    </select>
                        </div>
                        <div class="input-field col s9 m3">
                            <select id="select" name="sus_number">
      <option value="">Number of Suspects</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
                        </div>
                    </div>
                    <h5> Testimony</h5>
                    <br>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea1" class="materialize-textarea" name="before_incident"></textarea>
                            <label for="textarea1">wHAT WERE YOU DOING before the incident occured?</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea2" class="materialize-textarea" name="during_incident"></textarea>
                            <label for="textarea2">DESCRIBE WHAT HAPPENED</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m12">
                            <textarea id="textarea3" class="materialize-textarea" name="end_incident"></textarea>
                            <label for="textarea3">HOW DID THE INCIDENT END?</label>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m5">
                            <select id="select" name="sus_approach">
      <option value="">Has this person approached before?</option>
      <option value="Y">No</option>
      <option value="N">Yes</option>
      <option value="O">Not Sure</option>
    </select>
                        </div>
                        <div class="input-field col s12 m5">
                            <select id="select" name="sus_approach_num">
      <option value="">If yes, on how many occasions?</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3 or mmore</option>
    </select>
                        </div>
                    </div>
                    <p style="font-size:110%;">Other than your assumed religious identity, did this person degrade any other aspect of you?</p>

                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m12">
                            <select id="select" name="sus_degrade">
      <option value=""></option>
      <option value="G">My gender</option>
      <option value="S">my sexuality</option>
      <option value="B">my body</option>
      <option value="R">my race</option>
      <option value="N/a">not sure</option>
    </select>
                        </div>
                    </div>

                </div>
            </fieldset>
            

            <fieldset id="page_two">
                <div class="section" style="margin-bottom:0;">
                    <h2>BIODATA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></div>
                <div class="section" id="scrollable2">
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s13 m4">
                            <input id="first_name" type="text" class="validate" name="first_name">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s12 m3">
                            <input id="middle_initial" type="text" class="validate" name="middle_name">
                            <label for="middle_initial">Middle Initial</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input id="last_name" type="text" class="validate" name="last_name">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m8">
                            <select id="select" name="race">
      <option value="">You Racially Idenitfy As</option>
      <option value="b">Black</option>
      <option value="w">White</option>
      <option value="l">LatinX</option>
      <option value="sa">South Asian</option>
      <option value="se">East Asian</option>
      <option value="n/a">Don't ID</option>
    </select>
                        </div>
                        <div class="input-field col s12 m4">
                            <select id="select" name="gender">
      <option value="">Gender</option>
      <option value="A">Agender</option>
      <option value="NB">nonbinary</option>
      <option value="M">male</option>
                                 <option value="F">female</option>
                                 <option value="T">Transgender</option>
                                
    </select>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s11 m8">
                            <select id="select" name="race_other">
      <option value="">Others Racially Idenitfy You As</option>
      <option value="b">Black</option>
      <option value="w">White</option>
      <option value="l">LatinX</option>
      <option value="a">Arab</option>
      <option value="in">Indian</option>
      <option value="af">Afghan</option>
        <option value="poc">POC</option>
                                
    </select>
                        </div>
                        <div class="input-field col s10 m3">
                            <select id="select" name="age">
      <option value="">Age</option>
       <option value="001">1</option>
    <option value="002">2</option>
    <option value="003">3</option>
    <option value="004">4</option>
    <option value="005">5</option>
    <option value="006">6</option>
    <option value="007">7</option>
    <option value="008">8</option>
    <option value="009">9</option>
    <option value="010">10</option>
    <option value="011">11</option>
    <option value="012">12</option>
    <option value="013">13</option>
    <option value="014">14</option>
    <option value="015">15</option>
    <option value="016">16</option>
    <option value="017">17</option>
    <option value="018">18</option>
    <option value="019">19</option>
    <option value="020">20</option>
    <option value="021">21</option>
    <option value="022">22</option>
    <option value="023">23</option>
    <option value="024">24</option>
    <option value="025">25</option>
    <option value="026">26</option>
    <option value="027">27</option>
    <option value="028">28</option>
    <option value="029">29</option>
    <option value="030">30</option>
    <option value="031">31</option>
    <option value="032">32</option>
    <option value="033">33</option>
    <option value="034">34</option>
    <option value="035">35</option>
    <option value="036">36</option>
    <option value="037">37</option>
    <option value="038">38</option>
    <option value="039">39</option>
    <option value="040">40</option>
    <option value="041">41</option>
    <option value="042">42</option>
    <option value="043">43</option>
    <option value="044">44</option>
    <option value="045">45</option>
    <option value="046">46</option>
    <option value="047">47</option>
    <option value="048">48</option>
    <option value="049">49</option>
    <option value="050">50</option>
    <option value="051">51</option>
    <option value="052">52</option>
    <option value="053">53</option>
    <option value="054">54</option>
    <option value="055">55</option>
    <option value="056">56</option>
    <option value="057">57</option>
    <option value="058">58</option>
    <option value="059">59</option>
    <option value="050">50</option>
    <option value="061">61</option>
    <option value="062">62</option>
    <option value="063">63</option>
    <option value="064">64</option>
    <option value="065">65</option>
    <option value="066">66</option>
    <option value="067">67</option>
    <option value="068">68</option>
    <option value="069">69</option>
    <option value="070">70</option>
    </select>
                        </div>
                    </div>
            
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s10 m5">
                            <select id="select" name="cultural">
      <option value="">Country of cultural identity </option>
      <option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
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
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
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
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
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
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
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
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
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
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
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
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
    </select>
                        </div>
                        <div class="input-field col s8 m5">
                            <select id="select" name="able_bodied">
      <option value="">Are You Able Bodied</option>
      <option value="Y">YES, I HAVE A DISABILITY(or previously had a disability)</option>
      <option value="N">NO, I DON’T HAVE A DISABILITY</option>
      <option value="N/A">I DON’T WISH TO ANSWER</option>
    </select>

                        </div>

                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m4">
                            <select id="select" name="citizenship">
      <option value="">Citizenship </option>
      <option value="AF">Afghanistan</option>
	<option value="AX">Åland Islands</option>
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
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
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
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
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
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
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
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
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
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
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
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
    </select>
                        </div>
                        <div class="input-field col s12 m4">
                            <select id="select" name="religion">
      <option value="">Religious Identity</option>
      <option value="M">Muslim</option>
      <option value="S">Sikh</option>
      <option value="H">Hindu</option>
       <option value="C">Christian</option>
    </select>

                        </div>
                        <div class="input-field col s12 m4">
      <input id="city" type="text" class="validate" name="city">
                            <label for="city">City of Residence</label>
                        </div>

                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s10 m5">
                            <select id="select" name="native_language">
      <option value=""> Native Language </option>
    <option>English</option>                            
    <option>Spanish</option>
    <option>French</option>
    <option>German</option>
    <option>Italian</option>
    <option>Chinese</option>
    <option>Tagalog</option>
    <option>Polish</option>
    <option>Korean</option>
    <option>Vietnamese</option>
    <option>Portuguese</option>
    <option>Japanese</option>
    <option>Greek</option>
    <option>Arabic</option>
    <option>Hindi (urdu)</option>
    <option>Russian</option>
    <option>Yiddish</option>
    <option>Thai (laotian)</option>
    <option>Persian</option>
    <option>French Creole</option>
    <option>Armenian</option>
    <option>Navaho</option>
    <option>Hungarian</option>
    <option>Hebrew</option>
    <option>Dutch</option>
    <option>Mon-khmer (cambodian)</option>
    <option>Gujarathi</option>
    <option>Ukrainian</option>
    <option>Czech</option>
    <option>Pennsylvania Dutch</option>
    <option>Miao (hmong)</option>
    <option>Norwegian</option>
    <option>Slovak</option>
    <option>Swedish</option>
    <option>Serbocroatian</option>
    <option>Kru</option>
    <option>Rumanian</option>
    <option>Lithuanian</option>
    <option>Finnish</option>
    <option>Panjabi</option>
    <option>Formosan</option>
    <option>Croatian</option>
    <option>Turkish</option>
    <option>Ilocano</option>
    <option>Bengali</option>
    <option>Danish</option>
    <option>Syriac</option>
    <option>Samoan</option>
    <option>Malayalam</option>
    <option>Cajun</option>
    <option>Amharic</option>
    </select>
                        </div>
                    </div>
                </div>

            </fieldset>

            
 <fieldset id="page_three">
     <div class="section" style="margin-bottom:0;">
 <h3 id="formh3" style="padding-bottom:3px;" >questionnaire</h3>
                <div class="section" id="scrollable3" style="padding:5px;">
                    <p>Did this incident cause you to reasonably fear for your safety?</p>
              <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s12 m12">
                            <select id="select" name="fear">
      <option value="">  </option>
      <option value="Y">Yes</option>
      <option value="N">No</option>
      <option value="N/A">Not Sure</option>
    </select>
                        </div>
                    </div>
                    
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
          <p class="range-field">
              On a scale from 1-10, how would you rank your feeling of safety in relationship to the incident?
      <input type="range" id="test5" min="0" max="10" name="rank_safety" />
    </p>
                        </div>
                    </div>
                    
                     <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
          <p class="range-field">
              On a scale from 1-10, how strongly do you feel the accused wronged you on the basis of your race, religion, and or country of origin?
      <input type="range" id="test5" min="0" max="10" name="rank_wronged" />
    </p>
                        </div>
                    </div>
                      <blockquote style="margin:0px;font-size:120%;">
                        Communicating a threat: did the suspect(s) orally, in writing, or by any other means threaten to physically injure the person or that person's child, sibling, spouse, or dependent or willfully threatens to damage the property of another? </blockquote>
                    <br>
                    <p>Did the accused VERBALY threaten to inflict bodily harm to you or anyone related to you?</p>
                     <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
                            <select id="select" name="verbal">
     <option value="">  </option>
      <option value="Y">Yes</option>
      <option value="N">No</option>
      <option value="N/A">Not Sure</option>
    </select>
                        </div>
                    </div>
                     <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
                            <select id="select" name="phone_contact">
      <option value=""> Did the accused contact you by phone?</option>
      <option value="">  </option>
      <option value="Y">Yes</option>
      <option value="N">No</option>
      <option value="N/A">Not Sure</option>
    </select>
                        </div>
                    </div>
                     <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
                            <select id="select" name="phone_contact_number">
      <option value=""> If so how many times?</option>
    <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
                        </div>
                    </div>
                   <p>Did the accused contact you by electronic communication (via the internet)?</p>
                    <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
                            <select id="select" name="electronic_comm">
      <option value=""> </option>
        <option value="">  </option>
      <option value="Y">Yes</option>
      <option value="N">No</option>
      <option value="N/A">Not Sure</option>
    </select>
                        </div>
                    </div>
                     <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
          <p class="range-field">
             On a scale from 1-10, how likely do you believe the accused will carry out said threat?
      <input type="range" id="test5" min="0" max="10" name="rank_threat" />
    </p>
                        </div>
                    </div>
            <p> Did the accused willfully follow you on this or any other occasion?</p>
                       <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
                            <select id="select" name="followed">
      <option value=""> </option>
      <option value="Y">Yes</option>
      <option value="N">No</option>
      <option value="N/A">Not Sure</option>
    </select>
                           </div>
                    </div>
                        <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
          <p class="range-field">
            On a scale from 1-10 how would you rank the emotional distress the accused caused you?
      <input type="range" id="test5" min="0" max="10" name="rank_distress" />
    </p>
                        </div>
                    </div>
                        <div class="row" style="margin-bottom:0px;">
                        <div class="input-field col s8 m8">
          <p class="range-field">
             On a scale from 1-10 how would you rank your general feeling of safety in the community?
      <input type="range" id="test5" min="0" max="10" name="rank_safety_community" />
    </p>
                        </div>
                    </div>
                    
                    
         </div>
                </div>
            </fieldset>
            
            <fieldset id="page_four">
     <div class="section" style="margin-bottom:0;">
 <h2 style="padding-bottom:3px;">Review</h2>
                <div class="section">
                    <div class="row">
                        <div class="input-field col s112 m7" id="subLeftBlock" style="text-align:center">
     <h5 id="subHeading">Report</h5>
<p>The questionnaire is meant to ask a number of legal questions that will help data surveyors to analyze a reported incident and its relatoin to a legal standard for a particular criminal o ense. After the legal questionnaire the form will request the reportees basic information (name, age, sex, race, time of incident, involved parties, testimonials, etc). At the end of the report users will be promted with a number of disclaimers, agement, requests and options for anonymous release of the testimonial and the option to download a copy of the report.</p> 
                        </div>
                        
                         <div class="input-field col s12 m5" style="text-align:center">
        <h5 id="subHeading">Discliamers/requests</h5>
                             
                             <div id="disclaimer">
                                 <br>
                                 <p>We are not lawyers and we are not providing legal advice
We recommend you consult a lawyer if you want legal advice. <br><br>
Filing a report through Mawla is no guarantee of a resolution <br><br>
Emergency: If this is an emergency currently in progress and is causing you to feel unsafe please contact 911 immediately. <br><br>
Protecting Your Privacy: Any personally identifiable information obtained through this survey will remain confidential and be disclosed only with your permission or as required by law. <br><br>
By participating, you agree to allow Mawla’s assigned surveyor(s) to analyze and match your report to other reports crucial to answering important questions about the experience of individuals suffering from Islamophobia. <br><br>
By submitting this form you are in agreement with all the disclaimers outlined throughout this form, summarized above, and printed on our disclaimers and agreements page. <br><br>
I allow mawla to anonymize my testimonial for the purpose of publishing user testimony<br></p>
                             </div>
                             <br>
                    
                        </div>
                        
                    </div>
                       
                        </div>
                    </div>
                
            </fieldset>
            
        <input type="submit" value="Submit" onclick="submit();" />
            
        </form>
    </div>

    
    
    
    <!--
    <img src="img/data%20bars.png" id="bars" style="position: absolute; 
bottom: 0; width:100%; height:30%; pointer-events: none;">
-->

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
        if (!window.jQuery) {
            document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>');
        }
    </script>
    <script src="js/materialize.js"></script>
     <script src="js/picker.date.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript" src="jquery.multipage.js"></script>
    <link rel="stylesheet" href="jquery.multipage.css" />
    <script>
        // Materialize Date Picker
    window.picker = $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100, // Creates a dropdown of 15 years to control year
        format: 'mm/dd/yyyy'    
    });
    </script>

    <script type="text/javascript">
        $(window).ready(function() {
            $('#multipage').multipage({
                transitionFunction: transition,
                stateFunction: textpages
            });
//            $('form').submit(function() {
//       
//                return false;
//            });
        });

        function generateTabs(tabs) {

            html = '';
            for (var i in tabs) {
                tab = tabs[i];
                html = html + '<li class="multipage_tab"><a href="#" onclick="return $(\'#multipage\').gotopage(' + tab.number + ');">' + tab.title + '</a></li>';
            }
            $('<ul class="multipage_tabs" id="multipage_tabs">' + html + '<div class="clearer" id="scrollable"></div></ul>').insertBefore('#multipage');
        }

        function setActiveTab(selector, page) {
            $('#multipage_tabs li').each(function(index) {
                if ((index + 1) == page) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        }

        function transition(from, to) {
            $(from).fadeOut('fast', function() {
                $(to).fadeIn('fast');
            });

        }

        function textpages(obj, page, pages) {
            $(obj).html();
        }
    </script>
    <script>
        $(window).ready(function() {
            $('select').material_select();
        });
    </script>
    <script language="javascript">
        function autoResizeDiv() {
            document.getElementById('scrollable').style.height = window.innerHeight * .55 + 'px';
            document.getElementById('scrollable2').style.height = window.innerHeight * .55 + 'px';
            document.getElementById('scrollable3').style.height = window.innerHeight * .55 + 'px';
            var size = window.innerHeight + 'px' * .01;
            console.log(window.innerHeight);
        }
        window.onload = autoResizeDiv();
        window.onresize = autoResizeDiv();
        autoResizeDiv();
    </script>
    

</body>

</html>