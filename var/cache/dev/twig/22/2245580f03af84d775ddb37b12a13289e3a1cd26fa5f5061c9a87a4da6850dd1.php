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
        $__internal_0b064e060e91006b5cec98914da54fcc9f6513ea65639ebc8c631148436a9382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b064e060e91006b5cec98914da54fcc9f6513ea65639ebc8c631148436a9382->enter($__internal_0b064e060e91006b5cec98914da54fcc9f6513ea65639ebc8c631148436a9382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b6d9e311c73df6ba9883d26f9ea3dff3151eb1f0c883620b82c8d2785e42f8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d9e311c73df6ba9883d26f9ea3dff3151eb1f0c883620b82c8d2785e42f8ec->enter($__internal_b6d9e311c73df6ba9883d26f9ea3dff3151eb1f0c883620b82c8d2785e42f8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b064e060e91006b5cec98914da54fcc9f6513ea65639ebc8c631148436a9382->leave($__internal_0b064e060e91006b5cec98914da54fcc9f6513ea65639ebc8c631148436a9382_prof);

        
        $__internal_b6d9e311c73df6ba9883d26f9ea3dff3151eb1f0c883620b82c8d2785e42f8ec->leave($__internal_b6d9e311c73df6ba9883d26f9ea3dff3151eb1f0c883620b82c8d2785e42f8ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88f06da11b2ae99dd92db684ea3f3d450e0ce06970ac6e2d4f280c44fcffc6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f06da11b2ae99dd92db684ea3f3d450e0ce06970ac6e2d4f280c44fcffc6e4->enter($__internal_88f06da11b2ae99dd92db684ea3f3d450e0ce06970ac6e2d4f280c44fcffc6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d6c9b60107d3db60319f5942ff0938412e95a04a0cda93c232e27a63f322ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6c9b60107d3db60319f5942ff0938412e95a04a0cda93c232e27a63f322ff1->enter($__internal_9d6c9b60107d3db60319f5942ff0938412e95a04a0cda93c232e27a63f322ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d6c9b60107d3db60319f5942ff0938412e95a04a0cda93c232e27a63f322ff1->leave($__internal_9d6c9b60107d3db60319f5942ff0938412e95a04a0cda93c232e27a63f322ff1_prof);

        
        $__internal_88f06da11b2ae99dd92db684ea3f3d450e0ce06970ac6e2d4f280c44fcffc6e4->leave($__internal_88f06da11b2ae99dd92db684ea3f3d450e0ce06970ac6e2d4f280c44fcffc6e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1ac8d03d54232e4232a707582c4e833175dfdcb4740ab78aaf0e53c5026dd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ac8d03d54232e4232a707582c4e833175dfdcb4740ab78aaf0e53c5026dd0f->enter($__internal_f1ac8d03d54232e4232a707582c4e833175dfdcb4740ab78aaf0e53c5026dd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3484d344397ef9af696a2e906cfb676c1f15ce648be14a4095261e0763f2ca5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3484d344397ef9af696a2e906cfb676c1f15ce648be14a4095261e0763f2ca5a->enter($__internal_3484d344397ef9af696a2e906cfb676c1f15ce648be14a4095261e0763f2ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3484d344397ef9af696a2e906cfb676c1f15ce648be14a4095261e0763f2ca5a->leave($__internal_3484d344397ef9af696a2e906cfb676c1f15ce648be14a4095261e0763f2ca5a_prof);

        
        $__internal_f1ac8d03d54232e4232a707582c4e833175dfdcb4740ab78aaf0e53c5026dd0f->leave($__internal_f1ac8d03d54232e4232a707582c4e833175dfdcb4740ab78aaf0e53c5026dd0f_prof);

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
