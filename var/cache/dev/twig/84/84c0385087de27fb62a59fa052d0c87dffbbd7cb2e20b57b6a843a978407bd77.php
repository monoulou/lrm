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
        $__internal_e7526cba8a0bcd32ed064446dc7912f6f5a2f316679e495f923fbc35a98f120d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7526cba8a0bcd32ed064446dc7912f6f5a2f316679e495f923fbc35a98f120d->enter($__internal_e7526cba8a0bcd32ed064446dc7912f6f5a2f316679e495f923fbc35a98f120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_da83cfa5ee0cac37d94691c20ff75a1cc534c5c35b647e4af23be4e682c45fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da83cfa5ee0cac37d94691c20ff75a1cc534c5c35b647e4af23be4e682c45fc9->enter($__internal_da83cfa5ee0cac37d94691c20ff75a1cc534c5c35b647e4af23be4e682c45fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7526cba8a0bcd32ed064446dc7912f6f5a2f316679e495f923fbc35a98f120d->leave($__internal_e7526cba8a0bcd32ed064446dc7912f6f5a2f316679e495f923fbc35a98f120d_prof);

        
        $__internal_da83cfa5ee0cac37d94691c20ff75a1cc534c5c35b647e4af23be4e682c45fc9->leave($__internal_da83cfa5ee0cac37d94691c20ff75a1cc534c5c35b647e4af23be4e682c45fc9_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1d937cee05a2b57a59700faeb00efea0ee68233880b99764ed2c5f2d70ffd951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d937cee05a2b57a59700faeb00efea0ee68233880b99764ed2c5f2d70ffd951->enter($__internal_1d937cee05a2b57a59700faeb00efea0ee68233880b99764ed2c5f2d70ffd951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8bb104f7364544d2d096dd0cb660472169de2299f424ffff73645693c1a9ad1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb104f7364544d2d096dd0cb660472169de2299f424ffff73645693c1a9ad1f->enter($__internal_8bb104f7364544d2d096dd0cb660472169de2299f424ffff73645693c1a9ad1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8bb104f7364544d2d096dd0cb660472169de2299f424ffff73645693c1a9ad1f->leave($__internal_8bb104f7364544d2d096dd0cb660472169de2299f424ffff73645693c1a9ad1f_prof);

        
        $__internal_1d937cee05a2b57a59700faeb00efea0ee68233880b99764ed2c5f2d70ffd951->leave($__internal_1d937cee05a2b57a59700faeb00efea0ee68233880b99764ed2c5f2d70ffd951_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fa09e5d56bea3b1e94a870a3e73e195673bb1b3acce9d0264b20585e6835a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa09e5d56bea3b1e94a870a3e73e195673bb1b3acce9d0264b20585e6835a56->enter($__internal_8fa09e5d56bea3b1e94a870a3e73e195673bb1b3acce9d0264b20585e6835a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7bd55389c9684e7ec956484b38d9f6b20461625d4544f45b02227ec9b49422f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bd55389c9684e7ec956484b38d9f6b20461625d4544f45b02227ec9b49422f->enter($__internal_f7bd55389c9684e7ec956484b38d9f6b20461625d4544f45b02227ec9b49422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f7bd55389c9684e7ec956484b38d9f6b20461625d4544f45b02227ec9b49422f->leave($__internal_f7bd55389c9684e7ec956484b38d9f6b20461625d4544f45b02227ec9b49422f_prof);

        
        $__internal_8fa09e5d56bea3b1e94a870a3e73e195673bb1b3acce9d0264b20585e6835a56->leave($__internal_8fa09e5d56bea3b1e94a870a3e73e195673bb1b3acce9d0264b20585e6835a56_prof);

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
