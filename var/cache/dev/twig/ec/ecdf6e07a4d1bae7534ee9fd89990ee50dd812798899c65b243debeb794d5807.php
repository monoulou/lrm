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
        $__internal_f2b4a0c696eaba6e3baaa34f5fd5394d80512ce3b69697d37ac0d2796c12e8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b4a0c696eaba6e3baaa34f5fd5394d80512ce3b69697d37ac0d2796c12e8db->enter($__internal_f2b4a0c696eaba6e3baaa34f5fd5394d80512ce3b69697d37ac0d2796c12e8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_2d19e613c73555cf57df01b722875bcf503c708a459cb6ff066f436ca9afaedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d19e613c73555cf57df01b722875bcf503c708a459cb6ff066f436ca9afaedf->enter($__internal_2d19e613c73555cf57df01b722875bcf503c708a459cb6ff066f436ca9afaedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b4a0c696eaba6e3baaa34f5fd5394d80512ce3b69697d37ac0d2796c12e8db->leave($__internal_f2b4a0c696eaba6e3baaa34f5fd5394d80512ce3b69697d37ac0d2796c12e8db_prof);

        
        $__internal_2d19e613c73555cf57df01b722875bcf503c708a459cb6ff066f436ca9afaedf->leave($__internal_2d19e613c73555cf57df01b722875bcf503c708a459cb6ff066f436ca9afaedf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9277c1aee31ce7bcc2206e330686a8660d2447b24cd5f7b163d71d8b8a6920e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9277c1aee31ce7bcc2206e330686a8660d2447b24cd5f7b163d71d8b8a6920e8->enter($__internal_9277c1aee31ce7bcc2206e330686a8660d2447b24cd5f7b163d71d8b8a6920e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a6f738f60b81479fa23331ffd810e90f9f85df778282887e64bb8df56b5f2b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f738f60b81479fa23331ffd810e90f9f85df778282887e64bb8df56b5f2b6c->enter($__internal_a6f738f60b81479fa23331ffd810e90f9f85df778282887e64bb8df56b5f2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_a6f738f60b81479fa23331ffd810e90f9f85df778282887e64bb8df56b5f2b6c->leave($__internal_a6f738f60b81479fa23331ffd810e90f9f85df778282887e64bb8df56b5f2b6c_prof);

        
        $__internal_9277c1aee31ce7bcc2206e330686a8660d2447b24cd5f7b163d71d8b8a6920e8->leave($__internal_9277c1aee31ce7bcc2206e330686a8660d2447b24cd5f7b163d71d8b8a6920e8_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_089263ba7d48d47781f4c9fae9958072edd7700c3083b036c63324503765ea63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089263ba7d48d47781f4c9fae9958072edd7700c3083b036c63324503765ea63->enter($__internal_089263ba7d48d47781f4c9fae9958072edd7700c3083b036c63324503765ea63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e1439364779d1a48599024b43f8433d2ef040dfd543b87c676cfb7995d40ea54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1439364779d1a48599024b43f8433d2ef040dfd543b87c676cfb7995d40ea54->enter($__internal_e1439364779d1a48599024b43f8433d2ef040dfd543b87c676cfb7995d40ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo " ";
        // line 10
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

 ";
        // line 14
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\" ></script>
 <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" ></script>




";
        
        $__internal_e1439364779d1a48599024b43f8433d2ef040dfd543b87c676cfb7995d40ea54->leave($__internal_e1439364779d1a48599024b43f8433d2ef040dfd543b87c676cfb7995d40ea54_prof);

        
        $__internal_089263ba7d48d47781f4c9fae9958072edd7700c3083b036c63324503765ea63->leave($__internal_089263ba7d48d47781f4c9fae9958072edd7700c3083b036c63324503765ea63_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_578a34a476b08cb5805631eeca2d4ddcadf825f72636fab851177bdbb75ef980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578a34a476b08cb5805631eeca2d4ddcadf825f72636fab851177bdbb75ef980->enter($__internal_578a34a476b08cb5805631eeca2d4ddcadf825f72636fab851177bdbb75ef980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f021bd6870d9c43de8cb1dc03dcca925e2cff2c07a73cfe138ec510c420081db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f021bd6870d9c43de8cb1dc03dcca925e2cff2c07a73cfe138ec510c420081db->enter($__internal_f021bd6870d9c43de8cb1dc03dcca925e2cff2c07a73cfe138ec510c420081db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 27
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 31)->display($context);
        // line 32
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 34)->display($context);
        // line 35
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
   <div class=\"row\" id=\"calendar\">
        ";
        // line 52
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 52)->display($context);
        // line 53
        echo "   </div>

  </div>

 </div>

 </div>
";
        
        $__internal_f021bd6870d9c43de8cb1dc03dcca925e2cff2c07a73cfe138ec510c420081db->leave($__internal_f021bd6870d9c43de8cb1dc03dcca925e2cff2c07a73cfe138ec510c420081db_prof);

        
        $__internal_578a34a476b08cb5805631eeca2d4ddcadf825f72636fab851177bdbb75ef980->leave($__internal_578a34a476b08cb5805631eeca2d4ddcadf825f72636fab851177bdbb75ef980_prof);

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
        return array (  164 => 53,  162 => 52,  143 => 35,  141 => 34,  137 => 32,  135 => 31,  130 => 28,  128 => 27,  123 => 24,  114 => 23,  98 => 16,  94 => 15,  89 => 14,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>

 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\" ></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/datepicker.js') }}\" ></script>




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
   <div class=\"row\" id=\"calendar\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>

  </div>

 </div>

 </div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
