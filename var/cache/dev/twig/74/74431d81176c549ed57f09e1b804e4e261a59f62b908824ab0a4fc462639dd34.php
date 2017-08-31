<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_ee961520822962a123d7fa39a3d4dd018bcd762f9f0c907a7edf516c3dbf2d49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_a80adb94a55b6952f08e00448dee2893c717654c947f5311fea3d854bab376fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80adb94a55b6952f08e00448dee2893c717654c947f5311fea3d854bab376fe->enter($__internal_a80adb94a55b6952f08e00448dee2893c717654c947f5311fea3d854bab376fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_12c971c3b987d28a80d901d5a2a9f8e317867ae416289dfb6f256bd635d1b98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12c971c3b987d28a80d901d5a2a9f8e317867ae416289dfb6f256bd635d1b98e->enter($__internal_12c971c3b987d28a80d901d5a2a9f8e317867ae416289dfb6f256bd635d1b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a80adb94a55b6952f08e00448dee2893c717654c947f5311fea3d854bab376fe->leave($__internal_a80adb94a55b6952f08e00448dee2893c717654c947f5311fea3d854bab376fe_prof);

        
        $__internal_12c971c3b987d28a80d901d5a2a9f8e317867ae416289dfb6f256bd635d1b98e->leave($__internal_12c971c3b987d28a80d901d5a2a9f8e317867ae416289dfb6f256bd635d1b98e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5dc8d95007602ae42ec6064e0ef710555cb0e26241781fab1a9c911aeceb117e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc8d95007602ae42ec6064e0ef710555cb0e26241781fab1a9c911aeceb117e->enter($__internal_5dc8d95007602ae42ec6064e0ef710555cb0e26241781fab1a9c911aeceb117e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1995b24ef50dc6e825839e75d39cf36d0f76c579fe17ecdf41e3584346c90d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1995b24ef50dc6e825839e75d39cf36d0f76c579fe17ecdf41e3584346c90d7->enter($__internal_d1995b24ef50dc6e825839e75d39cf36d0f76c579fe17ecdf41e3584346c90d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d1995b24ef50dc6e825839e75d39cf36d0f76c579fe17ecdf41e3584346c90d7->leave($__internal_d1995b24ef50dc6e825839e75d39cf36d0f76c579fe17ecdf41e3584346c90d7_prof);

        
        $__internal_5dc8d95007602ae42ec6064e0ef710555cb0e26241781fab1a9c911aeceb117e->leave($__internal_5dc8d95007602ae42ec6064e0ef710555cb0e26241781fab1a9c911aeceb117e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_499515f55e6bc6a65b94c3d42309ccd140df9eb2570b99ee7a08a7e93442839f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499515f55e6bc6a65b94c3d42309ccd140df9eb2570b99ee7a08a7e93442839f->enter($__internal_499515f55e6bc6a65b94c3d42309ccd140df9eb2570b99ee7a08a7e93442839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8dfcd24aa7be033f99190d295cc1415694343d16411f509ab4b3189c74c5fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8dfcd24aa7be033f99190d295cc1415694343d16411f509ab4b3189c74c5fd3->enter($__internal_d8dfcd24aa7be033f99190d295cc1415694343d16411f509ab4b3189c74c5fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8dfcd24aa7be033f99190d295cc1415694343d16411f509ab4b3189c74c5fd3->leave($__internal_d8dfcd24aa7be033f99190d295cc1415694343d16411f509ab4b3189c74c5fd3_prof);

        
        $__internal_499515f55e6bc6a65b94c3d42309ccd140df9eb2570b99ee7a08a7e93442839f->leave($__internal_499515f55e6bc6a65b94c3d42309ccd140df9eb2570b99ee7a08a7e93442839f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
