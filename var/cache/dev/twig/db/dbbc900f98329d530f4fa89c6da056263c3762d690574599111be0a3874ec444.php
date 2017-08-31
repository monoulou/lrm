<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_63b080093155691b6bf4fcb354cc50d77239d6158af7e01631d08c7994605ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca20ab8bef5157e3380c5f7456e0a8fa34478385a5b9317453eccef49af3cd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca20ab8bef5157e3380c5f7456e0a8fa34478385a5b9317453eccef49af3cd7a->enter($__internal_ca20ab8bef5157e3380c5f7456e0a8fa34478385a5b9317453eccef49af3cd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_ed2d6cfe871c9c1b7a369a4c0a7baf5209c8484712b7dc051de8592189afe9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2d6cfe871c9c1b7a369a4c0a7baf5209c8484712b7dc051de8592189afe9eb->enter($__internal_ed2d6cfe871c9c1b7a369a4c0a7baf5209c8484712b7dc051de8592189afe9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca20ab8bef5157e3380c5f7456e0a8fa34478385a5b9317453eccef49af3cd7a->leave($__internal_ca20ab8bef5157e3380c5f7456e0a8fa34478385a5b9317453eccef49af3cd7a_prof);

        
        $__internal_ed2d6cfe871c9c1b7a369a4c0a7baf5209c8484712b7dc051de8592189afe9eb->leave($__internal_ed2d6cfe871c9c1b7a369a4c0a7baf5209c8484712b7dc051de8592189afe9eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43100283c03920253a2cede1c2210d9c1de8851964024fac4864ac82380eb0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43100283c03920253a2cede1c2210d9c1de8851964024fac4864ac82380eb0d5->enter($__internal_43100283c03920253a2cede1c2210d9c1de8851964024fac4864ac82380eb0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95f496f0d68f693102c9a6acdf5c699c9e7f91bc339ae0545b65b5966c3eded1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f496f0d68f693102c9a6acdf5c699c9e7f91bc339ae0545b65b5966c3eded1->enter($__internal_95f496f0d68f693102c9a6acdf5c699c9e7f91bc339ae0545b65b5966c3eded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_95f496f0d68f693102c9a6acdf5c699c9e7f91bc339ae0545b65b5966c3eded1->leave($__internal_95f496f0d68f693102c9a6acdf5c699c9e7f91bc339ae0545b65b5966c3eded1_prof);

        
        $__internal_43100283c03920253a2cede1c2210d9c1de8851964024fac4864ac82380eb0d5->leave($__internal_43100283c03920253a2cede1c2210d9c1de8851964024fac4864ac82380eb0d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
