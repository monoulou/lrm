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
        $__internal_4cd88002ff00dbc7b5588f1b384e7fbfcef8994a9cea0a7aec15c13626987a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd88002ff00dbc7b5588f1b384e7fbfcef8994a9cea0a7aec15c13626987a9a->enter($__internal_4cd88002ff00dbc7b5588f1b384e7fbfcef8994a9cea0a7aec15c13626987a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c39a48a6ba107075e6389ea22fcb9d4117901d72b584654b1c9277937fb895bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39a48a6ba107075e6389ea22fcb9d4117901d72b584654b1c9277937fb895bc->enter($__internal_c39a48a6ba107075e6389ea22fcb9d4117901d72b584654b1c9277937fb895bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd88002ff00dbc7b5588f1b384e7fbfcef8994a9cea0a7aec15c13626987a9a->leave($__internal_4cd88002ff00dbc7b5588f1b384e7fbfcef8994a9cea0a7aec15c13626987a9a_prof);

        
        $__internal_c39a48a6ba107075e6389ea22fcb9d4117901d72b584654b1c9277937fb895bc->leave($__internal_c39a48a6ba107075e6389ea22fcb9d4117901d72b584654b1c9277937fb895bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ea5fcd12fa577e8a776af5f50205bd25c69d952cd98c2bfca46d2186046dc7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea5fcd12fa577e8a776af5f50205bd25c69d952cd98c2bfca46d2186046dc7a->enter($__internal_6ea5fcd12fa577e8a776af5f50205bd25c69d952cd98c2bfca46d2186046dc7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f632c83da2c66e7764f9e69c315642db18c0fa1b27bf9f0c90c0a28ffeea6bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f632c83da2c66e7764f9e69c315642db18c0fa1b27bf9f0c90c0a28ffeea6bd2->enter($__internal_f632c83da2c66e7764f9e69c315642db18c0fa1b27bf9f0c90c0a28ffeea6bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f632c83da2c66e7764f9e69c315642db18c0fa1b27bf9f0c90c0a28ffeea6bd2->leave($__internal_f632c83da2c66e7764f9e69c315642db18c0fa1b27bf9f0c90c0a28ffeea6bd2_prof);

        
        $__internal_6ea5fcd12fa577e8a776af5f50205bd25c69d952cd98c2bfca46d2186046dc7a->leave($__internal_6ea5fcd12fa577e8a776af5f50205bd25c69d952cd98c2bfca46d2186046dc7a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c03b153c1de83af42f9b9d718d1cb907cdc4b57f4b70e2cbc62644c43e8d1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c03b153c1de83af42f9b9d718d1cb907cdc4b57f4b70e2cbc62644c43e8d1ef->enter($__internal_2c03b153c1de83af42f9b9d718d1cb907cdc4b57f4b70e2cbc62644c43e8d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e4a5fa77c1f17e6f7385fe1b503048cdb693c1dc0ec12d9e3d947b23d84db15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a5fa77c1f17e6f7385fe1b503048cdb693c1dc0ec12d9e3d947b23d84db15e->enter($__internal_e4a5fa77c1f17e6f7385fe1b503048cdb693c1dc0ec12d9e3d947b23d84db15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e4a5fa77c1f17e6f7385fe1b503048cdb693c1dc0ec12d9e3d947b23d84db15e->leave($__internal_e4a5fa77c1f17e6f7385fe1b503048cdb693c1dc0ec12d9e3d947b23d84db15e_prof);

        
        $__internal_2c03b153c1de83af42f9b9d718d1cb907cdc4b57f4b70e2cbc62644c43e8d1ef->leave($__internal_2c03b153c1de83af42f9b9d718d1cb907cdc4b57f4b70e2cbc62644c43e8d1ef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad4a95713545f8a18f2e4b9314c6f6e8b6577f4d7bd3e480d584eaca66ce9abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4a95713545f8a18f2e4b9314c6f6e8b6577f4d7bd3e480d584eaca66ce9abd->enter($__internal_ad4a95713545f8a18f2e4b9314c6f6e8b6577f4d7bd3e480d584eaca66ce9abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1dbd109987257040c631738581812ee583d732c3ea5270b4c239444226b1511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dbd109987257040c631738581812ee583d732c3ea5270b4c239444226b1511->enter($__internal_d1dbd109987257040c631738581812ee583d732c3ea5270b4c239444226b1511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d1dbd109987257040c631738581812ee583d732c3ea5270b4c239444226b1511->leave($__internal_d1dbd109987257040c631738581812ee583d732c3ea5270b4c239444226b1511_prof);

        
        $__internal_ad4a95713545f8a18f2e4b9314c6f6e8b6577f4d7bd3e480d584eaca66ce9abd->leave($__internal_ad4a95713545f8a18f2e4b9314c6f6e8b6577f4d7bd3e480d584eaca66ce9abd_prof);

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
