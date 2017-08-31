<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_45243fdd1cc689572f3580121d1abfe42756fc20b61895204b951d4f53a78499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_26c0965d2f1c5527e8b603e16bbf3b84ccba553f36dc1cf1af8e4582a82e3d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c0965d2f1c5527e8b603e16bbf3b84ccba553f36dc1cf1af8e4582a82e3d1b->enter($__internal_26c0965d2f1c5527e8b603e16bbf3b84ccba553f36dc1cf1af8e4582a82e3d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1f4020a57d7a539d286c42fc181b4a3886ae5113d9bb6f4e482964fbdb73650f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4020a57d7a539d286c42fc181b4a3886ae5113d9bb6f4e482964fbdb73650f->enter($__internal_1f4020a57d7a539d286c42fc181b4a3886ae5113d9bb6f4e482964fbdb73650f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c0965d2f1c5527e8b603e16bbf3b84ccba553f36dc1cf1af8e4582a82e3d1b->leave($__internal_26c0965d2f1c5527e8b603e16bbf3b84ccba553f36dc1cf1af8e4582a82e3d1b_prof);

        
        $__internal_1f4020a57d7a539d286c42fc181b4a3886ae5113d9bb6f4e482964fbdb73650f->leave($__internal_1f4020a57d7a539d286c42fc181b4a3886ae5113d9bb6f4e482964fbdb73650f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9228c922f5677787f4e8143489b6d048eaacb56add6963a0ea330891f16deccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9228c922f5677787f4e8143489b6d048eaacb56add6963a0ea330891f16deccf->enter($__internal_9228c922f5677787f4e8143489b6d048eaacb56add6963a0ea330891f16deccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8e9c0307d39f24b2f2acce7660474be008e7a168d8c7a6a99c21a35b7ce563bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9c0307d39f24b2f2acce7660474be008e7a168d8c7a6a99c21a35b7ce563bc->enter($__internal_8e9c0307d39f24b2f2acce7660474be008e7a168d8c7a6a99c21a35b7ce563bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8e9c0307d39f24b2f2acce7660474be008e7a168d8c7a6a99c21a35b7ce563bc->leave($__internal_8e9c0307d39f24b2f2acce7660474be008e7a168d8c7a6a99c21a35b7ce563bc_prof);

        
        $__internal_9228c922f5677787f4e8143489b6d048eaacb56add6963a0ea330891f16deccf->leave($__internal_9228c922f5677787f4e8143489b6d048eaacb56add6963a0ea330891f16deccf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff8b88bcdc140bcce1b7cb7a40c948a0610c27d1ec8a13aadbe14eace79b851b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8b88bcdc140bcce1b7cb7a40c948a0610c27d1ec8a13aadbe14eace79b851b->enter($__internal_ff8b88bcdc140bcce1b7cb7a40c948a0610c27d1ec8a13aadbe14eace79b851b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ba43f983f01799d4457ff6d3005831ff6199e9d9736ca73c5d8f70a6a9b907e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba43f983f01799d4457ff6d3005831ff6199e9d9736ca73c5d8f70a6a9b907e->enter($__internal_4ba43f983f01799d4457ff6d3005831ff6199e9d9736ca73c5d8f70a6a9b907e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4ba43f983f01799d4457ff6d3005831ff6199e9d9736ca73c5d8f70a6a9b907e->leave($__internal_4ba43f983f01799d4457ff6d3005831ff6199e9d9736ca73c5d8f70a6a9b907e_prof);

        
        $__internal_ff8b88bcdc140bcce1b7cb7a40c948a0610c27d1ec8a13aadbe14eace79b851b->leave($__internal_ff8b88bcdc140bcce1b7cb7a40c948a0610c27d1ec8a13aadbe14eace79b851b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90ca9d764b4a1d70756fbbeb929c5fef9d1e2f6d842e06ff662a7b7a5e392bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ca9d764b4a1d70756fbbeb929c5fef9d1e2f6d842e06ff662a7b7a5e392bb7->enter($__internal_90ca9d764b4a1d70756fbbeb929c5fef9d1e2f6d842e06ff662a7b7a5e392bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e3e125f4a34f837c8e940367d3e57d70c71603e766473895e5c3a8b25608ba1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e125f4a34f837c8e940367d3e57d70c71603e766473895e5c3a8b25608ba1b->enter($__internal_e3e125f4a34f837c8e940367d3e57d70c71603e766473895e5c3a8b25608ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e3e125f4a34f837c8e940367d3e57d70c71603e766473895e5c3a8b25608ba1b->leave($__internal_e3e125f4a34f837c8e940367d3e57d70c71603e766473895e5c3a8b25608ba1b_prof);

        
        $__internal_90ca9d764b4a1d70756fbbeb929c5fef9d1e2f6d842e06ff662a7b7a5e392bb7->leave($__internal_90ca9d764b4a1d70756fbbeb929c5fef9d1e2f6d842e06ff662a7b7a5e392bb7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
