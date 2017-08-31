<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7ac64774699943393263be28ee5d7e8d9fb0a5b9b1fabd2011391fd175887e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbfbcfac51911259b12ec397662d497ad8cb7f67894a6fd48b79237116159934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfbcfac51911259b12ec397662d497ad8cb7f67894a6fd48b79237116159934->enter($__internal_cbfbcfac51911259b12ec397662d497ad8cb7f67894a6fd48b79237116159934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4c9e96ebb59b89bf58b5c302b2925d2382dd175089cd3203e2b9daee80baf4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9e96ebb59b89bf58b5c302b2925d2382dd175089cd3203e2b9daee80baf4b3->enter($__internal_4c9e96ebb59b89bf58b5c302b2925d2382dd175089cd3203e2b9daee80baf4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbfbcfac51911259b12ec397662d497ad8cb7f67894a6fd48b79237116159934->leave($__internal_cbfbcfac51911259b12ec397662d497ad8cb7f67894a6fd48b79237116159934_prof);

        
        $__internal_4c9e96ebb59b89bf58b5c302b2925d2382dd175089cd3203e2b9daee80baf4b3->leave($__internal_4c9e96ebb59b89bf58b5c302b2925d2382dd175089cd3203e2b9daee80baf4b3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_15ff750afd9ee64b1eb68ec352f85991d4f4b2f6534d197387ccb952320bf286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ff750afd9ee64b1eb68ec352f85991d4f4b2f6534d197387ccb952320bf286->enter($__internal_15ff750afd9ee64b1eb68ec352f85991d4f4b2f6534d197387ccb952320bf286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_906a41da6de1cf1fec542d6bd105f1d020e5d6bee644c9baf101ae79bd2907c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906a41da6de1cf1fec542d6bd105f1d020e5d6bee644c9baf101ae79bd2907c7->enter($__internal_906a41da6de1cf1fec542d6bd105f1d020e5d6bee644c9baf101ae79bd2907c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_906a41da6de1cf1fec542d6bd105f1d020e5d6bee644c9baf101ae79bd2907c7->leave($__internal_906a41da6de1cf1fec542d6bd105f1d020e5d6bee644c9baf101ae79bd2907c7_prof);

        
        $__internal_15ff750afd9ee64b1eb68ec352f85991d4f4b2f6534d197387ccb952320bf286->leave($__internal_15ff750afd9ee64b1eb68ec352f85991d4f4b2f6534d197387ccb952320bf286_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15ff4023c7c9402ccfd01050a743840bf78fb0ac7c16c0515697e179b677a0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ff4023c7c9402ccfd01050a743840bf78fb0ac7c16c0515697e179b677a0d1->enter($__internal_15ff4023c7c9402ccfd01050a743840bf78fb0ac7c16c0515697e179b677a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_30ca2b607a99152f636b52a85c41596ab714a29cee3d95346883cfe79f04ab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ca2b607a99152f636b52a85c41596ab714a29cee3d95346883cfe79f04ab37->enter($__internal_30ca2b607a99152f636b52a85c41596ab714a29cee3d95346883cfe79f04ab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_30ca2b607a99152f636b52a85c41596ab714a29cee3d95346883cfe79f04ab37->leave($__internal_30ca2b607a99152f636b52a85c41596ab714a29cee3d95346883cfe79f04ab37_prof);

        
        $__internal_15ff4023c7c9402ccfd01050a743840bf78fb0ac7c16c0515697e179b677a0d1->leave($__internal_15ff4023c7c9402ccfd01050a743840bf78fb0ac7c16c0515697e179b677a0d1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
