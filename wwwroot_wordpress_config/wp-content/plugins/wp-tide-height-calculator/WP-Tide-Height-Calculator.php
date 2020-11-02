<?php 
/*
Plugin Name: WP-Tide-Height-Calculator
Plugin URI: https://www.facebook.com/ars.shovon
Description: WP-Tide-Height-Calculator is a plugin that gives an indication of the height of the tide at certain times in the tidal phase. Add [tide] in any page/post to show the calculator.
Version: 1.7
Author: Ahmedur Rahman Shovon
Author URI: http://www.shovon.info
License: GPL2
*/
function show_calculator($atts, $content=null){
return '
		<style type="text/css"> 
			.table {
				width: 100%;
				margin-bottom: 20px;
			}
			 
			.table > thead > tr > th,
			.table > tbody > tr > th,
			.table > tfoot > tr > th,
			.table > thead > tr > td,
			.table > tbody > tr > td,
			.table > tfoot > tr > td {
				padding: 8px;
				line-height: 1.428571429;
				vertical-align: top;
				border-top: 1px solid #ddd;
				text-align:center;
			}
			 
			.table > thead > tr > th {
				vertical-align: bottom;
				border-bottom: 2px solid #ddd;
			}
			 
			.table > caption + thead > tr:first-child > th,
			.table > colgroup + thead > tr:first-child > th,
			.table > thead:first-child > tr:first-child > th,
			.table > caption + thead > tr:first-child > td,
			.table > colgroup + thead > tr:first-child > td,
			.table > thead:first-child > tr:first-child > td {
				border-top: 0;
			}
			 
			.table > tbody + tbody {
				border-top: 2px solid #ddd;
			}
			 
			.table .table {
				background-color: #fff;
			}
			 
			.table-condensed > thead > tr > th,
			.table-condensed > tbody > tr > th,
			.table-condensed > tfoot > tr > th,
			.table-condensed > thead > tr > td,
			.table-condensed > tbody > tr > td,
			.table-condensed > tfoot > tr > td {
				padding: 5px;
			}
			 
			.table-bordered {
				border: 1px solid #ddd;
			}
			 
			.table-bordered > thead > tr > th,
			.table-bordered > tbody > tr > th,
			.table-bordered > tfoot > tr > th,
			.table-bordered > thead > tr > td,
			.table-bordered > tbody > tr > td,
			.table-bordered > tfoot > tr > td {
				border: 1px solid #ddd;
			}
			 
			.table-bordered > thead > tr > th,
			.table-bordered > thead > tr > td {
				border-bottom-width: 2px;
			}
			 
			.table-striped > tbody > tr:nth-child(odd) > td,
			.table-striped > tbody > tr:nth-child(odd) > th {
				background-color: #eaeaea;
			}
			 
			.table-hover > tbody > tr:hover > td,
			.table-hover > tbody > tr:hover > th {
				background-color: #f5f5f5;
			}	
			.btn {
			  display: inline-block;
			  padding: 6px 12px;
			  margin-bottom: 0;
			  font-size: 14px;
			  font-weight: normal;
			  line-height: 1.428571429;
			  text-align: center;
			  white-space: nowrap;
			  vertical-align: middle;
			  cursor: pointer;
			  border: 1px solid transparent;
			  border-radius: 4px;
			  -webkit-user-select: none;
			  -moz-user-select: none;
			  -ms-user-select: none;
			  -o-user-select: none;
			  user-select: none;
			}			
			.btn-block {
			  display: block;
			  width: 100%;
			  padding-right: 0;
			  padding-left: 0;
			}
			.btn-info {
			  color: #fff;
			  background-color: #5bc0de;
			  border-color: #46b8da;
			}
			.btn-info:hover,.btn-info:focus,.btn-info:active {
				color:#fff;
				background-color:#39b3d7;
				border-color:#269abc;
			}
			.table{
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				margin-bottom: 0px;				
			}
			.table h1,.table h2,.table h3{
				padding: 0px;
				margin: 0px;
			}
			.table input[type="text"]{
				width: 80px;
			}
			#error_message{
				color: red;
			}
		</style>
					<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th colspan="4"><h3>Tide Height Calculator</h3></th>
						</tr>
						<tr>
							<th colspan="4">Enter time in 00:00 format</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Start Time</td>
							<td><input type="text" id="start_time" /></td>
							<td>End Time</td>
							<td><input type="text" id="end_time" /></td>
						</tr>

						<tr>
							<td>Start Level</td>
							<td><input type="text" id="start_level" /></td>
							<td>End Level</td>
							<td><input type="text" id="end_level" /></td>
						</tr>

						<tr>
							<td colspan="4">
								<button class="btn btn-info btn-block" id="calculate_btn">Calculate</button>
								<span id="error_message"></span>							
							</td>
						</tr>

						<tr>
							<td colspan="4">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>Start</th>
											<th>End</th>
											<th>Rule of 12</th>
											<th>Change m/hr</th>
											<th>Start Level</th>
											<th>End Level</th>											
										</tr>
									</thead>
									<tbody id="tbody">	
										<tr id="row_1">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr id="row_2">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr id="row_3">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr id="row_4">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr id="row_5">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr id="row_6">
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>	
									</tbody>
								</table>
							</td>
						</tr>

						<tr>
							<td colspan="4"><strong>&copy; The Tidal Press - <a href="http://www.thetidalpress.com" target="_blank">www.thetidalpress.com</a> - 01273 516689<br>Supplier of tide tables for over 700 locations in the UK and Ireland</strong></td>
						</tr>				
					</tbody>
				</table>
	<script type="text/javascript">
		function print(a){
			console.log(a);
		}

		var calculate_btn=document.getElementById("calculate_btn");
		var start_time=document.getElementById("start_time");
		var end_time=document.getElementById("end_time");
		var start_level=document.getElementById("start_level");
		var end_level=document.getElementById("end_level");
		var error_message=document.getElementById("error_message");
		var tbody=document.getElementById("tbody");
		calculate_btn.onclick=function(){
			start_time_value=start_time.value;
			end_time_value=end_time.value;
			start_level_value=start_level.value;
			end_level_value=end_level.value;

			return_msg=check_blank_input(start_time_value,end_time_value,start_level_value,end_level_value);
			if(return_msg=="0"){
				error_message.innerHTML="<strong>Error!</strong> All fields are required.";
				return;
			}
			else if(return_msg=="1"){
				error_message.innerHTML="";
			}
            start_time.value = check_format(start_time_value);
            end_time.value = check_format(end_time_value);

			start_time_value=start_time.value;
			end_time_value=end_time.value;		

			startTime=start_time_value;
			endTime=end_time_value;

			startLevel = parseFloat(start_level_value);
            endLevel = parseFloat(end_level_value);	

			var startMinute, endMinute;
            var val = parseInt(startTime[0]) * 10 + parseInt(startTime[1]);
            startMinute = val;
            val = parseInt(startTime[3]) * 10 + parseInt(startTime[4]);
            startMinute = startMinute * 60 + val;

            val = parseInt(endTime[0]) * 10 + parseInt(endTime[1]);
            endMinute = val;
            val = parseInt(endTime[3]) * 10 + parseInt(endTime[4]);
            endMinute = endMinute * 60 + val;

            if (endMinute < startMinute) endMinute = endMinute + (24 * 60); /// case 2 check

            var timeIncrement = (endMinute - startMinute) / 6.0;

            var levelIncrement = (endLevel - startLevel) / 12.0;

            var amountTwelfth = [1, 2, 3, 3, 2, 1];

            var dblStart = startMinute;

            finalString="";
            tbody.innerHTML=finalString;
            for (var i = 0; i < 6; i++)
            {
                a = check_format(print_minute(parseInt(dblStart)));
                dblStart += timeIncrement;
                b = check_format(print_minute(parseInt(dblStart)));
                z = amountTwelfth[i].toString();
                c = print_change(amountTwelfth[i] * levelIncrement);
                d = print_level(startLevel);
                startLevel += amountTwelfth[i] * levelIncrement;
                ef = print_level(startLevel);
                finalString = finalString+"<tr><td>"+a+"</td><td>"+b+"</td><td>"+z+"</td><td>"+c+"</td><td>"+d+"</td><td>"+ef+"</td></tr>";
                
            }
            tbody.innerHTML=finalString;
		}

		function print_minute(minute)
        {
        	//print(minute);
            output = "";
            if (minute >= 24 * 60) minute -= 24 * 60;
            hour = Math.floor(minute / 60); 
            minute = minute % 60;
            output = hour + ":" + minute;
            return output;
        }
        function print_change(level)
        {
            level = level.toFixed(2);
            return level.toString();
        }


        function print_level(level)
        {
            level = level.toFixed(2);
            return level.toString();
        }

        function check_format(s)
        {
            output = "";
            len = s.length;
            pos = 0;
            for (i = 0; i < len; i++)
            {
                if (s[i] == ":")
                {
                    pos = i;
                    break;
                }
            }
            output = s;
            if (pos == 1 && len == 3) output = "0" + s[0] + s[1] + "0" + s[2];
            else if (pos == 1 && len == 4) output = "0" + s[0] + s[1] + s[2] + s[3];
            else if (pos == 2 && len == 4) output = s[0] + s[1] + s[2] + "0" + s[3];
            return output;
        }		
		function check_blank_input(start_time_value,end_time_value,start_level_value,end_level_value){
			if (start_time_value=="" || end_time_value=="" || start_level_value=="" || end_level_value=="")
            {                
                return "0";
            }
            return "1";
		}		
	</script>

';
}
add_shortcode('tide', 'show_calculator');