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
        $__internal_1704003e4ddeb51dc26a05bc825539e49ed92b96cf3961062b11b4cfce11c84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1704003e4ddeb51dc26a05bc825539e49ed92b96cf3961062b11b4cfce11c84c->enter($__internal_1704003e4ddeb51dc26a05bc825539e49ed92b96cf3961062b11b4cfce11c84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_4ced0b41732197a8ca3beb4dcb2b2924b46dcfa740cb449091afc9098400bc7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ced0b41732197a8ca3beb4dcb2b2924b46dcfa740cb449091afc9098400bc7e->enter($__internal_4ced0b41732197a8ca3beb4dcb2b2924b46dcfa740cb449091afc9098400bc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1704003e4ddeb51dc26a05bc825539e49ed92b96cf3961062b11b4cfce11c84c->leave($__internal_1704003e4ddeb51dc26a05bc825539e49ed92b96cf3961062b11b4cfce11c84c_prof);

        
        $__internal_4ced0b41732197a8ca3beb4dcb2b2924b46dcfa740cb449091afc9098400bc7e->leave($__internal_4ced0b41732197a8ca3beb4dcb2b2924b46dcfa740cb449091afc9098400bc7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a17830ddbfc3cf12c9dde19c4bad4d3b134642f0f89ca3c7d4547068dc468940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17830ddbfc3cf12c9dde19c4bad4d3b134642f0f89ca3c7d4547068dc468940->enter($__internal_a17830ddbfc3cf12c9dde19c4bad4d3b134642f0f89ca3c7d4547068dc468940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5e0c92e13ecdb32b39b0da0c8acacb9e5fe99801a40613f33533b1fc6c073c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e0c92e13ecdb32b39b0da0c8acacb9e5fe99801a40613f33533b1fc6c073c8->enter($__internal_f5e0c92e13ecdb32b39b0da0c8acacb9e5fe99801a40613f33533b1fc6c073c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5e0c92e13ecdb32b39b0da0c8acacb9e5fe99801a40613f33533b1fc6c073c8->leave($__internal_f5e0c92e13ecdb32b39b0da0c8acacb9e5fe99801a40613f33533b1fc6c073c8_prof);

        
        $__internal_a17830ddbfc3cf12c9dde19c4bad4d3b134642f0f89ca3c7d4547068dc468940->leave($__internal_a17830ddbfc3cf12c9dde19c4bad4d3b134642f0f89ca3c7d4547068dc468940_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1beb0e7b91dbff03adb0b6091bc2b21bab9369bf6489cff22dd1de122ad25bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1beb0e7b91dbff03adb0b6091bc2b21bab9369bf6489cff22dd1de122ad25bb4->enter($__internal_1beb0e7b91dbff03adb0b6091bc2b21bab9369bf6489cff22dd1de122ad25bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b96f8d2fbf823df516c8a1f053e0d333b1b0144068a29fe252f027ba159a5a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96f8d2fbf823df516c8a1f053e0d333b1b0144068a29fe252f027ba159a5a68->enter($__internal_b96f8d2fbf823df516c8a1f053e0d333b1b0144068a29fe252f027ba159a5a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b96f8d2fbf823df516c8a1f053e0d333b1b0144068a29fe252f027ba159a5a68->leave($__internal_b96f8d2fbf823df516c8a1f053e0d333b1b0144068a29fe252f027ba159a5a68_prof);

        
        $__internal_1beb0e7b91dbff03adb0b6091bc2b21bab9369bf6489cff22dd1de122ad25bb4->leave($__internal_1beb0e7b91dbff03adb0b6091bc2b21bab9369bf6489cff22dd1de122ad25bb4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd298f60e6cdcc4b8934e3c465e8b9c2f7f1f352e2ff7a0c5f991f8b7e92c798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd298f60e6cdcc4b8934e3c465e8b9c2f7f1f352e2ff7a0c5f991f8b7e92c798->enter($__internal_dd298f60e6cdcc4b8934e3c465e8b9c2f7f1f352e2ff7a0c5f991f8b7e92c798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_638b1d01715d93d7cd9616ccba020a49ba9cb4f1cd3e996bb796c26b8583bf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638b1d01715d93d7cd9616ccba020a49ba9cb4f1cd3e996bb796c26b8583bf8d->enter($__internal_638b1d01715d93d7cd9616ccba020a49ba9cb4f1cd3e996bb796c26b8583bf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_638b1d01715d93d7cd9616ccba020a49ba9cb4f1cd3e996bb796c26b8583bf8d->leave($__internal_638b1d01715d93d7cd9616ccba020a49ba9cb4f1cd3e996bb796c26b8583bf8d_prof);

        
        $__internal_dd298f60e6cdcc4b8934e3c465e8b9c2f7f1f352e2ff7a0c5f991f8b7e92c798->leave($__internal_dd298f60e6cdcc4b8934e3c465e8b9c2f7f1f352e2ff7a0c5f991f8b7e92c798_prof);

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
