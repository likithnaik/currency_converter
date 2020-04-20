<form method="post" id="currency-form">
<div class="form-group">
<label>From</label>
<select name="from_currency">
<option value="INR">Indian Rupee</option>
<option value="USD" selected="1">US Dollar</option>
<option value="AUD">Australian Dollar</option>
<option value="EUR">Euro</option>
<option value="EGP">Egyptian Pound</option>
<option value="CNY">Chinese Yuan</option>
</select>
 <label>Amount</label>
<input type="text" placeholder="Currency" name="amount" id="amount" />
 <label>To</label>
<select name="to_currency">
<option value="INR" selected="1">Indian Rupee</option>
<option value="USD">US Dollar</option>
<option value="AUD">Australian Dollar</option>
<option value="EUR">Euro</option>
<option value="EGP">Egyptian Pound</option>
<option value="CNY">Chinese Yuan</option>
</select>
  <button type="submit" name="convert" id="convert" class="btn btn-default">Convert</button>
</div>
</form>