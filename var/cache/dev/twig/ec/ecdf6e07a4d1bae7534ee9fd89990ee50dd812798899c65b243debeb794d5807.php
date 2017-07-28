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
        $__internal_614471709d8f2593adfd604b384ca51179cb1704854532dcb4f27e5848950d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614471709d8f2593adfd604b384ca51179cb1704854532dcb4f27e5848950d15->enter($__internal_614471709d8f2593adfd604b384ca51179cb1704854532dcb4f27e5848950d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_0bcd9e972bad734d456d16e28e7176a3c61ec0584b2bef66cd03aa27c3eedba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcd9e972bad734d456d16e28e7176a3c61ec0584b2bef66cd03aa27c3eedba0->enter($__internal_0bcd9e972bad734d456d16e28e7176a3c61ec0584b2bef66cd03aa27c3eedba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614471709d8f2593adfd604b384ca51179cb1704854532dcb4f27e5848950d15->leave($__internal_614471709d8f2593adfd604b384ca51179cb1704854532dcb4f27e5848950d15_prof);

        
        $__internal_0bcd9e972bad734d456d16e28e7176a3c61ec0584b2bef66cd03aa27c3eedba0->leave($__internal_0bcd9e972bad734d456d16e28e7176a3c61ec0584b2bef66cd03aa27c3eedba0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_860ef742502b3018312e0eefe569f60d84dc5cf17ed12f65fd6a08d8f78f62c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860ef742502b3018312e0eefe569f60d84dc5cf17ed12f65fd6a08d8f78f62c6->enter($__internal_860ef742502b3018312e0eefe569f60d84dc5cf17ed12f65fd6a08d8f78f62c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e9f944dedc4c706269b9a15bb47bd5e7098341b58e925e4d2a311bef528b2fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f944dedc4c706269b9a15bb47bd5e7098341b58e925e4d2a311bef528b2fe0->enter($__internal_e9f944dedc4c706269b9a15bb47bd5e7098341b58e925e4d2a311bef528b2fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_e9f944dedc4c706269b9a15bb47bd5e7098341b58e925e4d2a311bef528b2fe0->leave($__internal_e9f944dedc4c706269b9a15bb47bd5e7098341b58e925e4d2a311bef528b2fe0_prof);

        
        $__internal_860ef742502b3018312e0eefe569f60d84dc5cf17ed12f65fd6a08d8f78f62c6->leave($__internal_860ef742502b3018312e0eefe569f60d84dc5cf17ed12f65fd6a08d8f78f62c6_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d435de38b76d36d4465872a6baa893609834f274553cf421c54b537431f4086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d435de38b76d36d4465872a6baa893609834f274553cf421c54b537431f4086->enter($__internal_7d435de38b76d36d4465872a6baa893609834f274553cf421c54b537431f4086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4763f907d15f040a44ce69595ddd274c85ba894f80ee990f8c010cb1a59b6aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4763f907d15f040a44ce69595ddd274c85ba894f80ee990f8c010cb1a59b6aad->enter($__internal_4763f907d15f040a44ce69595ddd274c85ba894f80ee990f8c010cb1a59b6aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
";
        
        $__internal_4763f907d15f040a44ce69595ddd274c85ba894f80ee990f8c010cb1a59b6aad->leave($__internal_4763f907d15f040a44ce69595ddd274c85ba894f80ee990f8c010cb1a59b6aad_prof);

        
        $__internal_7d435de38b76d36d4465872a6baa893609834f274553cf421c54b537431f4086->leave($__internal_7d435de38b76d36d4465872a6baa893609834f274553cf421c54b537431f4086_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0312bb80f0c8285c9f66b4747f5bf31b691feb9f67974438072c2085bad8531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0312bb80f0c8285c9f66b4747f5bf31b691feb9f67974438072c2085bad8531->enter($__internal_d0312bb80f0c8285c9f66b4747f5bf31b691feb9f67974438072c2085bad8531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb945db08a46c9ba9a0ae01c656506f0a90e08d5cb00fa55591a84814f591b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb945db08a46c9ba9a0ae01c656506f0a90e08d5cb00fa55591a84814f591b98->enter($__internal_fb945db08a46c9ba9a0ae01c656506f0a90e08d5cb00fa55591a84814f591b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 19
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 19)->display($context);
        // line 20
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 23
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 23)->display($context);
        // line 24
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 26
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 26)->display($context);
        // line 27
        echo "  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
   </div>
   <div class=\"row\">
     ";
        // line 37
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 37)->display($context);
        // line 38
        echo "   </div>
  </div>

</div>
";
        
        $__internal_fb945db08a46c9ba9a0ae01c656506f0a90e08d5cb00fa55591a84814f591b98->leave($__internal_fb945db08a46c9ba9a0ae01c656506f0a90e08d5cb00fa55591a84814f591b98_prof);

        
        $__internal_d0312bb80f0c8285c9f66b4747f5bf31b691feb9f67974438072c2085bad8531->leave($__internal_d0312bb80f0c8285c9f66b4747f5bf31b691feb9f67974438072c2085bad8531_prof);

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
        return array (  145 => 38,  143 => 37,  131 => 27,  129 => 26,  125 => 24,  123 => 23,  118 => 20,  116 => 19,  111 => 16,  102 => 15,  90 => 12,  86 => 11,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
   </div>
   <div class=\"row\">
     {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>
  </div>

</div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
