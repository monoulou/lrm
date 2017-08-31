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
        $__internal_4ac224683b26f67e66208ab476bda5b68bb131ab05f546f1516a8494451147c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ac224683b26f67e66208ab476bda5b68bb131ab05f546f1516a8494451147c7->enter($__internal_4ac224683b26f67e66208ab476bda5b68bb131ab05f546f1516a8494451147c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_07105518c5005c11787f832ef410d2d677c6ab5f89ab9c51f9c8f0313c0b35ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07105518c5005c11787f832ef410d2d677c6ab5f89ab9c51f9c8f0313c0b35ca->enter($__internal_07105518c5005c11787f832ef410d2d677c6ab5f89ab9c51f9c8f0313c0b35ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ac224683b26f67e66208ab476bda5b68bb131ab05f546f1516a8494451147c7->leave($__internal_4ac224683b26f67e66208ab476bda5b68bb131ab05f546f1516a8494451147c7_prof);

        
        $__internal_07105518c5005c11787f832ef410d2d677c6ab5f89ab9c51f9c8f0313c0b35ca->leave($__internal_07105518c5005c11787f832ef410d2d677c6ab5f89ab9c51f9c8f0313c0b35ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_648c648996fbad57c810571f13326c838ad791d306e2e3118f6218a94f32efb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648c648996fbad57c810571f13326c838ad791d306e2e3118f6218a94f32efb7->enter($__internal_648c648996fbad57c810571f13326c838ad791d306e2e3118f6218a94f32efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95629e991eb015cd85b0eae3201e7f647ab8f3d9df164d801e7d0c699f4247fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95629e991eb015cd85b0eae3201e7f647ab8f3d9df164d801e7d0c699f4247fd->enter($__internal_95629e991eb015cd85b0eae3201e7f647ab8f3d9df164d801e7d0c699f4247fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_95629e991eb015cd85b0eae3201e7f647ab8f3d9df164d801e7d0c699f4247fd->leave($__internal_95629e991eb015cd85b0eae3201e7f647ab8f3d9df164d801e7d0c699f4247fd_prof);

        
        $__internal_648c648996fbad57c810571f13326c838ad791d306e2e3118f6218a94f32efb7->leave($__internal_648c648996fbad57c810571f13326c838ad791d306e2e3118f6218a94f32efb7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_742aa225ad1af426832e53698c4328f1070d8b5c4558eb3cb9bf8ee68f21c5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742aa225ad1af426832e53698c4328f1070d8b5c4558eb3cb9bf8ee68f21c5fc->enter($__internal_742aa225ad1af426832e53698c4328f1070d8b5c4558eb3cb9bf8ee68f21c5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45c7a5e7df64f9da2bfd439c13e365947ac410121a5dacce84b5c3ae461882ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c7a5e7df64f9da2bfd439c13e365947ac410121a5dacce84b5c3ae461882ee->enter($__internal_45c7a5e7df64f9da2bfd439c13e365947ac410121a5dacce84b5c3ae461882ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45c7a5e7df64f9da2bfd439c13e365947ac410121a5dacce84b5c3ae461882ee->leave($__internal_45c7a5e7df64f9da2bfd439c13e365947ac410121a5dacce84b5c3ae461882ee_prof);

        
        $__internal_742aa225ad1af426832e53698c4328f1070d8b5c4558eb3cb9bf8ee68f21c5fc->leave($__internal_742aa225ad1af426832e53698c4328f1070d8b5c4558eb3cb9bf8ee68f21c5fc_prof);

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
