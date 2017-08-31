<?php

/* @MAUser/Registration/register.html.twig */
class __TwigTemplate_21ff2a5b111b0df13c9c1a294c3b5b7c034dcf2c2314d5d1de9f5769152173a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72159e449814c67dc81d8dc349cd3d3695ef26533c21fe2d3c4abdab05ca150b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72159e449814c67dc81d8dc349cd3d3695ef26533c21fe2d3c4abdab05ca150b->enter($__internal_72159e449814c67dc81d8dc349cd3d3695ef26533c21fe2d3c4abdab05ca150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $__internal_d72dae0a899992ff28d9d45ca36080f89f3563a4e61a228403ecad2b4f8e3407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72dae0a899992ff28d9d45ca36080f89f3563a4e61a228403ecad2b4f8e3407->enter($__internal_d72dae0a899992ff28d9d45ca36080f89f3563a4e61a228403ecad2b4f8e3407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72159e449814c67dc81d8dc349cd3d3695ef26533c21fe2d3c4abdab05ca150b->leave($__internal_72159e449814c67dc81d8dc349cd3d3695ef26533c21fe2d3c4abdab05ca150b_prof);

        
        $__internal_d72dae0a899992ff28d9d45ca36080f89f3563a4e61a228403ecad2b4f8e3407->leave($__internal_d72dae0a899992ff28d9d45ca36080f89f3563a4e61a228403ecad2b4f8e3407_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44733e20ddfe01042cc8ee13d4114b54d7540722e31b12e1c4caf19e2d5bf5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44733e20ddfe01042cc8ee13d4114b54d7540722e31b12e1c4caf19e2d5bf5b9->enter($__internal_44733e20ddfe01042cc8ee13d4114b54d7540722e31b12e1c4caf19e2d5bf5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_434e5bfff576ec859bba44e0de105a97ebd51a67e6eb58d6cf85b124b82e4ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434e5bfff576ec859bba44e0de105a97ebd51a67e6eb58d6cf85b124b82e4ec1->enter($__internal_434e5bfff576ec859bba44e0de105a97ebd51a67e6eb58d6cf85b124b82e4ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@MAUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_434e5bfff576ec859bba44e0de105a97ebd51a67e6eb58d6cf85b124b82e4ec1->leave($__internal_434e5bfff576ec859bba44e0de105a97ebd51a67e6eb58d6cf85b124b82e4ec1_prof);

        
        $__internal_44733e20ddfe01042cc8ee13d4114b54d7540722e31b12e1c4caf19e2d5bf5b9->leave($__internal_44733e20ddfe01042cc8ee13d4114b54d7540722e31b12e1c4caf19e2d5bf5b9_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@MAUser/Registration/register.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
