<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5b927e3d92d0af1bbd532f4c04d237f5cf8a7d5c0ecf691597dfb9d7f2c0d2ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_22f9405b5e6e162b918f279661930a97e11ad594d3c92ac12beff6e117bbdb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22f9405b5e6e162b918f279661930a97e11ad594d3c92ac12beff6e117bbdb24->enter($__internal_22f9405b5e6e162b918f279661930a97e11ad594d3c92ac12beff6e117bbdb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_2d3dfc22b85ec2027a26bb3ad0bfb08e56eb2527f945f437edd4d50993d771c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3dfc22b85ec2027a26bb3ad0bfb08e56eb2527f945f437edd4d50993d771c3->enter($__internal_2d3dfc22b85ec2027a26bb3ad0bfb08e56eb2527f945f437edd4d50993d771c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22f9405b5e6e162b918f279661930a97e11ad594d3c92ac12beff6e117bbdb24->leave($__internal_22f9405b5e6e162b918f279661930a97e11ad594d3c92ac12beff6e117bbdb24_prof);

        
        $__internal_2d3dfc22b85ec2027a26bb3ad0bfb08e56eb2527f945f437edd4d50993d771c3->leave($__internal_2d3dfc22b85ec2027a26bb3ad0bfb08e56eb2527f945f437edd4d50993d771c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ff4fadbf644095bff54c8696222ef0ed6510759cc98cb3adb38cdf333444cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff4fadbf644095bff54c8696222ef0ed6510759cc98cb3adb38cdf333444cd1->enter($__internal_9ff4fadbf644095bff54c8696222ef0ed6510759cc98cb3adb38cdf333444cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2af402d5bef4a444923ea7347b47e38d3ff899ba53309257e768844391c120d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2af402d5bef4a444923ea7347b47e38d3ff899ba53309257e768844391c120d->enter($__internal_f2af402d5bef4a444923ea7347b47e38d3ff899ba53309257e768844391c120d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_f2af402d5bef4a444923ea7347b47e38d3ff899ba53309257e768844391c120d->leave($__internal_f2af402d5bef4a444923ea7347b47e38d3ff899ba53309257e768844391c120d_prof);

        
        $__internal_9ff4fadbf644095bff54c8696222ef0ed6510759cc98cb3adb38cdf333444cd1->leave($__internal_9ff4fadbf644095bff54c8696222ef0ed6510759cc98cb3adb38cdf333444cd1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
