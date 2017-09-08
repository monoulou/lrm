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
        $__internal_33dead413516a06ac880bb2e4145805fb6076d7b084bd7bede62cae9d99ccab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dead413516a06ac880bb2e4145805fb6076d7b084bd7bede62cae9d99ccab1->enter($__internal_33dead413516a06ac880bb2e4145805fb6076d7b084bd7bede62cae9d99ccab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0d5198f5ad874c848bfba6867aff45ff85ba40c63aee4fe8b64016b52e1f8cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5198f5ad874c848bfba6867aff45ff85ba40c63aee4fe8b64016b52e1f8cc9->enter($__internal_0d5198f5ad874c848bfba6867aff45ff85ba40c63aee4fe8b64016b52e1f8cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33dead413516a06ac880bb2e4145805fb6076d7b084bd7bede62cae9d99ccab1->leave($__internal_33dead413516a06ac880bb2e4145805fb6076d7b084bd7bede62cae9d99ccab1_prof);

        
        $__internal_0d5198f5ad874c848bfba6867aff45ff85ba40c63aee4fe8b64016b52e1f8cc9->leave($__internal_0d5198f5ad874c848bfba6867aff45ff85ba40c63aee4fe8b64016b52e1f8cc9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c840d31f37bde7ab5240645921d6bd4619b83fbdb1b9c364bb964961b6e9b1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c840d31f37bde7ab5240645921d6bd4619b83fbdb1b9c364bb964961b6e9b1c1->enter($__internal_c840d31f37bde7ab5240645921d6bd4619b83fbdb1b9c364bb964961b6e9b1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdec1181772f36742731a481b4ce8e1c1d844f9ed7d459a34f16862daffe25d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdec1181772f36742731a481b4ce8e1c1d844f9ed7d459a34f16862daffe25d1->enter($__internal_fdec1181772f36742731a481b4ce8e1c1d844f9ed7d459a34f16862daffe25d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fdec1181772f36742731a481b4ce8e1c1d844f9ed7d459a34f16862daffe25d1->leave($__internal_fdec1181772f36742731a481b4ce8e1c1d844f9ed7d459a34f16862daffe25d1_prof);

        
        $__internal_c840d31f37bde7ab5240645921d6bd4619b83fbdb1b9c364bb964961b6e9b1c1->leave($__internal_c840d31f37bde7ab5240645921d6bd4619b83fbdb1b9c364bb964961b6e9b1c1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19d380ab83da677bd075c4843cc6cc4351f319a26389c8ac06b4cd0fe2ab5883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d380ab83da677bd075c4843cc6cc4351f319a26389c8ac06b4cd0fe2ab5883->enter($__internal_19d380ab83da677bd075c4843cc6cc4351f319a26389c8ac06b4cd0fe2ab5883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_96717bbae61939901feaeecae8ae0268dbd015ea8b363afa4fad9a8b1853a4d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96717bbae61939901feaeecae8ae0268dbd015ea8b363afa4fad9a8b1853a4d6->enter($__internal_96717bbae61939901feaeecae8ae0268dbd015ea8b363afa4fad9a8b1853a4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_96717bbae61939901feaeecae8ae0268dbd015ea8b363afa4fad9a8b1853a4d6->leave($__internal_96717bbae61939901feaeecae8ae0268dbd015ea8b363afa4fad9a8b1853a4d6_prof);

        
        $__internal_19d380ab83da677bd075c4843cc6cc4351f319a26389c8ac06b4cd0fe2ab5883->leave($__internal_19d380ab83da677bd075c4843cc6cc4351f319a26389c8ac06b4cd0fe2ab5883_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31519727e9d940f14146f2e682fbd2ec11bda60d49cdb91452db71186c8d3019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31519727e9d940f14146f2e682fbd2ec11bda60d49cdb91452db71186c8d3019->enter($__internal_31519727e9d940f14146f2e682fbd2ec11bda60d49cdb91452db71186c8d3019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28ea786d990ce8bd77032132c920bf3a3e45c374477f581f16c9e22e5e63734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ea786d990ce8bd77032132c920bf3a3e45c374477f581f16c9e22e5e63734e->enter($__internal_28ea786d990ce8bd77032132c920bf3a3e45c374477f581f16c9e22e5e63734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_28ea786d990ce8bd77032132c920bf3a3e45c374477f581f16c9e22e5e63734e->leave($__internal_28ea786d990ce8bd77032132c920bf3a3e45c374477f581f16c9e22e5e63734e_prof);

        
        $__internal_31519727e9d940f14146f2e682fbd2ec11bda60d49cdb91452db71186c8d3019->leave($__internal_31519727e9d940f14146f2e682fbd2ec11bda60d49cdb91452db71186c8d3019_prof);

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
