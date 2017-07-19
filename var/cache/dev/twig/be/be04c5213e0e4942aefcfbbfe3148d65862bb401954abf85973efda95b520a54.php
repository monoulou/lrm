<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c009938afcf06bc67a2938392d54e5cd8b8058fb64a135549e68bbf3c0511645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a20b55bd9fcf9d1f6afffed3edf5ed4974160864a22cfd6e653be775fb4f03f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20b55bd9fcf9d1f6afffed3edf5ed4974160864a22cfd6e653be775fb4f03f1->enter($__internal_a20b55bd9fcf9d1f6afffed3edf5ed4974160864a22cfd6e653be775fb4f03f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2a40cf69dd72ce198fe8882e3a7d677cf48a459759f6addb195cacddbc8a2970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a40cf69dd72ce198fe8882e3a7d677cf48a459759f6addb195cacddbc8a2970->enter($__internal_2a40cf69dd72ce198fe8882e3a7d677cf48a459759f6addb195cacddbc8a2970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a20b55bd9fcf9d1f6afffed3edf5ed4974160864a22cfd6e653be775fb4f03f1->leave($__internal_a20b55bd9fcf9d1f6afffed3edf5ed4974160864a22cfd6e653be775fb4f03f1_prof);

        
        $__internal_2a40cf69dd72ce198fe8882e3a7d677cf48a459759f6addb195cacddbc8a2970->leave($__internal_2a40cf69dd72ce198fe8882e3a7d677cf48a459759f6addb195cacddbc8a2970_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3fedfa7d4f8323425818649524930f5788afd79a4e530d148194189fc0138b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fedfa7d4f8323425818649524930f5788afd79a4e530d148194189fc0138b6->enter($__internal_a3fedfa7d4f8323425818649524930f5788afd79a4e530d148194189fc0138b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d6e4392687adad0b48d48f1d4aff4510be06059c9be035e3cada2774559222dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e4392687adad0b48d48f1d4aff4510be06059c9be035e3cada2774559222dc->enter($__internal_d6e4392687adad0b48d48f1d4aff4510be06059c9be035e3cada2774559222dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d6e4392687adad0b48d48f1d4aff4510be06059c9be035e3cada2774559222dc->leave($__internal_d6e4392687adad0b48d48f1d4aff4510be06059c9be035e3cada2774559222dc_prof);

        
        $__internal_a3fedfa7d4f8323425818649524930f5788afd79a4e530d148194189fc0138b6->leave($__internal_a3fedfa7d4f8323425818649524930f5788afd79a4e530d148194189fc0138b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7c566b8811ef5d7d27a6690bbb57f514e8b6621aa94e4b41767c68594789f22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c566b8811ef5d7d27a6690bbb57f514e8b6621aa94e4b41767c68594789f22d->enter($__internal_7c566b8811ef5d7d27a6690bbb57f514e8b6621aa94e4b41767c68594789f22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_da1d6cbbc5ece3b0645c1e79892def0a77c5b65a599b30e5f887ba233ea3cf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1d6cbbc5ece3b0645c1e79892def0a77c5b65a599b30e5f887ba233ea3cf64->enter($__internal_da1d6cbbc5ece3b0645c1e79892def0a77c5b65a599b30e5f887ba233ea3cf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_da1d6cbbc5ece3b0645c1e79892def0a77c5b65a599b30e5f887ba233ea3cf64->leave($__internal_da1d6cbbc5ece3b0645c1e79892def0a77c5b65a599b30e5f887ba233ea3cf64_prof);

        
        $__internal_7c566b8811ef5d7d27a6690bbb57f514e8b6621aa94e4b41767c68594789f22d->leave($__internal_7c566b8811ef5d7d27a6690bbb57f514e8b6621aa94e4b41767c68594789f22d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd47835303709a0756b2977afb07dc1b4ad6bbdb745c0827692412c73e04e7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd47835303709a0756b2977afb07dc1b4ad6bbdb745c0827692412c73e04e7e1->enter($__internal_bd47835303709a0756b2977afb07dc1b4ad6bbdb745c0827692412c73e04e7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3b08565e0ae356c4ce4375605b33d709094e3611b39c1f56a9d8736e433f416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b08565e0ae356c4ce4375605b33d709094e3611b39c1f56a9d8736e433f416->enter($__internal_a3b08565e0ae356c4ce4375605b33d709094e3611b39c1f56a9d8736e433f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a3b08565e0ae356c4ce4375605b33d709094e3611b39c1f56a9d8736e433f416->leave($__internal_a3b08565e0ae356c4ce4375605b33d709094e3611b39c1f56a9d8736e433f416_prof);

        
        $__internal_bd47835303709a0756b2977afb07dc1b4ad6bbdb745c0827692412c73e04e7e1->leave($__internal_bd47835303709a0756b2977afb07dc1b4ad6bbdb745c0827692412c73e04e7e1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
