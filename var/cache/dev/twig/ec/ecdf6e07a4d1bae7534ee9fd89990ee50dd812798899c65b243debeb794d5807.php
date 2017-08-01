<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_40f3eb3f8494005fceb6e440809e56d81ec4d3e438d274daeb57884d2ff8271b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44b886b03313b292457638b121ca8c51385e9fd4c4a4d1fdfae45b49aebfe9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b886b03313b292457638b121ca8c51385e9fd4c4a4d1fdfae45b49aebfe9f7->enter($__internal_44b886b03313b292457638b121ca8c51385e9fd4c4a4d1fdfae45b49aebfe9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_af379dfeeeff537b5660f60e6667c855c0fb45ccc8c380114b50245b64204fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af379dfeeeff537b5660f60e6667c855c0fb45ccc8c380114b50245b64204fb1->enter($__internal_af379dfeeeff537b5660f60e6667c855c0fb45ccc8c380114b50245b64204fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b886b03313b292457638b121ca8c51385e9fd4c4a4d1fdfae45b49aebfe9f7->leave($__internal_44b886b03313b292457638b121ca8c51385e9fd4c4a4d1fdfae45b49aebfe9f7_prof);

        
        $__internal_af379dfeeeff537b5660f60e6667c855c0fb45ccc8c380114b50245b64204fb1->leave($__internal_af379dfeeeff537b5660f60e6667c855c0fb45ccc8c380114b50245b64204fb1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ad23676b9c225ed322a56e48c8cbbcbea1345371d384429fee66138bfe7c1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad23676b9c225ed322a56e48c8cbbcbea1345371d384429fee66138bfe7c1af->enter($__internal_6ad23676b9c225ed322a56e48c8cbbcbea1345371d384429fee66138bfe7c1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59f0ca6184181ce3d372ed08c51595fdb8ce01bbc8f38b90460a19ac51b19964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f0ca6184181ce3d372ed08c51595fdb8ce01bbc8f38b90460a19ac51b19964->enter($__internal_59f0ca6184181ce3d372ed08c51595fdb8ce01bbc8f38b90460a19ac51b19964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_59f0ca6184181ce3d372ed08c51595fdb8ce01bbc8f38b90460a19ac51b19964->leave($__internal_59f0ca6184181ce3d372ed08c51595fdb8ce01bbc8f38b90460a19ac51b19964_prof);

        
        $__internal_6ad23676b9c225ed322a56e48c8cbbcbea1345371d384429fee66138bfe7c1af->leave($__internal_6ad23676b9c225ed322a56e48c8cbbcbea1345371d384429fee66138bfe7c1af_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e7a18a79934d20396e4c6baad537f569ffbea147655dd55cbf5faff07c78529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7a18a79934d20396e4c6baad537f569ffbea147655dd55cbf5faff07c78529->enter($__internal_1e7a18a79934d20396e4c6baad537f569ffbea147655dd55cbf5faff07c78529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_151876a23f3949261908a0352ff1a1fc479af83bc39c883d5a18c68ef3a5c7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151876a23f3949261908a0352ff1a1fc479af83bc39c883d5a18c68ef3a5c7d3->enter($__internal_151876a23f3949261908a0352ff1a1fc479af83bc39c883d5a18c68ef3a5c7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\" ></script>
";
        
        $__internal_151876a23f3949261908a0352ff1a1fc479af83bc39c883d5a18c68ef3a5c7d3->leave($__internal_151876a23f3949261908a0352ff1a1fc479af83bc39c883d5a18c68ef3a5c7d3_prof);

        
        $__internal_1e7a18a79934d20396e4c6baad537f569ffbea147655dd55cbf5faff07c78529->leave($__internal_1e7a18a79934d20396e4c6baad537f569ffbea147655dd55cbf5faff07c78529_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_13a8b11cf9584552756bdb2b9ec551e9a052a52989104a24158dc45d75afa95e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a8b11cf9584552756bdb2b9ec551e9a052a52989104a24158dc45d75afa95e->enter($__internal_13a8b11cf9584552756bdb2b9ec551e9a052a52989104a24158dc45d75afa95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8d4affff0835403faa971d39f99d6f6dfdaa19e31ef5809a3ccc7f1b46eeb11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d4affff0835403faa971d39f99d6f6dfdaa19e31ef5809a3ccc7f1b46eeb11->enter($__internal_f8d4affff0835403faa971d39f99d6f6dfdaa19e31ef5809a3ccc7f1b46eeb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 20
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 20)->display($context);
        // line 21
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 24
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 24)->display($context);
        // line 25
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
    ...
   </div>
   <div class=\"row\">
    <h5>LES CLIENTS A FACTURER:</h5>
    ...
   </div>
   <div class=\"row\" id=\"calendar-holder\">
        ";
        // line 43
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 43)->display($context);
        // line 44
        echo "   </div>
  </div>

</div>
";
        
        $__internal_f8d4affff0835403faa971d39f99d6f6dfdaa19e31ef5809a3ccc7f1b46eeb11->leave($__internal_f8d4affff0835403faa971d39f99d6f6dfdaa19e31ef5809a3ccc7f1b46eeb11_prof);

        
        $__internal_13a8b11cf9584552756bdb2b9ec551e9a052a52989104a24158dc45d75afa95e->leave($__internal_13a8b11cf9584552756bdb2b9ec551e9a052a52989104a24158dc45d75afa95e_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  152 => 43,  135 => 28,  133 => 27,  129 => 25,  127 => 24,  122 => 21,  120 => 20,  115 => 17,  106 => 16,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
  <link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />
  <link href=\"{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}\"  rel=\"stylesheet\" />
 {% endblock %}

{% block javascripts %}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\" ></script>
{% endblock %}

{% block body %}

 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  {% include 'connexion.html.twig' %}
  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  {% include 'navbar.html.twig' %}
  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  {% include 'sidebar.html.twig' %}
  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
    ...
   </div>
   <div class=\"row\">
    <h5>LES CLIENTS A FACTURER:</h5>
    ...
   </div>
   <div class=\"row\" id=\"calendar-holder\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>
  </div>

</div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
