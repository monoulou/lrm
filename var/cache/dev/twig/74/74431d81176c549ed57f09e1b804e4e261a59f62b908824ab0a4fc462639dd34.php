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
        $__internal_ab89346121e764c4c406ee345cfb5b9dda04afffe312b864bc5d332751325f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab89346121e764c4c406ee345cfb5b9dda04afffe312b864bc5d332751325f27->enter($__internal_ab89346121e764c4c406ee345cfb5b9dda04afffe312b864bc5d332751325f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0d4b74e1f8083403a049998ccffc35fde1630bfa49e5ad8b567f7cae8ae30818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4b74e1f8083403a049998ccffc35fde1630bfa49e5ad8b567f7cae8ae30818->enter($__internal_0d4b74e1f8083403a049998ccffc35fde1630bfa49e5ad8b567f7cae8ae30818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab89346121e764c4c406ee345cfb5b9dda04afffe312b864bc5d332751325f27->leave($__internal_ab89346121e764c4c406ee345cfb5b9dda04afffe312b864bc5d332751325f27_prof);

        
        $__internal_0d4b74e1f8083403a049998ccffc35fde1630bfa49e5ad8b567f7cae8ae30818->leave($__internal_0d4b74e1f8083403a049998ccffc35fde1630bfa49e5ad8b567f7cae8ae30818_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1a18c10862239a04563a9509038be9e706fe6ceeffe3f1994a41776d52e1a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a18c10862239a04563a9509038be9e706fe6ceeffe3f1994a41776d52e1a16->enter($__internal_b1a18c10862239a04563a9509038be9e706fe6ceeffe3f1994a41776d52e1a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6dc5a8f443d724c0bdc32b0420efd13af57d05029abe6cdbcc45457243413fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dc5a8f443d724c0bdc32b0420efd13af57d05029abe6cdbcc45457243413fb->enter($__internal_d6dc5a8f443d724c0bdc32b0420efd13af57d05029abe6cdbcc45457243413fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d6dc5a8f443d724c0bdc32b0420efd13af57d05029abe6cdbcc45457243413fb->leave($__internal_d6dc5a8f443d724c0bdc32b0420efd13af57d05029abe6cdbcc45457243413fb_prof);

        
        $__internal_b1a18c10862239a04563a9509038be9e706fe6ceeffe3f1994a41776d52e1a16->leave($__internal_b1a18c10862239a04563a9509038be9e706fe6ceeffe3f1994a41776d52e1a16_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a4e2efc0fff03d723278b398bf432b04ac04d1f993994e66fe7f62bdb197fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4e2efc0fff03d723278b398bf432b04ac04d1f993994e66fe7f62bdb197fae->enter($__internal_5a4e2efc0fff03d723278b398bf432b04ac04d1f993994e66fe7f62bdb197fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ea7b1d00a1fb34d96d1d8e850d9118857ecdf3217277c149bb73c82e70d90a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7b1d00a1fb34d96d1d8e850d9118857ecdf3217277c149bb73c82e70d90a9c->enter($__internal_ea7b1d00a1fb34d96d1d8e850d9118857ecdf3217277c149bb73c82e70d90a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea7b1d00a1fb34d96d1d8e850d9118857ecdf3217277c149bb73c82e70d90a9c->leave($__internal_ea7b1d00a1fb34d96d1d8e850d9118857ecdf3217277c149bb73c82e70d90a9c_prof);

        
        $__internal_5a4e2efc0fff03d723278b398bf432b04ac04d1f993994e66fe7f62bdb197fae->leave($__internal_5a4e2efc0fff03d723278b398bf432b04ac04d1f993994e66fe7f62bdb197fae_prof);

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
