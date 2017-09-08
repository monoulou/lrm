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
        $__internal_3766306d81645b5dcd8d2ca2e94d7ac3e8370d05f54a70d988e982aec62b4f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3766306d81645b5dcd8d2ca2e94d7ac3e8370d05f54a70d988e982aec62b4f29->enter($__internal_3766306d81645b5dcd8d2ca2e94d7ac3e8370d05f54a70d988e982aec62b4f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e484dd5db0ed4f4a0a591814bedff19fa86032d4e2bbfad2abb54d7fe634f95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e484dd5db0ed4f4a0a591814bedff19fa86032d4e2bbfad2abb54d7fe634f95f->enter($__internal_e484dd5db0ed4f4a0a591814bedff19fa86032d4e2bbfad2abb54d7fe634f95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3766306d81645b5dcd8d2ca2e94d7ac3e8370d05f54a70d988e982aec62b4f29->leave($__internal_3766306d81645b5dcd8d2ca2e94d7ac3e8370d05f54a70d988e982aec62b4f29_prof);

        
        $__internal_e484dd5db0ed4f4a0a591814bedff19fa86032d4e2bbfad2abb54d7fe634f95f->leave($__internal_e484dd5db0ed4f4a0a591814bedff19fa86032d4e2bbfad2abb54d7fe634f95f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b68d4a323c978f4357ff4da72944f4c7582a655ee74d759d288bb4473584da68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68d4a323c978f4357ff4da72944f4c7582a655ee74d759d288bb4473584da68->enter($__internal_b68d4a323c978f4357ff4da72944f4c7582a655ee74d759d288bb4473584da68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0cf2cdb77f39e2ed59a052e9582297ad3e815ba7ba8aa4933e7d5ddf344f8d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf2cdb77f39e2ed59a052e9582297ad3e815ba7ba8aa4933e7d5ddf344f8d19->enter($__internal_0cf2cdb77f39e2ed59a052e9582297ad3e815ba7ba8aa4933e7d5ddf344f8d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0cf2cdb77f39e2ed59a052e9582297ad3e815ba7ba8aa4933e7d5ddf344f8d19->leave($__internal_0cf2cdb77f39e2ed59a052e9582297ad3e815ba7ba8aa4933e7d5ddf344f8d19_prof);

        
        $__internal_b68d4a323c978f4357ff4da72944f4c7582a655ee74d759d288bb4473584da68->leave($__internal_b68d4a323c978f4357ff4da72944f4c7582a655ee74d759d288bb4473584da68_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f118c6e4366be0eaf34ecc3597403002907da086f064c3945edb710bd62b769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f118c6e4366be0eaf34ecc3597403002907da086f064c3945edb710bd62b769->enter($__internal_2f118c6e4366be0eaf34ecc3597403002907da086f064c3945edb710bd62b769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb8578a5a2aa9f425ee0c177b073dbb50e5da77a7c85e731e322aaaa6d5f016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8578a5a2aa9f425ee0c177b073dbb50e5da77a7c85e731e322aaaa6d5f016d->enter($__internal_bb8578a5a2aa9f425ee0c177b073dbb50e5da77a7c85e731e322aaaa6d5f016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bb8578a5a2aa9f425ee0c177b073dbb50e5da77a7c85e731e322aaaa6d5f016d->leave($__internal_bb8578a5a2aa9f425ee0c177b073dbb50e5da77a7c85e731e322aaaa6d5f016d_prof);

        
        $__internal_2f118c6e4366be0eaf34ecc3597403002907da086f064c3945edb710bd62b769->leave($__internal_2f118c6e4366be0eaf34ecc3597403002907da086f064c3945edb710bd62b769_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7db9bcd9c1cd3dcd2d5bba73db5c3a1f04f3aee80eea7ddb09d4a55100628849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db9bcd9c1cd3dcd2d5bba73db5c3a1f04f3aee80eea7ddb09d4a55100628849->enter($__internal_7db9bcd9c1cd3dcd2d5bba73db5c3a1f04f3aee80eea7ddb09d4a55100628849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0e8dc918214423f714d990a8c0f86a99ac0a464f8174b8618d5d5b67e98cc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e8dc918214423f714d990a8c0f86a99ac0a464f8174b8618d5d5b67e98cc0f->enter($__internal_e0e8dc918214423f714d990a8c0f86a99ac0a464f8174b8618d5d5b67e98cc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e0e8dc918214423f714d990a8c0f86a99ac0a464f8174b8618d5d5b67e98cc0f->leave($__internal_e0e8dc918214423f714d990a8c0f86a99ac0a464f8174b8618d5d5b67e98cc0f_prof);

        
        $__internal_7db9bcd9c1cd3dcd2d5bba73db5c3a1f04f3aee80eea7ddb09d4a55100628849->leave($__internal_7db9bcd9c1cd3dcd2d5bba73db5c3a1f04f3aee80eea7ddb09d4a55100628849_prof);

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
