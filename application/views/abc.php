<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div class="span2">
                                    <form class="navbar-form pull-right">
                                        <input class="span10" placeholder="Username" type="text"><img src="" class="icon-user" />
                                        <input class="span10" placeholder="Password" type="text"><img src="" class="icon-question-sign" />                                        
                                    </form>                                    
                                </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="<?php echo base_url() . 'public/js/login.member.js'; ?>"></script>
        <script src="<?php echo base_url() . 'public/js/register.member.js'; ?>"></script>
        <div id="loginInfo">
                                        <form class="navbar-form pull-right">
                                            <input class="span14" placeholder="Username" type="text">
                                            <input class="span14" placeholder="Password" type="password">
                                            <a class="btn btn-primary btn-small" id="loginConfirm">Log in<img class="icon-arrow-right"></a>
                                            <a class="btn btn-danger btn-small" id="loginCancel">Cancel<img class="icon-off"></a>
                                        </form>
                                    </div>
                                    <div id="registerInfo">
                                        <form class="navbar-form pull-right">
                                            <input class="span14" placeholder="Username" type="text">
                                            <input class="span14" placeholder="Password" type="password">
                                            <input class="span14" placeholder="Email" type="text">
                                            <input class="span14" placeholder="Phone" type="tel">
                                            <input class="span14" placeholder="Location" type="text">
                                            <a class="btn btn-success btn-small" id="registerConfirm">Agree<img class="icon-arrow-right"></a>
                                            <a class="btn btn-danger btn-small" id="registerCancel">Cancel<img class="icon-off"></a>
                                        </form>
                                    </div> 
        <a class="btn btn-warning btn-large" id="registerMember">Register <img class="icon-user" /></a>&nbsp;&nbsp;<a class="btn btn-warning btn-large" id="loginMember">Member<img class="icon-ok"/></a>
</html>
