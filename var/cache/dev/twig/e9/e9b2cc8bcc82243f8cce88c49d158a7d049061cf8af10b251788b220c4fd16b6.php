<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1c2f8190260cd17cc30d10fe33ba5ec15b51646f6c6eb7e5debc3dde14977ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_84b98fd7f91429d4ddcc179b513dc9f645951b422ae17d50f57dad304ae9a19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b98fd7f91429d4ddcc179b513dc9f645951b422ae17d50f57dad304ae9a19c->enter($__internal_84b98fd7f91429d4ddcc179b513dc9f645951b422ae17d50f57dad304ae9a19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_c92d3d7493616deef06c7cb559c2a62a2ad0f481851e56b671acfa6e5b8c8197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92d3d7493616deef06c7cb559c2a62a2ad0f481851e56b671acfa6e5b8c8197->enter($__internal_c92d3d7493616deef06c7cb559c2a62a2ad0f481851e56b671acfa6e5b8c8197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b98fd7f91429d4ddcc179b513dc9f645951b422ae17d50f57dad304ae9a19c->leave($__internal_84b98fd7f91429d4ddcc179b513dc9f645951b422ae17d50f57dad304ae9a19c_prof);

        
        $__internal_c92d3d7493616deef06c7cb559c2a62a2ad0f481851e56b671acfa6e5b8c8197->leave($__internal_c92d3d7493616deef06c7cb559c2a62a2ad0f481851e56b671acfa6e5b8c8197_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0429e4b2d3dd120c5b187729afba821fc495ac675714fef0fb83a90f1cfd5758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0429e4b2d3dd120c5b187729afba821fc495ac675714fef0fb83a90f1cfd5758->enter($__internal_0429e4b2d3dd120c5b187729afba821fc495ac675714fef0fb83a90f1cfd5758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1bc6506b91d73c44ff4a90b902f57d9c4f8fd7f6f413617d71e4a888a8e9e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bc6506b91d73c44ff4a90b902f57d9c4f8fd7f6f413617d71e4a888a8e9e2d->enter($__internal_b1bc6506b91d73c44ff4a90b902f57d9c4f8fd7f6f413617d71e4a888a8e9e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b1bc6506b91d73c44ff4a90b902f57d9c4f8fd7f6f413617d71e4a888a8e9e2d->leave($__internal_b1bc6506b91d73c44ff4a90b902f57d9c4f8fd7f6f413617d71e4a888a8e9e2d_prof);

        
        $__internal_0429e4b2d3dd120c5b187729afba821fc495ac675714fef0fb83a90f1cfd5758->leave($__internal_0429e4b2d3dd120c5b187729afba821fc495ac675714fef0fb83a90f1cfd5758_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
