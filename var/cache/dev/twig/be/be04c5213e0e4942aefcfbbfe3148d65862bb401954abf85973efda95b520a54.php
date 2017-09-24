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
        $__internal_7bfbb59225465e2c89a44a00d3afac179584b4cae0cac7d96f23752c0532c2b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfbb59225465e2c89a44a00d3afac179584b4cae0cac7d96f23752c0532c2b1->enter($__internal_7bfbb59225465e2c89a44a00d3afac179584b4cae0cac7d96f23752c0532c2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_09e9ad8fab83abf73ccba0d271aa29ec6a8b6fb5f8d0a60d0ace1d2cc8a32b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e9ad8fab83abf73ccba0d271aa29ec6a8b6fb5f8d0a60d0ace1d2cc8a32b14->enter($__internal_09e9ad8fab83abf73ccba0d271aa29ec6a8b6fb5f8d0a60d0ace1d2cc8a32b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bfbb59225465e2c89a44a00d3afac179584b4cae0cac7d96f23752c0532c2b1->leave($__internal_7bfbb59225465e2c89a44a00d3afac179584b4cae0cac7d96f23752c0532c2b1_prof);

        
        $__internal_09e9ad8fab83abf73ccba0d271aa29ec6a8b6fb5f8d0a60d0ace1d2cc8a32b14->leave($__internal_09e9ad8fab83abf73ccba0d271aa29ec6a8b6fb5f8d0a60d0ace1d2cc8a32b14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c90cc672db2d46aff44d02de76b04015926cc054fe8153c19478927d9a41d5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90cc672db2d46aff44d02de76b04015926cc054fe8153c19478927d9a41d5ae->enter($__internal_c90cc672db2d46aff44d02de76b04015926cc054fe8153c19478927d9a41d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6411fd9cebc58afeb59e42b09e5b13ac21715f412510681f64bfb68a73679e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6411fd9cebc58afeb59e42b09e5b13ac21715f412510681f64bfb68a73679e5->enter($__internal_c6411fd9cebc58afeb59e42b09e5b13ac21715f412510681f64bfb68a73679e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c6411fd9cebc58afeb59e42b09e5b13ac21715f412510681f64bfb68a73679e5->leave($__internal_c6411fd9cebc58afeb59e42b09e5b13ac21715f412510681f64bfb68a73679e5_prof);

        
        $__internal_c90cc672db2d46aff44d02de76b04015926cc054fe8153c19478927d9a41d5ae->leave($__internal_c90cc672db2d46aff44d02de76b04015926cc054fe8153c19478927d9a41d5ae_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74449feeb2155fa782ba0206d836537b8145be597c477023d275e0f04e6b3a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74449feeb2155fa782ba0206d836537b8145be597c477023d275e0f04e6b3a80->enter($__internal_74449feeb2155fa782ba0206d836537b8145be597c477023d275e0f04e6b3a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71fb8ae839c440dda01288a32576fc058d65b9745680766b594038b2abc9d3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fb8ae839c440dda01288a32576fc058d65b9745680766b594038b2abc9d3ef->enter($__internal_71fb8ae839c440dda01288a32576fc058d65b9745680766b594038b2abc9d3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_71fb8ae839c440dda01288a32576fc058d65b9745680766b594038b2abc9d3ef->leave($__internal_71fb8ae839c440dda01288a32576fc058d65b9745680766b594038b2abc9d3ef_prof);

        
        $__internal_74449feeb2155fa782ba0206d836537b8145be597c477023d275e0f04e6b3a80->leave($__internal_74449feeb2155fa782ba0206d836537b8145be597c477023d275e0f04e6b3a80_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a9d516f24297f35a6c5993e6ec7bc2f67c9eb4ba01ad76343d9387614352a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a9d516f24297f35a6c5993e6ec7bc2f67c9eb4ba01ad76343d9387614352a1a->enter($__internal_5a9d516f24297f35a6c5993e6ec7bc2f67c9eb4ba01ad76343d9387614352a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86d00d5235cfc3f0d012b7709a0c8d21bee52217863256ccade334e1741dbff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d00d5235cfc3f0d012b7709a0c8d21bee52217863256ccade334e1741dbff8->enter($__internal_86d00d5235cfc3f0d012b7709a0c8d21bee52217863256ccade334e1741dbff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_86d00d5235cfc3f0d012b7709a0c8d21bee52217863256ccade334e1741dbff8->leave($__internal_86d00d5235cfc3f0d012b7709a0c8d21bee52217863256ccade334e1741dbff8_prof);

        
        $__internal_5a9d516f24297f35a6c5993e6ec7bc2f67c9eb4ba01ad76343d9387614352a1a->leave($__internal_5a9d516f24297f35a6c5993e6ec7bc2f67c9eb4ba01ad76343d9387614352a1a_prof);

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
