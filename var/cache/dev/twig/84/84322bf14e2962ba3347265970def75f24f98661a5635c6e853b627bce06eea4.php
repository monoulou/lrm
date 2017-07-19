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
        $__internal_6b479ef07ddb95783441ce2f623d2346ac11512015b8b6944d0c8bb187e3c26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b479ef07ddb95783441ce2f623d2346ac11512015b8b6944d0c8bb187e3c26b->enter($__internal_6b479ef07ddb95783441ce2f623d2346ac11512015b8b6944d0c8bb187e3c26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2e6105699cf3a40f83b8dc613e69a4b2c0ce7614b3289e13ed2e9a4fc833dee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6105699cf3a40f83b8dc613e69a4b2c0ce7614b3289e13ed2e9a4fc833dee6->enter($__internal_2e6105699cf3a40f83b8dc613e69a4b2c0ce7614b3289e13ed2e9a4fc833dee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b479ef07ddb95783441ce2f623d2346ac11512015b8b6944d0c8bb187e3c26b->leave($__internal_6b479ef07ddb95783441ce2f623d2346ac11512015b8b6944d0c8bb187e3c26b_prof);

        
        $__internal_2e6105699cf3a40f83b8dc613e69a4b2c0ce7614b3289e13ed2e9a4fc833dee6->leave($__internal_2e6105699cf3a40f83b8dc613e69a4b2c0ce7614b3289e13ed2e9a4fc833dee6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_75359e922c402d15c15a9fa5ebee8482c1e08fffa823fadaaab54fa8f3cddb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75359e922c402d15c15a9fa5ebee8482c1e08fffa823fadaaab54fa8f3cddb2e->enter($__internal_75359e922c402d15c15a9fa5ebee8482c1e08fffa823fadaaab54fa8f3cddb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb155cd8b81d5618917862d4661436cd521adddef224d8bc64e9d248c5bd752d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb155cd8b81d5618917862d4661436cd521adddef224d8bc64e9d248c5bd752d->enter($__internal_bb155cd8b81d5618917862d4661436cd521adddef224d8bc64e9d248c5bd752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb155cd8b81d5618917862d4661436cd521adddef224d8bc64e9d248c5bd752d->leave($__internal_bb155cd8b81d5618917862d4661436cd521adddef224d8bc64e9d248c5bd752d_prof);

        
        $__internal_75359e922c402d15c15a9fa5ebee8482c1e08fffa823fadaaab54fa8f3cddb2e->leave($__internal_75359e922c402d15c15a9fa5ebee8482c1e08fffa823fadaaab54fa8f3cddb2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_547d7edb2d80fef0de85b90d366ff77d8dcea46f691e4cef05e694881c5a05fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547d7edb2d80fef0de85b90d366ff77d8dcea46f691e4cef05e694881c5a05fa->enter($__internal_547d7edb2d80fef0de85b90d366ff77d8dcea46f691e4cef05e694881c5a05fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04b08cfb2fc27935bcf1de0f5c2aeec3a311ddf0a3f7fe470231ffde4db49d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b08cfb2fc27935bcf1de0f5c2aeec3a311ddf0a3f7fe470231ffde4db49d83->enter($__internal_04b08cfb2fc27935bcf1de0f5c2aeec3a311ddf0a3f7fe470231ffde4db49d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04b08cfb2fc27935bcf1de0f5c2aeec3a311ddf0a3f7fe470231ffde4db49d83->leave($__internal_04b08cfb2fc27935bcf1de0f5c2aeec3a311ddf0a3f7fe470231ffde4db49d83_prof);

        
        $__internal_547d7edb2d80fef0de85b90d366ff77d8dcea46f691e4cef05e694881c5a05fa->leave($__internal_547d7edb2d80fef0de85b90d366ff77d8dcea46f691e4cef05e694881c5a05fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4611310d6e49875fa44a018caa0df9eef480fd14dd10d6fe64fe6419393d6c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4611310d6e49875fa44a018caa0df9eef480fd14dd10d6fe64fe6419393d6c09->enter($__internal_4611310d6e49875fa44a018caa0df9eef480fd14dd10d6fe64fe6419393d6c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b65c6bb35c6ab65f4b5c6941ddef3b7701c6e83324c31808d93acac788d77e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65c6bb35c6ab65f4b5c6941ddef3b7701c6e83324c31808d93acac788d77e2b->enter($__internal_b65c6bb35c6ab65f4b5c6941ddef3b7701c6e83324c31808d93acac788d77e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b65c6bb35c6ab65f4b5c6941ddef3b7701c6e83324c31808d93acac788d77e2b->leave($__internal_b65c6bb35c6ab65f4b5c6941ddef3b7701c6e83324c31808d93acac788d77e2b_prof);

        
        $__internal_4611310d6e49875fa44a018caa0df9eef480fd14dd10d6fe64fe6419393d6c09->leave($__internal_4611310d6e49875fa44a018caa0df9eef480fd14dd10d6fe64fe6419393d6c09_prof);

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
