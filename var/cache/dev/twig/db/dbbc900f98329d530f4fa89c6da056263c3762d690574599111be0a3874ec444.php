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
        $__internal_8cbae2d891fff05e75758feecf48dc8ad68ea2a4d1b64d325c674279c09591a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbae2d891fff05e75758feecf48dc8ad68ea2a4d1b64d325c674279c09591a8->enter($__internal_8cbae2d891fff05e75758feecf48dc8ad68ea2a4d1b64d325c674279c09591a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_98325fae7594cbe7036f341aeb63ba45b983830baf1094736426bf7e79682afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98325fae7594cbe7036f341aeb63ba45b983830baf1094736426bf7e79682afa->enter($__internal_98325fae7594cbe7036f341aeb63ba45b983830baf1094736426bf7e79682afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbae2d891fff05e75758feecf48dc8ad68ea2a4d1b64d325c674279c09591a8->leave($__internal_8cbae2d891fff05e75758feecf48dc8ad68ea2a4d1b64d325c674279c09591a8_prof);

        
        $__internal_98325fae7594cbe7036f341aeb63ba45b983830baf1094736426bf7e79682afa->leave($__internal_98325fae7594cbe7036f341aeb63ba45b983830baf1094736426bf7e79682afa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c4604a180b91e3a8680c8c5cf199a80ddfdf89bb7cf7b9daac073353c20208cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4604a180b91e3a8680c8c5cf199a80ddfdf89bb7cf7b9daac073353c20208cc->enter($__internal_c4604a180b91e3a8680c8c5cf199a80ddfdf89bb7cf7b9daac073353c20208cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7baf458dee8548624b4d7c1f453941773712c45378f7583b6311d88e91f0704e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baf458dee8548624b4d7c1f453941773712c45378f7583b6311d88e91f0704e->enter($__internal_7baf458dee8548624b4d7c1f453941773712c45378f7583b6311d88e91f0704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7baf458dee8548624b4d7c1f453941773712c45378f7583b6311d88e91f0704e->leave($__internal_7baf458dee8548624b4d7c1f453941773712c45378f7583b6311d88e91f0704e_prof);

        
        $__internal_c4604a180b91e3a8680c8c5cf199a80ddfdf89bb7cf7b9daac073353c20208cc->leave($__internal_c4604a180b91e3a8680c8c5cf199a80ddfdf89bb7cf7b9daac073353c20208cc_prof);

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
