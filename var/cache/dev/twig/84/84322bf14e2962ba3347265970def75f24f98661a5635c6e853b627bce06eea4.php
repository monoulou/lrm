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
        $__internal_4549e06c9e219988b6b5e86d2a71c2aff626cee7ca1aad234bc947ff303426f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4549e06c9e219988b6b5e86d2a71c2aff626cee7ca1aad234bc947ff303426f9->enter($__internal_4549e06c9e219988b6b5e86d2a71c2aff626cee7ca1aad234bc947ff303426f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b8f93188a4fbd5644b2db44971e01d87f209d6929b21a75eeb1d6558fb63cdf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f93188a4fbd5644b2db44971e01d87f209d6929b21a75eeb1d6558fb63cdf9->enter($__internal_b8f93188a4fbd5644b2db44971e01d87f209d6929b21a75eeb1d6558fb63cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4549e06c9e219988b6b5e86d2a71c2aff626cee7ca1aad234bc947ff303426f9->leave($__internal_4549e06c9e219988b6b5e86d2a71c2aff626cee7ca1aad234bc947ff303426f9_prof);

        
        $__internal_b8f93188a4fbd5644b2db44971e01d87f209d6929b21a75eeb1d6558fb63cdf9->leave($__internal_b8f93188a4fbd5644b2db44971e01d87f209d6929b21a75eeb1d6558fb63cdf9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26e358ec6609622e228f67c52cab5c1ebe5b593e22d15f40c108c56d2c08eda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26e358ec6609622e228f67c52cab5c1ebe5b593e22d15f40c108c56d2c08eda7->enter($__internal_26e358ec6609622e228f67c52cab5c1ebe5b593e22d15f40c108c56d2c08eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a149bfa2d8086c68705422b16cb0e091fdcdf3f51eba3acf075c25e1007d0b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a149bfa2d8086c68705422b16cb0e091fdcdf3f51eba3acf075c25e1007d0b8c->enter($__internal_a149bfa2d8086c68705422b16cb0e091fdcdf3f51eba3acf075c25e1007d0b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a149bfa2d8086c68705422b16cb0e091fdcdf3f51eba3acf075c25e1007d0b8c->leave($__internal_a149bfa2d8086c68705422b16cb0e091fdcdf3f51eba3acf075c25e1007d0b8c_prof);

        
        $__internal_26e358ec6609622e228f67c52cab5c1ebe5b593e22d15f40c108c56d2c08eda7->leave($__internal_26e358ec6609622e228f67c52cab5c1ebe5b593e22d15f40c108c56d2c08eda7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f9f38455c648fcb97af48495f0305dc52dc7a59e0cc948933f16ce59ad4fd05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9f38455c648fcb97af48495f0305dc52dc7a59e0cc948933f16ce59ad4fd05->enter($__internal_5f9f38455c648fcb97af48495f0305dc52dc7a59e0cc948933f16ce59ad4fd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5cd50590de25f719a6f86775d47d25e59b73eeec37106056a04bddab3c06fc29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd50590de25f719a6f86775d47d25e59b73eeec37106056a04bddab3c06fc29->enter($__internal_5cd50590de25f719a6f86775d47d25e59b73eeec37106056a04bddab3c06fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cd50590de25f719a6f86775d47d25e59b73eeec37106056a04bddab3c06fc29->leave($__internal_5cd50590de25f719a6f86775d47d25e59b73eeec37106056a04bddab3c06fc29_prof);

        
        $__internal_5f9f38455c648fcb97af48495f0305dc52dc7a59e0cc948933f16ce59ad4fd05->leave($__internal_5f9f38455c648fcb97af48495f0305dc52dc7a59e0cc948933f16ce59ad4fd05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a4beb5e716bb5e5c8d86578218be305797e1f208c89e0ca84f4f341862ac4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4beb5e716bb5e5c8d86578218be305797e1f208c89e0ca84f4f341862ac4c9->enter($__internal_0a4beb5e716bb5e5c8d86578218be305797e1f208c89e0ca84f4f341862ac4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e39d59b1a7e0baa4c19861abc26372d386fe4aba051996da31b9d2a0489d32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e39d59b1a7e0baa4c19861abc26372d386fe4aba051996da31b9d2a0489d32d->enter($__internal_8e39d59b1a7e0baa4c19861abc26372d386fe4aba051996da31b9d2a0489d32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8e39d59b1a7e0baa4c19861abc26372d386fe4aba051996da31b9d2a0489d32d->leave($__internal_8e39d59b1a7e0baa4c19861abc26372d386fe4aba051996da31b9d2a0489d32d_prof);

        
        $__internal_0a4beb5e716bb5e5c8d86578218be305797e1f208c89e0ca84f4f341862ac4c9->leave($__internal_0a4beb5e716bb5e5c8d86578218be305797e1f208c89e0ca84f4f341862ac4c9_prof);

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
