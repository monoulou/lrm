<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_590f22820d7b2553c588b320f9195b95e3ea174547f82b5ff3453c27407177fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c710ba75592046340a5db2c7d87544bdf2acfdbce2691cb4cc386a329c9a0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c710ba75592046340a5db2c7d87544bdf2acfdbce2691cb4cc386a329c9a0b3->enter($__internal_9c710ba75592046340a5db2c7d87544bdf2acfdbce2691cb4cc386a329c9a0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_6e5c1f3ab8aa77113fed2f0d6eeba62e9745d97b72fa4197ce81c06a940a2b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5c1f3ab8aa77113fed2f0d6eeba62e9745d97b72fa4197ce81c06a940a2b84->enter($__internal_6e5c1f3ab8aa77113fed2f0d6eeba62e9745d97b72fa4197ce81c06a940a2b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c710ba75592046340a5db2c7d87544bdf2acfdbce2691cb4cc386a329c9a0b3->leave($__internal_9c710ba75592046340a5db2c7d87544bdf2acfdbce2691cb4cc386a329c9a0b3_prof);

        
        $__internal_6e5c1f3ab8aa77113fed2f0d6eeba62e9745d97b72fa4197ce81c06a940a2b84->leave($__internal_6e5c1f3ab8aa77113fed2f0d6eeba62e9745d97b72fa4197ce81c06a940a2b84_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7a3cab32122f606c0e0bb23b8009da6b2e57364b751749bea06f2fce2d7d8e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3cab32122f606c0e0bb23b8009da6b2e57364b751749bea06f2fce2d7d8e56->enter($__internal_7a3cab32122f606c0e0bb23b8009da6b2e57364b751749bea06f2fce2d7d8e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3aad126855125d4a4d870568e662579cc4f508694e6aaec1de376ba338baa75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aad126855125d4a4d870568e662579cc4f508694e6aaec1de376ba338baa75f->enter($__internal_3aad126855125d4a4d870568e662579cc4f508694e6aaec1de376ba338baa75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3aad126855125d4a4d870568e662579cc4f508694e6aaec1de376ba338baa75f->leave($__internal_3aad126855125d4a4d870568e662579cc4f508694e6aaec1de376ba338baa75f_prof);

        
        $__internal_7a3cab32122f606c0e0bb23b8009da6b2e57364b751749bea06f2fce2d7d8e56->leave($__internal_7a3cab32122f606c0e0bb23b8009da6b2e57364b751749bea06f2fce2d7d8e56_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c7f198c6f3c0134f20d195021675a9bdca4db8033f7380475d579326c82fa6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7f198c6f3c0134f20d195021675a9bdca4db8033f7380475d579326c82fa6a->enter($__internal_2c7f198c6f3c0134f20d195021675a9bdca4db8033f7380475d579326c82fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc88fea69d7d686839e094aa13e51a97f344fb911a26d454852dea92f221d03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88fea69d7d686839e094aa13e51a97f344fb911a26d454852dea92f221d03e->enter($__internal_cc88fea69d7d686839e094aa13e51a97f344fb911a26d454852dea92f221d03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cc88fea69d7d686839e094aa13e51a97f344fb911a26d454852dea92f221d03e->leave($__internal_cc88fea69d7d686839e094aa13e51a97f344fb911a26d454852dea92f221d03e_prof);

        
        $__internal_2c7f198c6f3c0134f20d195021675a9bdca4db8033f7380475d579326c82fa6a->leave($__internal_2c7f198c6f3c0134f20d195021675a9bdca4db8033f7380475d579326c82fa6a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
