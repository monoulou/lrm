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
        $__internal_a108e1d3ea2cd6ec525ab0d4fdca3ce1d2078455351f2339317ee3c727a6b9ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a108e1d3ea2cd6ec525ab0d4fdca3ce1d2078455351f2339317ee3c727a6b9ef->enter($__internal_a108e1d3ea2cd6ec525ab0d4fdca3ce1d2078455351f2339317ee3c727a6b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_7bb86e833eaf256e2975fb29ab7a60ba0b1d756ea02b083dd86a6b5621c9376b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb86e833eaf256e2975fb29ab7a60ba0b1d756ea02b083dd86a6b5621c9376b->enter($__internal_7bb86e833eaf256e2975fb29ab7a60ba0b1d756ea02b083dd86a6b5621c9376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a108e1d3ea2cd6ec525ab0d4fdca3ce1d2078455351f2339317ee3c727a6b9ef->leave($__internal_a108e1d3ea2cd6ec525ab0d4fdca3ce1d2078455351f2339317ee3c727a6b9ef_prof);

        
        $__internal_7bb86e833eaf256e2975fb29ab7a60ba0b1d756ea02b083dd86a6b5621c9376b->leave($__internal_7bb86e833eaf256e2975fb29ab7a60ba0b1d756ea02b083dd86a6b5621c9376b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_628f6237d16bb4ba01b96829c7837b76305c7acc1a17a2bb5451cad6d332ab7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628f6237d16bb4ba01b96829c7837b76305c7acc1a17a2bb5451cad6d332ab7c->enter($__internal_628f6237d16bb4ba01b96829c7837b76305c7acc1a17a2bb5451cad6d332ab7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f47072c4dde531fc0a3a7b487a928843508b7330d4628739dea090a4850aff85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47072c4dde531fc0a3a7b487a928843508b7330d4628739dea090a4850aff85->enter($__internal_f47072c4dde531fc0a3a7b487a928843508b7330d4628739dea090a4850aff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f47072c4dde531fc0a3a7b487a928843508b7330d4628739dea090a4850aff85->leave($__internal_f47072c4dde531fc0a3a7b487a928843508b7330d4628739dea090a4850aff85_prof);

        
        $__internal_628f6237d16bb4ba01b96829c7837b76305c7acc1a17a2bb5451cad6d332ab7c->leave($__internal_628f6237d16bb4ba01b96829c7837b76305c7acc1a17a2bb5451cad6d332ab7c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a43d7cfcfe49f0fdd721f89ad1114c27ef1e8abcba95fd4ab398f3851865761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a43d7cfcfe49f0fdd721f89ad1114c27ef1e8abcba95fd4ab398f3851865761->enter($__internal_7a43d7cfcfe49f0fdd721f89ad1114c27ef1e8abcba95fd4ab398f3851865761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edd1a377edf408f1232a6898889765ca1b3e98d4b4f360721280be7bf81e5953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd1a377edf408f1232a6898889765ca1b3e98d4b4f360721280be7bf81e5953->enter($__internal_edd1a377edf408f1232a6898889765ca1b3e98d4b4f360721280be7bf81e5953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_edd1a377edf408f1232a6898889765ca1b3e98d4b4f360721280be7bf81e5953->leave($__internal_edd1a377edf408f1232a6898889765ca1b3e98d4b4f360721280be7bf81e5953_prof);

        
        $__internal_7a43d7cfcfe49f0fdd721f89ad1114c27ef1e8abcba95fd4ab398f3851865761->leave($__internal_7a43d7cfcfe49f0fdd721f89ad1114c27ef1e8abcba95fd4ab398f3851865761_prof);

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
