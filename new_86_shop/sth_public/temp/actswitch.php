﻿<!-- prototype activity switch -->
<?php 
if($sitePage == "activity"){ 
?>
<style>
.actswitch {position: fixed;top:30%;right:2px;padding:7px 3px;}
.actswitch .actswitch-toggle {
  position:relative;
  display:inline-block;
  width:40px;
  height:60px;
  background-color:#bbb;
  -webkit-border-radius:4px;
  -moz-border-radius:4px;
  border-radius:4px;
  text-align:center;
}

.actswitch .actswitch-toggle input {
  width:100%;
  height:100%;
  margin:0 0;
  padding:0 0;
  position:absolute;
  top:0;
  right:0;
  bottom:0;
  left:0;
  z-index:2;
  cursor:pointer;
  opacity:0;
  filter:alpha(opacity=0);
}

.actswitch .actswitch-toggle label {
  display:block;
  position:absolute;
  top:1px;
  right:1px;
  bottom:1px;
  left:1px;
  background-image:-webkit-linear-gradient(top,#fff 0%,#ddd 50%,#fff 50%,#eee 100%);
  background-image:-moz-linear-gradient(top,#fff 0%,#ddd 50%,#fff 50%,#eee 100%);
  background-image:-ms-linear-gradient(top,#fff 0%,#ddd 50%,#fff 50%,#eee 100%);
  background-image:-o-linear-gradient(top,#fff 0%,#ddd 50%,#fff 50%,#eee 100%);
  background-image:linear-gradient(top,#fff 0%,#ddd 50%,#fff 50%,#eee 100%);
  -webkit-box-shadow:0 2px 3px rgba(0,0,0,0.4),
    inset 0 -1px 1px #888,
    inset 0 -5px 1px #bbb,
    inset 0 -6px 0 white;
  -moz-box-shadow:0 2px 3px rgba(0,0,0,0.4),
    inset 0 -1px 1px #888,
    inset 0 -5px 1px #bbb,
    inset 0 -6px 0 white;
  box-shadow:0 2px 3px rgba(0,0,0,0.4),
    inset 0 -1px 1px #888,
    inset 0 -5px 1px #bbb,
    inset 0 -6px 0 white;
  -webkit-border-radius:3px;
  -moz-border-radius:3px;
  border-radius:3px;
  font:normal 11px Arial,Sans-Serif;
  color:#666;
  text-shadow:0 1px 0 white;
  cursor:text;
}

.actswitch .actswitch-toggle label:before {
  content:attr(data-off);
  position:absolute;
  top:6px;
  right:0;
  left:0;
  z-index:4;
}

.actswitch .actswitch-toggle label:after {
  content:attr(data-on);
  position:absolute;
  right:0;
  bottom:11px;
  left:0;
  color:#666;
  text-shadow:0 -1px 0 #eee;
}

.actswitch .actswitch-toggle input:checked + label {
  background-image:-webkit-linear-gradient(top,#eee 0%,#ccc 50%,#fff 50%,#eee 100%);
  background-image:-moz-linear-gradient(top,#eee 0%,#ccc 50%,#fff 50%,#eee 100%);
  background-image:-ms-linear-gradient(top,#eee 0%,#ccc 50%,#fff 50%,#eee 100%);
  background-image:-o-linear-gradient(top,#eee 0%,#ccc 50%,#fff 50%,#eee 100%);
  background-image:linear-gradient(top,#eee 0%,#ccc 50%,#fff 50%,#eee 100%);
  -webkit-box-shadow:0 0 1px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
  -moz-box-shadow:0 0 1px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
  box-shadow:0 0 1px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
}

.actswitch .actswitch-toggle input:checked:hover + label {
  -webkit-box-shadow:0 1px 3px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
  -moz-box-shadow:0 1px 3px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
  box-shadow:0 1px 3px rgba(0,0,0,0.4),
    inset 0 1px 7px -1px #ccc,
    inset 0 5px 1px #fafafa,
    inset 0 6px 0 white;
}

.actswitch .actswitch-toggle input:checked + label:before {
  z-index:1;
  top:11px;
}

.actswitch .actswitch-toggle input:checked + label:after {
  bottom:9px;
  color:#aaa;
  text-shadow:none;
  z-index:4;
}
</style>
<div class="actswitch">
    <span class="actswitch-toggle">
    <?php if($act=="true"){ ?>
        <input type="checkbox" onclick='window.location = ("activity.php")' checked />
    <?php }else{ ?>
        <input type="checkbox" onclick='window.location = ("?act=true")' />
    <?php } ?>
        <label data-off="&#10006;" data-on="&#10004;"></label>
    </span>
</div>
<?php } ?>