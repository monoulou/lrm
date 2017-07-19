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
        $__internal_d1e5b8f915b8831202b0acec7946b898c9b0fd101f555dd82225a45ba2c4a3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e5b8f915b8831202b0acec7946b898c9b0fd101f555dd82225a45ba2c4a3bc->enter($__internal_d1e5b8f915b8831202b0acec7946b898c9b0fd101f555dd82225a45ba2c4a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d56dbc7a75f15d9a9b405fabc8aefd065d3b2e80c61c814fa3fd2520b933618a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56dbc7a75f15d9a9b405fabc8aefd065d3b2e80c61c814fa3fd2520b933618a->enter($__internal_d56dbc7a75f15d9a9b405fabc8aefd065d3b2e80c61c814fa3fd2520b933618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1e5b8f915b8831202b0acec7946b898c9b0fd101f555dd82225a45ba2c4a3bc->leave($__internal_d1e5b8f915b8831202b0acec7946b898c9b0fd101f555dd82225a45ba2c4a3bc_prof);

        
        $__internal_d56dbc7a75f15d9a9b405fabc8aefd065d3b2e80c61c814fa3fd2520b933618a->leave($__internal_d56dbc7a75f15d9a9b405fabc8aefd065d3b2e80c61c814fa3fd2520b933618a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4716cb48e1bc6ee4034ca0a4db9f7dd7360cc76eef1dee7dc007b137664a77f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4716cb48e1bc6ee4034ca0a4db9f7dd7360cc76eef1dee7dc007b137664a77f8->enter($__internal_4716cb48e1bc6ee4034ca0a4db9f7dd7360cc76eef1dee7dc007b137664a77f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1dc6333612e4357201e51a7a57398f341f4cd5bba265d16f26ac8a8cff051a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1dc6333612e4357201e51a7a57398f341f4cd5bba265d16f26ac8a8cff051a9->enter($__internal_b1dc6333612e4357201e51a7a57398f341f4cd5bba265d16f26ac8a8cff051a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1dc6333612e4357201e51a7a57398f341f4cd5bba265d16f26ac8a8cff051a9->leave($__internal_b1dc6333612e4357201e51a7a57398f341f4cd5bba265d16f26ac8a8cff051a9_prof);

        
        $__internal_4716cb48e1bc6ee4034ca0a4db9f7dd7360cc76eef1dee7dc007b137664a77f8->leave($__internal_4716cb48e1bc6ee4034ca0a4db9f7dd7360cc76eef1dee7dc007b137664a77f8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a9dd69ca4a116d9b322c06fde4b7b2c7060454689de9de13af12083c68bfd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9dd69ca4a116d9b322c06fde4b7b2c7060454689de9de13af12083c68bfd34->enter($__internal_0a9dd69ca4a116d9b322c06fde4b7b2c7060454689de9de13af12083c68bfd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3c20cb30dbd7a82029cfa50543ecf143afe98a50716050e02e0a6031b1b40d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c20cb30dbd7a82029cfa50543ecf143afe98a50716050e02e0a6031b1b40d3->enter($__internal_c3c20cb30dbd7a82029cfa50543ecf143afe98a50716050e02e0a6031b1b40d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3c20cb30dbd7a82029cfa50543ecf143afe98a50716050e02e0a6031b1b40d3->leave($__internal_c3c20cb30dbd7a82029cfa50543ecf143afe98a50716050e02e0a6031b1b40d3_prof);

        
        $__internal_0a9dd69ca4a116d9b322c06fde4b7b2c7060454689de9de13af12083c68bfd34->leave($__internal_0a9dd69ca4a116d9b322c06fde4b7b2c7060454689de9de13af12083c68bfd34_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46c725cbc0eab2599a011462c9c8f1a628e96b867ab88c54cea3d1010d1fec97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c725cbc0eab2599a011462c9c8f1a628e96b867ab88c54cea3d1010d1fec97->enter($__internal_46c725cbc0eab2599a011462c9c8f1a628e96b867ab88c54cea3d1010d1fec97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_94f4f48bd739e67e07ef338e84cb2c8d6be01994c37670b48515fc98508281e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f4f48bd739e67e07ef338e84cb2c8d6be01994c37670b48515fc98508281e2->enter($__internal_94f4f48bd739e67e07ef338e84cb2c8d6be01994c37670b48515fc98508281e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94f4f48bd739e67e07ef338e84cb2c8d6be01994c37670b48515fc98508281e2->leave($__internal_94f4f48bd739e67e07ef338e84cb2c8d6be01994c37670b48515fc98508281e2_prof);

        
        $__internal_46c725cbc0eab2599a011462c9c8f1a628e96b867ab88c54cea3d1010d1fec97->leave($__internal_46c725cbc0eab2599a011462c9c8f1a628e96b867ab88c54cea3d1010d1fec97_prof);

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
