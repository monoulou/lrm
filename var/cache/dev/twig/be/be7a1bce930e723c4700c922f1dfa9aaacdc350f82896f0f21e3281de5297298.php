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
        $__internal_b45b34c2e08a41c6ada0834a7a5c06245994eaab62effea851d5d8df91867790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b45b34c2e08a41c6ada0834a7a5c06245994eaab62effea851d5d8df91867790->enter($__internal_b45b34c2e08a41c6ada0834a7a5c06245994eaab62effea851d5d8df91867790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cb4a6ce647a38798d9d0142cf5b9fba90d2736dc2cf5f4adb4ef6e4a572e3b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4a6ce647a38798d9d0142cf5b9fba90d2736dc2cf5f4adb4ef6e4a572e3b87->enter($__internal_cb4a6ce647a38798d9d0142cf5b9fba90d2736dc2cf5f4adb4ef6e4a572e3b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45b34c2e08a41c6ada0834a7a5c06245994eaab62effea851d5d8df91867790->leave($__internal_b45b34c2e08a41c6ada0834a7a5c06245994eaab62effea851d5d8df91867790_prof);

        
        $__internal_cb4a6ce647a38798d9d0142cf5b9fba90d2736dc2cf5f4adb4ef6e4a572e3b87->leave($__internal_cb4a6ce647a38798d9d0142cf5b9fba90d2736dc2cf5f4adb4ef6e4a572e3b87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53edfb5762e404526d1395ddd36ed069424adde73749fec800c49960f0b27b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53edfb5762e404526d1395ddd36ed069424adde73749fec800c49960f0b27b53->enter($__internal_53edfb5762e404526d1395ddd36ed069424adde73749fec800c49960f0b27b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45c2a6a3a5743bc956b364f6203ed367b51abc80bd2fd8549eab672c3154f3d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c2a6a3a5743bc956b364f6203ed367b51abc80bd2fd8549eab672c3154f3d5->enter($__internal_45c2a6a3a5743bc956b364f6203ed367b51abc80bd2fd8549eab672c3154f3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45c2a6a3a5743bc956b364f6203ed367b51abc80bd2fd8549eab672c3154f3d5->leave($__internal_45c2a6a3a5743bc956b364f6203ed367b51abc80bd2fd8549eab672c3154f3d5_prof);

        
        $__internal_53edfb5762e404526d1395ddd36ed069424adde73749fec800c49960f0b27b53->leave($__internal_53edfb5762e404526d1395ddd36ed069424adde73749fec800c49960f0b27b53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63f32ee63d6b93f6a6c0c5b707c2a8deb6739fa709be18a75d9816caf2401a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f32ee63d6b93f6a6c0c5b707c2a8deb6739fa709be18a75d9816caf2401a46->enter($__internal_63f32ee63d6b93f6a6c0c5b707c2a8deb6739fa709be18a75d9816caf2401a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c47cac237f930483efc80fdcb683276a94c6d63fa179d7aa67f27bb6fa6b2235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47cac237f930483efc80fdcb683276a94c6d63fa179d7aa67f27bb6fa6b2235->enter($__internal_c47cac237f930483efc80fdcb683276a94c6d63fa179d7aa67f27bb6fa6b2235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c47cac237f930483efc80fdcb683276a94c6d63fa179d7aa67f27bb6fa6b2235->leave($__internal_c47cac237f930483efc80fdcb683276a94c6d63fa179d7aa67f27bb6fa6b2235_prof);

        
        $__internal_63f32ee63d6b93f6a6c0c5b707c2a8deb6739fa709be18a75d9816caf2401a46->leave($__internal_63f32ee63d6b93f6a6c0c5b707c2a8deb6739fa709be18a75d9816caf2401a46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bd6ad1e52d91908c42935e9a1bc4c3565c8153cd7a7bd14168be60718eaedd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd6ad1e52d91908c42935e9a1bc4c3565c8153cd7a7bd14168be60718eaedd8->enter($__internal_9bd6ad1e52d91908c42935e9a1bc4c3565c8153cd7a7bd14168be60718eaedd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0017fdfc70e73625e9bf7e0ade9f8b6fb6d83a20c9e2b85c426ccdd22f41cc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0017fdfc70e73625e9bf7e0ade9f8b6fb6d83a20c9e2b85c426ccdd22f41cc26->enter($__internal_0017fdfc70e73625e9bf7e0ade9f8b6fb6d83a20c9e2b85c426ccdd22f41cc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0017fdfc70e73625e9bf7e0ade9f8b6fb6d83a20c9e2b85c426ccdd22f41cc26->leave($__internal_0017fdfc70e73625e9bf7e0ade9f8b6fb6d83a20c9e2b85c426ccdd22f41cc26_prof);

        
        $__internal_9bd6ad1e52d91908c42935e9a1bc4c3565c8153cd7a7bd14168be60718eaedd8->leave($__internal_9bd6ad1e52d91908c42935e9a1bc4c3565c8153cd7a7bd14168be60718eaedd8_prof);

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
