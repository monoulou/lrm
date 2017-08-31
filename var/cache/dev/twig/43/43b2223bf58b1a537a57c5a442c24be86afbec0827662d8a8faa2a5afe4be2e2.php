<?php

/* @MALrm/Accueil/index.html.twig */
class __TwigTemplate_a9186e13a5a8a29cc83e9f58ee8774fde3451b9df2fb9f3bf4a917cf4130b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Accueil/index.html.twig", 1);
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
        $__internal_2b82e956ec523bad373d7972626d1ddf0991fc08df2f9ff7f50a32e4682605ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b82e956ec523bad373d7972626d1ddf0991fc08df2f9ff7f50a32e4682605ab->enter($__internal_2b82e956ec523bad373d7972626d1ddf0991fc08df2f9ff7f50a32e4682605ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $__internal_8dd935980466c318f072b6b157f1f932dcb4b441177adbd839ea64e7bd926dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd935980466c318f072b6b157f1f932dcb4b441177adbd839ea64e7bd926dc7->enter($__internal_8dd935980466c318f072b6b157f1f932dcb4b441177adbd839ea64e7bd926dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b82e956ec523bad373d7972626d1ddf0991fc08df2f9ff7f50a32e4682605ab->leave($__internal_2b82e956ec523bad373d7972626d1ddf0991fc08df2f9ff7f50a32e4682605ab_prof);

        
        $__internal_8dd935980466c318f072b6b157f1f932dcb4b441177adbd839ea64e7bd926dc7->leave($__internal_8dd935980466c318f072b6b157f1f932dcb4b441177adbd839ea64e7bd926dc7_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80507768a22d1e1604d5c1b08868879846cd84b7741b6373028cb72177ad249b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80507768a22d1e1604d5c1b08868879846cd84b7741b6373028cb72177ad249b->enter($__internal_80507768a22d1e1604d5c1b08868879846cd84b7741b6373028cb72177ad249b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c9365e5018a7a8a423a070a95dd3cb46c799fb481b0590d14b353ca6bbba3463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9365e5018a7a8a423a070a95dd3cb46c799fb481b0590d14b353ca6bbba3463->enter($__internal_c9365e5018a7a8a423a070a95dd3cb46c799fb481b0590d14b353ca6bbba3463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_c9365e5018a7a8a423a070a95dd3cb46c799fb481b0590d14b353ca6bbba3463->leave($__internal_c9365e5018a7a8a423a070a95dd3cb46c799fb481b0590d14b353ca6bbba3463_prof);

        
        $__internal_80507768a22d1e1604d5c1b08868879846cd84b7741b6373028cb72177ad249b->leave($__internal_80507768a22d1e1604d5c1b08868879846cd84b7741b6373028cb72177ad249b_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42270009a6f731f4ccd108e407cb6f790fadd545cf70a5d7815ec23d42fc326c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42270009a6f731f4ccd108e407cb6f790fadd545cf70a5d7815ec23d42fc326c->enter($__internal_42270009a6f731f4ccd108e407cb6f790fadd545cf70a5d7815ec23d42fc326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4bb6b1a5c28d2119f7778f5196826190bb04db455fe78313a6e8927933040c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb6b1a5c28d2119f7778f5196826190bb04db455fe78313a6e8927933040c24->enter($__internal_4bb6b1a5c28d2119f7778f5196826190bb04db455fe78313a6e8927933040c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4bb6b1a5c28d2119f7778f5196826190bb04db455fe78313a6e8927933040c24->leave($__internal_4bb6b1a5c28d2119f7778f5196826190bb04db455fe78313a6e8927933040c24_prof);

        
        $__internal_42270009a6f731f4ccd108e407cb6f790fadd545cf70a5d7815ec23d42fc326c->leave($__internal_42270009a6f731f4ccd108e407cb6f790fadd545cf70a5d7815ec23d42fc326c_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a7745ef2ea73165aa378dfc99f298d5c1739cd3701bb8dd1b2d0936ae8c0334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7745ef2ea73165aa378dfc99f298d5c1739cd3701bb8dd1b2d0936ae8c0334->enter($__internal_9a7745ef2ea73165aa378dfc99f298d5c1739cd3701bb8dd1b2d0936ae8c0334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c54e440290e7842e28e957f38bb53eb6a9913b744a2eb18b72d505034cff5020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54e440290e7842e28e957f38bb53eb6a9913b744a2eb18b72d505034cff5020->enter($__internal_c54e440290e7842e28e957f38bb53eb6a9913b744a2eb18b72d505034cff5020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 27
        $this->loadTemplate("connexion.html.twig", "@MALrm/Accueil/index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "@MALrm/Accueil/index.html.twig", 31)->display($context);
        // line 32
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Accueil/index.html.twig", 34)->display($context);
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
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "@MALrm/Accueil/index.html.twig", 52)->display($context);
        // line 53
        echo "   </div>

  </div>

 </div>

 </div>
";
        
        $__internal_c54e440290e7842e28e957f38bb53eb6a9913b744a2eb18b72d505034cff5020->leave($__internal_c54e440290e7842e28e957f38bb53eb6a9913b744a2eb18b72d505034cff5020_prof);

        
        $__internal_9a7745ef2ea73165aa378dfc99f298d5c1739cd3701bb8dd1b2d0936ae8c0334->leave($__internal_9a7745ef2ea73165aa378dfc99f298d5c1739cd3701bb8dd1b2d0936ae8c0334_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Accueil/index.html.twig";
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
{% endblock %}", "@MALrm/Accueil/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Accueil\\index.html.twig");
    }
}
