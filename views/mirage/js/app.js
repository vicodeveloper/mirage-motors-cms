/**
 * Created by ViCODeveloper on 025 25.11.16.
 */
// Initialize collapse button
$(".button-collapse").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();

//slider activate
$('.slider').slider({
    full_width: true,
    height: 450,
    indicators: false,
    interval:3000
});

$('.carousel').carousel({
    full_width:true,
    padding:20,
    shift: 10
});

$(".dropdown-button").dropdown();

