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
        $__internal_0237ab90984644c9a20a1445c0109749a66c1ce515a5a0a906e54967e2a14e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0237ab90984644c9a20a1445c0109749a66c1ce515a5a0a906e54967e2a14e9f->enter($__internal_0237ab90984644c9a20a1445c0109749a66c1ce515a5a0a906e54967e2a14e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_61390ef7a2c8088d938beab4e9283ce764fca63e1886cb8450887424bf37e012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61390ef7a2c8088d938beab4e9283ce764fca63e1886cb8450887424bf37e012->enter($__internal_61390ef7a2c8088d938beab4e9283ce764fca63e1886cb8450887424bf37e012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0237ab90984644c9a20a1445c0109749a66c1ce515a5a0a906e54967e2a14e9f->leave($__internal_0237ab90984644c9a20a1445c0109749a66c1ce515a5a0a906e54967e2a14e9f_prof);

        
        $__internal_61390ef7a2c8088d938beab4e9283ce764fca63e1886cb8450887424bf37e012->leave($__internal_61390ef7a2c8088d938beab4e9283ce764fca63e1886cb8450887424bf37e012_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d112fa017192e6c40365c75c8f5f2d66644dd1f7f3945f37b37c64dc3de8dee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d112fa017192e6c40365c75c8f5f2d66644dd1f7f3945f37b37c64dc3de8dee3->enter($__internal_d112fa017192e6c40365c75c8f5f2d66644dd1f7f3945f37b37c64dc3de8dee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bded07422945e00a12d3f8fc586aab41d29a537095e28a321bd2a487d924d228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bded07422945e00a12d3f8fc586aab41d29a537095e28a321bd2a487d924d228->enter($__internal_bded07422945e00a12d3f8fc586aab41d29a537095e28a321bd2a487d924d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_bded07422945e00a12d3f8fc586aab41d29a537095e28a321bd2a487d924d228->leave($__internal_bded07422945e00a12d3f8fc586aab41d29a537095e28a321bd2a487d924d228_prof);

        
        $__internal_d112fa017192e6c40365c75c8f5f2d66644dd1f7f3945f37b37c64dc3de8dee3->leave($__internal_d112fa017192e6c40365c75c8f5f2d66644dd1f7f3945f37b37c64dc3de8dee3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a42ee1a5f7a0167fb0310c7e4663b6b8800da9b53c9dafc0a87d6e4d068e2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a42ee1a5f7a0167fb0310c7e4663b6b8800da9b53c9dafc0a87d6e4d068e2c5->enter($__internal_2a42ee1a5f7a0167fb0310c7e4663b6b8800da9b53c9dafc0a87d6e4d068e2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e9dfffff1dcd70b75865d284d40108ec8dfa70c326849b8e3aa1f908e0eea0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9dfffff1dcd70b75865d284d40108ec8dfa70c326849b8e3aa1f908e0eea0d->enter($__internal_7e9dfffff1dcd70b75865d284d40108ec8dfa70c326849b8e3aa1f908e0eea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7e9dfffff1dcd70b75865d284d40108ec8dfa70c326849b8e3aa1f908e0eea0d->leave($__internal_7e9dfffff1dcd70b75865d284d40108ec8dfa70c326849b8e3aa1f908e0eea0d_prof);

        
        $__internal_2a42ee1a5f7a0167fb0310c7e4663b6b8800da9b53c9dafc0a87d6e4d068e2c5->leave($__internal_2a42ee1a5f7a0167fb0310c7e4663b6b8800da9b53c9dafc0a87d6e4d068e2c5_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1fc379afa1fa409dac40007689b4da15d63c08a6386a347883219d885cfa684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fc379afa1fa409dac40007689b4da15d63c08a6386a347883219d885cfa684->enter($__internal_b1fc379afa1fa409dac40007689b4da15d63c08a6386a347883219d885cfa684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc92ed13401ca79e9b2f052232162d65caccf229ca5219a09728aaf6f8c33d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc92ed13401ca79e9b2f052232162d65caccf229ca5219a09728aaf6f8c33d27->enter($__internal_cc92ed13401ca79e9b2f052232162d65caccf229ca5219a09728aaf6f8c33d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cc92ed13401ca79e9b2f052232162d65caccf229ca5219a09728aaf6f8c33d27->leave($__internal_cc92ed13401ca79e9b2f052232162d65caccf229ca5219a09728aaf6f8c33d27_prof);

        
        $__internal_b1fc379afa1fa409dac40007689b4da15d63c08a6386a347883219d885cfa684->leave($__internal_b1fc379afa1fa409dac40007689b4da15d63c08a6386a347883219d885cfa684_prof);

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
