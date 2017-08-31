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
        $__internal_213f2713023445f91515ac94530d3a4762b3735c3e49efecc1864d74cdb43da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213f2713023445f91515ac94530d3a4762b3735c3e49efecc1864d74cdb43da5->enter($__internal_213f2713023445f91515ac94530d3a4762b3735c3e49efecc1864d74cdb43da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_32cc81382d89f05fd16ff5b6ea1f2943b472fdb5bcbb91c05fcbe6b5f66884d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cc81382d89f05fd16ff5b6ea1f2943b472fdb5bcbb91c05fcbe6b5f66884d1->enter($__internal_32cc81382d89f05fd16ff5b6ea1f2943b472fdb5bcbb91c05fcbe6b5f66884d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213f2713023445f91515ac94530d3a4762b3735c3e49efecc1864d74cdb43da5->leave($__internal_213f2713023445f91515ac94530d3a4762b3735c3e49efecc1864d74cdb43da5_prof);

        
        $__internal_32cc81382d89f05fd16ff5b6ea1f2943b472fdb5bcbb91c05fcbe6b5f66884d1->leave($__internal_32cc81382d89f05fd16ff5b6ea1f2943b472fdb5bcbb91c05fcbe6b5f66884d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9725e299afee461b9c501c70ad73d98009c965dc5472ffea49361818b48057f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9725e299afee461b9c501c70ad73d98009c965dc5472ffea49361818b48057f0->enter($__internal_9725e299afee461b9c501c70ad73d98009c965dc5472ffea49361818b48057f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68b93930b145d4279c243ba3b1dd7e6cab65f3f854ba6f2994ee9c29a2857a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b93930b145d4279c243ba3b1dd7e6cab65f3f854ba6f2994ee9c29a2857a18->enter($__internal_68b93930b145d4279c243ba3b1dd7e6cab65f3f854ba6f2994ee9c29a2857a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_68b93930b145d4279c243ba3b1dd7e6cab65f3f854ba6f2994ee9c29a2857a18->leave($__internal_68b93930b145d4279c243ba3b1dd7e6cab65f3f854ba6f2994ee9c29a2857a18_prof);

        
        $__internal_9725e299afee461b9c501c70ad73d98009c965dc5472ffea49361818b48057f0->leave($__internal_9725e299afee461b9c501c70ad73d98009c965dc5472ffea49361818b48057f0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_932b538a0548da0529761867577421e9e797f1a4133053a16a57dc6eca0aa60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932b538a0548da0529761867577421e9e797f1a4133053a16a57dc6eca0aa60e->enter($__internal_932b538a0548da0529761867577421e9e797f1a4133053a16a57dc6eca0aa60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0735274da4b55c489d213b7dbdf2f6fd33995cffdf8790d794d0201d93e9c71e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0735274da4b55c489d213b7dbdf2f6fd33995cffdf8790d794d0201d93e9c71e->enter($__internal_0735274da4b55c489d213b7dbdf2f6fd33995cffdf8790d794d0201d93e9c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0735274da4b55c489d213b7dbdf2f6fd33995cffdf8790d794d0201d93e9c71e->leave($__internal_0735274da4b55c489d213b7dbdf2f6fd33995cffdf8790d794d0201d93e9c71e_prof);

        
        $__internal_932b538a0548da0529761867577421e9e797f1a4133053a16a57dc6eca0aa60e->leave($__internal_932b538a0548da0529761867577421e9e797f1a4133053a16a57dc6eca0aa60e_prof);

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
