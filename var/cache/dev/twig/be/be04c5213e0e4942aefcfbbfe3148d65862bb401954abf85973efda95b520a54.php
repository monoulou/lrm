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
        $__internal_8283dc551322fec06c225b33f22423eb9c71f42c939588e750b2ccc4d66d9da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8283dc551322fec06c225b33f22423eb9c71f42c939588e750b2ccc4d66d9da1->enter($__internal_8283dc551322fec06c225b33f22423eb9c71f42c939588e750b2ccc4d66d9da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b42e45128b1270d6339e14f641aa0cd6f82e6df231634c7df3505b6b8f8b3110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42e45128b1270d6339e14f641aa0cd6f82e6df231634c7df3505b6b8f8b3110->enter($__internal_b42e45128b1270d6339e14f641aa0cd6f82e6df231634c7df3505b6b8f8b3110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8283dc551322fec06c225b33f22423eb9c71f42c939588e750b2ccc4d66d9da1->leave($__internal_8283dc551322fec06c225b33f22423eb9c71f42c939588e750b2ccc4d66d9da1_prof);

        
        $__internal_b42e45128b1270d6339e14f641aa0cd6f82e6df231634c7df3505b6b8f8b3110->leave($__internal_b42e45128b1270d6339e14f641aa0cd6f82e6df231634c7df3505b6b8f8b3110_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_086e97bba400e73a91c25e75fed9981ad5ba4e7ef016e034db197d35f0173e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086e97bba400e73a91c25e75fed9981ad5ba4e7ef016e034db197d35f0173e1e->enter($__internal_086e97bba400e73a91c25e75fed9981ad5ba4e7ef016e034db197d35f0173e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41832813c3442d6c51519f21f0527ee0635231f5e2e833619ec2e18189db4303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41832813c3442d6c51519f21f0527ee0635231f5e2e833619ec2e18189db4303->enter($__internal_41832813c3442d6c51519f21f0527ee0635231f5e2e833619ec2e18189db4303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_41832813c3442d6c51519f21f0527ee0635231f5e2e833619ec2e18189db4303->leave($__internal_41832813c3442d6c51519f21f0527ee0635231f5e2e833619ec2e18189db4303_prof);

        
        $__internal_086e97bba400e73a91c25e75fed9981ad5ba4e7ef016e034db197d35f0173e1e->leave($__internal_086e97bba400e73a91c25e75fed9981ad5ba4e7ef016e034db197d35f0173e1e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38e479265495b77debef0c696dbefaa44b08d1be77a03a19441e2468959dbcbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e479265495b77debef0c696dbefaa44b08d1be77a03a19441e2468959dbcbb->enter($__internal_38e479265495b77debef0c696dbefaa44b08d1be77a03a19441e2468959dbcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ba531e71a82bdf22cd25e4acd0a5de79122be8cbac3e903a91e4356b8bcda741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba531e71a82bdf22cd25e4acd0a5de79122be8cbac3e903a91e4356b8bcda741->enter($__internal_ba531e71a82bdf22cd25e4acd0a5de79122be8cbac3e903a91e4356b8bcda741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ba531e71a82bdf22cd25e4acd0a5de79122be8cbac3e903a91e4356b8bcda741->leave($__internal_ba531e71a82bdf22cd25e4acd0a5de79122be8cbac3e903a91e4356b8bcda741_prof);

        
        $__internal_38e479265495b77debef0c696dbefaa44b08d1be77a03a19441e2468959dbcbb->leave($__internal_38e479265495b77debef0c696dbefaa44b08d1be77a03a19441e2468959dbcbb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abddb72d929c1faf604db658f643324a38d8fcc7da612bdb135c804ea4917d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abddb72d929c1faf604db658f643324a38d8fcc7da612bdb135c804ea4917d47->enter($__internal_abddb72d929c1faf604db658f643324a38d8fcc7da612bdb135c804ea4917d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa1af848b986e939cbadc277ec0835f1505f834314407dcc43e4677525d30f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1af848b986e939cbadc277ec0835f1505f834314407dcc43e4677525d30f89->enter($__internal_aa1af848b986e939cbadc277ec0835f1505f834314407dcc43e4677525d30f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aa1af848b986e939cbadc277ec0835f1505f834314407dcc43e4677525d30f89->leave($__internal_aa1af848b986e939cbadc277ec0835f1505f834314407dcc43e4677525d30f89_prof);

        
        $__internal_abddb72d929c1faf604db658f643324a38d8fcc7da612bdb135c804ea4917d47->leave($__internal_abddb72d929c1faf604db658f643324a38d8fcc7da612bdb135c804ea4917d47_prof);

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
