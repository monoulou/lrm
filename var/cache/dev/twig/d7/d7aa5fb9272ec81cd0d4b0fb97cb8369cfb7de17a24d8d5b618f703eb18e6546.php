<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_9d865cb9db3179548cc9350a0241d30efead5cba5fd1a73f9fd54492979f2768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_9d9bffd07b7beb75ea34b5e2a2927f16dc5c43e1e5d9bc3ce25a233e3d6a6dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9bffd07b7beb75ea34b5e2a2927f16dc5c43e1e5d9bc3ce25a233e3d6a6dad->enter($__internal_9d9bffd07b7beb75ea34b5e2a2927f16dc5c43e1e5d9bc3ce25a233e3d6a6dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_1b7c5903abd446842cd574c8d1f7e6422fc1d3869714855facde89fad2e31584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7c5903abd446842cd574c8d1f7e6422fc1d3869714855facde89fad2e31584->enter($__internal_1b7c5903abd446842cd574c8d1f7e6422fc1d3869714855facde89fad2e31584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d9bffd07b7beb75ea34b5e2a2927f16dc5c43e1e5d9bc3ce25a233e3d6a6dad->leave($__internal_9d9bffd07b7beb75ea34b5e2a2927f16dc5c43e1e5d9bc3ce25a233e3d6a6dad_prof);

        
        $__internal_1b7c5903abd446842cd574c8d1f7e6422fc1d3869714855facde89fad2e31584->leave($__internal_1b7c5903abd446842cd574c8d1f7e6422fc1d3869714855facde89fad2e31584_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ee9a11ad8994dea737b9d7eb72242b73d3c8d04f8a1bb3effd4ccfb86a1343d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee9a11ad8994dea737b9d7eb72242b73d3c8d04f8a1bb3effd4ccfb86a1343d->enter($__internal_5ee9a11ad8994dea737b9d7eb72242b73d3c8d04f8a1bb3effd4ccfb86a1343d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bbedbcd92c3f08d03ea8946c39627a01d0e4029eb7c33f1dd9aa2e23b5ca32e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbedbcd92c3f08d03ea8946c39627a01d0e4029eb7c33f1dd9aa2e23b5ca32e0->enter($__internal_bbedbcd92c3f08d03ea8946c39627a01d0e4029eb7c33f1dd9aa2e23b5ca32e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_bbedbcd92c3f08d03ea8946c39627a01d0e4029eb7c33f1dd9aa2e23b5ca32e0->leave($__internal_bbedbcd92c3f08d03ea8946c39627a01d0e4029eb7c33f1dd9aa2e23b5ca32e0_prof);

        
        $__internal_5ee9a11ad8994dea737b9d7eb72242b73d3c8d04f8a1bb3effd4ccfb86a1343d->leave($__internal_5ee9a11ad8994dea737b9d7eb72242b73d3c8d04f8a1bb3effd4ccfb86a1343d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
