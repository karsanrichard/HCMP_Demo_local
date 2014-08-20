 <style type="text/css">
.extra{font-size: 133%;padding: 15px;border: 1px #ECE8E8 solid;border-bottom: 8px solid #D4D48B;border-radius: 5px 5px 3px 3px;margin: 0px 6px 6px 10px;}
.extra:hover{background: #FCFAFA;border: 1px #EBD3D3 solid;border-bottom: 8px solid #F32A72;}
.extra>span,.extra>span>a:hover{font-size: 32px;text-shadow: 2px 2px #EBEBEB;text-decoration: none;}
.progress{height: 8px;}
.links{
	float: left;
	margin-left: 5px;
	font-size: 130%;		
}
.links a{
	text-decoration: none;
}
.links:hover{
	background: #FCFAFA;
}
.span3 ul{
	text-decoration: none;
	margin-top: 5px;
	margin-bottom: 5px;
}
 </style>
<div class="span3">
<!--ul class="nav nav-tabs nav-stacked" style="width:100%;"-->
<ul class="nav nav-tabs nav-stacked " style="width:100%;border: 1px ridge;">
	<div class="links"><a href="a">Zone A</a></div>
	<div class="links"> | <a href="b">Zone B</a></div>
	<div class="links"> | <a href="c">Zone C</a></div>
	<div class="links"> | <a href="d">Zone D</a></div>
</ul>
</div>
<div class="row" style="width: 100%;float: right;margin-top:10px;">
<?php foreach ($counties_in_zone as $key => $value) {?>
<div class="span3 extra"><span><a href="<?php echo base_url().'rtk_management/allocation_county_detail_zoom/'.$value[1]?>"><?php echo str_replace(" ",'', ($value[0]));?></a></span>
<br><?php echo $value['allocated_facilities'];?> / <?php echo $value['facilities'];?> Facilities allocated. (<?php echo $value['allocation_percentage']; ?>%)
<div class="progress progress-info"><div class="bar" style="width: <?php echo $value['allocation_percentage']; ?>%"></div></div>
</div>
<?php }?>
</div>