<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0920480bce2627ecd94a394abf3aaa1f6c65e33cafdf6a6f6aa2a2466968148c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d6103233d0cc8992f46cc9d54af1635cecae1fb7763a0b9dcf2e21f95baad950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6103233d0cc8992f46cc9d54af1635cecae1fb7763a0b9dcf2e21f95baad950->enter($__internal_d6103233d0cc8992f46cc9d54af1635cecae1fb7763a0b9dcf2e21f95baad950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4ca4d8d10060659bd713b6c8298356779a2d84ef7b588413a80d51ca5c0d27e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca4d8d10060659bd713b6c8298356779a2d84ef7b588413a80d51ca5c0d27e2->enter($__internal_4ca4d8d10060659bd713b6c8298356779a2d84ef7b588413a80d51ca5c0d27e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6103233d0cc8992f46cc9d54af1635cecae1fb7763a0b9dcf2e21f95baad950->leave($__internal_d6103233d0cc8992f46cc9d54af1635cecae1fb7763a0b9dcf2e21f95baad950_prof);

        
        $__internal_4ca4d8d10060659bd713b6c8298356779a2d84ef7b588413a80d51ca5c0d27e2->leave($__internal_4ca4d8d10060659bd713b6c8298356779a2d84ef7b588413a80d51ca5c0d27e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0008294e699526efe9fbaf485c467c95634c8441f0193518bf0d9c461613f7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0008294e699526efe9fbaf485c467c95634c8441f0193518bf0d9c461613f7a1->enter($__internal_0008294e699526efe9fbaf485c467c95634c8441f0193518bf0d9c461613f7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46fee18e5135c4bf9ff5adae5a2304ad2ea3fc30ba2e13e7738839051774e115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fee18e5135c4bf9ff5adae5a2304ad2ea3fc30ba2e13e7738839051774e115->enter($__internal_46fee18e5135c4bf9ff5adae5a2304ad2ea3fc30ba2e13e7738839051774e115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46fee18e5135c4bf9ff5adae5a2304ad2ea3fc30ba2e13e7738839051774e115->leave($__internal_46fee18e5135c4bf9ff5adae5a2304ad2ea3fc30ba2e13e7738839051774e115_prof);

        
        $__internal_0008294e699526efe9fbaf485c467c95634c8441f0193518bf0d9c461613f7a1->leave($__internal_0008294e699526efe9fbaf485c467c95634c8441f0193518bf0d9c461613f7a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44cf4924900edde17fd5522f35681c64c41ac6cbf49a78c8d2d314d750b8f678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cf4924900edde17fd5522f35681c64c41ac6cbf49a78c8d2d314d750b8f678->enter($__internal_44cf4924900edde17fd5522f35681c64c41ac6cbf49a78c8d2d314d750b8f678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_17da72ab49e0aaa59afecc2c0e66e7c69780f387cac8cf29086a72b00a297a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17da72ab49e0aaa59afecc2c0e66e7c69780f387cac8cf29086a72b00a297a04->enter($__internal_17da72ab49e0aaa59afecc2c0e66e7c69780f387cac8cf29086a72b00a297a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17da72ab49e0aaa59afecc2c0e66e7c69780f387cac8cf29086a72b00a297a04->leave($__internal_17da72ab49e0aaa59afecc2c0e66e7c69780f387cac8cf29086a72b00a297a04_prof);

        
        $__internal_44cf4924900edde17fd5522f35681c64c41ac6cbf49a78c8d2d314d750b8f678->leave($__internal_44cf4924900edde17fd5522f35681c64c41ac6cbf49a78c8d2d314d750b8f678_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6edb39676f5d7d6b18bad8e723589c9a83997549d95ffed97142efcfac4f94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6edb39676f5d7d6b18bad8e723589c9a83997549d95ffed97142efcfac4f94f->enter($__internal_a6edb39676f5d7d6b18bad8e723589c9a83997549d95ffed97142efcfac4f94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7768c2d05df646aa642a776a5f50492664ec08f4813577a00ed74d66fd97985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7768c2d05df646aa642a776a5f50492664ec08f4813577a00ed74d66fd97985->enter($__internal_b7768c2d05df646aa642a776a5f50492664ec08f4813577a00ed74d66fd97985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7768c2d05df646aa642a776a5f50492664ec08f4813577a00ed74d66fd97985->leave($__internal_b7768c2d05df646aa642a776a5f50492664ec08f4813577a00ed74d66fd97985_prof);

        
        $__internal_a6edb39676f5d7d6b18bad8e723589c9a83997549d95ffed97142efcfac4f94f->leave($__internal_a6edb39676f5d7d6b18bad8e723589c9a83997549d95ffed97142efcfac4f94f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
