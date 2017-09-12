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
        $__internal_c957e471f0b28cb447a043b0364fa5ad14db7c36c1c19de097fa3ae29318a134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c957e471f0b28cb447a043b0364fa5ad14db7c36c1c19de097fa3ae29318a134->enter($__internal_c957e471f0b28cb447a043b0364fa5ad14db7c36c1c19de097fa3ae29318a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_995543d035220e124b51c6c8feeb0cde8d4f6a22588fcf6f5a2a24ae26cada96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995543d035220e124b51c6c8feeb0cde8d4f6a22588fcf6f5a2a24ae26cada96->enter($__internal_995543d035220e124b51c6c8feeb0cde8d4f6a22588fcf6f5a2a24ae26cada96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c957e471f0b28cb447a043b0364fa5ad14db7c36c1c19de097fa3ae29318a134->leave($__internal_c957e471f0b28cb447a043b0364fa5ad14db7c36c1c19de097fa3ae29318a134_prof);

        
        $__internal_995543d035220e124b51c6c8feeb0cde8d4f6a22588fcf6f5a2a24ae26cada96->leave($__internal_995543d035220e124b51c6c8feeb0cde8d4f6a22588fcf6f5a2a24ae26cada96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d5d227a2ec6a9fdfa562e0dba4999cf78201fc873a42774b459b614a2a377c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5d227a2ec6a9fdfa562e0dba4999cf78201fc873a42774b459b614a2a377c7->enter($__internal_0d5d227a2ec6a9fdfa562e0dba4999cf78201fc873a42774b459b614a2a377c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bd363a3a468049aa3c8bee094695238041fced16ece0eac9f2859dc20963fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd363a3a468049aa3c8bee094695238041fced16ece0eac9f2859dc20963fef->enter($__internal_0bd363a3a468049aa3c8bee094695238041fced16ece0eac9f2859dc20963fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bd363a3a468049aa3c8bee094695238041fced16ece0eac9f2859dc20963fef->leave($__internal_0bd363a3a468049aa3c8bee094695238041fced16ece0eac9f2859dc20963fef_prof);

        
        $__internal_0d5d227a2ec6a9fdfa562e0dba4999cf78201fc873a42774b459b614a2a377c7->leave($__internal_0d5d227a2ec6a9fdfa562e0dba4999cf78201fc873a42774b459b614a2a377c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee7fca07a62aeccc694787541ee0e0922a58ff01512777e4a5030ca681dd7f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7fca07a62aeccc694787541ee0e0922a58ff01512777e4a5030ca681dd7f66->enter($__internal_ee7fca07a62aeccc694787541ee0e0922a58ff01512777e4a5030ca681dd7f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3af3e48cd513a249b8f55087140ad832cdad65e37a656788905ba8591a6f1ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af3e48cd513a249b8f55087140ad832cdad65e37a656788905ba8591a6f1ace->enter($__internal_3af3e48cd513a249b8f55087140ad832cdad65e37a656788905ba8591a6f1ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3af3e48cd513a249b8f55087140ad832cdad65e37a656788905ba8591a6f1ace->leave($__internal_3af3e48cd513a249b8f55087140ad832cdad65e37a656788905ba8591a6f1ace_prof);

        
        $__internal_ee7fca07a62aeccc694787541ee0e0922a58ff01512777e4a5030ca681dd7f66->leave($__internal_ee7fca07a62aeccc694787541ee0e0922a58ff01512777e4a5030ca681dd7f66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76cf9c6d3fdb6838c1f8b71944d3e645a9be1ac2faaeb9f97853b32a624b78a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cf9c6d3fdb6838c1f8b71944d3e645a9be1ac2faaeb9f97853b32a624b78a6->enter($__internal_76cf9c6d3fdb6838c1f8b71944d3e645a9be1ac2faaeb9f97853b32a624b78a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e81f48811626fc55781eff1ce4f94b1fa9dcbcabbf3eb8e421ceac0a5491b41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e81f48811626fc55781eff1ce4f94b1fa9dcbcabbf3eb8e421ceac0a5491b41->enter($__internal_7e81f48811626fc55781eff1ce4f94b1fa9dcbcabbf3eb8e421ceac0a5491b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7e81f48811626fc55781eff1ce4f94b1fa9dcbcabbf3eb8e421ceac0a5491b41->leave($__internal_7e81f48811626fc55781eff1ce4f94b1fa9dcbcabbf3eb8e421ceac0a5491b41_prof);

        
        $__internal_76cf9c6d3fdb6838c1f8b71944d3e645a9be1ac2faaeb9f97853b32a624b78a6->leave($__internal_76cf9c6d3fdb6838c1f8b71944d3e645a9be1ac2faaeb9f97853b32a624b78a6_prof);

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
