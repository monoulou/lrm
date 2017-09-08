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
        $__internal_da17f779f5b6dcf00e32b31b32abbd442c5a892a7fbb00a0623836b9144990f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da17f779f5b6dcf00e32b31b32abbd442c5a892a7fbb00a0623836b9144990f0->enter($__internal_da17f779f5b6dcf00e32b31b32abbd442c5a892a7fbb00a0623836b9144990f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0233c5c7e7e2b8504d0c2940f584789e2492e09a62f6ade3241c65e2f8c73720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0233c5c7e7e2b8504d0c2940f584789e2492e09a62f6ade3241c65e2f8c73720->enter($__internal_0233c5c7e7e2b8504d0c2940f584789e2492e09a62f6ade3241c65e2f8c73720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da17f779f5b6dcf00e32b31b32abbd442c5a892a7fbb00a0623836b9144990f0->leave($__internal_da17f779f5b6dcf00e32b31b32abbd442c5a892a7fbb00a0623836b9144990f0_prof);

        
        $__internal_0233c5c7e7e2b8504d0c2940f584789e2492e09a62f6ade3241c65e2f8c73720->leave($__internal_0233c5c7e7e2b8504d0c2940f584789e2492e09a62f6ade3241c65e2f8c73720_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_739964222be20e89b254d65c40f118e649a3c736dfb5ab411bf068e2e6fb6248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739964222be20e89b254d65c40f118e649a3c736dfb5ab411bf068e2e6fb6248->enter($__internal_739964222be20e89b254d65c40f118e649a3c736dfb5ab411bf068e2e6fb6248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5256b2be17dd7bea30d4db5b01f46d7fcf8d5524f6e37c718815f9469f7d2cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5256b2be17dd7bea30d4db5b01f46d7fcf8d5524f6e37c718815f9469f7d2cb2->enter($__internal_5256b2be17dd7bea30d4db5b01f46d7fcf8d5524f6e37c718815f9469f7d2cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5256b2be17dd7bea30d4db5b01f46d7fcf8d5524f6e37c718815f9469f7d2cb2->leave($__internal_5256b2be17dd7bea30d4db5b01f46d7fcf8d5524f6e37c718815f9469f7d2cb2_prof);

        
        $__internal_739964222be20e89b254d65c40f118e649a3c736dfb5ab411bf068e2e6fb6248->leave($__internal_739964222be20e89b254d65c40f118e649a3c736dfb5ab411bf068e2e6fb6248_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89fd01b609b6bb569ed927dba152b7eabb5fa3a511d13d73f12f63f498dab4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fd01b609b6bb569ed927dba152b7eabb5fa3a511d13d73f12f63f498dab4cb->enter($__internal_89fd01b609b6bb569ed927dba152b7eabb5fa3a511d13d73f12f63f498dab4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1cd79eb74d6c7bd30ef7a7b1effc27f4c84d88e142f682f38df1207be6abba41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd79eb74d6c7bd30ef7a7b1effc27f4c84d88e142f682f38df1207be6abba41->enter($__internal_1cd79eb74d6c7bd30ef7a7b1effc27f4c84d88e142f682f38df1207be6abba41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1cd79eb74d6c7bd30ef7a7b1effc27f4c84d88e142f682f38df1207be6abba41->leave($__internal_1cd79eb74d6c7bd30ef7a7b1effc27f4c84d88e142f682f38df1207be6abba41_prof);

        
        $__internal_89fd01b609b6bb569ed927dba152b7eabb5fa3a511d13d73f12f63f498dab4cb->leave($__internal_89fd01b609b6bb569ed927dba152b7eabb5fa3a511d13d73f12f63f498dab4cb_prof);

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
