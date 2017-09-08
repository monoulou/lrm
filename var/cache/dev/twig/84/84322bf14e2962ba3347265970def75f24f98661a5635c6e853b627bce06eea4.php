<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_96ed2e195ccd83a545c5ad9a6dd62ab0661bea812b06006b06ea1817e777be21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d7ce419a13e781156b41548ee903292cc2311042d3973bd7c74d35b4908f992f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ce419a13e781156b41548ee903292cc2311042d3973bd7c74d35b4908f992f->enter($__internal_d7ce419a13e781156b41548ee903292cc2311042d3973bd7c74d35b4908f992f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3918eabc395b5e96d2cba164d30e4472afc8577db962b6e91489411c9dfe47c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3918eabc395b5e96d2cba164d30e4472afc8577db962b6e91489411c9dfe47c9->enter($__internal_3918eabc395b5e96d2cba164d30e4472afc8577db962b6e91489411c9dfe47c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ce419a13e781156b41548ee903292cc2311042d3973bd7c74d35b4908f992f->leave($__internal_d7ce419a13e781156b41548ee903292cc2311042d3973bd7c74d35b4908f992f_prof);

        
        $__internal_3918eabc395b5e96d2cba164d30e4472afc8577db962b6e91489411c9dfe47c9->leave($__internal_3918eabc395b5e96d2cba164d30e4472afc8577db962b6e91489411c9dfe47c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_907b4aa344793629ba7077c71ba7ae1cc086f58be3c4bb9f472f7660df4e85d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_907b4aa344793629ba7077c71ba7ae1cc086f58be3c4bb9f472f7660df4e85d6->enter($__internal_907b4aa344793629ba7077c71ba7ae1cc086f58be3c4bb9f472f7660df4e85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec298f3c30c3d2fed3d0a22f34a5705f78469f9aa0b3084038a2827272b56c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec298f3c30c3d2fed3d0a22f34a5705f78469f9aa0b3084038a2827272b56c55->enter($__internal_ec298f3c30c3d2fed3d0a22f34a5705f78469f9aa0b3084038a2827272b56c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec298f3c30c3d2fed3d0a22f34a5705f78469f9aa0b3084038a2827272b56c55->leave($__internal_ec298f3c30c3d2fed3d0a22f34a5705f78469f9aa0b3084038a2827272b56c55_prof);

        
        $__internal_907b4aa344793629ba7077c71ba7ae1cc086f58be3c4bb9f472f7660df4e85d6->leave($__internal_907b4aa344793629ba7077c71ba7ae1cc086f58be3c4bb9f472f7660df4e85d6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccdcd059add6bec1c5f1c8491cbfbd51b17f627712bbe47aac78b12597f9efd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdcd059add6bec1c5f1c8491cbfbd51b17f627712bbe47aac78b12597f9efd8->enter($__internal_ccdcd059add6bec1c5f1c8491cbfbd51b17f627712bbe47aac78b12597f9efd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13edbcb4498632128ccdbfe7dccbf420fc95ad02363df676776e5389e9805825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13edbcb4498632128ccdbfe7dccbf420fc95ad02363df676776e5389e9805825->enter($__internal_13edbcb4498632128ccdbfe7dccbf420fc95ad02363df676776e5389e9805825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13edbcb4498632128ccdbfe7dccbf420fc95ad02363df676776e5389e9805825->leave($__internal_13edbcb4498632128ccdbfe7dccbf420fc95ad02363df676776e5389e9805825_prof);

        
        $__internal_ccdcd059add6bec1c5f1c8491cbfbd51b17f627712bbe47aac78b12597f9efd8->leave($__internal_ccdcd059add6bec1c5f1c8491cbfbd51b17f627712bbe47aac78b12597f9efd8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cfdb251ff837ad0974d3c2c97d5fb700cb48f90b2bf49c4e2f431ba22bab9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfdb251ff837ad0974d3c2c97d5fb700cb48f90b2bf49c4e2f431ba22bab9ab->enter($__internal_8cfdb251ff837ad0974d3c2c97d5fb700cb48f90b2bf49c4e2f431ba22bab9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4fea952174176463607dda7b0ea68b82e09673df34ec0a82bcb25f86cb0e9e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fea952174176463607dda7b0ea68b82e09673df34ec0a82bcb25f86cb0e9e92->enter($__internal_4fea952174176463607dda7b0ea68b82e09673df34ec0a82bcb25f86cb0e9e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fea952174176463607dda7b0ea68b82e09673df34ec0a82bcb25f86cb0e9e92->leave($__internal_4fea952174176463607dda7b0ea68b82e09673df34ec0a82bcb25f86cb0e9e92_prof);

        
        $__internal_8cfdb251ff837ad0974d3c2c97d5fb700cb48f90b2bf49c4e2f431ba22bab9ab->leave($__internal_8cfdb251ff837ad0974d3c2c97d5fb700cb48f90b2bf49c4e2f431ba22bab9ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
