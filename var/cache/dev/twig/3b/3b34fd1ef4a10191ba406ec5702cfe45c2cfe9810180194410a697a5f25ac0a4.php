<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d4a7e0098e026616195d1cd428f9afc8c59d3f18b6f03c0c4311a5e29cc2354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4792931223217df1802ac754876acb4d519db4decf6e4e7cd8f880c699d6a573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4792931223217df1802ac754876acb4d519db4decf6e4e7cd8f880c699d6a573->enter($__internal_4792931223217df1802ac754876acb4d519db4decf6e4e7cd8f880c699d6a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_39d02d477757386e25bf15f1e709fdd2a2e2c4dcd6528b0d16d015bb3892aeb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d02d477757386e25bf15f1e709fdd2a2e2c4dcd6528b0d16d015bb3892aeb5->enter($__internal_39d02d477757386e25bf15f1e709fdd2a2e2c4dcd6528b0d16d015bb3892aeb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4792931223217df1802ac754876acb4d519db4decf6e4e7cd8f880c699d6a573->leave($__internal_4792931223217df1802ac754876acb4d519db4decf6e4e7cd8f880c699d6a573_prof);

        
        $__internal_39d02d477757386e25bf15f1e709fdd2a2e2c4dcd6528b0d16d015bb3892aeb5->leave($__internal_39d02d477757386e25bf15f1e709fdd2a2e2c4dcd6528b0d16d015bb3892aeb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_217a66aa8339ce33f460917a4adcc3702fa33f417e6cb76f039da4cbb1d21c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217a66aa8339ce33f460917a4adcc3702fa33f417e6cb76f039da4cbb1d21c51->enter($__internal_217a66aa8339ce33f460917a4adcc3702fa33f417e6cb76f039da4cbb1d21c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2856a370a1591275c177f2003f1336d5eca3d35273538d3399c6dea990962e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2856a370a1591275c177f2003f1336d5eca3d35273538d3399c6dea990962e46->enter($__internal_2856a370a1591275c177f2003f1336d5eca3d35273538d3399c6dea990962e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_2856a370a1591275c177f2003f1336d5eca3d35273538d3399c6dea990962e46->leave($__internal_2856a370a1591275c177f2003f1336d5eca3d35273538d3399c6dea990962e46_prof);

        
        $__internal_217a66aa8339ce33f460917a4adcc3702fa33f417e6cb76f039da4cbb1d21c51->leave($__internal_217a66aa8339ce33f460917a4adcc3702fa33f417e6cb76f039da4cbb1d21c51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
