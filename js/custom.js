/* Theme Name: Worthy - Free Powerful Theme by HtmlCoder
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Version:1.0.0
 * Created:November 2014
 * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
 * File Description: Place here your custom scripts
 */

/* Google Map Script
 * Restaurant
 */
 function init_map_restaurant() 
 {
	 var var_location = new google.maps.LatLng(45.305844,4.110328);
	 
	 var var_mapoptions = 
	 {
		 center: var_location,
		 zoom: 14
	 };
	 
	 var var_map = new google.maps.Map(document.getElementById("map-container-restaurant"), var_mapoptions);
	 
	 var contentString = 
		'<div id="infowindow_content">'+
        '<p><strong>La Taverne du Voyageur</strong><br>'+
		'Une Taverne de passage et de repos<br>' +
		'Gastronomie française<br>'+
		'pour petits et grands !</p>'+
		'<a href="index.php" target="_blank">Le Restaurant</a>'+
		'</div>';
 
        var var_infowindow = new google.maps.InfoWindow(
		{
			content: contentString
        });
	 
	 var var_marker = new google.maps.Marker(
	 {
		 position: var_location,
		 map: var_map,
		 title:"La Taverne du Voyageur",
		 maxWidth: 500
	 });
	 
	 google.maps.event.addListener(var_marker, 'click', function() {
		 var_infowindow.open(var_map,var_marker);
	 });	
 }
 
 /* Google Map Script
 * Chambres d'hôtes
 */
 function init_map_chambres() 
 {
	 var var_location = new google.maps.LatLng(45.305844,4.110328);
	 
	 var var_mapoptions = 
	 {
		 center: var_location,
		 zoom: 14
	 };
	 
	 var var_map = new google.maps.Map(document.getElementById("map-container-chambres"), var_mapoptions);
	 
	 var contentString = 
		'<div id="infowindow_content">'+
        '<p><strong>La Taverne du Voyageur</strong><br>'+
		'Une Taverne de passage et de repos<br>' +
		'Pour les voyageurs<br>'+
		'et les fins gourmets !</p>'+
		'<a href="index.php" target="_blank">Les Chambres</a>'+
		'</div>';
 
        var var_infowindow = new google.maps.InfoWindow(
		{
			content: contentString
        });
	 
	 var var_marker = new google.maps.Marker(
	 {
		 position: var_location,
		 map: var_map,
		 title:"La Taverne du Voyageur",
		 maxWidth: 500
	 });
	 
	 google.maps.event.addListener(var_marker, 'click', function() {
		 var_infowindow.open(var_map,var_marker);
	 });	
 }

