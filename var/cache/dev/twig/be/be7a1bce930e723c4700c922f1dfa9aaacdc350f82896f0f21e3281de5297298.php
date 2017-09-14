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
        $__internal_d930b82c38f75538167c1b262c8aa0403d7d23a2ff66012f513f5bd50d0c4f3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d930b82c38f75538167c1b262c8aa0403d7d23a2ff66012f513f5bd50d0c4f3b->enter($__internal_d930b82c38f75538167c1b262c8aa0403d7d23a2ff66012f513f5bd50d0c4f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_74c68a8fbb7c5e05258248b31d9f11a69ac52627e562d15e69eeb960b50d3d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c68a8fbb7c5e05258248b31d9f11a69ac52627e562d15e69eeb960b50d3d75->enter($__internal_74c68a8fbb7c5e05258248b31d9f11a69ac52627e562d15e69eeb960b50d3d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d930b82c38f75538167c1b262c8aa0403d7d23a2ff66012f513f5bd50d0c4f3b->leave($__internal_d930b82c38f75538167c1b262c8aa0403d7d23a2ff66012f513f5bd50d0c4f3b_prof);

        
        $__internal_74c68a8fbb7c5e05258248b31d9f11a69ac52627e562d15e69eeb960b50d3d75->leave($__internal_74c68a8fbb7c5e05258248b31d9f11a69ac52627e562d15e69eeb960b50d3d75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65e165aa628fc8895666a40dbb9accef5bf52f0e908ec3eba71faf58b250d5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e165aa628fc8895666a40dbb9accef5bf52f0e908ec3eba71faf58b250d5a1->enter($__internal_65e165aa628fc8895666a40dbb9accef5bf52f0e908ec3eba71faf58b250d5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc183780a3dcd343c9c2232b78e9f0b30d15d156926346646326d4eb89bfe8f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc183780a3dcd343c9c2232b78e9f0b30d15d156926346646326d4eb89bfe8f4->enter($__internal_cc183780a3dcd343c9c2232b78e9f0b30d15d156926346646326d4eb89bfe8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc183780a3dcd343c9c2232b78e9f0b30d15d156926346646326d4eb89bfe8f4->leave($__internal_cc183780a3dcd343c9c2232b78e9f0b30d15d156926346646326d4eb89bfe8f4_prof);

        
        $__internal_65e165aa628fc8895666a40dbb9accef5bf52f0e908ec3eba71faf58b250d5a1->leave($__internal_65e165aa628fc8895666a40dbb9accef5bf52f0e908ec3eba71faf58b250d5a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9acbf5292dcd4941d8c043ea91aeecd2cf30287c341487db0026875077993c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9acbf5292dcd4941d8c043ea91aeecd2cf30287c341487db0026875077993c70->enter($__internal_9acbf5292dcd4941d8c043ea91aeecd2cf30287c341487db0026875077993c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1f786786a859345404b84bb0d6563f307f1cd0a1e1380cee0723832beae72fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f786786a859345404b84bb0d6563f307f1cd0a1e1380cee0723832beae72fb->enter($__internal_b1f786786a859345404b84bb0d6563f307f1cd0a1e1380cee0723832beae72fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1f786786a859345404b84bb0d6563f307f1cd0a1e1380cee0723832beae72fb->leave($__internal_b1f786786a859345404b84bb0d6563f307f1cd0a1e1380cee0723832beae72fb_prof);

        
        $__internal_9acbf5292dcd4941d8c043ea91aeecd2cf30287c341487db0026875077993c70->leave($__internal_9acbf5292dcd4941d8c043ea91aeecd2cf30287c341487db0026875077993c70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff5211a43b568e024b326815bac09ad347174ae31e3b57b5b3158d42d165eac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5211a43b568e024b326815bac09ad347174ae31e3b57b5b3158d42d165eac7->enter($__internal_ff5211a43b568e024b326815bac09ad347174ae31e3b57b5b3158d42d165eac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f161e5ddb7e569cf74d08a7a77c77c79df00d932eac9d892a1c1d5fcf9a38e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f161e5ddb7e569cf74d08a7a77c77c79df00d932eac9d892a1c1d5fcf9a38e13->enter($__internal_f161e5ddb7e569cf74d08a7a77c77c79df00d932eac9d892a1c1d5fcf9a38e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f161e5ddb7e569cf74d08a7a77c77c79df00d932eac9d892a1c1d5fcf9a38e13->leave($__internal_f161e5ddb7e569cf74d08a7a77c77c79df00d932eac9d892a1c1d5fcf9a38e13_prof);

        
        $__internal_ff5211a43b568e024b326815bac09ad347174ae31e3b57b5b3158d42d165eac7->leave($__internal_ff5211a43b568e024b326815bac09ad347174ae31e3b57b5b3158d42d165eac7_prof);

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
