<!doctype html>


 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/layout.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery-1.5.2.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/hideshow.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.tablesorter.min.js" ></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/js/jquery.equalHeight.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/table.js"></script>
	
	<script src="<?php echo base_url();?>assets/jqueryui/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/jqueryui/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>assets/jqueryui/jquery-ui-timepicker-addon.js"></script>
	<script src="<?php echo base_url();?>assets/jqueryui/jquery-ui-sliderAccess.js"></script>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/jqueryui/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/table.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/jqueryui/jquery-ui-timepicker-addon.css">
	<script type="text/javascript">
			
		$(function(){
				$('#datetimepicker').datetimepicker({
					timeFormat: 'HH:mm:ss',
					dateFormat:'yy-mm-dd',
					stepSecond: 10}
				);
			});
			
		</script>


	<script type="text/javascript">

		function getCurrentTime()
		{
			var now = new Date();
			var mySecs = now.getSeconds();
			var curHour = now.getHours();
			var curMin = now.getMinutes();
			var day = now.getDay();
			var date = now.getDate();
			var year = now.getFullYear();
			var month = now.getMonth();
			var days = new Array();
				days[0] = "Sunday";
				days[1] = "Monday";
				days[2] = "Tuesday";
				days[3] = "Wednesday";
				days[4] = "Thursday";
				days[5] = "Friday";
				days[6] = "Saturday";
			var suffix = "AM";

				if(mySecs < 10)
				{
					mySecs = "0" + mySecs;
				}

				if(curMin < 10)
				{
					curMin = "0" + curMin;
				}

				if(curHour == 12 && curMin >= 1)
				{
					suffix = "PM";
				}

				if(curHour == 24 && curMin >= 1)
				{
					curHour-= 12;
					suffix = "AM";
				}

				if(curHour > 12)
				{
					curHour-= 12;
					suffix = "PM";
				}

	document.getElementById('time').innerHTML=(days[day] + " " + (month +1) + "/" + date + "/"  + year + " " + curHour + ":" + curMin + ":" + mySecs + " " + suffix);

	}

	</script>



		<script type="text/javascript">
		function printF(printData)
		{
			var a = window.open ('',  '',"status=1,scrollbars=1, width=760,height=800");
			a.document.write(document.getElementById(printData).innerHTML.replace(/<a\/?[^>]+>/gi, ''));
			a.document.close();
			a.focus();
			a.print();
			a.close();
		}
		</script>
		
		<script>
		function checkrequired(which){
		var pass=true
			if (document.images){
				for (i=0;i<which.length;i++){
					var tempobj=which.elements[i]
					if (tempobj.id.substring(0,3)=="req"){
						if (((tempobj.type=="text"||tempobj.type=="textarea"||tempobj.type=="password")&&tempobj.value=='')||(tempobj.type.toString().charAt(0)=="s"&&tempobj.selectedIndex==-1)){
						pass=false
						break
						}
					}
				}
			}
			if (!pass){
				alert("Harap isi field yang masih kosong !")
				return false
			}
			else
			return true
		}
		</script>

		<script type="text/javascript">

			function getLangLat(lat,lang)
			{
				var lats=lat;
				var langs=lang;
				document.getElementById('langz').value=langs;
				document.getElementById('latz').value=lats;
			}
		</script>
		<script type="text/javascript">
		function getLangLatStart(lat,lang)
			{
				var lats=lat;
				var langs=lang;
				document.getElementById('langzStart').value=langs;
				document.getElementById('latzStart').value=lats;
			}

		</script>
		

		<style type="text/css">
		#tabs {
		    margin: 20px -20px;
		    border: none;
		}
		#tabs, #ui-datepicker-div, .ui-datepicker {
		    font-size: 85%;
		}
		</style>


	<script type="text/javascript">
		$(document).ready(function() 
	    	{ 
	      	  $(".tablesorter").tablesorter(); 
	   	 } 
		);
		$(document).ready(function() {

		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content

		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});

		});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
	</script>

</head>