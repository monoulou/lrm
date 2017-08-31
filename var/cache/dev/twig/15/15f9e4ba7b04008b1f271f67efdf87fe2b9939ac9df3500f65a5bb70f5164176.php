<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_590f22820d7b2553c588b320f9195b95e3ea174547f82b5ff3453c27407177fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_c70616cfde2a1e7969cbcb4ae8eb92c6909a7667f1b30de59dc6bc5972f4665d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c70616cfde2a1e7969cbcb4ae8eb92c6909a7667f1b30de59dc6bc5972f4665d->enter($__internal_c70616cfde2a1e7969cbcb4ae8eb92c6909a7667f1b30de59dc6bc5972f4665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0c46bc09b8a63dcde426382dc807038a6fbcad93b999ec716dadc9937045d587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c46bc09b8a63dcde426382dc807038a6fbcad93b999ec716dadc9937045d587->enter($__internal_0c46bc09b8a63dcde426382dc807038a6fbcad93b999ec716dadc9937045d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c70616cfde2a1e7969cbcb4ae8eb92c6909a7667f1b30de59dc6bc5972f4665d->leave($__internal_c70616cfde2a1e7969cbcb4ae8eb92c6909a7667f1b30de59dc6bc5972f4665d_prof);

        
        $__internal_0c46bc09b8a63dcde426382dc807038a6fbcad93b999ec716dadc9937045d587->leave($__internal_0c46bc09b8a63dcde426382dc807038a6fbcad93b999ec716dadc9937045d587_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e1460b25ada680b48fe4a9582a012d3c17908783081128ef34f8dd8806520589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1460b25ada680b48fe4a9582a012d3c17908783081128ef34f8dd8806520589->enter($__internal_e1460b25ada680b48fe4a9582a012d3c17908783081128ef34f8dd8806520589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_27c29e658958be2530f57dba4f3fb91804d6db0cb1fbfa45c372740e5e1f7bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c29e658958be2530f57dba4f3fb91804d6db0cb1fbfa45c372740e5e1f7bab->enter($__internal_27c29e658958be2530f57dba4f3fb91804d6db0cb1fbfa45c372740e5e1f7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_27c29e658958be2530f57dba4f3fb91804d6db0cb1fbfa45c372740e5e1f7bab->leave($__internal_27c29e658958be2530f57dba4f3fb91804d6db0cb1fbfa45c372740e5e1f7bab_prof);

        
        $__internal_e1460b25ada680b48fe4a9582a012d3c17908783081128ef34f8dd8806520589->leave($__internal_e1460b25ada680b48fe4a9582a012d3c17908783081128ef34f8dd8806520589_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7820b1ff3d27815f29455e97ddba1c70f6dd1a937daf837e91b6baa52a3c6990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7820b1ff3d27815f29455e97ddba1c70f6dd1a937daf837e91b6baa52a3c6990->enter($__internal_7820b1ff3d27815f29455e97ddba1c70f6dd1a937daf837e91b6baa52a3c6990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_563dd6112656e2c8541c3867e46ce6015dd36f9b5cb4f1a8be9e8570f644b25a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563dd6112656e2c8541c3867e46ce6015dd36f9b5cb4f1a8be9e8570f644b25a->enter($__internal_563dd6112656e2c8541c3867e46ce6015dd36f9b5cb4f1a8be9e8570f644b25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_563dd6112656e2c8541c3867e46ce6015dd36f9b5cb4f1a8be9e8570f644b25a->leave($__internal_563dd6112656e2c8541c3867e46ce6015dd36f9b5cb4f1a8be9e8570f644b25a_prof);

        
        $__internal_7820b1ff3d27815f29455e97ddba1c70f6dd1a937daf837e91b6baa52a3c6990->leave($__internal_7820b1ff3d27815f29455e97ddba1c70f6dd1a937daf837e91b6baa52a3c6990_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
