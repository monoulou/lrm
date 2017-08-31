<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_295f4e87b601bf84949128071bf32ed72272794e58de2e6575275fb503553e66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d7eab2df20de0c7ff9a8216b917faa14409ed7df77dbb09c62d2c264a9ba27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d7eab2df20de0c7ff9a8216b917faa14409ed7df77dbb09c62d2c264a9ba27->enter($__internal_c8d7eab2df20de0c7ff9a8216b917faa14409ed7df77dbb09c62d2c264a9ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_635d51a506b0309f0967ed25b722ebb2dd458d49716281cfcbcbaa2635c326bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635d51a506b0309f0967ed25b722ebb2dd458d49716281cfcbcbaa2635c326bd->enter($__internal_635d51a506b0309f0967ed25b722ebb2dd458d49716281cfcbcbaa2635c326bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d7eab2df20de0c7ff9a8216b917faa14409ed7df77dbb09c62d2c264a9ba27->leave($__internal_c8d7eab2df20de0c7ff9a8216b917faa14409ed7df77dbb09c62d2c264a9ba27_prof);

        
        $__internal_635d51a506b0309f0967ed25b722ebb2dd458d49716281cfcbcbaa2635c326bd->leave($__internal_635d51a506b0309f0967ed25b722ebb2dd458d49716281cfcbcbaa2635c326bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d00e0bd10e4da55b19405fe70804ea73f2b809462d8c8454b68aa0ac2c14f4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00e0bd10e4da55b19405fe70804ea73f2b809462d8c8454b68aa0ac2c14f4cf->enter($__internal_d00e0bd10e4da55b19405fe70804ea73f2b809462d8c8454b68aa0ac2c14f4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f43ca6a071be2319869e0fafe413b3765ad461117fa7c7c4269f418c8af0905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43ca6a071be2319869e0fafe413b3765ad461117fa7c7c4269f418c8af0905d->enter($__internal_f43ca6a071be2319869e0fafe413b3765ad461117fa7c7c4269f418c8af0905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f43ca6a071be2319869e0fafe413b3765ad461117fa7c7c4269f418c8af0905d->leave($__internal_f43ca6a071be2319869e0fafe413b3765ad461117fa7c7c4269f418c8af0905d_prof);

        
        $__internal_d00e0bd10e4da55b19405fe70804ea73f2b809462d8c8454b68aa0ac2c14f4cf->leave($__internal_d00e0bd10e4da55b19405fe70804ea73f2b809462d8c8454b68aa0ac2c14f4cf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_943ffd16dd5445b97c0b796469846d1773206001375b2c1ceb74a80d79e1df89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943ffd16dd5445b97c0b796469846d1773206001375b2c1ceb74a80d79e1df89->enter($__internal_943ffd16dd5445b97c0b796469846d1773206001375b2c1ceb74a80d79e1df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3959a1c5c0220963462de16f8bd768badadcf8d5a6d5659c89546a74b7ded0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3959a1c5c0220963462de16f8bd768badadcf8d5a6d5659c89546a74b7ded0a9->enter($__internal_3959a1c5c0220963462de16f8bd768badadcf8d5a6d5659c89546a74b7ded0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3959a1c5c0220963462de16f8bd768badadcf8d5a6d5659c89546a74b7ded0a9->leave($__internal_3959a1c5c0220963462de16f8bd768badadcf8d5a6d5659c89546a74b7ded0a9_prof);

        
        $__internal_943ffd16dd5445b97c0b796469846d1773206001375b2c1ceb74a80d79e1df89->leave($__internal_943ffd16dd5445b97c0b796469846d1773206001375b2c1ceb74a80d79e1df89_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
