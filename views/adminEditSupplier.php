<div class="navbar nav bg-light tijara-nav text-black-50">
    TijaraShop / Ajouter un Fournisseur
</div>
<div class="container-fluid mt-3">
    <?php
    if ($error != null) {
        ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?= $error ?>
        </div>
        <?php
    }
    if ($success != null) {
        ?>
        <div class="alert alert-success mt-3" role="alert">
            <?= $success ?>
        </div>
        <?php
    }
    ?>
    <form method="post" action="admin.php?page=TijaraShop/supplier&action=edit">
        <div class="row text-black bg-lightblue px-2 align-items-center">
            <div class="col-md-1 text-right">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="isSociety"
                           name="isSociety" <?php if ($supplier->isSociety == 1) {
                        echo "checked";
                    } ?>>
                    <label class="form-check-label" for="isSociety">Société</label>
                </div>
            </div>
            <div class="col-md-5 mt-3">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Raison Sociale</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control bg-white" id="societyName" name="societyName"
                               value="<?= $supplier->societyName ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="#" class="inner-link" id="supplierAddMore"> <i class="fas fa-eye"></i> Plus d'informations</a>
            </div>
        </div>
        <div id="supplierAdd1">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card card-success col-12">
                        <div class="card-header">
                            <div class="row mb-1">
                                <div class="col-md-2">
                                    <select class="custom-select" name="gender" id="gender">
                                        <option value="ND" <?php if ($supplier->gender == "ND") {
                                            echo "selected";
                                        } ?>>ND
                                        </option>
                                        <option value="Mr" <?php if ($supplier->gender == "Mr") {
                                            echo "selected";
                                        } ?>>Mr
                                        </option>
                                        <option value="Mme" <?php if ($supplier->gender == "Mme") {
                                            echo "selected";
                                        } ?>>Mme
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="firstName" id="firstName"
                                           value="<?= $supplier->firstName ?>">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" name="lastName" id="lastName"
                                           value="<?= $supplier->lastName ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-2">
                                    Civilité
                                </div>
                                <div class="col-md-5">
                                    Prénom
                                </div>
                                <div class="col-md-5">
                                    Nom
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-2">
                                    Adresse
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="address" name="address"
                                           value="<?= $supplier->address ?>">
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-2">CP / Ville</div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                           value="<?= $supplier->zipCode ?>">
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="city" name="city"
                                           value="<?= $supplier->city ?>">
                                </div>
                            </div>
                            <div class="row aic">
                                <div class="col-md-2">
                                    Pays
                                </div>
                                <div class="col-md-10">
                                    <select id="country" name="country" class="form-control chosen-select col-12">
                                        <option value="<?= $supplier->country ?>" selected><?= $supplier->country ?>
                                            (Origine)
                                        </option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                            Republic
                                            of
                                            The
                                        </option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                            People's
                                            Republic of
                                        </option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic
                                            Republic
                                        </option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                            Yugoslav Republic of
                                        </option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                        </option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                        </option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                            Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                            The
                                            South
                                            Sandwich Islands
                                        </option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                        </option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor
                                            Outlying
                                            Islands
                                        </option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-warning col-12 mt-2">
                        <div class="card-header">
                            <div class="row mb-1 aic">
                                <div class="col-md-2">Code Ref.</div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="refCode" name="refCode"
                                           value="<?= $supplier->refCode ?>">
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-2">Site Web</div>
                                <div class="col-md-10"><input type="text" class="form-control" id="webSite"
                                                              name="webSite" value="<?= $supplier->webSite ?>"></div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-1 offset-10 text-right mb-1">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="isActive" name="isActive"
                                            <?php if ($supplier->isActive == "1") {
                                                echo "checked";
                                            } ?>
                                        >
                                        <label class="form-check-label" for="isActive">Actif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END 1st col -->
                </div>

                <div class="col-md-6">
                    <div class="card card-primary col-12">
                        <div class="card-header">
                            <div class="row mb-1 aic">
                                <div class="col-md-3">Téléphone</div>
                                <div class="col-md-9"><input type="text" class="form-control" id="phone" name="phone"
                                                             value="<?= $supplier->phone ?>">
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-3">Mobile</div>
                                <div class="col-md-9"><input type="text" class="form-control" id="mobilePhone"
                                                             name="mobilePhone" value="<?= $supplier->mobilePhone ?>">
                                </div>
                            </div>
                            <div class="row aic">
                                <div class="col-md-3">Mail</div>
                                <div class="col-md-9"><input type="email" class="form-control" id="mail" name="mail"
                                                             value="<?= $supplier->mail ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-danger mt-1 col-12">
                        <div class="card-header">
                            Dernière commande le **
                            <div class="row mt-4 mb-1 aic">
                                <div class="col-md-5">Commande en cours</div>
                                <div class="col-md-5"><input type="text" disabled class="form-control"></div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-5">
                                    BL à facturer
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-5">
                                    Factures à régler
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-5">
                                    Avoirs
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="row mb-1 aic">
                                <div class="col-md-5">
                                    <strong>Solde théorique</strong>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END 2nd col -->
                </div>
            </div>
            <!-- END supplierAdd1 -->
        </div>
        <div id="supplierAdd2" style="display: none">
            <div class="row mt-3 mb-2">
                <div class="col-md-6">
                    <div class="card col-12 card-info mb-2">
                        <div class="card-header">
                            <h5 class="card-title-info mb-2">Règlement</h5>
                            <div class="col-9 offset-3">
                                <div class="row aic">
                                    <div class="col-md-5">Mode de règlement</div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="paymentType" name="paymentType">
                                            <option value="0" <?php if ($supplier->paymentType == 0) {
                                                echo "selected";
                                            } ?>>Tous
                                            </option>
                                            <option value="1" <?php if ($supplier->paymentType == 1) {
                                                echo "selected";
                                            } ?>>Virement
                                            </option>
                                            <option value="2" <?php if ($supplier->paymentType == 2) {
                                                echo "selected";
                                            } ?>>Espèces
                                            </option>
                                            <option value="3" <?php if ($supplier->paymentType == 3) {
                                                echo "selected";
                                            } ?>>CB
                                            </option>
                                            <option value="4" <?php if ($supplier->paymentType == 4) {
                                                echo "selected";
                                            } ?>>Autre
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 card-success mb-2">
                        <div class="card-header">
                            <h5 class="card-title-info mb-2">Coordonnées bancaires</h5>
                            <div class="row mb-2 aic">
                                <div class="col-md-2">IBAN</div>
                                <div class="col-md-10"><input type="text" class="form-control" id="iban" name="iban"
                                                              value="<?= $supplier->iban ?>">
                                </div>
                            </div>
                            <div class="row aic">
                                <div class="col-md-2">BIC</div>
                                <div class="col-md-10"><input type="text" class="form-control" id="bic" name="bic"
                                                              value="<?= $supplier->bic ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END 3rd col -->
                </div>
                <div class="col-md-6">
                    <div class="card card-warning mb-2">
                        <div class="card-header">
                            <h5 class="card-title-info mb-2"> Identification</h5>
                            <div class="row">
                                <div class="col-md-7 offset-5">
                                    <div class="row aic mb-2">
                                        <div class="col-md-4">N° TVA</div>
                                        <div class="col-md-8"><input type="text" class="form-control" id="tva"
                                                                     name="tva" value="<?= $supplier->tva ?>"></div>
                                    </div>
                                    <div class="row aic mb-2">
                                        <div class="col-md-4">N° SIRET</div>
                                        <div class="col-md-8"><input type="text" class="form-control" id="siret"
                                                                     name="siret" value="<?= $supplier->siret ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END 4th col -->
                </div>
                <div class="col-md-12">
                    <div class="card card-danger col-12">
                        <div class="card-header">
                            <div class="row text-center mb-2">
                                <div class="col-md-2 "></div>
                                <div class="col-md-3 "><h6 class="card-title-info">Nom / Prénom</h6></div>
                                <div class="col-md-5 "><h6 class="card-title-info">Mail</h6></div>
                                <div class="col-md-2 "><h6 class="card-title-info">Tel</h6></div>
                            </div>
                            <?php
                            $contact = json_decode($supplier->contact);
                            ?>
                            <div class="row aic mb-2">
                                <div class="col-md-2">Direction</div>
                                <div class="col-md-3"><input type="text" class="form-control" id="directionName"
                                                             name="directionName"
                                                             value="<?= $contact->directionName ?>"></div>
                                <div class="col-md-5"><input type="email" class="form-control" id="directionMail"
                                                             name="directionMail"
                                                             value="<?= $contact->directionMail ?>"></div>
                                <div class="col-md-2"><input type="text" class="form-control" id="directionPhone"
                                                             name="directionPhone"
                                                             value="<?= $contact->directionPhone ?>"></div>
                            </div>
                            <div class="row aic mb-2">
                                <div class="col-md-2">Comptabilité</div>
                                <div class="col-md-3"><input type="text" class="form-control" id="comptaName"
                                                             name="comptaName" value="<?= $contact->comptaName ?>">
                                </div>
                                <div class="col-md-5"><input type="email" class="form-control" id="comptaMail"
                                                             name="comptaMail" value="<?= $contact->comptaMail ?>">
                                </div>
                                <div class="col-md-2"><input type="text" class="form-control" id="comptaPhone"
                                                             name="comptaPhone" value="<?= $contact->comptaPhone ?>">
                                </div>
                            </div>
                            <div class="row aic mb-4">
                                <div class="col-md-2">Commercial</div>
                                <div class="col-md-3"><input type="text" class="form-control" id="comName"
                                                             name="comName" value="<?= $contact->comName ?>"></div>
                                <div class="col-md-5"><input type="email" class="form-control" id="comMail"
                                                             name="comMail" value="<?= $contact->comMail ?>"></div>
                                <div class="col-md-2"><input type="text" class="form-control" id="comPhone"
                                                             name="comPhone" value="<?= $contact->comPhone ?>"></div>
                            </div>
                            <textarea placeholder="Note" class="form-control" id="notes" name="notes"><?= $supplier->notes ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!--END supplierAdd2-->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card col-12 card-success text-center">
                    <div class="card-header text-center">
                        <input type="hidden" name="idSupplier" value="<?= $supplier->idSupplier ?>">
                        <button type="submit" id="addSupplierAction" class="btn btn-success">Editer le fournisseur
                        </button>
                        <a href="admin.php?page=TijaraShop%2Fsupplier" class="btn btn-danger">Retour à la liste des
                            fournisseurs</a>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!--END CONTAINER-->
</div>

<script>
    var configChoosenSupplierAdd = {
        '.chosen-select': {},
        '.chosen-select-deselect': {allow_single_deselect: true},
        '.chosen-select-no-single': {disable_search_threshold: 10},
        '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
        '.chosen-select-rtl': {rtl: true},
        '.chosen-select-width': {width: '95%'}
    }
    for (var selector in configChoosenSupplierAdd) {
        $(selector).chosen(configChoosenSupplierAdd[selector]);
    }
    $('#supplierAddMore').click(function (event) {
        event.preventDefault()
        let pane1 = $('#supplierAdd1')
        let pane2 = $('#supplierAdd2')
        pane1.toggle()
        pane2.toggle()
    })
</script>
<!--END PAGE -->