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
        $__internal_5322f62e497522b5a8e1c9172b4360659a249785e1be78b866f2e24c84a954fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5322f62e497522b5a8e1c9172b4360659a249785e1be78b866f2e24c84a954fa->enter($__internal_5322f62e497522b5a8e1c9172b4360659a249785e1be78b866f2e24c84a954fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_fabd97f88d3a8b5f3acba487b8a65e56826b92dc26f86c059e28c59c76bb9930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabd97f88d3a8b5f3acba487b8a65e56826b92dc26f86c059e28c59c76bb9930->enter($__internal_fabd97f88d3a8b5f3acba487b8a65e56826b92dc26f86c059e28c59c76bb9930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5322f62e497522b5a8e1c9172b4360659a249785e1be78b866f2e24c84a954fa->leave($__internal_5322f62e497522b5a8e1c9172b4360659a249785e1be78b866f2e24c84a954fa_prof);

        
        $__internal_fabd97f88d3a8b5f3acba487b8a65e56826b92dc26f86c059e28c59c76bb9930->leave($__internal_fabd97f88d3a8b5f3acba487b8a65e56826b92dc26f86c059e28c59c76bb9930_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_14c0df7ee26e3059b7950e017b98d4612bfa7fbdaac803cbbedba5a147fcdb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c0df7ee26e3059b7950e017b98d4612bfa7fbdaac803cbbedba5a147fcdb1e->enter($__internal_14c0df7ee26e3059b7950e017b98d4612bfa7fbdaac803cbbedba5a147fcdb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8308e5fd5538b254c10d15373d2d806153bcf86ddf2a75513e16be61520d4f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8308e5fd5538b254c10d15373d2d806153bcf86ddf2a75513e16be61520d4f54->enter($__internal_8308e5fd5538b254c10d15373d2d806153bcf86ddf2a75513e16be61520d4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8308e5fd5538b254c10d15373d2d806153bcf86ddf2a75513e16be61520d4f54->leave($__internal_8308e5fd5538b254c10d15373d2d806153bcf86ddf2a75513e16be61520d4f54_prof);

        
        $__internal_14c0df7ee26e3059b7950e017b98d4612bfa7fbdaac803cbbedba5a147fcdb1e->leave($__internal_14c0df7ee26e3059b7950e017b98d4612bfa7fbdaac803cbbedba5a147fcdb1e_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47d56df973379f3496193cd2d56832a0e90f8a32b8563fd1351bfe7260ebfa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d56df973379f3496193cd2d56832a0e90f8a32b8563fd1351bfe7260ebfa03->enter($__internal_47d56df973379f3496193cd2d56832a0e90f8a32b8563fd1351bfe7260ebfa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13f12453db17bde734e6cf17fd0cf470ee6d0eb4d3fbc28483b39bba2facae43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f12453db17bde734e6cf17fd0cf470ee6d0eb4d3fbc28483b39bba2facae43->enter($__internal_13f12453db17bde734e6cf17fd0cf470ee6d0eb4d3fbc28483b39bba2facae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_13f12453db17bde734e6cf17fd0cf470ee6d0eb4d3fbc28483b39bba2facae43->leave($__internal_13f12453db17bde734e6cf17fd0cf470ee6d0eb4d3fbc28483b39bba2facae43_prof);

        
        $__internal_47d56df973379f3496193cd2d56832a0e90f8a32b8563fd1351bfe7260ebfa03->leave($__internal_47d56df973379f3496193cd2d56832a0e90f8a32b8563fd1351bfe7260ebfa03_prof);

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
