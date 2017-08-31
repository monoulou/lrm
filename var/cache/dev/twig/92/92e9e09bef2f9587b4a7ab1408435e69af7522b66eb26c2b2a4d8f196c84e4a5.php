<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a96c59af2175f88fa5806e72058fa1fbada270b47a420fd832274b4980b3b31c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9b74a1983589addb2a634aabfbd8c3934fd3f527f70ccf057b561ba778d0566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b74a1983589addb2a634aabfbd8c3934fd3f527f70ccf057b561ba778d0566->enter($__internal_b9b74a1983589addb2a634aabfbd8c3934fd3f527f70ccf057b561ba778d0566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_2835cc6694cf2791a122edba3c3c3fac0079dee0d66c94adadc6353390b5c0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2835cc6694cf2791a122edba3c3c3fac0079dee0d66c94adadc6353390b5c0bd->enter($__internal_2835cc6694cf2791a122edba3c3c3fac0079dee0d66c94adadc6353390b5c0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b74a1983589addb2a634aabfbd8c3934fd3f527f70ccf057b561ba778d0566->leave($__internal_b9b74a1983589addb2a634aabfbd8c3934fd3f527f70ccf057b561ba778d0566_prof);

        
        $__internal_2835cc6694cf2791a122edba3c3c3fac0079dee0d66c94adadc6353390b5c0bd->leave($__internal_2835cc6694cf2791a122edba3c3c3fac0079dee0d66c94adadc6353390b5c0bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94bcb7a41f0891fa7263a18ccc476b9bcdeb6da6dec0bab54c072d9295e46200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94bcb7a41f0891fa7263a18ccc476b9bcdeb6da6dec0bab54c072d9295e46200->enter($__internal_94bcb7a41f0891fa7263a18ccc476b9bcdeb6da6dec0bab54c072d9295e46200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_83f83d43620d10579ca6c52f0d2410f9978d8404f9f29430300e015a67de25c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f83d43620d10579ca6c52f0d2410f9978d8404f9f29430300e015a67de25c4->enter($__internal_83f83d43620d10579ca6c52f0d2410f9978d8404f9f29430300e015a67de25c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_83f83d43620d10579ca6c52f0d2410f9978d8404f9f29430300e015a67de25c4->leave($__internal_83f83d43620d10579ca6c52f0d2410f9978d8404f9f29430300e015a67de25c4_prof);

        
        $__internal_94bcb7a41f0891fa7263a18ccc476b9bcdeb6da6dec0bab54c072d9295e46200->leave($__internal_94bcb7a41f0891fa7263a18ccc476b9bcdeb6da6dec0bab54c072d9295e46200_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
