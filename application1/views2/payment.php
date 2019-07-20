<html>
  <head>
  <script>
    var hash = '<?= $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <h2>PayU Form</h2>
    <form action="<?= $PAYU_BASE_URL; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?= $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?= $hash ?>"/>
      <input type="hidden" name="txnid" value="<?= $TXNID ?>" />
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="<?= $amount ?>" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="<?= $firstname ?>" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="<?= $email ?>" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="<?= $phone ?>" /></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?= $productinfo ?></textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input name="surl" value="<?= $surl ?>" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input name="furl" value="<?= $furl ?>" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="<?= $service_provider; ?>" size="64" /></td>
        </tr>

        <tr>
          <td><b>Optional Parameters</b></td>
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input name="lastname" id="lastname" value="" /></td>
          <td>Cancel URI: </td>
          <td><input name="curl" value="" /></td>
        </tr>
        <tr>
          <td>Address1: </td>
          <td><input name="address1" value="" /></td>
          <td>Address2: </td>
          <td><input name="address2" value="" /></td>
        </tr>
        <tr>
          <td>City: </td>
          <td><input name="city" value="" /></td>
          <td>State: </td>
          <td><input name="state" value="" /></td>
        </tr>
        <tr>
          <td>Country: </td>
          <td><input name="country" value="" /></td>
          <td>Zipcode: </td>
          <td><input name="zipcode" value="" /></td>
        </tr>
        <tr>
          <td>UDF1: </td>
          <td><input name="udf1" value="<?= $udf1 ?>" /></td>
          <td>UDF2: </td>
          <td><input name="udf2" value="<?= $udf2 ?>" /></td>
        </tr>
        <tr>
          <td>UDF3: </td>
          <td><input name="udf3" value="<?= $udf3; ?>" /></td>
          <td>UDF4: </td>
          <td><input name="udf4" value="<?= $udf4; ?>" /></td>
        </tr>
        <tr>
          <td>UDF5: </td>
          <td><input name="udf5" value="<?= $udf5; ?>" /></td>
          <td>UDF6: </td>
          <td><input name="udf6" value="<?= $udf6; ?>" /></td>
        </tr>
        <tr>
          <td>UDF7: </td>
          <td><input name="udf7" value="<?= $udf7; ?>" /></td>
          <td>UDF8: </td>
          <td><input name="udf8" value="<?= $udf8; ?>" /></td>
        </tr>
        <tr>
          <td>UDF9: </td>
          <td><input name="udf9" value="<?= $udf9; ?>" /></td>
          <td>UDF0: </td>
          <td><input name="udf10" value="<?= $udf10; ?>" /></td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </body>
</html>
