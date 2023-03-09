<!DOCTYPE html>
<html>
<div id="error-box">
    <h3 id="error-title"> CORRECTION</h3>
    <p id="error"></p>
</div>
<div id="customer-form">
    <h2> Customer Details: </h2>
    <form id="customerform" action="../inc/customer.inc.php" method="POST" autocomplete="off">
        <label>Namn</label>
        <input id="name-customer" type="text" name="cName">
        <label>Address</label>
        <input id="adress-customer1" type="text" name="cAdress1">
        <label>Stad</label>
        <input id="city-customer" type="text" name="cCity">
        <label>Land</label>
        <input id="country-customer" type="text" name="cCountry">
        <label>Postkod</label>
        <input id="postal-customer" type="text" name="cPostal">
        <input type="submit" id="customer" name="submit" value="Save Details">
    </form>
</div>
</html>