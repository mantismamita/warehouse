<?php
/**
 * The template used for the "Quick Reservation" bnd at the bottom of the page
 *
 * @package hostel_mama
 */
?>

<section>
<div id="quickres-block" class="light-panel hidden">
        <div class="row">
            <div class="horiz-form large-12 small-8 small-centered columns">
            

            
            	<form id="quick_res" action="#" method="post" name="disponibilita" target="_blank" class="custom res-form">
            
                <ul class="large-block-grid-5 small-block-grid-1">    
                    <li>
                    <label for="quick_date" class="anchor"><?php _e('Date:', 'hostel_mama' )?></label><input type="date" name="date" id="quick_date" class="form-date datepicker">
                    </li>
                    
                    <li>
                    <label for="quick_nights"><?php _e('Nights:', 'hostel_mama' )?></label><input type="number" name="nights" id="quick_nights" value="2">
                    </li> 
                   
					<li>
					<label for="quick_people"><?php _e('Guests:', 'hostel_mama' )?></label><input type="number" name="people" id="quick_people" value="1"> 
					</li>                                       
                    
                    <li class="select-container">
                    <label for="expr"><?php _e('Currency:', 'hostel_mama' )?></label> 
                    	<select name="expr" id="expr">
							<option value="EUR" selected="selected"><?php _e('EURO', 'hostel_mama' )?></option>
							<option value="USD"><?php _e('US Dollar', 'hostel_mama' )?></option>
							<option value="ARS"><?php _e('Argentine Peso', 'hostel_mama' )?></option>
							<option value="AUD"><?php _e('Australian Dollar', 'hostel_mama' )?></option>
							<option value="BRL"><?php _e('Brazilian Real', 'hostel_mama' )?></option>
							<option value="GBP"><?php _e('British Pound', 'hostel_mama' )?></option>
							<option value="BGN"><?php _e('Bulgarian levs', 'hostel_mama' )?></option>
							<option value="CAD"><?php _e('Canadian Dollar', 'hostel_mama' )?></option>
							<option value="CNY"><?php _e('Chinese yuan', 'hostel_mama' )?></option>
							<option value="HRK"><?php _e('Croatian kune', 'hostel_mama' )?></option>
							<option value="CZK"><?php _e('Czech koruny', 'hostel_mama' )?></option>
							<option value="DKK"><?php _e('Danish kroner', 'hostel_mama' )?></option>
							<option value="EUR"><?php _e('Euro', 'hostel_mama' )?></option>
							<option value="HKD"><?php _e('Hong Kong Dollar', 'hostel_mama' )?></option>
							<option value="ILS"><?php _e('Israeli New Shekel', 'hostel_mama' )?></option>
							<option value="JPY"><?php _e('Japanese Yen', 'hostel_mama' )?></option>
							<option value="MXN"><?php _e('Mexican Peso', 'hostel_mama' )?></option>
							<option value="NZD"><?php _e('New Zealand Dollar', 'hostel_mama' )?></option>
							<option value="PLN"><?php _e('Polish zloty', 'hostel_mama' )?></option>
							<option value="RON"><?php _e('New Romanian leu', 'hostel_mama' )?></option>
							<option value="RUB"><?php _e('Russian Rouble', 'hostel_mama' )?></option>
							<option value="SGD"><?php _e('Singapore Dollar', 'hostel_mama' )?></option>
							<option value="SEK"><?php _e('Swedish Krona', 'hostel_mama' )?></option>
							<option value="CHF"><?php _e('Swiss Franc', 'hostel_mama' )?></option>
							<option value="KRW"><?php _e('South-Korean Won', 'hostel_mama' )?></option>
							<option value="TWD"><?php _e('Taiwan dollars', 'hostel_mama' )?></option>
							</select>
                    </li>
                    <li><input type="submit" name="submit" class="button radius text-center" value="Click to Book"></li>
                    </ul>
					<input name="ref" type="hidden" id="quick_ref" value="323" />
					<input name="langClient" type="hidden" id="quick_langClient" value="eng" />
                                     
                    
                 
                </form>
            </div>
        </div>
</div>
</section>