<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e1cc2e3062ee17d3a6bdff693beb68c2a66438654f800cd2b62820df5c3f5521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a6b1957089fedd8da5d83bb2560035042e93a30c0395edb5f89962e29fd37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a6b1957089fedd8da5d83bb2560035042e93a30c0395edb5f89962e29fd37d->enter($__internal_d7a6b1957089fedd8da5d83bb2560035042e93a30c0395edb5f89962e29fd37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e5f15b0352778acca180f2e49cf290c0f70ade48823ea91aa0fae34182ead9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f15b0352778acca180f2e49cf290c0f70ade48823ea91aa0fae34182ead9c1->enter($__internal_e5f15b0352778acca180f2e49cf290c0f70ade48823ea91aa0fae34182ead9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a6b1957089fedd8da5d83bb2560035042e93a30c0395edb5f89962e29fd37d->leave($__internal_d7a6b1957089fedd8da5d83bb2560035042e93a30c0395edb5f89962e29fd37d_prof);

        
        $__internal_e5f15b0352778acca180f2e49cf290c0f70ade48823ea91aa0fae34182ead9c1->leave($__internal_e5f15b0352778acca180f2e49cf290c0f70ade48823ea91aa0fae34182ead9c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_588fcb4d2129946c32bd9f991cc11e2505abd6a7238786c9222988deb2320bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588fcb4d2129946c32bd9f991cc11e2505abd6a7238786c9222988deb2320bc3->enter($__internal_588fcb4d2129946c32bd9f991cc11e2505abd6a7238786c9222988deb2320bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4de11f99051d99dbeb40a56c5027cb584d1669948e71f97af1364b9c40c660c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de11f99051d99dbeb40a56c5027cb584d1669948e71f97af1364b9c40c660c6->enter($__internal_4de11f99051d99dbeb40a56c5027cb584d1669948e71f97af1364b9c40c660c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4de11f99051d99dbeb40a56c5027cb584d1669948e71f97af1364b9c40c660c6->leave($__internal_4de11f99051d99dbeb40a56c5027cb584d1669948e71f97af1364b9c40c660c6_prof);

        
        $__internal_588fcb4d2129946c32bd9f991cc11e2505abd6a7238786c9222988deb2320bc3->leave($__internal_588fcb4d2129946c32bd9f991cc11e2505abd6a7238786c9222988deb2320bc3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c56408035dfe53d0b1ec4f7b8f7b2a8ece54896532148090cdfc53faf55d9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c56408035dfe53d0b1ec4f7b8f7b2a8ece54896532148090cdfc53faf55d9aa->enter($__internal_2c56408035dfe53d0b1ec4f7b8f7b2a8ece54896532148090cdfc53faf55d9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_767e3e9f0721bdfc08b6fbe3960a8cbc705a865ae007bf370ee17bed22bdd0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767e3e9f0721bdfc08b6fbe3960a8cbc705a865ae007bf370ee17bed22bdd0aa->enter($__internal_767e3e9f0721bdfc08b6fbe3960a8cbc705a865ae007bf370ee17bed22bdd0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_767e3e9f0721bdfc08b6fbe3960a8cbc705a865ae007bf370ee17bed22bdd0aa->leave($__internal_767e3e9f0721bdfc08b6fbe3960a8cbc705a865ae007bf370ee17bed22bdd0aa_prof);

        
        $__internal_2c56408035dfe53d0b1ec4f7b8f7b2a8ece54896532148090cdfc53faf55d9aa->leave($__internal_2c56408035dfe53d0b1ec4f7b8f7b2a8ece54896532148090cdfc53faf55d9aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
