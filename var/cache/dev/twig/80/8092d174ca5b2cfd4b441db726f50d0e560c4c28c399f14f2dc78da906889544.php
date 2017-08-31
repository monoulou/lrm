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
        $__internal_02e17026385bf1e63e4597326eec2b6ed2f775069efcdfc1b458d6d41457a021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e17026385bf1e63e4597326eec2b6ed2f775069efcdfc1b458d6d41457a021->enter($__internal_02e17026385bf1e63e4597326eec2b6ed2f775069efcdfc1b458d6d41457a021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_8e98dc9c084ce0b267e207b1e286e6f395603b8e48ac65bb4632df6962f85b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98dc9c084ce0b267e207b1e286e6f395603b8e48ac65bb4632df6962f85b4b->enter($__internal_8e98dc9c084ce0b267e207b1e286e6f395603b8e48ac65bb4632df6962f85b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e17026385bf1e63e4597326eec2b6ed2f775069efcdfc1b458d6d41457a021->leave($__internal_02e17026385bf1e63e4597326eec2b6ed2f775069efcdfc1b458d6d41457a021_prof);

        
        $__internal_8e98dc9c084ce0b267e207b1e286e6f395603b8e48ac65bb4632df6962f85b4b->leave($__internal_8e98dc9c084ce0b267e207b1e286e6f395603b8e48ac65bb4632df6962f85b4b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10447114332cb6e4c73b556aa0480ba6c0f477c2c328cc1f92db5df817536676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10447114332cb6e4c73b556aa0480ba6c0f477c2c328cc1f92db5df817536676->enter($__internal_10447114332cb6e4c73b556aa0480ba6c0f477c2c328cc1f92db5df817536676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99afb1e945a344dfba224f6c526dbc27670dc9d8a0419dc4be9f9a354c8fb40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99afb1e945a344dfba224f6c526dbc27670dc9d8a0419dc4be9f9a354c8fb40e->enter($__internal_99afb1e945a344dfba224f6c526dbc27670dc9d8a0419dc4be9f9a354c8fb40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_99afb1e945a344dfba224f6c526dbc27670dc9d8a0419dc4be9f9a354c8fb40e->leave($__internal_99afb1e945a344dfba224f6c526dbc27670dc9d8a0419dc4be9f9a354c8fb40e_prof);

        
        $__internal_10447114332cb6e4c73b556aa0480ba6c0f477c2c328cc1f92db5df817536676->leave($__internal_10447114332cb6e4c73b556aa0480ba6c0f477c2c328cc1f92db5df817536676_prof);

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
