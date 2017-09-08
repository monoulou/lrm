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
        $__internal_c000d4349444c82b00e39f7fa3978cae754660d7ad97240d4cb8bce9c5bca1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c000d4349444c82b00e39f7fa3978cae754660d7ad97240d4cb8bce9c5bca1cb->enter($__internal_c000d4349444c82b00e39f7fa3978cae754660d7ad97240d4cb8bce9c5bca1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5ae13f6c3c14f201b2f70f7def16bedcbb7f9d9de06f805e44aa398234d51ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae13f6c3c14f201b2f70f7def16bedcbb7f9d9de06f805e44aa398234d51ffd->enter($__internal_5ae13f6c3c14f201b2f70f7def16bedcbb7f9d9de06f805e44aa398234d51ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c000d4349444c82b00e39f7fa3978cae754660d7ad97240d4cb8bce9c5bca1cb->leave($__internal_c000d4349444c82b00e39f7fa3978cae754660d7ad97240d4cb8bce9c5bca1cb_prof);

        
        $__internal_5ae13f6c3c14f201b2f70f7def16bedcbb7f9d9de06f805e44aa398234d51ffd->leave($__internal_5ae13f6c3c14f201b2f70f7def16bedcbb7f9d9de06f805e44aa398234d51ffd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e86e70b7450e68664a5f8d7fe3340a5ccff2fe91217fbee75dce957bbc1ed251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86e70b7450e68664a5f8d7fe3340a5ccff2fe91217fbee75dce957bbc1ed251->enter($__internal_e86e70b7450e68664a5f8d7fe3340a5ccff2fe91217fbee75dce957bbc1ed251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a75370d9d149800cf86e463de98764de9b684c66103c355ea6280ea7f88dbb2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75370d9d149800cf86e463de98764de9b684c66103c355ea6280ea7f88dbb2a->enter($__internal_a75370d9d149800cf86e463de98764de9b684c66103c355ea6280ea7f88dbb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a75370d9d149800cf86e463de98764de9b684c66103c355ea6280ea7f88dbb2a->leave($__internal_a75370d9d149800cf86e463de98764de9b684c66103c355ea6280ea7f88dbb2a_prof);

        
        $__internal_e86e70b7450e68664a5f8d7fe3340a5ccff2fe91217fbee75dce957bbc1ed251->leave($__internal_e86e70b7450e68664a5f8d7fe3340a5ccff2fe91217fbee75dce957bbc1ed251_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde3a620c3d2608e6fed094743e891961df114632147d71de467cb94e7b6b15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde3a620c3d2608e6fed094743e891961df114632147d71de467cb94e7b6b15d->enter($__internal_dde3a620c3d2608e6fed094743e891961df114632147d71de467cb94e7b6b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b37556694eb2e2834ef4715cb468419f34159b415a5091b993218e5065dbf6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b37556694eb2e2834ef4715cb468419f34159b415a5091b993218e5065dbf6c->enter($__internal_5b37556694eb2e2834ef4715cb468419f34159b415a5091b993218e5065dbf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5b37556694eb2e2834ef4715cb468419f34159b415a5091b993218e5065dbf6c->leave($__internal_5b37556694eb2e2834ef4715cb468419f34159b415a5091b993218e5065dbf6c_prof);

        
        $__internal_dde3a620c3d2608e6fed094743e891961df114632147d71de467cb94e7b6b15d->leave($__internal_dde3a620c3d2608e6fed094743e891961df114632147d71de467cb94e7b6b15d_prof);

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
