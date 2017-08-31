<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7ac64774699943393263be28ee5d7e8d9fb0a5b9b1fabd2011391fd175887e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_8136cdaae4e6cca9ff27c2fce10a07c92e7411094095b3d10c431c392f003e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8136cdaae4e6cca9ff27c2fce10a07c92e7411094095b3d10c431c392f003e95->enter($__internal_8136cdaae4e6cca9ff27c2fce10a07c92e7411094095b3d10c431c392f003e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_865398d57490549f1f09eaddb044cc94f3ed95acfc3a3a02abd508dafc19aef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865398d57490549f1f09eaddb044cc94f3ed95acfc3a3a02abd508dafc19aef1->enter($__internal_865398d57490549f1f09eaddb044cc94f3ed95acfc3a3a02abd508dafc19aef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8136cdaae4e6cca9ff27c2fce10a07c92e7411094095b3d10c431c392f003e95->leave($__internal_8136cdaae4e6cca9ff27c2fce10a07c92e7411094095b3d10c431c392f003e95_prof);

        
        $__internal_865398d57490549f1f09eaddb044cc94f3ed95acfc3a3a02abd508dafc19aef1->leave($__internal_865398d57490549f1f09eaddb044cc94f3ed95acfc3a3a02abd508dafc19aef1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2da830e2de92553afc6fe11d2120e9c54b681aceceb483f19609ccc426a34c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da830e2de92553afc6fe11d2120e9c54b681aceceb483f19609ccc426a34c2c->enter($__internal_2da830e2de92553afc6fe11d2120e9c54b681aceceb483f19609ccc426a34c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_64a1bfdbb931f9ee4f2a87a2903a186784bb8a2e5a1c14418e772b1fd290e298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a1bfdbb931f9ee4f2a87a2903a186784bb8a2e5a1c14418e772b1fd290e298->enter($__internal_64a1bfdbb931f9ee4f2a87a2903a186784bb8a2e5a1c14418e772b1fd290e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_64a1bfdbb931f9ee4f2a87a2903a186784bb8a2e5a1c14418e772b1fd290e298->leave($__internal_64a1bfdbb931f9ee4f2a87a2903a186784bb8a2e5a1c14418e772b1fd290e298_prof);

        
        $__internal_2da830e2de92553afc6fe11d2120e9c54b681aceceb483f19609ccc426a34c2c->leave($__internal_2da830e2de92553afc6fe11d2120e9c54b681aceceb483f19609ccc426a34c2c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c2da02f9f6289982dfe6d9ed741204566616dc4f648551b5f7ee99c2a558da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2da02f9f6289982dfe6d9ed741204566616dc4f648551b5f7ee99c2a558da3->enter($__internal_6c2da02f9f6289982dfe6d9ed741204566616dc4f648551b5f7ee99c2a558da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8972e6b3879b6c7b6bf78178dcbe1efe17d458e1a59b89d3d4c337fa4f45412f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8972e6b3879b6c7b6bf78178dcbe1efe17d458e1a59b89d3d4c337fa4f45412f->enter($__internal_8972e6b3879b6c7b6bf78178dcbe1efe17d458e1a59b89d3d4c337fa4f45412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8972e6b3879b6c7b6bf78178dcbe1efe17d458e1a59b89d3d4c337fa4f45412f->leave($__internal_8972e6b3879b6c7b6bf78178dcbe1efe17d458e1a59b89d3d4c337fa4f45412f_prof);

        
        $__internal_6c2da02f9f6289982dfe6d9ed741204566616dc4f648551b5f7ee99c2a558da3->leave($__internal_6c2da02f9f6289982dfe6d9ed741204566616dc4f648551b5f7ee99c2a558da3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
