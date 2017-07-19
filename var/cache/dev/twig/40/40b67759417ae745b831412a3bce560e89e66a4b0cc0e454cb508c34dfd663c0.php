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
        $__internal_20ee741f8fb7004fcc6e940cf9ffde60d65589a78c976efccdcb1d909b476824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ee741f8fb7004fcc6e940cf9ffde60d65589a78c976efccdcb1d909b476824->enter($__internal_20ee741f8fb7004fcc6e940cf9ffde60d65589a78c976efccdcb1d909b476824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_8a09a682a0c681d2a5b8a9868094b0191e97ca476c2a214088de76e1be850af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a09a682a0c681d2a5b8a9868094b0191e97ca476c2a214088de76e1be850af4->enter($__internal_8a09a682a0c681d2a5b8a9868094b0191e97ca476c2a214088de76e1be850af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20ee741f8fb7004fcc6e940cf9ffde60d65589a78c976efccdcb1d909b476824->leave($__internal_20ee741f8fb7004fcc6e940cf9ffde60d65589a78c976efccdcb1d909b476824_prof);

        
        $__internal_8a09a682a0c681d2a5b8a9868094b0191e97ca476c2a214088de76e1be850af4->leave($__internal_8a09a682a0c681d2a5b8a9868094b0191e97ca476c2a214088de76e1be850af4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_75c5e561fe1524a12bf40e9db3de09aaf1872a38e2018baa399c476a63609226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c5e561fe1524a12bf40e9db3de09aaf1872a38e2018baa399c476a63609226->enter($__internal_75c5e561fe1524a12bf40e9db3de09aaf1872a38e2018baa399c476a63609226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f475b92bba50c63cb4aff5ed3fa1948ebcef4d06f8ab382240a85353357f456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f475b92bba50c63cb4aff5ed3fa1948ebcef4d06f8ab382240a85353357f456c->enter($__internal_f475b92bba50c63cb4aff5ed3fa1948ebcef4d06f8ab382240a85353357f456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f475b92bba50c63cb4aff5ed3fa1948ebcef4d06f8ab382240a85353357f456c->leave($__internal_f475b92bba50c63cb4aff5ed3fa1948ebcef4d06f8ab382240a85353357f456c_prof);

        
        $__internal_75c5e561fe1524a12bf40e9db3de09aaf1872a38e2018baa399c476a63609226->leave($__internal_75c5e561fe1524a12bf40e9db3de09aaf1872a38e2018baa399c476a63609226_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b361046aab8e0307a5769d1f23129b718326b0edc920db8e6ceb7e5b159636d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b361046aab8e0307a5769d1f23129b718326b0edc920db8e6ceb7e5b159636d3->enter($__internal_b361046aab8e0307a5769d1f23129b718326b0edc920db8e6ceb7e5b159636d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10afd6af2d84c7935ea15af71f1f666b3b19fa6ebd09f9ed1ae8be886bf8bf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10afd6af2d84c7935ea15af71f1f666b3b19fa6ebd09f9ed1ae8be886bf8bf46->enter($__internal_10afd6af2d84c7935ea15af71f1f666b3b19fa6ebd09f9ed1ae8be886bf8bf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10afd6af2d84c7935ea15af71f1f666b3b19fa6ebd09f9ed1ae8be886bf8bf46->leave($__internal_10afd6af2d84c7935ea15af71f1f666b3b19fa6ebd09f9ed1ae8be886bf8bf46_prof);

        
        $__internal_b361046aab8e0307a5769d1f23129b718326b0edc920db8e6ceb7e5b159636d3->leave($__internal_b361046aab8e0307a5769d1f23129b718326b0edc920db8e6ceb7e5b159636d3_prof);

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
