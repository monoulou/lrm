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
        $__internal_8c07913386d2e59762f28b034d915db9062575047a91cd3ae571bdd5bd08649c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c07913386d2e59762f28b034d915db9062575047a91cd3ae571bdd5bd08649c->enter($__internal_8c07913386d2e59762f28b034d915db9062575047a91cd3ae571bdd5bd08649c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_b103c5d904913700b1f0721ce930a2162e728480f380b3a3c61f49597b69667d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b103c5d904913700b1f0721ce930a2162e728480f380b3a3c61f49597b69667d->enter($__internal_b103c5d904913700b1f0721ce930a2162e728480f380b3a3c61f49597b69667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c07913386d2e59762f28b034d915db9062575047a91cd3ae571bdd5bd08649c->leave($__internal_8c07913386d2e59762f28b034d915db9062575047a91cd3ae571bdd5bd08649c_prof);

        
        $__internal_b103c5d904913700b1f0721ce930a2162e728480f380b3a3c61f49597b69667d->leave($__internal_b103c5d904913700b1f0721ce930a2162e728480f380b3a3c61f49597b69667d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72c4963831fc96ea32b805237f0f7092199bbc568d70ee21400b33b674f3f7b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c4963831fc96ea32b805237f0f7092199bbc568d70ee21400b33b674f3f7b6->enter($__internal_72c4963831fc96ea32b805237f0f7092199bbc568d70ee21400b33b674f3f7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6a158d764254f7d784124b01708154339659db39d68bee5d52665d954df968f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a158d764254f7d784124b01708154339659db39d68bee5d52665d954df968f1->enter($__internal_6a158d764254f7d784124b01708154339659db39d68bee5d52665d954df968f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_6a158d764254f7d784124b01708154339659db39d68bee5d52665d954df968f1->leave($__internal_6a158d764254f7d784124b01708154339659db39d68bee5d52665d954df968f1_prof);

        
        $__internal_72c4963831fc96ea32b805237f0f7092199bbc568d70ee21400b33b674f3f7b6->leave($__internal_72c4963831fc96ea32b805237f0f7092199bbc568d70ee21400b33b674f3f7b6_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c4a4e207fde0f5e22c65bcf2eb031f2cb9139acb1bc3493e8479eff4b2b8d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4a4e207fde0f5e22c65bcf2eb031f2cb9139acb1bc3493e8479eff4b2b8d8e->enter($__internal_6c4a4e207fde0f5e22c65bcf2eb031f2cb9139acb1bc3493e8479eff4b2b8d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4288592ef5a6819c80c2dfbd490a27b30a3c06dbb930bb517e7dab713cd12d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4288592ef5a6819c80c2dfbd490a27b30a3c06dbb930bb517e7dab713cd12d55->enter($__internal_4288592ef5a6819c80c2dfbd490a27b30a3c06dbb930bb517e7dab713cd12d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4288592ef5a6819c80c2dfbd490a27b30a3c06dbb930bb517e7dab713cd12d55->leave($__internal_4288592ef5a6819c80c2dfbd490a27b30a3c06dbb930bb517e7dab713cd12d55_prof);

        
        $__internal_6c4a4e207fde0f5e22c65bcf2eb031f2cb9139acb1bc3493e8479eff4b2b8d8e->leave($__internal_6c4a4e207fde0f5e22c65bcf2eb031f2cb9139acb1bc3493e8479eff4b2b8d8e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dab0ea947713bb77680113b162eae02bd4036b677ffc7f383c8a51d653c6f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dab0ea947713bb77680113b162eae02bd4036b677ffc7f383c8a51d653c6f19->enter($__internal_7dab0ea947713bb77680113b162eae02bd4036b677ffc7f383c8a51d653c6f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cba19b281c5b74cfa2880e1ac8cce1de96b46c4d87eaf36050d073f8bbe8858c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba19b281c5b74cfa2880e1ac8cce1de96b46c4d87eaf36050d073f8bbe8858c->enter($__internal_cba19b281c5b74cfa2880e1ac8cce1de96b46c4d87eaf36050d073f8bbe8858c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
   <div class=\"row\">
     <div class=\"container\" id=\"calendar-holder\">
        ";
        // line 44
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 44)->display($context);
        // line 45
        echo "     </div>
   </div>
  </div>

</div>
";
        
        $__internal_cba19b281c5b74cfa2880e1ac8cce1de96b46c4d87eaf36050d073f8bbe8858c->leave($__internal_cba19b281c5b74cfa2880e1ac8cce1de96b46c4d87eaf36050d073f8bbe8858c_prof);

        
        $__internal_7dab0ea947713bb77680113b162eae02bd4036b677ffc7f383c8a51d653c6f19->leave($__internal_7dab0ea947713bb77680113b162eae02bd4036b677ffc7f383c8a51d653c6f19_prof);

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
        return array (  155 => 45,  153 => 44,  135 => 28,  133 => 27,  129 => 25,  127 => 24,  122 => 21,  120 => 20,  115 => 17,  106 => 16,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
   <div class=\"row\">
     <div class=\"container\" id=\"calendar-holder\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
     </div>
   </div>
  </div>

</div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
