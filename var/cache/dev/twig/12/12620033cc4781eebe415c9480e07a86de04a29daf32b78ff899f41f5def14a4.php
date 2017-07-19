<?php

/* @MALrm/Test/test.html.twig */
class __TwigTemplate_be2447b2985ea18c080a62accf0a5954de0a2a27f117462d3fd0860be51c0c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_452453ff258cf07e37affba07283c5a6992a31dbbb303c867780f2c51d80f42c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452453ff258cf07e37affba07283c5a6992a31dbbb303c867780f2c51d80f42c->enter($__internal_452453ff258cf07e37affba07283c5a6992a31dbbb303c867780f2c51d80f42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Test/test.html.twig"));

        $__internal_15db687e76b709c7cbe117b79c2a137aa7d676d0fb7e76e7bdbad671727df8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15db687e76b709c7cbe117b79c2a137aa7d676d0fb7e76e7bdbad671727df8f9->enter($__internal_15db687e76b709c7cbe117b79c2a137aa7d676d0fb7e76e7bdbad671727df8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Test/test.html.twig"));

        // line 1
        echo "
";
        // line 41
        echo "
<!DOCTYPE html>
<html>
<head>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD4jmnzBH8AIy8tBObQIYe3fUoSXaBRBBA&libraries=places\"></script>
</head>
<body>
<form>
    <label>Address</label>
    <input id=\"user_input_autocomplete_address\" placeholder=\"Votre adresse...\">
    <label>street_number</label>
    <input id=\"street_number\" name=\"street_number\" disabled>
    <label>route</label>
    <input id=\"route\" name=\"route\" disabled>
    <label>locality</label>
    <input id=\"locality\" name=\"locality\" disabled>
    <label>country</label>
    <input id=\"country\" name=\"country\" disabled>
</form>

<script>
    function initializeAutocomplete(id) {
        var element = document.getElementById(id);
        if (element) {
            var autocomplete = new google.maps.places.Autocomplete(element, { types: ['geocode'] });
            google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
        }
    }

    function onPlaceChanged() {
        var place = this.getPlace();

        // console.log(place);  // Uncomment this line to view the full object returned by Google API.

        for (var i in place.address_components) {
            var component = place.address_components[i];
            for (var j in component.types) {  // Some types are [\"country\", \"political\"]
                var type_element = document.getElementById(component.types[j]);
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }
    }

    google.maps.event.addDomListener(window, 'load', function() {
        initializeAutocomplete('user_input_autocomplete_address');
    });

</script>
</body>
</html>";
        
        $__internal_452453ff258cf07e37affba07283c5a6992a31dbbb303c867780f2c51d80f42c->leave($__internal_452453ff258cf07e37affba07283c5a6992a31dbbb303c867780f2c51d80f42c_prof);

        
        $__internal_15db687e76b709c7cbe117b79c2a137aa7d676d0fb7e76e7bdbad671727df8f9->leave($__internal_15db687e76b709c7cbe117b79c2a137aa7d676d0fb7e76e7bdbad671727df8f9_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Test/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 41,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{#
<!DOCTYPE html>
<html>
<head>
    #}
{#AIzaSyD4jmnzBH8AIy8tBObQIYe3fUoSXaBRBBA#}{#

    <title>Simple Map</title>
    <meta name=\"viewport\" content=\"initial-scale=1.0\">
    <meta charset=\"utf-8\">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div id=\"map\"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD4jmnzBH8AIy8tBObQIYe3fUoSXaBRBBA&callback=initMap\"
        async defer></script>
</body>
</html>#}

<!DOCTYPE html>
<html>
<head>
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD4jmnzBH8AIy8tBObQIYe3fUoSXaBRBBA&libraries=places\"></script>
</head>
<body>
<form>
    <label>Address</label>
    <input id=\"user_input_autocomplete_address\" placeholder=\"Votre adresse...\">
    <label>street_number</label>
    <input id=\"street_number\" name=\"street_number\" disabled>
    <label>route</label>
    <input id=\"route\" name=\"route\" disabled>
    <label>locality</label>
    <input id=\"locality\" name=\"locality\" disabled>
    <label>country</label>
    <input id=\"country\" name=\"country\" disabled>
</form>

<script>
    function initializeAutocomplete(id) {
        var element = document.getElementById(id);
        if (element) {
            var autocomplete = new google.maps.places.Autocomplete(element, { types: ['geocode'] });
            google.maps.event.addListener(autocomplete, 'place_changed', onPlaceChanged);
        }
    }

    function onPlaceChanged() {
        var place = this.getPlace();

        // console.log(place);  // Uncomment this line to view the full object returned by Google API.

        for (var i in place.address_components) {
            var component = place.address_components[i];
            for (var j in component.types) {  // Some types are [\"country\", \"political\"]
                var type_element = document.getElementById(component.types[j]);
                if (type_element) {
                    type_element.value = component.long_name;
                }
            }
        }
    }

    google.maps.event.addDomListener(window, 'load', function() {
        initializeAutocomplete('user_input_autocomplete_address');
    });

</script>
</body>
</html>", "@MALrm/Test/test.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Test\\test.html.twig");
    }
}
