
<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI VOUCHER</title>
</head>
<body>
	<?php

if ($this->session->flashdata('true'))
    echo $this->session->flashdata('true');
else if ($this->session->flashdata('err'))
    echo $this->session->flashdata('err');
?>	
	<form action="<?php echo base_url() ?>OrderVoucher/insert" method="post">
  Kode Label: <input type="text" name="VoucherLabel"><br>
  <input type="submit" value="Submit">
	</form>
</body>
</html>