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
        $__internal_bc51e43eee0f9c23b18a23b2b6c11941ca8dec9bbc64c5f562069d059596376e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc51e43eee0f9c23b18a23b2b6c11941ca8dec9bbc64c5f562069d059596376e->enter($__internal_bc51e43eee0f9c23b18a23b2b6c11941ca8dec9bbc64c5f562069d059596376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8fc600d273424a1b913654e302a0c0963383d09c52b46018da0fc850450e4923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc600d273424a1b913654e302a0c0963383d09c52b46018da0fc850450e4923->enter($__internal_8fc600d273424a1b913654e302a0c0963383d09c52b46018da0fc850450e4923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc51e43eee0f9c23b18a23b2b6c11941ca8dec9bbc64c5f562069d059596376e->leave($__internal_bc51e43eee0f9c23b18a23b2b6c11941ca8dec9bbc64c5f562069d059596376e_prof);

        
        $__internal_8fc600d273424a1b913654e302a0c0963383d09c52b46018da0fc850450e4923->leave($__internal_8fc600d273424a1b913654e302a0c0963383d09c52b46018da0fc850450e4923_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc54bbfd735d743aaf47dddb3e976c6e18e883860deeaf687863024ac5592c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc54bbfd735d743aaf47dddb3e976c6e18e883860deeaf687863024ac5592c1a->enter($__internal_bc54bbfd735d743aaf47dddb3e976c6e18e883860deeaf687863024ac5592c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_661c96d57485a64640b2bc6f1bd4b7bbd59cfecc9aea193edec68ffcbbc16cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661c96d57485a64640b2bc6f1bd4b7bbd59cfecc9aea193edec68ffcbbc16cdc->enter($__internal_661c96d57485a64640b2bc6f1bd4b7bbd59cfecc9aea193edec68ffcbbc16cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_661c96d57485a64640b2bc6f1bd4b7bbd59cfecc9aea193edec68ffcbbc16cdc->leave($__internal_661c96d57485a64640b2bc6f1bd4b7bbd59cfecc9aea193edec68ffcbbc16cdc_prof);

        
        $__internal_bc54bbfd735d743aaf47dddb3e976c6e18e883860deeaf687863024ac5592c1a->leave($__internal_bc54bbfd735d743aaf47dddb3e976c6e18e883860deeaf687863024ac5592c1a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_62be04a8f12c8d559b66d509447303eac469b89c908572871c8ec741fc6187b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62be04a8f12c8d559b66d509447303eac469b89c908572871c8ec741fc6187b8->enter($__internal_62be04a8f12c8d559b66d509447303eac469b89c908572871c8ec741fc6187b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5692b07e478451a9c2048c4d056f6510a7246def9b998efb54a61193048c73e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5692b07e478451a9c2048c4d056f6510a7246def9b998efb54a61193048c73e1->enter($__internal_5692b07e478451a9c2048c4d056f6510a7246def9b998efb54a61193048c73e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5692b07e478451a9c2048c4d056f6510a7246def9b998efb54a61193048c73e1->leave($__internal_5692b07e478451a9c2048c4d056f6510a7246def9b998efb54a61193048c73e1_prof);

        
        $__internal_62be04a8f12c8d559b66d509447303eac469b89c908572871c8ec741fc6187b8->leave($__internal_62be04a8f12c8d559b66d509447303eac469b89c908572871c8ec741fc6187b8_prof);

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
