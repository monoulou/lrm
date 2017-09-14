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
        $__internal_127075c25fa7121c22b5e18f9a32534fd516e40fa32fa7ac9673047861e495ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127075c25fa7121c22b5e18f9a32534fd516e40fa32fa7ac9673047861e495ec->enter($__internal_127075c25fa7121c22b5e18f9a32534fd516e40fa32fa7ac9673047861e495ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8184bf60b35be9d249d2ce44e20a859b4ec9ec3e2be9de5310065a206177c42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8184bf60b35be9d249d2ce44e20a859b4ec9ec3e2be9de5310065a206177c42c->enter($__internal_8184bf60b35be9d249d2ce44e20a859b4ec9ec3e2be9de5310065a206177c42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127075c25fa7121c22b5e18f9a32534fd516e40fa32fa7ac9673047861e495ec->leave($__internal_127075c25fa7121c22b5e18f9a32534fd516e40fa32fa7ac9673047861e495ec_prof);

        
        $__internal_8184bf60b35be9d249d2ce44e20a859b4ec9ec3e2be9de5310065a206177c42c->leave($__internal_8184bf60b35be9d249d2ce44e20a859b4ec9ec3e2be9de5310065a206177c42c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a91dc8747039c82346fcfd682337794db7e89d6b0f071200fb59d136547a8777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91dc8747039c82346fcfd682337794db7e89d6b0f071200fb59d136547a8777->enter($__internal_a91dc8747039c82346fcfd682337794db7e89d6b0f071200fb59d136547a8777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_071c2134d04b7fa8ad4aefdcfc1b713799977a34c1817243762f604a9806ddcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071c2134d04b7fa8ad4aefdcfc1b713799977a34c1817243762f604a9806ddcf->enter($__internal_071c2134d04b7fa8ad4aefdcfc1b713799977a34c1817243762f604a9806ddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_071c2134d04b7fa8ad4aefdcfc1b713799977a34c1817243762f604a9806ddcf->leave($__internal_071c2134d04b7fa8ad4aefdcfc1b713799977a34c1817243762f604a9806ddcf_prof);

        
        $__internal_a91dc8747039c82346fcfd682337794db7e89d6b0f071200fb59d136547a8777->leave($__internal_a91dc8747039c82346fcfd682337794db7e89d6b0f071200fb59d136547a8777_prof);

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
