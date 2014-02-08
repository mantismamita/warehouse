<?php
/**
 * The template used for the modular reservation pop-up box 
 * @package hostel_mama
 */
?>

<header class="highlight-panel form-header">
			<h4 class="subheader">Reservation</h4>
			</header>
		<form id="modal-booking" action="#" method="post" name="disponibilita" target="_blank" class="panel custom res-form">
                    <div>
                        <label for="modal_date" class="anchor">Date :</label> <input type="date" name="date" id="modal_date" class="form-date datepicker">
                    </div>
					<div class="row">
	                    <div class="small-6 columns">
	                        <label for="modal_people"><span>Number</span> Guests :</label> <input type="number" name="people" id="modal_people" value="1">
	                    </div>
	
	                    <div class="small-6 columns">
	                        <label for="modal_nights"><span>Number</span> Nights :</label> <input type="number" name="nights" id="modal_nights" value="2">
						</div>
                    </div>
                    <input name="ref" type="hidden" id="modal_ref" value="323" /> 
					<input name="langClient" type="hidden" id="modal_langClient" value="eng" />

                    <div>
                        <label for="modal_currency">Currency :</label> 
                    	<select name="expr" id="modal_currency">
							<option value="EUR" selected="selected">EURO</option>
							<option value="USD">US Dollar</option>
							<option value="ARS">Argentine Peso</option>
							<option value="AUD">Australian Dollar</option>
							<option value="BRL">Brazilian Real</option>
							<option value="GBP">British Pound</option>
							<option value="BGN">Bulgarian levs</option>
							<option value="CAD">Canadian Dollar</option>
							<option value="CNY">Chinese yuan</option>
							<option value="HRK">Croatian kune</option>
							<option value="CZK">Czech koruny</option>
							<option value="DKK">Danish kroner</option>
							<option value="EUR">Euro</option>
							<option value="HKD">Hong Kong Dollar</option>
							<option value="ILS">Israeli New Shekel</option>
							<option value="JPY">Japanese Yen</option>
							<option value="MXN">Mexican Peso</option>
							<option value="NZD">New Zealand Dollar</option>
							<option value="PLN">Polish zloty</option>
							<option value="RON">New Romanian leu</option>
							<option value="RUB">Russian Rouble</option>
							<option value="SGD">Singapore Dollar</option>
							<option value="SEK">Swedish Krona</option>
							<option value="CHF">Swiss Franc</option>
							<option value="KRW">South-Korean Won</option>
							<option value="TWD">Taiwan dollars</option>
							</select>
                    </div>
                    
                    <ul class="button-group radius ">
					  <li><input type="submit" name="submit" class="small secondary button" value="Availability"></li>
					  <li><input type="submit" name="submit" class="small button" value="Click to Book"></li>
					</ul>
                          
                </form>