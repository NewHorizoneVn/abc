<?php $this->load->helper('url');?>
<form method="POST" action="<?php echo base_url();?>SampleUserController/CheckLogon">
    Username: <input type="text" name="Username">
    <input type="submit" value="Logon">
</form>
