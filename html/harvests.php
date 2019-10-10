
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Harvests</title>
<link href="gleanslo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
th {
	line-height: normal;
	background-color: #b2c2d7;
	text-align:center;
	color:#000000;
}
td { text-align:center; 
border:1px solid black;}

#blogbutton {
	font-size: 1.1em;
}
/* calendar view harvest cells */
.full { background-color:#FFC;}
.notfull {background-color:#CFC;}
#caltable {
	border-collapse: collapse;
	width: 840px;	
	border:4px solid #444488;
}
#caltable tr { vertical-align: top; }
#caltable tr td { overflow:auto; }
.pop {
	display: none;
	width: 860px;
	overflow: auto;
	padding: 5px;
}
.pop th { border:1px solid black;}
#calendar { width: 860px; height:650px; overflow-y: scroll; }
#cell { width: 114px;}
#cell tr { 
	height: 1pt;
	background-color: #DBFEFF;
}
#cell tr td {
	height: 1pt;
	border:1px solid #000000;
	padding-left: 3px;
}
#harvestlist { 	border-collapse: collapse; }
#harvestlist td { 
	border:1px solid black;
	background-color:#ffffff;
 }
 #daysofweek th { border:1px solid white;background-color:#444444;color:#ffffff;}
</style>
<script type="text/javascript">
var tempvar = null;
function popup(show){
	show.style.display="block"
	if (tempvar && (tempvar !== show)) tempvar.style.display="none"
	tempvar=show
}
function scrollWin() {
if(window.pageYOffset<=470)
{
    setTimeout(function() {
		window.scrollTo(0,window.pageYOffset+3);
        scrollWin();
    }, 5);
   }
}
function lookdown(ele) { ele.innerHTML="Click to see details below"; }
function lookup(ele,crop) { ele.innerHTML=crop; }
</script>
<script>
function newDoc() {if(screen.width<801) window.location.assign("harvestlist-m.php");}
</script>
</head>
<body class="SH"  onload="newDoc()">
<div id="container">
  <div id="header">
   <img src="images/banners/logobanner1.png" width="876" height="180" border="2" /> 
  </div>
   <div class="navdiv">
    <div class="navigation">
        <div class="spacer">&nbsp;</div>
        <ul>
            <li><a href="index.php"><strong>Home</strong></a></li>
        <li><a><label class="lab" for="tog1">About</label></a>
				<input type="checkbox" id="tog1"/>
                <ul class="dropped" id="menu1">
                <li><a href="mission.php">Mission&nbsp;&&nbsp;vision</a></li>
                <li><a href="team.php">Our&nbsp;team</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="how.php">How&nbsp;it&nbsp;works</a></li>
                <li><a href="annual.php">What&nbsp;we've&nbsp;done</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="contact.php">Contact&nbsp;us</a></li>
                <li><a href="employment.php">Employment</a></li>
                </ul>
            </li>
            <li><a href="volunteer.php"><strong>Volunteer</strong></a></li>
            <li><a href="site_registration.php"><strong>Donate&nbsp;crop</strong></a></li>
        <li><a><label class="lab" for="tog2">Support</label></a>
				<input type="checkbox" id="tog2"/>
                <ul class="dropped" id="menu2">
                <li><a href="https://domains.giveffect.com/campaigns/10230-gleanslo" target="_blank">Donate</a></li>
                <li><a href="wish.php">Wish&nbsp;list</a></li>
                <li><a href="supporters.php">Supporters</a></li>
                <li><a href="sponsorship.php">Sponsorship</a></li>
                <li><a href="vehicle.php">Donate a vehicle</a></li>
                </ul>
             </li>
            <li><a href="harvestlist.php"><strong>Harvests</strong></a></li>
        </ul>
        </div>
        </div>
<div class="clearfloat"></div>
<div id="mainContent">
<h3><strong>Harvests and Other Events</strong></h3>
<div id="calendar" style="height:950px;">
<p>Before signing up for an event, please be sure that you and each person signing up has registered previously on the <a href="pickerinsert.php" title="Harvester registration">Volunteers</a> page. If you have already registered as a volunteer you do not have to do so again. Each adult must sign up separately  for events. To sign up for an event, click on the 'Sign up for this event'  button. Once you sign up, you will receive a confirmation letter with the exact  address and detailed information about the event. If the roster is full, your name will be  added to a waiting list and you will receive an email if anyone ahead of you  cancels their spot.</p>
<p>Move the mouse over harvests on the calendar to see details and a sign up link below the calendar. Green harvests have roster openings left; yellow harvests have a waiting list. <strong>If you are using a smart phone you may have to scroll the top half of the page to see everything.</strong></p>
<p>&nbsp;</p>
<table id="caltable" align="center">
<tr id="daysofweek"><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>
<tr>
<td> </td><td> </td><td> </td><td> </td><td style="background-color:#ffcccc;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 10</th></tr>
 
<tr onclick="popup(pop5079),scrollWin()">
<td class="notfull" onmouseover="lookdown(this)" onmouseout="lookup(this,'FARMERS MARKET')">FARMERS MARKET </td>
</tr>     
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 11</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 12</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
		</tr><tr id="wk43"><td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 13</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 14</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 15</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 16</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 17</th></tr>
 
<tr onclick="popup(pop5080),scrollWin()">
<td class="notfull" onmouseover="lookdown(this)" onmouseout="lookup(this,'FARMERS MARKET')">FARMERS MARKET </td>
</tr>     
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 18</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 19</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
		</tr><tr id="wk44"><td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 20</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 21</th></tr>
 
<tr onclick="popup(pop5041),scrollWin()">
<td class="notfull" onmouseover="lookdown(this)" onmouseout="lookup(this,'Special Event')">Special Event </td>
</tr>     
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 22</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 23</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 24</th></tr>
 
<tr onclick="popup(pop5081),scrollWin()">
<td class="notfull" onmouseover="lookdown(this)" onmouseout="lookup(this,'FARMERS MARKET')">FARMERS MARKET </td>
</tr>     
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 25</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 26</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
		</tr><tr id="wk45"><td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 27</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 28</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 29</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 30</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Oct 31</th></tr>
 
<tr onclick="popup(pop5082),scrollWin()">
<td class="notfull" onmouseover="lookdown(this)" onmouseout="lookup(this,'FARMERS MARKET')">FARMERS MARKET </td>
</tr>     
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 1</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 2</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
		</tr><tr id="wk46"><td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 3</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 4</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 5</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 6</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 7</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 8</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 9</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
		</tr><tr id="wk47"><td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 10</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 11</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 12</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 13</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 14</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
<td style="background-color:#e2f2ff;overflow:hidden;">
<table id="cell"> 
<tr><th>Nov 15</th></tr>
</table>
&nbsp;<br/>&nbsp;
</td> 
</tr>
</table>
<br class="clearfloat" />
</div><!-- end of calendar div----------------------------------------------- -->
<br />
<div style="width:820px;"> <!-- shell placeholder for popup divs div spacing------------------------------- -->
<div class="pop" id="pop5079">
<table width="820" cellpadding="3" cellspacing="0" id="harvestlist">
      			<tr>
            <th rowspan="6" style="background-color:#CFC; padding:10px;"><form id="signup" name="signup" method="post" action="signup.php?access=public">
                <input name="harvesttemp" type="hidden" value="5079"/>
                <input type="submit" name="Submit2" id="Submit2" style="font-size:18px;height:70px; width:150px; background-color:#bdedff;white-space:normal;" onmouseover="style.fontWeight='bold'" onmouseout="style.fontWeight='normal'" value="Sign up for this event" />
             </form></th>
            <th>When</th>
            <th>Crop or task</th>
            <th>General<br />location</th>
          </tr>
          <tr>
            <td>Thursday, Oct 10<br />7:30 PM</td>
            <td>FARMERS MARKET</td>
            <td>San Luis Obispo</td>
          </tr>
          <tr>
            <th>Total volunteers<br />needed</th>
            <th>Number on<br />roster</th>
            <th>Number on<br />waiting list</th>
            <th></th>
          </tr>
          <tr>
            <td>2</td>
            <td>1</td>
            <td>0</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan = "4" class="leftjustify">This is a market collection in downtown SLO at the Thursday night Farmers Market! 
Please do not sign up for this glean unless you have been trained specifically for the SLO Farmer's Market.  </td>
          </tr>
			<tr>
            <td colspan = "4" class="leftjustify">
            Getting there:
				 You will see the harvest address after signing up.            </td>
            </tr>
      </table></div>
  <!-- end of pop -->
  <div class="pop" id="pop5080">
<table width="820" cellpadding="3" cellspacing="0" id="harvestlist">
      			<tr>
            <th rowspan="6" style="background-color:#CFC; padding:10px;"><form id="signup" name="signup" method="post" action="signup.php?access=public">
                <input name="harvesttemp" type="hidden" value="5080"/>
                <input type="submit" name="Submit2" id="Submit2" style="font-size:18px;height:70px; width:150px; background-color:#bdedff;white-space:normal;" onmouseover="style.fontWeight='bold'" onmouseout="style.fontWeight='normal'" value="Sign up for this event" />
             </form></th>
            <th>When</th>
            <th>Crop or task</th>
            <th>General<br />location</th>
          </tr>
          <tr>
            <td>Thursday, Oct 17<br />7:30 PM</td>
            <td>FARMERS MARKET</td>
            <td>San Luis Obispo</td>
          </tr>
          <tr>
            <th>Total volunteers<br />needed</th>
            <th>Number on<br />roster</th>
            <th>Number on<br />waiting list</th>
            <th></th>
          </tr>
          <tr>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan = "4" class="leftjustify">This is a market collection in downtown SLO at the Thursday night Farmers Market! 
Please do not sign up for this glean unless you have been trained specifically for the SLO Farmer's Market.  </td>
          </tr>
			<tr>
            <td colspan = "4" class="leftjustify">
            Getting there:
				 You will see the harvest address after signing up.            </td>
            </tr>
      </table></div>
  <!-- end of pop -->
  <div class="pop" id="pop5041">
<table width="820" cellpadding="3" cellspacing="0" id="harvestlist">
      			<tr>
            <th rowspan="6" style="background-color:#CFC; padding:10px;"><form id="signup" name="signup" method="post" action="signup.php?access=public">
                <input name="harvesttemp" type="hidden" value="5041"/>
                <input type="submit" name="Submit2" id="Submit2" style="font-size:18px;height:70px; width:150px; background-color:#bdedff;white-space:normal;" onmouseover="style.fontWeight='bold'" onmouseout="style.fontWeight='normal'" value="Sign up for this event" />
             </form></th>
            <th>When</th>
            <th>Crop or task</th>
            <th>General<br />location</th>
          </tr>
          <tr>
            <td>Monday, Oct 21<br />4:00 PM</td>
            <td>Special Event</td>
            <td></td>
          </tr>
          <tr>
            <th>Total volunteers<br />needed</th>
            <th>Number on<br />roster</th>
            <th>Number on<br />waiting list</th>
            <th></th>
          </tr>
          <tr>
            <td>50</td>
            <td>10</td>
            <td>0</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan = "4" class="leftjustify">This is our annual volunteer appreciation event and apple pie bake off! Join us for food, drinks, good company, and of course, apple pie! Bring a homemade pie to enter the contest or simply show up to sample the contestants. RSVP or get more details by signing up here! </td>
          </tr>
			<tr>
            <td colspan = "4" class="leftjustify">
            Getting there:
				 You will see the harvest address after signing up.            </td>
            </tr>
      </table></div>
  <!-- end of pop -->
  <div class="pop" id="pop5081">
<table width="820" cellpadding="3" cellspacing="0" id="harvestlist">
      			<tr>
            <th rowspan="6" style="background-color:#CFC; padding:10px;"><form id="signup" name="signup" method="post" action="signup.php?access=public">
                <input name="harvesttemp" type="hidden" value="5081"/>
                <input type="submit" name="Submit2" id="Submit2" style="font-size:18px;height:70px; width:150px; background-color:#bdedff;white-space:normal;" onmouseover="style.fontWeight='bold'" onmouseout="style.fontWeight='normal'" value="Sign up for this event" />
             </form></th>
            <th>When</th>
            <th>Crop or task</th>
            <th>General<br />location</th>
          </tr>
          <tr>
            <td>Thursday, Oct 24<br />7:30 PM</td>
            <td>FARMERS MARKET</td>
            <td>San Luis Obispo</td>
          </tr>
          <tr>
            <th>Total volunteers<br />needed</th>
            <th>Number on<br />roster</th>
            <th>Number on<br />waiting list</th>
            <th></th>
          </tr>
          <tr>
            <td>2</td>
            <td>1</td>
            <td>0</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan = "4" class="leftjustify">This is a market collection in downtown SLO at the Thursday night Farmers Market! 
Please do not sign up for this glean unless you have been trained specifically for the SLO Farmer's Market.  </td>
          </tr>
			<tr>
            <td colspan = "4" class="leftjustify">
            Getting there:
				 You will see the harvest address after signing up.            </td>
            </tr>
      </table></div>
  <!-- end of pop -->
  <div class="pop" id="pop5082">
<table width="820" cellpadding="3" cellspacing="0" id="harvestlist">
      			<tr>
            <th rowspan="6" style="background-color:#CFC; padding:10px;"><form id="signup" name="signup" method="post" action="signup.php?access=public">
                <input name="harvesttemp" type="hidden" value="5082"/>
                <input type="submit" name="Submit2" id="Submit2" style="font-size:18px;height:70px; width:150px; background-color:#bdedff;white-space:normal;" onmouseover="style.fontWeight='bold'" onmouseout="style.fontWeight='normal'" value="Sign up for this event" />
             </form></th>
            <th>When</th>
            <th>Crop or task</th>
            <th>General<br />location</th>
          </tr>
          <tr>
            <td>Thursday, Oct 31<br />7:30 PM</td>
            <td>FARMERS MARKET</td>
            <td>San Luis Obispo</td>
          </tr>
          <tr>
            <th>Total volunteers<br />needed</th>
            <th>Number on<br />roster</th>
            <th>Number on<br />waiting list</th>
            <th></th>
          </tr>
          <tr>
            <td>2</td>
            <td>1</td>
            <td>0</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan = "4" class="leftjustify">This is a market collection in downtown SLO at the Thursday night Farmers Market! 
Please do not sign up for this glean unless you have been trained specifically for the SLO Farmer's Market.  </td>
          </tr>
			<tr>
            <td colspan = "4" class="leftjustify">
            Getting there:
				 You will see the harvest address after signing up.            </td>
            </tr>
      </table></div>
  <!-- end of pop -->
  </div> <!-- end of popup div spacing shell----------------------------------------------- -->
  <p>&nbsp;</p>
  <table width="425" border="0" cellpadding="1" cellspacing="1" id="blogbutton" align="center">
    <tr>
      <td width="375" height="36" align="left" id="blogbutton">To get the latest news and updates about GleanSLO, visit our Facebook page.</td>
      <td width="125"><a href="https://www.facebook.com/pages/GleanSLO/290283964316368"><img src="images/Facebook.png" width="120" height="36" /></a></td>
    </tr>
  </table>
  <br />
  <table width="400" align="center" border="2" cellspacing="2" cellpadding="5">
	 <tr>
		  <th style="width:80px; color:black;">Year</th>
		  <th style="width:286px; color:black;">Pounds of food that would otherwise have gone to waste</th>
        </tr>
 <tr><td>2019</td>
			<td>156,027</td>
	 </tr>
<tr><td>2018</td>
			<td>231,377</td>
	 </tr>
<tr><td>2017</td>
			<td>279,830</td>
	 </tr>
<tr><td>2016</td>
			<td>243,312</td>
	 </tr>
<tr><td>2015</td>
			<td>209,013</td>
	 </tr>
<tr><td>2014</td>
			<td>200,092</td>
	 </tr>
<tr><td>2013</td>
			<td>212,109</td>
	 </tr>
		<tr><td>2012</td>
        	<td>99,165</td>
	    </tr>
		<tr><td>2011</td>
        	<td>37,988</td>
	    </tr>        
		<tr><td>2010</td>
        	<td>22,000</td>
	    </tr>        
    </table>
  <p>&nbsp;</p>
 </div> 
<!--<div id="footer">
<div style="float:right; width:170;"><a href="http://www.gleanweb.org" target="_blank"><img src="images/Nav buttons/gleanweb.png" alt="Website by GleanWeb" height="20" /></a></div>
<div style="width:700; "><center>Copyright © 2019 GleanSLO</center></div>
</div>-->
<div id="footer">
<div style="float:right; width:25%;text-align:right;"><a href="http://www.gleanweb.org" target="_blank"><img src="images/Nav buttons/gleanweb.png" alt="Website by GleanWeb" style="max-height:20px;" /></a></div>
<div style="float:right;width:35%;text-align:center;" id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() { new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'es,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element'); }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div style="width:39%; "><center>Copyright © 2019 GleanSLO</center></div>
</div>
</div>
</body>
</html>
