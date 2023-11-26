<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <style type="text/css">
    .container
{
width:100%;
height:100%;
}

     
  
  .col-12{
  
    text-align: center;
    
  }
  
  .footer-box
  {
    background-color:black;
    padding:10%;
  }
  
  .footer_bottom {
    background: #095a83;
    padding: 15px;
}


.form-inline:hover .form-control {
	width: 250px;
	padding: 0 10px;
  height: 40px;
}
 

#leftpane
{
width:100%;
height:50%;
overflow:hidden;
background-color:green;
float:left;
}
#login
{
  padding-bottom:200px;
  text-align:center;
  padding-left:30%;
}
.centered
{
    padding-right:500px;
}
#home
{
  padding-bottom: 100px;
 }

.nav-link
{  
color: black;
font-size:20px;
font-weight: 600;
font-family: 'Times New Roman', Times, serif;
}

.nav-link:hover
{
color:violet;
}
.nav-item
{
  padding-left:10px;
  padding-right: 20px;
}
.dropdown-menu 
{
  display: none;
  position:absolute;
  z-index:1;
}
.dropdown:hover .dropdown-menu
{
  display:block;
  transition:s;
}
.dropdown-item
{
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 100%;
  font-weight: 500;
  color: black;
}
.dropdown-item:hover
{
color:violet;
}
.dropdown-menu a
{
  color: black;
  padding-top: 10px;
  padding-right: 20px;
 }
.search-box {
     position: absolute;
     right: 10px;
     top: 10px;
    	padding: 0;
	margin-top: 5px;
}


.search-btn
{
  background: black;
 width: 30px;
 height: 30px;
  display: flex;
  float:right ;
  align-items: center;
   }
  .search-txt
  {
   width: 0;
   padding: 0;
   border: none;
   outline: none;
   font-weight: 500;
    transition: width 200ms;
    color: black;
    background: white;
    font-size: 15px;
 }
  .search-box:hover .search-txt
  {
    height: 30px;
    opacity:1;
    width: 200px;
  }

@media (max-width:600px)
{
.collapse
{
  width: 0px;
  height: 200px;
  border: 1px dotted black;
  overflow: scroll;
 }
}
@media (max-width:600px)
{
.dropdown-menu a
{
  color: black;
  padding-top: 10px;
  padding-right: 20px;
 }}
 .navbar-toggler{
    color: black; 
    border:none;  
    background-color: black;
}
.jumbotron{
      margin-top: 10%;
    }
.insert
{
    width:100px;
    height:50px;
    border-radius:50px ;
    border:none;
    box-shadow: 0 9px #999;
    background-color:lightgreen;
    font-size:20px;
    cursor:pointer;
}
.insert:hover
{
    background-color:darkgreen;
}
.insert:active 
{
  background-color: #3e8e41;
  transform: translateY(4px);
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<!-- <script type="text/javascript">
function formatDate(date){
var d = new Date(date),
month = '' + (d.getMonth() + 1),
day = '' + d.getDate(),
year = d.getFullYear();

if (month.length < 2) month = '0' + month;
if (day.length < 2) day = '0' + day;

return [year, month, day].join('-');

}

function getAge(dateString){
var birthdate = new Date().getTime();
if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
// variable is undefined or null value
birthdate = new Date().getTime();
}
birthdate = new Date(dateString).getTime();
var now = new Date().getTime();
// now find the difference between now and the birthdate
var n = (now - birthdate)/1000;
if (n < 604800){ // less than a week
var day_n = Math.floor(n/86400);
if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
// variable is undefined or null
return '';
}else{
return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
}
} else if (n < 2629743){ // less than a month
var week_n = Math.floor(n/604800);
if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
return '';
}else{
return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
}
} else if (n < 31562417){ // less than 24 months
var month_n = Math.floor(n/2629743);
if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
return '';
}else{
return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
}
}else{
var year_n = Math.floor(n/31556926);
if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
return year_n = '';
}else{
return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
}
}
}

function getAgeVal(pid){
var birthdate = formatDate(document.getElementById("TxtDOB").value);
var count = document.getElementById("TxtDOB").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("TxtDOB").value = "";
document.getElementById("AGE").value = "";
$('#TxtDOB').focus();
return false;
}else{
document.getElementById("AGE").value = age;
}
}else{
document.getElementById("AGE").value = "";
return false;
}
}
</script> -->
<script>
var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done 
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>
<script>
function FindAge()
{
  var day= document.getElementById("dob").value;
  var DOB = new Date(day);
  var today = new Date();
  var Age = today.getTime() - DOB.getTime();
  Age = Math.floor(Age/(1000*60*60*24*365.25));
  document.getElementById("age").value = Age;
}
</script>

  </head>
