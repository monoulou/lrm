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
        $__internal_0adb40c21cd99b0f438c895fb974d104a928013db912de0a3e5e99f2be139b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adb40c21cd99b0f438c895fb974d104a928013db912de0a3e5e99f2be139b94->enter($__internal_0adb40c21cd99b0f438c895fb974d104a928013db912de0a3e5e99f2be139b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b8986389f31b3c65227c7f9c1eb8bdae7bc5cbfd4681186cf9127fd2f31bed9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8986389f31b3c65227c7f9c1eb8bdae7bc5cbfd4681186cf9127fd2f31bed9f->enter($__internal_b8986389f31b3c65227c7f9c1eb8bdae7bc5cbfd4681186cf9127fd2f31bed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0adb40c21cd99b0f438c895fb974d104a928013db912de0a3e5e99f2be139b94->leave($__internal_0adb40c21cd99b0f438c895fb974d104a928013db912de0a3e5e99f2be139b94_prof);

        
        $__internal_b8986389f31b3c65227c7f9c1eb8bdae7bc5cbfd4681186cf9127fd2f31bed9f->leave($__internal_b8986389f31b3c65227c7f9c1eb8bdae7bc5cbfd4681186cf9127fd2f31bed9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d3498bb440178fb363a0c88094d63dc516f0f6486915b82ead321ae98892585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3498bb440178fb363a0c88094d63dc516f0f6486915b82ead321ae98892585->enter($__internal_9d3498bb440178fb363a0c88094d63dc516f0f6486915b82ead321ae98892585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95c735f661eb78cf41691a26bcfea00df240e1826a48e65d9b6e2bbae856d5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c735f661eb78cf41691a26bcfea00df240e1826a48e65d9b6e2bbae856d5cd->enter($__internal_95c735f661eb78cf41691a26bcfea00df240e1826a48e65d9b6e2bbae856d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_95c735f661eb78cf41691a26bcfea00df240e1826a48e65d9b6e2bbae856d5cd->leave($__internal_95c735f661eb78cf41691a26bcfea00df240e1826a48e65d9b6e2bbae856d5cd_prof);

        
        $__internal_9d3498bb440178fb363a0c88094d63dc516f0f6486915b82ead321ae98892585->leave($__internal_9d3498bb440178fb363a0c88094d63dc516f0f6486915b82ead321ae98892585_prof);

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