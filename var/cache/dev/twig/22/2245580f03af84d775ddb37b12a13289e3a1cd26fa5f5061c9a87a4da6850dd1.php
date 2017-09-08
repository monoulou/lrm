<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c352ead0b22f19a65079946f52d7c7c51cdb79d9a171f54de10e4e5c79e6f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_19f910304bf74b891a713066c29af3c3efdabf85e93d72120a6de6411ef68b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f910304bf74b891a713066c29af3c3efdabf85e93d72120a6de6411ef68b54->enter($__internal_19f910304bf74b891a713066c29af3c3efdabf85e93d72120a6de6411ef68b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_736e30c49d1d5ac9b9a9f79b7130243bcc86e2f3a44b5325288eb5353eb8ee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736e30c49d1d5ac9b9a9f79b7130243bcc86e2f3a44b5325288eb5353eb8ee82->enter($__internal_736e30c49d1d5ac9b9a9f79b7130243bcc86e2f3a44b5325288eb5353eb8ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f910304bf74b891a713066c29af3c3efdabf85e93d72120a6de6411ef68b54->leave($__internal_19f910304bf74b891a713066c29af3c3efdabf85e93d72120a6de6411ef68b54_prof);

        
        $__internal_736e30c49d1d5ac9b9a9f79b7130243bcc86e2f3a44b5325288eb5353eb8ee82->leave($__internal_736e30c49d1d5ac9b9a9f79b7130243bcc86e2f3a44b5325288eb5353eb8ee82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50e726b875ec0e0ef472d324a9a2b4f7acd8d23c55f12507495f44b07c747aee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e726b875ec0e0ef472d324a9a2b4f7acd8d23c55f12507495f44b07c747aee->enter($__internal_50e726b875ec0e0ef472d324a9a2b4f7acd8d23c55f12507495f44b07c747aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b16c7414b6db3553a814f5bbbcf90e9b0fd967dd01c62160c22394ff02a1bb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16c7414b6db3553a814f5bbbcf90e9b0fd967dd01c62160c22394ff02a1bb49->enter($__internal_b16c7414b6db3553a814f5bbbcf90e9b0fd967dd01c62160c22394ff02a1bb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b16c7414b6db3553a814f5bbbcf90e9b0fd967dd01c62160c22394ff02a1bb49->leave($__internal_b16c7414b6db3553a814f5bbbcf90e9b0fd967dd01c62160c22394ff02a1bb49_prof);

        
        $__internal_50e726b875ec0e0ef472d324a9a2b4f7acd8d23c55f12507495f44b07c747aee->leave($__internal_50e726b875ec0e0ef472d324a9a2b4f7acd8d23c55f12507495f44b07c747aee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ebdfbdc7885754c89cba077e70417f5b7eee715bae3d0d98ab3674415d432d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ebdfbdc7885754c89cba077e70417f5b7eee715bae3d0d98ab3674415d432d6->enter($__internal_5ebdfbdc7885754c89cba077e70417f5b7eee715bae3d0d98ab3674415d432d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6acd8753a8b5171eea40b661ce241940fd1495fec013b41c65c7e356ba97ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6acd8753a8b5171eea40b661ce241940fd1495fec013b41c65c7e356ba97ebe->enter($__internal_d6acd8753a8b5171eea40b661ce241940fd1495fec013b41c65c7e356ba97ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6acd8753a8b5171eea40b661ce241940fd1495fec013b41c65c7e356ba97ebe->leave($__internal_d6acd8753a8b5171eea40b661ce241940fd1495fec013b41c65c7e356ba97ebe_prof);

        
        $__internal_5ebdfbdc7885754c89cba077e70417f5b7eee715bae3d0d98ab3674415d432d6->leave($__internal_5ebdfbdc7885754c89cba077e70417f5b7eee715bae3d0d98ab3674415d432d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
