// Initialize collapse button

// Initialize collapsible (uncomment the line below if you use the dropdown variation)
$('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
    }
);

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
$('input.autocomplete').autocomplete({
    data: {
        "Coffee": null,
        "Tennis": null,
        "The": null,
        "Sport": null,
        "breakfast": null,
        "jogging": null,
        "talking": null

    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
        // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
});

$('.time-demo').formatter({
    'pattern': '{{99}}-{{99}}'
});

$(document).ready(function(){
    $('.collapsible').collapsible();
});
