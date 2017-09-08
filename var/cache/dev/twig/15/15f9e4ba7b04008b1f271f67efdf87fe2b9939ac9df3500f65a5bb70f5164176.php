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
        $__internal_95c759dec25936037c4d31a2cb99cb2fe8623ae40f5c8b93e04cd2475f07d57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c759dec25936037c4d31a2cb99cb2fe8623ae40f5c8b93e04cd2475f07d57e->enter($__internal_95c759dec25936037c4d31a2cb99cb2fe8623ae40f5c8b93e04cd2475f07d57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_378682c3daff38c9f31b2de5da414fea6b897c7525eeea2b1d06c6e58a3d9289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378682c3daff38c9f31b2de5da414fea6b897c7525eeea2b1d06c6e58a3d9289->enter($__internal_378682c3daff38c9f31b2de5da414fea6b897c7525eeea2b1d06c6e58a3d9289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c759dec25936037c4d31a2cb99cb2fe8623ae40f5c8b93e04cd2475f07d57e->leave($__internal_95c759dec25936037c4d31a2cb99cb2fe8623ae40f5c8b93e04cd2475f07d57e_prof);

        
        $__internal_378682c3daff38c9f31b2de5da414fea6b897c7525eeea2b1d06c6e58a3d9289->leave($__internal_378682c3daff38c9f31b2de5da414fea6b897c7525eeea2b1d06c6e58a3d9289_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_90e9b2d180938ab79bb397370bc7bd85fb5352fa65c254c1681b0ef5729d751d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e9b2d180938ab79bb397370bc7bd85fb5352fa65c254c1681b0ef5729d751d->enter($__internal_90e9b2d180938ab79bb397370bc7bd85fb5352fa65c254c1681b0ef5729d751d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fb0ce1d28f56ab821ecc0baf525db4d051bf8a047f9727f7930762d84f17267c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0ce1d28f56ab821ecc0baf525db4d051bf8a047f9727f7930762d84f17267c->enter($__internal_fb0ce1d28f56ab821ecc0baf525db4d051bf8a047f9727f7930762d84f17267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_fb0ce1d28f56ab821ecc0baf525db4d051bf8a047f9727f7930762d84f17267c->leave($__internal_fb0ce1d28f56ab821ecc0baf525db4d051bf8a047f9727f7930762d84f17267c_prof);

        
        $__internal_90e9b2d180938ab79bb397370bc7bd85fb5352fa65c254c1681b0ef5729d751d->leave($__internal_90e9b2d180938ab79bb397370bc7bd85fb5352fa65c254c1681b0ef5729d751d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13953c4270ebbb415b6db08ecc8e19aafb368cd888000b5149d54093bc462029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13953c4270ebbb415b6db08ecc8e19aafb368cd888000b5149d54093bc462029->enter($__internal_13953c4270ebbb415b6db08ecc8e19aafb368cd888000b5149d54093bc462029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8219840e9c3b52e9d83cf38661fa65d1a447f03bb390ef8a5203ee78a8ffa96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8219840e9c3b52e9d83cf38661fa65d1a447f03bb390ef8a5203ee78a8ffa96f->enter($__internal_8219840e9c3b52e9d83cf38661fa65d1a447f03bb390ef8a5203ee78a8ffa96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8219840e9c3b52e9d83cf38661fa65d1a447f03bb390ef8a5203ee78a8ffa96f->leave($__internal_8219840e9c3b52e9d83cf38661fa65d1a447f03bb390ef8a5203ee78a8ffa96f_prof);

        
        $__internal_13953c4270ebbb415b6db08ecc8e19aafb368cd888000b5149d54093bc462029->leave($__internal_13953c4270ebbb415b6db08ecc8e19aafb368cd888000b5149d54093bc462029_prof);

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
