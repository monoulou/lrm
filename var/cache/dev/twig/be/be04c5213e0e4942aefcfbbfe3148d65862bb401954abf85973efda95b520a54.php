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
        $__internal_d46807813dc68c52937df6571f8587ad6d3bcf86583c4f11f621bcb08976058a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46807813dc68c52937df6571f8587ad6d3bcf86583c4f11f621bcb08976058a->enter($__internal_d46807813dc68c52937df6571f8587ad6d3bcf86583c4f11f621bcb08976058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6b77ffcbfeeb3f8fcec4852d2e3102ed5d00c079d251b4516194eaf160738b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b77ffcbfeeb3f8fcec4852d2e3102ed5d00c079d251b4516194eaf160738b8->enter($__internal_d6b77ffcbfeeb3f8fcec4852d2e3102ed5d00c079d251b4516194eaf160738b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46807813dc68c52937df6571f8587ad6d3bcf86583c4f11f621bcb08976058a->leave($__internal_d46807813dc68c52937df6571f8587ad6d3bcf86583c4f11f621bcb08976058a_prof);

        
        $__internal_d6b77ffcbfeeb3f8fcec4852d2e3102ed5d00c079d251b4516194eaf160738b8->leave($__internal_d6b77ffcbfeeb3f8fcec4852d2e3102ed5d00c079d251b4516194eaf160738b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39a8fee78621ef4374195958358f556f10fe5f768294ce6a5f449794f30b3369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a8fee78621ef4374195958358f556f10fe5f768294ce6a5f449794f30b3369->enter($__internal_39a8fee78621ef4374195958358f556f10fe5f768294ce6a5f449794f30b3369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62ed35dce3bbcfc3cf46ae2493a7f7a39832e82bd159794e59395694814b815f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ed35dce3bbcfc3cf46ae2493a7f7a39832e82bd159794e59395694814b815f->enter($__internal_62ed35dce3bbcfc3cf46ae2493a7f7a39832e82bd159794e59395694814b815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_62ed35dce3bbcfc3cf46ae2493a7f7a39832e82bd159794e59395694814b815f->leave($__internal_62ed35dce3bbcfc3cf46ae2493a7f7a39832e82bd159794e59395694814b815f_prof);

        
        $__internal_39a8fee78621ef4374195958358f556f10fe5f768294ce6a5f449794f30b3369->leave($__internal_39a8fee78621ef4374195958358f556f10fe5f768294ce6a5f449794f30b3369_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5940db313a53d7fe2babb9beb68d3d31e794920e0b48fa861ed2b1de39c5077a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5940db313a53d7fe2babb9beb68d3d31e794920e0b48fa861ed2b1de39c5077a->enter($__internal_5940db313a53d7fe2babb9beb68d3d31e794920e0b48fa861ed2b1de39c5077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ec1ad105e283c3a2b06f77434753bb5d653b7e625da4329aee9c21aaa0704f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec1ad105e283c3a2b06f77434753bb5d653b7e625da4329aee9c21aaa0704f9->enter($__internal_0ec1ad105e283c3a2b06f77434753bb5d653b7e625da4329aee9c21aaa0704f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0ec1ad105e283c3a2b06f77434753bb5d653b7e625da4329aee9c21aaa0704f9->leave($__internal_0ec1ad105e283c3a2b06f77434753bb5d653b7e625da4329aee9c21aaa0704f9_prof);

        
        $__internal_5940db313a53d7fe2babb9beb68d3d31e794920e0b48fa861ed2b1de39c5077a->leave($__internal_5940db313a53d7fe2babb9beb68d3d31e794920e0b48fa861ed2b1de39c5077a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc3c634e66391138725f2dd4ede220cf3a039841ce7cb1658442347e28a13d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3c634e66391138725f2dd4ede220cf3a039841ce7cb1658442347e28a13d23->enter($__internal_cc3c634e66391138725f2dd4ede220cf3a039841ce7cb1658442347e28a13d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f42255d53d3c093cb5f8768e198ddd50c21a964e68315ed071c757dcae007a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42255d53d3c093cb5f8768e198ddd50c21a964e68315ed071c757dcae007a42->enter($__internal_f42255d53d3c093cb5f8768e198ddd50c21a964e68315ed071c757dcae007a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f42255d53d3c093cb5f8768e198ddd50c21a964e68315ed071c757dcae007a42->leave($__internal_f42255d53d3c093cb5f8768e198ddd50c21a964e68315ed071c757dcae007a42_prof);

        
        $__internal_cc3c634e66391138725f2dd4ede220cf3a039841ce7cb1658442347e28a13d23->leave($__internal_cc3c634e66391138725f2dd4ede220cf3a039841ce7cb1658442347e28a13d23_prof);

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
