<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_a9186e13a5a8a29cc83e9f58ee8774fde3451b9df2fb9f3bf4a917cf4130b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b7e37ccc7a1502eb6bfaa1593ae2fc5f1088587a59c53390c5f1c794333eac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7e37ccc7a1502eb6bfaa1593ae2fc5f1088587a59c53390c5f1c794333eac6->enter($__internal_2b7e37ccc7a1502eb6bfaa1593ae2fc5f1088587a59c53390c5f1c794333eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_322193afd86933a3d5be46a5963565b6777eb5f39de52d96b59ad05bb416f787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322193afd86933a3d5be46a5963565b6777eb5f39de52d96b59ad05bb416f787->enter($__internal_322193afd86933a3d5be46a5963565b6777eb5f39de52d96b59ad05bb416f787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7e37ccc7a1502eb6bfaa1593ae2fc5f1088587a59c53390c5f1c794333eac6->leave($__internal_2b7e37ccc7a1502eb6bfaa1593ae2fc5f1088587a59c53390c5f1c794333eac6_prof);

        
        $__internal_322193afd86933a3d5be46a5963565b6777eb5f39de52d96b59ad05bb416f787->leave($__internal_322193afd86933a3d5be46a5963565b6777eb5f39de52d96b59ad05bb416f787_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4993e489563381b13e56e45b99513eb75a5255dbe6702c95d28ccb02e5ef734b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4993e489563381b13e56e45b99513eb75a5255dbe6702c95d28ccb02e5ef734b->enter($__internal_4993e489563381b13e56e45b99513eb75a5255dbe6702c95d28ccb02e5ef734b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f3849e613ad9325fe5fe88e3211f34ff7af4d0541681d4e5d4d89444dc09b9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3849e613ad9325fe5fe88e3211f34ff7af4d0541681d4e5d4d89444dc09b9f6->enter($__internal_f3849e613ad9325fe5fe88e3211f34ff7af4d0541681d4e5d4d89444dc09b9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_f3849e613ad9325fe5fe88e3211f34ff7af4d0541681d4e5d4d89444dc09b9f6->leave($__internal_f3849e613ad9325fe5fe88e3211f34ff7af4d0541681d4e5d4d89444dc09b9f6_prof);

        
        $__internal_4993e489563381b13e56e45b99513eb75a5255dbe6702c95d28ccb02e5ef734b->leave($__internal_4993e489563381b13e56e45b99513eb75a5255dbe6702c95d28ccb02e5ef734b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_42bb709f055c30b7c11e432790707018226562f9f13329d8a6ee2d4fcbae9f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42bb709f055c30b7c11e432790707018226562f9f13329d8a6ee2d4fcbae9f15->enter($__internal_42bb709f055c30b7c11e432790707018226562f9f13329d8a6ee2d4fcbae9f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d61340b2f3b539dcf8fd83a6fb598f272b2b00d363ba3fd2a47502be3f08585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d61340b2f3b539dcf8fd83a6fb598f272b2b00d363ba3fd2a47502be3f08585->enter($__internal_9d61340b2f3b539dcf8fd83a6fb598f272b2b00d363ba3fd2a47502be3f08585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 11
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 11)->display($context);
        // line 12
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 15
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 15)->display($context);
        // line 16
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 18
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 18)->display($context);
        // line 19
        echo "  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
   </div>
  </div>

</div>



";
        
        $__internal_9d61340b2f3b539dcf8fd83a6fb598f272b2b00d363ba3fd2a47502be3f08585->leave($__internal_9d61340b2f3b539dcf8fd83a6fb598f272b2b00d363ba3fd2a47502be3f08585_prof);

        
        $__internal_42bb709f055c30b7c11e432790707018226562f9f13329d8a6ee2d4fcbae9f15->leave($__internal_42bb709f055c30b7c11e432790707018226562f9f13329d8a6ee2d4fcbae9f15_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1c32eaa5236fed5fddaa3c7a2d7a53b3f5255913a1ba354db8daeb2046b6f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c32eaa5236fed5fddaa3c7a2d7a53b3f5255913a1ba354db8daeb2046b6f52->enter($__internal_d1c32eaa5236fed5fddaa3c7a2d7a53b3f5255913a1ba354db8daeb2046b6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3e7c86c60bff46c1df2dcedf50ffc2e8c05dad3238c5ecb825c378878af8c26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7c86c60bff46c1df2dcedf50ffc2e8c05dad3238c5ecb825c378878af8c26d->enter($__internal_3e7c86c60bff46c1df2dcedf50ffc2e8c05dad3238c5ecb825c378878af8c26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e7c86c60bff46c1df2dcedf50ffc2e8c05dad3238c5ecb825c378878af8c26d->leave($__internal_3e7c86c60bff46c1df2dcedf50ffc2e8c05dad3238c5ecb825c378878af8c26d_prof);

        
        $__internal_d1c32eaa5236fed5fddaa3c7a2d7a53b3f5255913a1ba354db8daeb2046b6f52->leave($__internal_d1c32eaa5236fed5fddaa3c7a2d7a53b3f5255913a1ba354db8daeb2046b6f52_prof);

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
        return array (  118 => 37,  93 => 19,  91 => 18,  87 => 16,  85 => 15,  80 => 12,  78 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  </div>

</div>



{% endblock %}


{% block javascripts %}
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Accueil\\index.html.twig");
    }
}
