<?php
/**
 * The template used for the replacement of the "Quick Reservation" band at the bottom of the page in case javascript is disabled
 *
 * @package hostel_mama
 */
?>


<section class="fancy text-center">
<div class="strong-band">
        <div class="row">
<div class="horiz-form large-12 small-8 small-centered columns">

<h3><?php _e('Quick Reservation', 'hostel_mama' )?></h3>
<form  action="http://www.net-booking.net/search/search.php" method="get" name="disponibilita" target="_blank" class="custom">
<select name="date_day" id="date_day">
<option value="01">1</option>
<option value="02">2</option>
<option value="03">3</option>
<option value="04">4</option>
<option value="05">5</option>
<option value="06">6</option>
<option value="07">7</option>
<option value="08">8</option>
<option value="09">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
<select name="date_month" id="date_month">
 <option value="1"><?php _e('Jan', 'hostel_mama' )?></option>
<option value="2"><?php _e('Feb', 'hostel_mama' )?></option>
<option value="3"><?php _e('Mar', 'hostel_mama' )?></option>
<option value="4"><?php _e('Apr', 'hostel_mama' )?></option>
<option value="5"><?php _e('May', 'hostel_mama' )?></option>
<option value="6"><?php _e('Jun', 'hostel_mama' )?></option>
<option value="7"><?php _e('Jul', 'hostel_mama' )?></option>
<option value="8"><?php _e('Aug', 'hostel_mama' )?></option>
<option value="9"><?php _e('Sep', 'hostel_mama' )?></option>
<option value="10"><?php _e('Oct', 'hostel_mama' )?></option>
<option value="11"><?php _e('Nov', 'hostel_mama' )?></option>
<option value="12"><?php _e('Dec', 'hostel_mama' )?></option>
</select>
<select name="date_year" id="date_year">
<option value='2013'>2013</option>
<option value='2014'>2014</option>
<option value='2015'>2015</option>
<option value='2016'>2016</option>
</select> 
<select name="nights" id="nights">
<option value="1"><?php _e('1 Night', 'hostel_mama' )?></option>
<option value="2"><?php _e('2 Nights', 'hostel_mama' )?></option>
<option value="3" selected="selected"><?php _e('3 Nights', 'hostel_mama' )?></option>
<option value="4"><?php _e('4 Nights', 'hostel_mama' )?></option>
<option value="5"><?php _e('5 Nights', 'hostel_mama' )?></option>
<option value="6"><?php _e('6 Nights', 'hostel_mama' )?></option>
<option value="7"><?php _e('7 Nights', 'hostel_mama' )?></option>
<option value="8"><?php _e('8 Nights', 'hostel_mama' )?></option>
</select> 
<select name="people" id="people">
<option value="1"><?php _e('1 Guest', 'hostel_mama' )?></option>
<option value="2" selected="selected"><?php _e('2 Guests', 'hostel_mama' )?></option>
<option value="3"><?php _e('3 Guests', 'hostel_mama' )?></option>
<option value="4"><?php _e('4 Guests', 'hostel_mama' )?></option>
<option value="5"><?php _e('5 Guests', 'hostel_mama' )?></option>
<option value="6"><?php _e('6 Guests', 'hostel_mama' )?></option>
<option value="7"><?php _e('7 Guests', 'hostel_mama' )?></option>
<option value="8"><?php _e('8 Guests', 'hostel_mama' )?></option>
</select> 

<input name="ref" type="hidden" id="ref" value="558" /> 
<input name="langClient" type="hidden" id="langClient" value="eng" />
<select name="expr" size="1" id="expr">
<option value="EUR" selected="selected"><?php _e('Show rates in: EURO', 'hostel_mama' )?></option>
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
<input type="submit" value="Click to book" style="background-color:#ffffff; color: #572e46;" />
</form>
            </div>
        </div>
</div>
</section>