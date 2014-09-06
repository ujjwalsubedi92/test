<?php
?>
<!--
<div style="width:100%;height:190px;background-color:#10103b" >
<style type="text/css">
h1{font-family:arial;color:white;}
h3{font-family:arial;color:white;}

</style>

<div style="width:20%;height:190px;float:left;">
<img src="../images/logo.jpg" height="100%" width="100%">
</div>

<div style="width:75%;height:190px;float:right;">
<h1 style="font-size:43px;">Nepal Government</h1>
<h3 style="font-size:23px;">Store Section Management</h>

</div>
</div>

<a href="report.php"> report &nbsp;&nbsp;&nbsp;&nbsp; </a> 
<a href="addtoleui.php"> add tole &nbsp;&nbsp;&nbsp;&nbsp;</a> 
<a href="addpersonui.php"> add people &nbsp;&nbsp;&nbsp;&nbsp;</a> 
!-->

<style type="text/css">
/*Initialize*/
ul#menu, ul#menu ul.sub-menu {
    padding:0;
    margin: 0;
}
ul#menu li, ul#menu ul.sub-menu li {
    list-style-type: none;
    display: inline-block;
}
/*Link Appearance*/
ul#menu li a, ul#menu li ul.sub-menu li a {
    text-decoration: none;
    color: #fff;
    background: #3399FF;
    padding: 20px;
    display:inline-block;
}
/*Make the parent of sub-menu relative*/
ul#menu li {
    position: relative;
}
/*sub menu*/
ul#menu li ul.sub-menu {
    display:none;
    position: absolute;
    top: 30px;
    left: 0;
    width: 400px;
}
ul#menu li:hover ul.sub-menu {
    display:block;
	color:#ff1f11;
}
</style>

<ul id="menu">
    <li>
        <a href="addtoleui.php">Add Tole</a>
    </li>
	<li>
        <a href="addpersonui.php">Add Person</a>
    </li>
    <li><a href="report.php">Report</a>

       
    </li>
   
</ul>