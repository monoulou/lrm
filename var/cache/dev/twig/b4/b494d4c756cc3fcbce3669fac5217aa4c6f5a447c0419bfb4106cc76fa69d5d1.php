<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eb7bdbf1eee789fdf65300a23e06e5e6fdf3101e22609929a23d7d1b337c0665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4a49207f77f5f93ad3c1905294184ee1b45cd6107e80019dcccdeee75b7c11d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a49207f77f5f93ad3c1905294184ee1b45cd6107e80019dcccdeee75b7c11d1->enter($__internal_4a49207f77f5f93ad3c1905294184ee1b45cd6107e80019dcccdeee75b7c11d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0f2aae305141b8a30faee66060d6a0d3d9dd66ba7abd50ac4d358a3a4cd4ceec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2aae305141b8a30faee66060d6a0d3d9dd66ba7abd50ac4d358a3a4cd4ceec->enter($__internal_0f2aae305141b8a30faee66060d6a0d3d9dd66ba7abd50ac4d358a3a4cd4ceec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a49207f77f5f93ad3c1905294184ee1b45cd6107e80019dcccdeee75b7c11d1->leave($__internal_4a49207f77f5f93ad3c1905294184ee1b45cd6107e80019dcccdeee75b7c11d1_prof);

        
        $__internal_0f2aae305141b8a30faee66060d6a0d3d9dd66ba7abd50ac4d358a3a4cd4ceec->leave($__internal_0f2aae305141b8a30faee66060d6a0d3d9dd66ba7abd50ac4d358a3a4cd4ceec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a33fd36532531f6b6a2766456361619cf9268d7ff5b07b1d5221960129f8e0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33fd36532531f6b6a2766456361619cf9268d7ff5b07b1d5221960129f8e0c3->enter($__internal_a33fd36532531f6b6a2766456361619cf9268d7ff5b07b1d5221960129f8e0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf741d747526d90565dfec515fe9cf07625a1d3a4dbbb1ee0a87684756334845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf741d747526d90565dfec515fe9cf07625a1d3a4dbbb1ee0a87684756334845->enter($__internal_cf741d747526d90565dfec515fe9cf07625a1d3a4dbbb1ee0a87684756334845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cf741d747526d90565dfec515fe9cf07625a1d3a4dbbb1ee0a87684756334845->leave($__internal_cf741d747526d90565dfec515fe9cf07625a1d3a4dbbb1ee0a87684756334845_prof);

        
        $__internal_a33fd36532531f6b6a2766456361619cf9268d7ff5b07b1d5221960129f8e0c3->leave($__internal_a33fd36532531f6b6a2766456361619cf9268d7ff5b07b1d5221960129f8e0c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
