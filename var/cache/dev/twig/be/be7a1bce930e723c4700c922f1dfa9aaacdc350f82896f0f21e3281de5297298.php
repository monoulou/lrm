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
        $__internal_2c112998a368ed3ff364fa3483ecb606e9ac4bdd6995912d8bafbeb0fbff5dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c112998a368ed3ff364fa3483ecb606e9ac4bdd6995912d8bafbeb0fbff5dbd->enter($__internal_2c112998a368ed3ff364fa3483ecb606e9ac4bdd6995912d8bafbeb0fbff5dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_13da551b69538b87b69599c88d2e809350d36b53005c74882b7b139f880ad2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13da551b69538b87b69599c88d2e809350d36b53005c74882b7b139f880ad2ca->enter($__internal_13da551b69538b87b69599c88d2e809350d36b53005c74882b7b139f880ad2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c112998a368ed3ff364fa3483ecb606e9ac4bdd6995912d8bafbeb0fbff5dbd->leave($__internal_2c112998a368ed3ff364fa3483ecb606e9ac4bdd6995912d8bafbeb0fbff5dbd_prof);

        
        $__internal_13da551b69538b87b69599c88d2e809350d36b53005c74882b7b139f880ad2ca->leave($__internal_13da551b69538b87b69599c88d2e809350d36b53005c74882b7b139f880ad2ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f92ffe050a3266b2c200b24c05e95fc8de1c3a3ea21841cf189fb92646949146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92ffe050a3266b2c200b24c05e95fc8de1c3a3ea21841cf189fb92646949146->enter($__internal_f92ffe050a3266b2c200b24c05e95fc8de1c3a3ea21841cf189fb92646949146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_845c96c6c6085cd0bb38881a05eee6e783a07441153e43cc0001326f51d103e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845c96c6c6085cd0bb38881a05eee6e783a07441153e43cc0001326f51d103e8->enter($__internal_845c96c6c6085cd0bb38881a05eee6e783a07441153e43cc0001326f51d103e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_845c96c6c6085cd0bb38881a05eee6e783a07441153e43cc0001326f51d103e8->leave($__internal_845c96c6c6085cd0bb38881a05eee6e783a07441153e43cc0001326f51d103e8_prof);

        
        $__internal_f92ffe050a3266b2c200b24c05e95fc8de1c3a3ea21841cf189fb92646949146->leave($__internal_f92ffe050a3266b2c200b24c05e95fc8de1c3a3ea21841cf189fb92646949146_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e0aa9dc64ac1191944cd6d356232a2d0fbfef22efe5535e97a2ca8476bb5b61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0aa9dc64ac1191944cd6d356232a2d0fbfef22efe5535e97a2ca8476bb5b61b->enter($__internal_e0aa9dc64ac1191944cd6d356232a2d0fbfef22efe5535e97a2ca8476bb5b61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f44d17b75672da2d2958656a2a3cdb4c720a3ef641c54eb87a96d53a5fe8b57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44d17b75672da2d2958656a2a3cdb4c720a3ef641c54eb87a96d53a5fe8b57b->enter($__internal_f44d17b75672da2d2958656a2a3cdb4c720a3ef641c54eb87a96d53a5fe8b57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f44d17b75672da2d2958656a2a3cdb4c720a3ef641c54eb87a96d53a5fe8b57b->leave($__internal_f44d17b75672da2d2958656a2a3cdb4c720a3ef641c54eb87a96d53a5fe8b57b_prof);

        
        $__internal_e0aa9dc64ac1191944cd6d356232a2d0fbfef22efe5535e97a2ca8476bb5b61b->leave($__internal_e0aa9dc64ac1191944cd6d356232a2d0fbfef22efe5535e97a2ca8476bb5b61b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1a5a9c851e84a6db9b5150236ae9753358199d3f3e9b03aced3faeafa491b9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5a9c851e84a6db9b5150236ae9753358199d3f3e9b03aced3faeafa491b9ca->enter($__internal_1a5a9c851e84a6db9b5150236ae9753358199d3f3e9b03aced3faeafa491b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1afa933ca63727267ca60212061cd26d6b84b4357204b95bdb7bfedd147a0b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afa933ca63727267ca60212061cd26d6b84b4357204b95bdb7bfedd147a0b2b->enter($__internal_1afa933ca63727267ca60212061cd26d6b84b4357204b95bdb7bfedd147a0b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1afa933ca63727267ca60212061cd26d6b84b4357204b95bdb7bfedd147a0b2b->leave($__internal_1afa933ca63727267ca60212061cd26d6b84b4357204b95bdb7bfedd147a0b2b_prof);

        
        $__internal_1a5a9c851e84a6db9b5150236ae9753358199d3f3e9b03aced3faeafa491b9ca->leave($__internal_1a5a9c851e84a6db9b5150236ae9753358199d3f3e9b03aced3faeafa491b9ca_prof);

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
